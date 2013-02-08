<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {
    
    protected $_has_one = array(
        'activation' => array(
            'model'       => 'activation',
            'foreign_key' => 'user_id'
        ),
    );
    
    protected $_has_many = array(
		'user_tokens' => array(),
		'roles'       => array('model' => 'role', 'through' => 'roles_users'),
        'articles'    => array(),
        'activation_emails' => array()
	);
    
    
}