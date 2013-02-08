<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Jack
 * Date: 25.04.12
 * Time: 23:21
 * To change this template use File | Settings | File Templates.
 */

class Controller_Frontend_Cabinet extends Controller_Blog {

    public $template = 'template1';
    public $plugins = array('ip');

    public function action_index() {
        $this->set_access_level();
        $user = Auth::instance();
        if($this->request->post("file-submit")) {
            if(Upload::image($_FILES['file'])) {
                $image = Image::factory($_FILES['file']['tmp_name']);
                $image->resize(200, 300);
                $image_filename = $this->generate_code(20).'.png';
                $image->save(DOCROOT.AVATAR_PATH.$image_filename);
                $current_user = $user->get_user();
                $current_user->avatar = $image_filename;
                $current_user->save();

                $this->add_success_message("Аватар успешно изменен");
                $this->request->redirect("/cabinet");
            } else {
                $this->add_error_message("Выбранный файл не является корректным изображением");
                $this->request->redirect("/cabinet");
            }
        }
        $this->page_title = 'Мой кабинет';
        $this->mainplace = View::factory('frontend/cabinet/index');
        $this->mainplace->set('username', $user->get_user()->username);
        $user_avatar = $user->get_user()->avatar;
        if($user_avatar == "") {
            $user_avatar="avatar.png";
        }
        $this->mainplace->set('avatar', $user_avatar);
    }

    public function action_my_settings() {
        $this->set_access_level();
        $auth_user = Auth::instance();
        $user = Auth::instance()->get_user();

        // если пользователь запросил смену email
        if($this->request->post('email_form-submit') == true) {
            // TODO смена адреса электронной почты
            $email = $this->request->post('email');

            $user_with_new_email = ORM::factory('user', array('email' => $email));
            if(!Valid::email($email)) {
                $this->add_error_message("Неверный адрес электронной почты");
                $this->request->redirect("cabinet/my_settings");
            } else if($email == $user->email) {
                $this->add_warning_message("У вас и так уже установлен этот адрес электронной почты же!");
                $this->request->redirect("cabinet/my_settings");
            } else if($user_with_new_email->loaded()) {
                $this->add_error_message("Такой адрес электронной почты уже используется");
                $this->request->redirect("cabinet/my_settings");
            } else {
                // добавляем строку в таблицу

                $activation_email = ORM::factory('activation_email');
                $activation_email->user_id = $user->id;
                $activation_email->old_email = $user->email;
                $activation_email->new_email = $email;
                $activation_email->old_email_code = $this->generate_code(20);
                $activation_email->new_email_code = $this->generate_code(20);
                $activation_email->save();

                if($activation_email->saved()) {
                    // шлем 2 письма

                    $old_email_message = View::factory('email/email_change/old_mail/message');
                    $old_email_message->set('username', $user->username);
                    $old_email_message->set('new_email', $activation_email->new_email);
                    $old_email_message->set('old_email_code', $activation_email->old_email_code);
                    $old_email_message->set('sitename', Kohana::message('general', 'sitename'));
                    $old_email_message->set('site_address', Kohana::message('general', 'site_address'));

                    $old_email_theme = View::factory('email/email_change/old_mail/theme');
                    $old_email_theme->set('username', $user->username);
                    $old_email_theme->set('sitename', Kohana::message('general', 'sitename'));

                    $new_email_message = View::factory('email/email_change/new_mail/message');
                    $new_email_message->set('username', $user->username);
                    $new_email_message->set('old_email', $activation_email->old_email);
                    $new_email_message->set('new_email_code', $activation_email->new_email_code);
                    $new_email_message->set('sitename', Kohana::message('general', 'sitename'));
                    $new_email_message->set('site_address', Kohana::message('general', 'site_address'));

                    $new_email_theme = View::factory('email/email_change/new_mail/theme');
                    $new_email_theme->set('username', $user->username);
                    $new_email_theme->set('sitename', Kohana::message('general', 'sitename'));

                    $email_config = Kohana::$config->load('email');
                    $email_from = $email_config['from'];

                    Email::send($user->email, $email_from, $old_email_theme, $old_email_message);
                    Email::send($activation_email->new_email, $email_from, $new_email_theme, $new_email_message);

                    $this->add_info_message('На ваш текущий и новый адрес электронной почты отправлены письма
                    с информацией о завершении смены адреса. Следуйте инстукциям в письмах для завершения
                    смены вашего адреса электронной почты');
                    $this->request->redirect("/cabinet");
                }
            }

            // если пользователь запросил смену пароля
        } else if($this->request->post('password_form-submit') == true) {
            $old_password = $this->request->post('old_password');
            $new_password = $this->request->post('password');
            $new_password_confirm = $this->request->post('password_confirm');
            // TODO смена пароля пользователя

            // проверяем новый пароль и повтор нового пароля, чтоб они были равны
            if($new_password != $new_password_confirm) {
                $this->add_error_message("Подтверждение пароля не равно паролю. Попробуйте повторить ввод");
                $this->request->redirect('cabinet/my_settings');
            }

            // проверяем, равен ли первый пароль текущему паролю пользователя
            if($user->password != $auth_user->hash($old_password)) {
                $this->add_error_message("Неверно введен текущий пароль. Попробуйте ввести пароль заново");
                $this->request->redirect('cabinet/my_settings');
            }

            // записываем пользователю новый пароль
            $user->password = $new_password;
            $user->save();

            // высылаем на электронную почту уведомление
            $email_message = View::factory('email/password_change/message');
            $email_message->set('username', $user->username);
            $email_message->set('sitename', Kohana::message('general', 'sitename'));
            $email_message->set('site_address', Kohana::message('general', 'site_address'));

            $email_theme = View::factory('email/password_change/theme');
            $email_theme->set('username', $user->username);
            $email_theme->set('sitename', Kohana::message('general', 'sitename'));

            $email_config = Kohana::$config->load('email');
            $email_from = $email_config['from'];

            Email::send($user->email, $email_from, $email_theme, $email_message);

            // показываем сообщение об успехе

            $this->add_success_message("Смена пароля произведена успешно");
            $this->request->redirect('cabinet/my_settings');
        }
        $this->page_title = 'Настройки пользователя';
        $this->mainplace = View::factory('frontend/cabinet/my_settings');
        $this->mainplace->set('email', $user->email);
    }

    public function action_email_activation()
    {
        $code = $this->request->param('parameter');
        if (!Valid::alpha_numeric($code)) {
            $this->add_error_message('Указан неверный код.');
            $this->request->redirect('');
        } else {
            $old_activation = ORM::factory('activation_email')
                ->where('old_email_code', '=', $code)
                ->find();
            if ($old_activation->loaded()) {
                if (!$old_activation->old_email_activated == 1) {
                    $old_activation->old_email_activated = 1;
                    $old_activation->save();

                    if ($old_activation->new_email_activated == 1) {
                        $this->change_email($old_activation->user_id);
                        $this->add_success_message('Смена адреса электронной почты успешно завершена');
                        $this->request->redirect('');
                    } else {
                        $this->add_success_message('Ваш старый адрес электронной почты подтвержден.');
                        $this->add_info_message(' Для завершения смены адреса электронной почты следуйте указаниям,
                        отправленным на ваш новый адрес электронной почты');
                        $this->request->redirect('');
                    }
                } else {
                    $this->add_info_message('Данная операция уже была произведена');
                    $this->request->redirect('');
                }
            } else {
                $new_activation = ORM::factory('activation_email')
                    ->where('new_email_code', '=', $code)
                    ->find();
                if ($new_activation->loaded()) {
                    if (!$new_activation->new_email_activated == 1) {
                        $new_activation->new_email_activated = 1;
                        $new_activation->save();

                        if ($new_activation->old_email_activated == 1) {
                            $this->change_email($new_activation->user_id);
                            $this->add_success_message('Смена адреса электронной почты успешно завершена');
                            $this->request->redirect('');
                        } else {
                            $this->add_success_message('Ваш новый адрес электронной почты подтвержден.');
                            $this->add_info_message(' Для завершения смены адреса электронной почты следуйте указаниям,
                        отправленным на ваш старый адрес электронной почты');
                            $this->request->redirect('');
                        }
                    } else {
                        $this->add_info_message('Данная операция уже была произведена');
                        $this->request->redirect('');
                    }
                } else {
                    $this->add_error_message('Код подтверждения неверный либо устарел');
                    $this->request->redirect('');
                }
            }
        }
    }

    private function change_email($user_id) {
        $user = ORM::factory('user', $user_id);
        if($user->loaded()) {
            $activation_emails = $user->activation_emails
                ->limit(1)
                ->order_by('request_date', 'DESC')
                ->find();
            $user->email = $activation_emails->new_email;
            $user->save();
        }
    }
}