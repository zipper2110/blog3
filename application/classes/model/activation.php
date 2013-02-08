<?php defined('SYSPATH') or die('No direct script access.');

class Model_Activation extends ORM {
    
    protected $_primary_key = 'user_id';
    
    protected $_belongs_to = array('user' => array(
        'model' => 'user',
        'foreign_key' => 'user_id'
    ));
}