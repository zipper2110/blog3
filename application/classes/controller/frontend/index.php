<?php  defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Index extends Controller_Blog {
    public $template = 'template1';
    protected $plugins = array('ip');
    
    public function action_index() {
        $this->request->redirect('articles');
    }
}
?>
