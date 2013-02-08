<?php  defined('SYSPATH') or die('No direct script access.');

  abstract class Plugin {
      
      protected $caption = "caption";
      protected $content = "content";
    
    public function __construct() {
        $this->plugin_body();
    }
    
    abstract public function plugin_body();
    
    public function get_content() {
        $plugin_array = array('caption' => $this->caption, 'content' => $this->content);
        return $plugin_array;
    }
}
?>
