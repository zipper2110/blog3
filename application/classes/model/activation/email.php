<?php defined('SYSPATH') or die('No direct script access.');

class Model_Activation_Email extends ORM {

    protected $_primary_key = 'id';

    protected $_belongs_to = array('user' => array());
}