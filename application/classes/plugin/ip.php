<?php  defined('SYSPATH') or die('No direct script access.');

class Plugin_IP extends Plugin {
    public function plugin_body() {
        $this->caption = 'Мой IP';
        $this->content = Request::$client_ip;
    }
}

?>
