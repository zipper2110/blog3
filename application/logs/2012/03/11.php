<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-11 06:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:42:54 --- ERROR: ErrorException [ 8192 ]: Function ereg() is deprecated ~ APPPATH\classes\controller\frontend\users.php [ 313 ]
2012-03-11 06:42:54 --- STRACE: ErrorException [ 8192 ]: Function ereg() is deprecated ~ APPPATH\classes\controller\frontend\users.php [ 313 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'Function ereg()...', 'C:\xampp\htdocs...', 313, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(313): ereg()
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 06:44:26 --- ERROR: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier '&lt;' ~ APPPATH\classes\controller\frontend\users.php [ 313 ]
2012-03-11 06:44:26 --- STRACE: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier '&lt;' ~ APPPATH\classes\controller\frontend\users.php [ 313 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', 'C:\xampp\htdocs...', 313, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(313): preg_match_all('<table cellspac...', 'class="audio_ta...', NULL)
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 06:44:54 --- ERROR: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier 'b' ~ APPPATH\classes\controller\frontend\users.php [ 313 ]
2012-03-11 06:44:54 --- STRACE: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier 'b' ~ APPPATH\classes\controller\frontend\users.php [ 313 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', 'C:\xampp\htdocs...', 313, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(313): preg_match_all('/<table cellspa...', 'class="audio_ta...', NULL)
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 06:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 06:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 06:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:05:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:05:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:07:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:07:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:07:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:07:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:13:59 --- ERROR: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier 'p' ~ APPPATH\classes\controller\frontend\users.php [ 310 ]
2012-03-11 07:13:59 --- STRACE: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier 'p' ~ APPPATH\classes\controller\frontend\users.php [ 310 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', 'C:\xampp\htdocs...', 310, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(310): preg_match_all('/<input type="h...', 'class="audio_ta...', NULL)
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 07:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:32:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH\classes\controller\frontend\users.php [ 315 ]
2012-03-11 07:32:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH\classes\controller\frontend\users.php [ 315 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(315): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 315, Array)
#1 [internal function]: Controller_Frontend_Users->action_get_music()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-11 07:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:41:26 --- ERROR: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Compilation failed: nothing to repeat at offset 44 ~ APPPATH\classes\controller\frontend\users.php [ 311 ]
2012-03-11 07:41:26 --- STRACE: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Compilation failed: nothing to repeat at offset 44 ~ APPPATH\classes\controller\frontend\users.php [ 311 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', 'C:\xampp\htdocs...', 311, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(311): preg_match_all('/<input type="h...', 'class="audio_ta...', NULL)
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 07:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:55:01 --- ERROR: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier 'a' ~ APPPATH\classes\controller\frontend\users.php [ 311 ]
2012-03-11 07:55:01 --- STRACE: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier 'a' ~ APPPATH\classes\controller\frontend\users.php [ 311 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', 'C:\xampp\htdocs...', 311, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(311): preg_match_all('/<input type="h...', 'class="audio_ta...', NULL)
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 07:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 07:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 07:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:01:41 --- ERROR: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier 'a' ~ APPPATH\classes\controller\frontend\users.php [ 311 ]
2012-03-11 08:01:41 --- STRACE: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Unknown modifier 'a' ~ APPPATH\classes\controller\frontend\users.php [ 311 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', 'C:\xampp\htdocs...', 311, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(311): preg_match_all('/<input type="h...', 'class="audio_ta...', NULL)
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:19:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\frontend\users.php [ 325 ]
2012-03-11 08:19:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\controller\frontend\users.php [ 325 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(325): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 325, Array)
#1 [internal function]: Controller_Frontend_Users->action_get_music()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-11 08:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:28:01 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:28:01 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/Cafe d...', 'rw')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:28:20 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:28:20 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/Cafe d...', 'rw')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:28:30 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:28:30 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/Cafe d...', 'rw+')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:30:30 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: File exists ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:30:30 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: File exists ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/Cafe d...', 'x')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:30:41 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: File exists ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:30:41 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: File exists ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/Cafe d...', 'x+')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:31:00 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:31:00 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Cafe del Mar - Soul Connection (Alexander Vogele &amp;amp; Jillene Luce).mp3) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/Cafe d...', 'rwx+')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 08:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 08:32:21 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (РўР°РЅРіРѕ &quot;Р”РµСЂР¶Рё СЂРёС‚Рј&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:32:21 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (РўР°РЅРіРѕ &quot;Р”РµСЂР¶Рё СЂРёС‚Рј&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/ Veron...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:33:23 --- ERROR: ErrorException [ 2 ]: file_put_contents() expects parameter 1 to be string, resource given ~ APPPATH\classes\controller\frontend\users.php [ 333 ]
2012-03-11 08:33:23 --- STRACE: ErrorException [ 2 ]: file_put_contents() expects parameter 1 to be string, resource given ~ APPPATH\classes\controller\frontend\users.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'C:\xampp\htdocs...', 333, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(333): file_put_contents(Resource id #82, Resource id #81)
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:33:51 --- ERROR: ErrorException [ 2 ]: file_get_contents() expects parameter 1 to be string, resource given ~ APPPATH\classes\controller\frontend\users.php [ 333 ]
2012-03-11 08:33:51 --- STRACE: ErrorException [ 2 ]: file_get_contents() expects parameter 1 to be string, resource given ~ APPPATH\classes\controller\frontend\users.php [ 333 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\xampp\htdocs...', 333, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(333): file_get_contents(Resource id #81)
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:40:28 --- ERROR: ErrorException [ 1 ]: Call to undefined function eof() ~ APPPATH\classes\controller\frontend\users.php [ 333 ]
2012-03-11 08:40:28 --- STRACE: ErrorException [ 1 ]: Call to undefined function eof() ~ APPPATH\classes\controller\frontend\users.php [ 333 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-11 08:48:53 --- ERROR: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `UTF-8' to `cp-1251' is not allowed ~ APPPATH\classes\controller\frontend\users.php [ 326 ]
2012-03-11 08:48:53 --- STRACE: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `UTF-8' to `cp-1251' is not allowed ~ APPPATH\classes\controller\frontend\users.php [ 326 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', 'C:\xampp\htdocs...', 326, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(326): iconv('UTF-8', 'cp-1251', 'Soul Connection...')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:49:11 --- ERROR: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `UTF-8' to `CP-1251' is not allowed ~ APPPATH\classes\controller\frontend\users.php [ 326 ]
2012-03-11 08:49:11 --- STRACE: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `UTF-8' to `CP-1251' is not allowed ~ APPPATH\classes\controller\frontend\users.php [ 326 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', 'C:\xampp\htdocs...', 326, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(326): iconv('UTF-8', 'CP-1251', 'Soul Connection...')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:51:14 --- ERROR: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `UTF-8' to `unicode' is not allowed ~ APPPATH\classes\controller\frontend\users.php [ 326 ]
2012-03-11 08:51:14 --- STRACE: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `UTF-8' to `unicode' is not allowed ~ APPPATH\classes\controller\frontend\users.php [ 326 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', 'C:\xampp\htdocs...', 326, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(326): iconv('UTF-8', 'unicode', 'Soul Connection...')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:53:41 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Jim Brickman - Love Of My Life (&amp;amp; Michael W. Smith).mp3) [function.fopen]: failed to open stream: Permission denied ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:53:41 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Jim Brickman - Love Of My Life (&amp;amp; Michael W. Smith).mp3) [function.fopen]: failed to open stream: Permission denied ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/Jim Br...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:54:31 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 08:54:31 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/ Veron...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 08:59:06 --- ERROR: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `UTF-8' to `ANSI' is not allowed ~ APPPATH\classes\controller\frontend\users.php [ 326 ]
2012-03-11 08:59:06 --- STRACE: ErrorException [ 8 ]: iconv() [function.iconv]: Wrong charset, conversion from `UTF-8' to `ANSI' is not allowed ~ APPPATH\classes\controller\frontend\users.php [ 326 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'iconv() [<a hre...', 'C:\xampp\htdocs...', 326, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(326): iconv('UTF-8', 'ANSI', 'Soul Connection...')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 09:01:24 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 09:01:24 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/ Veron...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 09:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:03:08 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 09:03:08 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/ Veron...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 09:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:06:44 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
2012-03-11 09:06:44 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 332 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 332, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(332): fopen('D:/audio/ Veron...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 09:19:15 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Evan Rachel Wood, Jim Sturgess, Joe Anderson, Dana Fuchs, T.V. Carpio, Martin Luther McCoy OST &quot;Across The Universe&quot;  - Because .mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 338 ]
2012-03-11 09:19:15 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Evan Rachel Wood, Jim Sturgess, Joe Anderson, Dana Fuchs, T.V. Carpio, Martin Luther McCoy OST &quot;Across The Universe&quot;  - Because .mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 338 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 338, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(338): fopen('D:/audio/Evan R...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 09:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-11 09:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-11 09:30:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\controller\frontend\users.php [ 340 ]
2012-03-11 09:30:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\controller\frontend\users.php [ 340 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(340): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 340, Array)
#1 [internal function]: Controller_Frontend_Users->action_get_music()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-11 09:45:34 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 335 ]
2012-03-11 09:45:34 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 335 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 335, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(335): fopen('D:/audio/ Veron...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 10:21:13 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 335 ]
2012-03-11 10:21:13 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/ Veronica Verdier - Asi se Baila el Tango (Танго &quot;Держи ритм&quot;).mp3) [function.fopen]: failed to open stream: Invalid argument ~ APPPATH\classes\controller\frontend\users.php [ 335 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 335, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(335): fopen('D:/audio/ Veron...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-11 11:19:38 --- ERROR: ErrorException [ 2 ]: fopen(D:/audio/Deva Premal - Гаятри мантра.Мантра Любви .Медитация этой мантры наполняет cердце Вселенской Любовью.Называют её Песнью Освобожде - Ом Бхур Бхувах Сваха Тат Савитур Варениам Бхарго Дэвасйя Дхимахи Дхийохо Нах Прачодаят. Она посылает человеку долголетие, великолепное здоровье, красоту, благополучие, процветание, умиротворенность, жизненную и магическую силу. Любимая мантра Далай Ламы..mp3) [function.fopen]: failed to open stream: No error ~ APPPATH\classes\controller\frontend\users.php [ 339 ]
2012-03-11 11:19:38 --- STRACE: ErrorException [ 2 ]: fopen(D:/audio/Deva Premal - Гаятри мантра.Мантра Любви .Медитация этой мантры наполняет cердце Вселенской Любовью.Называют её Песнью Освобожде - Ом Бхур Бхувах Сваха Тат Савитур Варениам Бхарго Дэвасйя Дхимахи Дхийохо Нах Прачодаят. Она посылает человеку долголетие, великолепное здоровье, красоту, благополучие, процветание, умиротворенность, жизненную и магическую силу. Любимая мантра Далай Ламы..mp3) [function.fopen]: failed to open stream: No error ~ APPPATH\classes\controller\frontend\users.php [ 339 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(D:/audio/...', 'C:\xampp\htdocs...', 339, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\frontend\users.php(339): fopen('D:/audio/Deva P...', 'w')
#2 [internal function]: Controller_Frontend_Users->action_get_music()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}