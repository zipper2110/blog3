<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin {
    
    public $template = 'admin1';
    public $page_title;
    public $plugins = array('ip', 'category');
    
    public function action_index() {
        $this->page_title = 'Панель администратора';
        $this->mainplace = View::factory('admin/index');
    }
}