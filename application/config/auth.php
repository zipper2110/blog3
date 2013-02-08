<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '4, 8, 15, 16 ,23 , 42',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		 //'admin' => '4e814608cccbb674787604db5461d9cfdec83e6eec02951413aa2b28121db712',
	),

);
