<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $template = 'template1';
    protected $plugins = array();
    protected $mainplace = array();
    protected $topplace = array();
    protected $bottomplace = array();
    protected $page_title = '';
    protected $error_messages = array();
    protected $warning_messages = array();
    protected $info_messages = array();
    protected $success_messages = array();

    /**
     * @var Auth
     */
    protected $user;
    protected $target_page = "";

    public function before() {
        parent::before();
        $this->user = Auth::instance();
    }

    public function add_error_message($error_message) {
        if(!isset($_SESSION['error_messages'])) {
            $_SESSION['error_messages'] = array();
        }
        $_SESSION['error_messages'][count($_SESSION['error_messages'])] = $error_message;
    }

    public function add_warning_message($warning_message) {
        if(!isset($_SESSION['warning_messages'])) {
            $_SESSION['warning_messages'] = array();
        }
        $_SESSION['warning_messages'][count($_SESSION['warning_messages'])] = $warning_message;
    }

    public function add_info_message($info_message) {
        if(!isset($_SESSION['info_messages'])) {
            $_SESSION['info_messages'] = array();
        }
        $_SESSION['info_messages'][count($_SESSION['info_messages'])] = $info_message;
    }

    public function add_success_message($success_message) {
        if(!isset($_SESSION['success_messages'])) {
            $_SESSION['success_messages'] = array();
        }
        $_SESSION['success_messages'][count($_SESSION['success_messages'])] = $success_message;
    }

    public function after() {
        // тут следует передать в $template массив плагинов для показа

        /**
         * @var Plugin
         */
        $plugin_inst = null;
        $plugins_result = array();

        //Передаем в шаблон сообщения
        if(isset($_SESSION['error_messages'])) {
            $this->template->set('error_messages', $_SESSION['error_messages']);
        }
        if(isset($_SESSION['warning_messages'])) {
            $this->template->set('warning_messages', $_SESSION['warning_messages']);
        }
        if(isset($_SESSION['info_messages'])) {
            $this->template->set('info_messages', $_SESSION['info_messages']);
        }
        if(isset($_SESSION['success_messages'])) {
            $this->template->set('success_messages', $_SESSION['success_messages']);
        }
        $_SESSION['error_messages'] = array();
        $_SESSION['warning_messages'] = array();
        $_SESSION['info_messages'] = array();
        $_SESSION['success_messages'] = array();

        foreach ($this->plugins as $plugin) {
            include APPPATH.'classes/plugin/'.$plugin.'.php';
            $plugin_classname = 'plugin_'.$plugin;
            $plugin_inst = new $plugin_classname;
            $plugins_result[count($plugins_result)] = $plugin_inst->get_content();
        }
        $this->template->set('plugins', $plugins_result);
        $this->template->set('page_title', $this->page_title);
        $this->template->set('mainplace', $this->mainplace);
        $this->template->set('topplace', $this->topplace);
        $this->template->set('bottomplace', $this->bottomplace);

        parent::after();
    }

    public function generate_code($code_length = 8) {
        $source = array(
            'a','b','c','d','e','f','g','h','i','j','k',
            'l','m','n','o','p','q','r','s','t','u','v',
            'w','x','y','z','0','1','2','3','4','5','6',
            '7','8','9');
        $result_string = '';
        for($i = 0; $i < $code_length; $i++) {
            $result_string .= $source[rand(0, 35)];
        }
        return $result_string;
    }

    public function set_access_level($role = 'login', $show_error = 1, $redirect_addr = '') {
        $user = Auth::instance();
        if($user->logged_in($role)) {
            return true;
        } else {
            if($show_error == 1) {
                $this->add_error_message('ATATATAT!');
                $this->request->redirect($redirect_addr);
            }
            return false;
        }
    }
}
?>
