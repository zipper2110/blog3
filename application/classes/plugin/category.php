<?php  defined('SYSPATH') or die('No direct script access.');

class Plugin_Category extends Plugin {

    public function plugin_body() {
        $categories = ORM::factory('category')
                ->find_all();
        
        $this->caption = 'Категории статей';
        $this->content = View::factory('plugins/category');
        $this->content->set('categories', $categories);
    }
}