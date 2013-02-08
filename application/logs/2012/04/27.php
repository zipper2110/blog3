<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-27 19:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 19:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 19:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 19:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 19:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 19:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 19:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 19:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 19:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 19:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 19:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 19:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 19:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 19:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 19:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 19:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:13:49 --- ERROR: Kohana_Exception [ 0 ]: The activation_email property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-04-27 20:13:49 --- STRACE: Kohana_Exception [ 0 ]: The activation_email property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\cabinet.php(45): Kohana_ORM->__get('activation_emai...')
#1 [internal function]: Controller_Frontend_Cabinet->action_my_settings()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Cabinet))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-27 20:16:13 --- ERROR: Kohana_Exception [ 0 ]: The activation_email property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-04-27 20:16:13 --- STRACE: Kohana_Exception [ 0 ]: The activation_email property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\cabinet.php(45): Kohana_ORM->__get('activation_emai...')
#1 [internal function]: Controller_Frontend_Cabinet->action_my_settings()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Cabinet))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-27 20:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:16:15 --- ERROR: Kohana_Exception [ 0 ]: The activation_email property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-04-27 20:16:15 --- STRACE: Kohana_Exception [ 0 ]: The activation_email property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\cabinet.php(45): Kohana_ORM->__get('activation_emai...')
#1 [internal function]: Controller_Frontend_Cabinet->action_my_settings()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Cabinet))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-27 20:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:17:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-04-27 20:17:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 20:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-04-27 20:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 20:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:18:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-04-27 20:18:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 20:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-04-27 20:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 20:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:18:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-04-27 20:18:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 20:18:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:18:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:18:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-04-27 20:18:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_Activation_email' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 20:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:18:51 --- ERROR: Kohana_Exception [ 0 ]: The activation_email property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-04-27 20:18:51 --- STRACE: Kohana_Exception [ 0 ]: The activation_email property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\cabinet.php(51): Kohana_ORM->__get('activation_emai...')
#1 [internal function]: Controller_Frontend_Cabinet->action_my_settings()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Cabinet))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-27 20:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:19:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:19:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:28:58 --- ERROR: Kohana_Exception [ 0 ]: The create property does not exist in the Model_Activation_Email class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-04-27 20:28:58 --- STRACE: Kohana_Exception [ 0 ]: The create property does not exist in the Model_Activation_Email class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\cabinet.php(45): Kohana_ORM->__get('create')
#1 [internal function]: Controller_Frontend_Cabinet->action_my_settings()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Cabinet))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-27 20:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 20:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 20:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:00:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE 0 = 'email' AND `1` = 'zippper@list.ru' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-27 21:00:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE 0 = 'email' AND `1` = 'zippper@list.ru' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\blog3\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(258): Kohana_ORM->find()
#4 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(Array)
#5 C:\xampp\htdocs\blog3\application\classes\controller\frontend\cabinet.php(40): Kohana_ORM::factory('user', Array)
#6 [internal function]: Controller_Frontend_Cabinet->action_my_settings()
#7 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Cabinet))
#8 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-27 21:00:26 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2012-04-27 21:00:26 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\cabinet.php(40): Kohana_ORM->find()
#1 [internal function]: Controller_Frontend_Cabinet->action_my_settings()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Cabinet))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-27 21:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:00:37 --- ERROR: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-04-27 21:00:37 --- STRACE: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\cabinet.php(42): Kohana_ORM->__get('loaded')
#1 [internal function]: Controller_Frontend_Cabinet->action_my_settings()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Cabinet))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-27 21:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:46:17 --- ERROR: ErrorException [ 1 ]: Call to undefined function change_email() ~ APPPATH\classes\controller\frontend\cabinet.php [ 141 ]
2012-04-27 21:46:17 --- STRACE: ErrorException [ 1 ]: Call to undefined function change_email() ~ APPPATH\classes\controller\frontend\cabinet.php [ 141 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-27 21:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-27 21:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: cabinet/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-27 21:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-27 21:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-27 22:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-27 22:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-27 22:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-27 22:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}