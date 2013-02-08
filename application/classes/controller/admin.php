<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Main {
    
    public $template = 'template1';
        
    public function before() {
        parent::before();
        if(!$this->user->logged_in('admin')) {
            if($this->user->logged_in()) {
                $this->add_error_message('Вы не можете войти в каюту капитана, матрос!');
                $this->request->redirect('');
            } else {
                $this->add_error_message('Вы не можете войти в каюту капитана, юнга!');
                $this->request->redirect('');
            }
        }
    }
    
    public function after() {
        parent::after();
    }
}
?>
