<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-18 02:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 02:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 02:39:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\frontend\articles\category.php [ 28 ]
2012-03-18 02:39:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\frontend\articles\category.php [ 28 ]
--
#0 C:\xampp\htdocs\blog3\application\views\frontend\articles\category.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\blog3\application\views\template1.php(165): Kohana_View->__toString()
#5 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\blog3\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(88): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\blog3\application\classes\controller\frontend\articles.php(14): Controller_Blog->after()
#10 [internal function]: Controller_Frontend_Articles->after()
#11 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#12 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#15 {main}
2012-03-18 02:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 02:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 02:40:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\frontend\articles\category.php [ 28 ]
2012-03-18 02:40:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\frontend\articles\category.php [ 28 ]
--
#0 C:\xampp\htdocs\blog3\application\views\frontend\articles\category.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\blog3\application\views\template1.php(165): Kohana_View->__toString()
#5 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\blog3\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(88): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\blog3\application\classes\controller\frontend\articles.php(14): Controller_Blog->after()
#10 [internal function]: Controller_Frontend_Articles->after()
#11 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#12 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#15 {main}
2012-03-18 02:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 02:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/cat1/page/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL users/user/63 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-18 03:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL users/user/63 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 03:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:33:37 --- ERROR: ErrorException [ 1 ]: Call to undefined function ORM() ~ APPPATH\classes\controller\frontend\users.php [ 356 ]
2012-03-18 03:33:37 --- STRACE: ErrorException [ 1 ]: Call to undefined function ORM() ~ APPPATH\classes\controller\frontend\users.php [ 356 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-18 03:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:35:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\frontend\users\user.php [ 5 ]
2012-03-18 03:35:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\frontend\users\user.php [ 5 ]
--
#0 C:\xampp\htdocs\blog3\application\views\frontend\users\user.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\blog3\application\views\template1.php(165): Kohana_View->__toString()
#5 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\blog3\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(88): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Blog->after()
#10 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#11 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#14 {main}
2012-03-18 03:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:36:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: 63 ~ APPPATH\views\frontend\users\user.php [ 1 ]
2012-03-18 03:36:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: 63 ~ APPPATH\views\frontend\users\user.php [ 1 ]
--
#0 C:\xampp\htdocs\blog3\application\views\frontend\users\user.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\blog3\application\views\template1.php(165): Kohana_View->__toString()
#5 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\blog3\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(88): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Blog->after()
#10 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#11 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#14 {main}
2012-03-18 03:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/63-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/63-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 03:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 03:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 05:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 05:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 05:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 05:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 06:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 06:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 06:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 06:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 06:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 06:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 06:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 06:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 06:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 06:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 06:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 06:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/category/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/user/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/users/62-avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:24:57 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 24 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-03-18 07:24:57 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 24 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\blog3\system\classes\kohana\route.php(392): preg_match('#^admin(?:/(?P<...', 'admin', NULL)
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(567): Kohana_Route->matches('admin')
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(785): Kohana_Request::process_uri('admin', Array)
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(198): Kohana_Request->__construct('/admin', NULL)
#5 C:\xampp\htdocs\blog3\index.php(108): Kohana_Request::factory()
#6 {main}
2012-03-18 07:26:30 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 24 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-03-18 07:26:30 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 24 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\blog3\system\classes\kohana\route.php(392): preg_match('#^admin(?:/(?P<...', 'admin', NULL)
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(567): Kohana_Route->matches('admin')
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(785): Kohana_Request::process_uri('admin', Array)
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(198): Kohana_Request->__construct('/admin', NULL)
#5 C:\xampp\htdocs\blog3\index.php(108): Kohana_Request::factory()
#6 {main}
2012-03-18 07:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 07:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 07:30:52 --- ERROR: View_Exception [ 0 ]: The requested view admin1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-03-18 07:30:52 --- STRACE: View_Exception [ 0 ]: The requested view admin1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin1')
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(30): Kohana_View->__construct('admin1', NULL)
#2 C:\xampp\htdocs\blog3\system\classes\kohana\controller\template.php(33): Kohana_View::factory('admin1')
#3 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(17): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Blog->before()
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-18 07:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 07:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 07:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_email was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_email was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_email was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_email was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_email was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_email was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_email was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_email was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:32:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-18 23:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/check_username was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-18 23:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-18 23:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-18 23:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: users/js/bootstrap.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}