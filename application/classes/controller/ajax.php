<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {
    
    public function action_check_username() {
        $username = $this->request->post('username', null);
        $busy = false;
        
        $user = ORM::factory('user')
                ->where('username', '=', $username)
                ->find();
        
        if($user->loaded()) {
            $busy = true;
        }
        
        echo json_encode(array('busy' => $busy));
    }
    
    public function action_check_email() {
        $email = $this->request->post('email', null);
        $state = 0;
        
        $user = ORM::factory('user')
                ->where('email', '=', $email)
                ->find();
        
        
        if($user->loaded()) {
            $state = 1;
        } else if(!Valid::email($email)) {
            $state = 2;
        }
        
        echo json_encode(array('state' => $state));
    }
}
?>
