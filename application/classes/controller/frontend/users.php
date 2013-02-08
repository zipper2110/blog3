<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Users extends Controller_Blog {

    public $template = 'template1';
    public $plugins = array('ip');
    
    public function action_index() {
        $user = Auth::instance();
        if($user->logged_in()) {
            $this->request->redirect('users/cabinet');
        }
        $this->request->redirect('users/login');
    }

    public function action_login() {
        $this->page_title = 'Авторизация';
        $this->mainplace = View::factory('frontend/users/login');
        $current_user = Auth::instance();

        // success flag is used to determine if user could successfully log in
        $success_flag = 0;
        if (!$current_user->logged_in()) {
            //Если форма была отправлена, то проверяем ее
            if ($this->request->post('form-submit') == 'true') {
                $username = $this->request->post('username', null);
                $password = $this->request->post('password', null);

                $user = ORM::factory('user')
                        ->where('username', '=', $username)
                        ->find();
                if ($user->activation->active == 1) {
                    if ($current_user->login($username, $password)) {
                        $this->add_success_message(Kohana::message('users/login', 'login_success'));
                        $redirect_page = "";
                        if(isset($_SESSION['target_page'])) {
                            $redirect_page = $_SESSION['target_page'];
                        }
                        $this->request->redirect($redirect_page);
                        $success_flag = 1;
                    } else {
                        $this->add_error_message(Kohana::message('users/login', 'login_fail'));
                    }
                } else {
                    if($user->username > 0) {
                        $this->add_error_message(Kohana::message('users/login', 'user_not_exist'));
                    } else {
                        $this->add_error_message(Kohana::message('users/login', 'user_not_activated'));
                    }
                }
            }
            if($success_flag == 0) {
                $this->add_info_message(Kohana::message('users/login', 'try_recovery'));
            }
        } else {
            $this->add_warning_message(Kohana::message('users/login', 'already_logged_in'));
        }
    }

    public function action_signup() {

        $current_user = Auth::instance();
        $this->page_title = 'Регистрация пользователя';
        $this->mainplace = View::factory('frontend/users/signup');
        if (!$current_user->logged_in()) {
            //Если форма была отправлена, то проверяем ее
            if ($this->request->post('form-submit') == 'true') {
                //Регистрируем пользователя
                $username = $this->request->post('username', null);
                $email = $this->request->post('email', null);
                $password = $this->request->post('password', null);
                $password_confirm = $this->request->post('password-confirm', null);

                $this->mainplace->set('username_value', $username);
                $this->mainplace->set('email_value', $email);

                if ($password == $password_confirm) {
                    if ($password != '') {

                        $user = ORM::factory('user');
                        $user->username = $username;
                        $user->password = $password;
                        $user->email = $email;
                        try {
                            $user->save();
                        } catch (ORM_Validation_Exception $e) {
                            $errors = $e->errors('models');
                            foreach ($errors as $error) {
                                $this->add_error_message($error);
                            }
                            $_POST = array();
                            return;
                        }

                        //Находим нашего зарегистрированного пользователя
                        $user = ORM::factory('user');
                        $user->where('username', '=', $username);
                        $user->find();

                        //Добавляем ему роль, чтоб он мог входить на сайт
                        if ($user->loaded()) {
                            try {
                                $user->add('roles', 1);
                                $user->save();

                                $user->activation->code = $this->generate_code();
                                $user->activation->user_id = $user->id;
                                $user->activation->save();

                                $email_message = View::factory('email/activation/message');
                                $email_message->set('username', $user->username);
                                $email_message->set('activation_code', $user->activation->code);
                                $email_message->set('sitename', Kohana::message('general', 'sitename'));
                                $email_message->set('site_address', Kohana::message('general', 'site_address'));

                                $email_theme = View::factory('email/activation/theme');
                                $email_theme->set('username', $user->username);
                                $email_theme->set('sitename', Kohana::message('general', 'sitename'));

                                $email_config = Kohana::$config->load('email');
                                $email_from = $email_config['from'];

                                Email::send($user->email, $email_from, $email_theme, $email_message);

                                $this->add_success_message(Kohana::message('users/signup', 'signup_success'));
                                $this->request->redirect("");
                            } catch (Exception $e) {
                                $user = ORM::factory('user');
                                $user->where('username', '=', $username);
                                $user->find();
                                $user->activation->user_id = $user->id;
                                if ($user->activation->loaded()) {
                                    $user->activation->delete();
                                }
                                if ($user->loaded()) {
                                    $user->delete();
                                }
                                $this->add_error_message(Kohana::message('users/signup', 'internal_error'));
                            }
                        } else {
                            $this->add_error_message(Kohana::message('users/signup', 'internal_error'));
                        }
                    } else {
                        $this->add_error_message(Kohana::message('users/signup', 'password_is_empty'));
                    }
                } else {
                    $this->add_error_message(Kohana::message('users/signup', 'passwords_not_equal'));
                }

                //Очищаем данные post
                $_POST = Array();
            }
        } else {
            $this->add_warning_message(Kohana::message('users/signup', 'registered_user_signup'));
        }
        $_POST = Array();
    }

    public function action_activation() {
        $this->page_title = 'Запрос активации';
        $this->mainplace = View::factory('frontend/users/activation');
        $activation_code = $this->request->param('parameter', null);

        //Если пользователь перешел по ссылке с кодом активации:
        if ($activation_code != null) {
            $activation = ORM::factory('activation')
                    ->where('code', '=', $activation_code)
                    ->find();

            $activation = ORM::factory('activation', $activation->user_id);

            if ($activation->loaded() and ($activation->active == 0)) {
                $activation->active = 1;
                $activation->save();

                $this->add_success_message(Kohana::message('users/activation', 'activation_success'));
            } else {
                if (!$activation->loaded()) {
                    $this->add_error_message(Kohana::message('users/activation', 'activation_fail'));
                }
                if ($activation->active == 1) {
                    $this->add_info_message(Kohana::message('users/activation', 'already_activated'));
                }
            }
            $this->request->redirect('');
        } else {
            //если пользователь запрашивает активацию
            $current_user = Auth::instance();
            if (!$current_user->logged_in()) {
                //Если пользователь отправил данные формы
                if ($this->request->post('form-submit') == 'true') {
                    $email = $this->request->post('email');
                    
                    $user = ORM::factory('user')
                            ->where('email', '=', $email)
                            ->find();
                    if(!$user->activation->active == 1) {

                        $email_message = View::factory('email/activation/message');
                        $email_message->set('username', $user->username);
                        $email_message->set('activation_code', $user->activation->code);
                        $email_message->set('sitename', Kohana::message('general', 'sitename'));
                        $email_message->set('site_address', Kohana::message('general', 'site_address'));
                        $email_theme = View::factory('email/activation/theme');
                        $email_theme->set('username', $user->username);
                        $email_theme->set('sitename', Kohana::message('general', 'sitename'));

                        $email_config = Kohana::$config->load('email');
                        $email_from = $email_config['from'];
                        try {
                            Email::connect();
                            Email::send($user->email, $email_from, $email_theme, $email_message);
                            $this->add_success_message(Kohana::message('users/activation', 'activation_mail_sent'));
                        } catch(Exception $e) {
                            $this->add_error_message(Kohana::message('users/activation', 'activation_fail'));
                        }

                        $_POST = array();
                    } else {
                        $this->add_info_message(Kohana::message('users/activation', 'already_activated'));
                    }
                }
            } else {
                $this->add_info_message(Kohana::message('users/activation', 'already_activated'));
            }
        }
    }

    public function action_logout() {
        $current_user = Auth::instance();
        if ($current_user->logged_in()) {
            if ($current_user->logout()) {
                $this->add_success_message(Kohana::message('users/logout', 'logout_success'));
            } else {
                $this->add_error_message(Kohana::message('users/logout', 'logout_error'));
            }
        } else {
            $this->add_warning_message(Kohana::message('users/logout', 'not_logged_in'));
        }
        $this->request->redirect();
    }

    public function action_recover() {
        $this->page_title = 'Восстановление аккаунта';
        $this->mainplace = View::factory('frontend/users/recover');

        $current_user = Auth::instance();

        if (!$current_user->logged_in()) {
            //Если форма была отправлена, то проверяем ее
            if ($this->request->post('form-submit') == 'true') {
                $email = $this->request->post('email', null);

                if(!Valid::email($email)) {
                    $email = null;
                }
                $user = ORM::factory('user')
                        ->where('email', '=', $email)
                        ->find();
                if ($user->loaded()) {
                    try {
                        $new_password = $this->generate_code();
                        $user->password = $new_password;
                        $user->save();

                        $email_message = View::factory('email/recover/message');
                        $email_message->set('username', $user->username);
                        $email_message->set('password', $new_password);
                        $email_message->set('sitename', Kohana::message('general', 'sitename'));
                        $email_message->set('site_address', Kohana::message('general', 'site_address'));

                        $email_theme = View::factory('email/recover/theme');
                        $email_theme->set('username', $user->username);
                        $email_theme->set('sitename', Kohana::message('general', 'sitename'));

                        $email_config = Kohana::$config->load('email');
                        $email_from = $email_config['from'];

                        Email::connect();
                        Email::send($user->email, $email_from, $email_theme, $email_message);
                        $this->add_success_message(Kohana::message('users/recover', 'recover_success'));
                    } catch (Exception $e) {
                        $this->add_error_message(Kohana::message('users/recover', 'internal_error'));
                    }
                } else {
                    $this->add_error_message(Kohana::message('users/recover', 'email_not_exist'));
                }
            }
        } else {
            $this->add_warning_message(Kohana::message('users/recover', 'already_logged_in'));
        }
        $_POST = array();
    }

    public function action_user() {
        $user_id = $this->request->param('parameter');
        if(!Valid::numeric($user_id)) {
            $this->add_error_message('Такого пользователя не существует.');
        }
        $user = ORM::factory('user', $user_id);
        $this->page_title = 'Профиль пользователя: '.$user->username;
        $this->mainplace = View::factory('frontend/users/user');
        $this->mainplace->set('user', $user);
    }
}