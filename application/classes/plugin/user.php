<?php  defined('SYSPATH') or die('No direct script access.');

class Plugin_User extends Plugin {

    public function plugin_body() {
        $categories = ORM::factory('category')
            ->find_all();

        $this->caption = 'Пользователь';
        $this->content = View::factory('plugins/user');
        $_SESSION['target_page'] = Request::current()->uri();
    }
}