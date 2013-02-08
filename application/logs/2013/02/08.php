<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-08 00:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/frontend/default/aqua/css/competition/popup.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-08 00:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/frontend/default/aqua/css/competition/popup.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-08 11:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/pwtoken_get was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-02-08 11:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/pwtoken_get was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-08 11:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL config/pwtoken_get was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-02-08 11:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL config/pwtoken_get was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-08 16:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL male/new-in/sleeveless-ring-t-shirt-black-white was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-02-08 16:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL male/new-in/sleeveless-ring-t-shirt-black-white was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-08 18:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/frontend/default/aqua/images/homepage/carousel/AQUAC_MC01.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-08 18:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/frontend/default/aqua/images/homepage/carousel/AQUAC_MC01.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-08 18:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL female/dresses/bergman-dress-pink-lemonade was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-02-08 18:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL female/dresses/bergman-dress-pink-lemonade was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-08 22:37:56 --- ERROR: View_Exception [ 0 ]: The requested view plugins/login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-02-08 22:37:56 --- STRACE: View_Exception [ 0 ]: The requested view plugins/login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(137): Kohana_View->set_filename('plugins/login')
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(30): Kohana_View->__construct('plugins/login', NULL)
#2 C:\xampp\htdocs\blog3\application\classes\plugin\login.php(10): Kohana_View::factory('plugins/login')
#3 C:\xampp\htdocs\blog3\application\classes\plugin.php(9): Plugin_Login->plugin_body()
#4 C:\xampp\htdocs\blog3\application\classes\controller\main.php(85): Plugin->__construct()
#5 [internal function]: Controller_Main->after()
#6 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#7 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#10 {main}
2013-02-08 22:38:51 --- ERROR: ErrorException [ 2 ]: include(C:\xampp\htdocs\blog3\application\classes/plugin/user.php): failed to open stream: No such file or directory ~ APPPATH\classes\controller\main.php [ 83 ]
2013-02-08 22:38:51 --- STRACE: ErrorException [ 2 ]: include(C:\xampp\htdocs\blog3\application\classes/plugin/user.php): failed to open stream: No such file or directory ~ APPPATH\classes\controller\main.php [ 83 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\main.php(83): Kohana_Core::error_handler(2, 'include(C:\xamp...', 'C:\xampp\htdocs...', 83, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\main.php(83): Controller_Main::after()
#2 [internal function]: Controller_Main->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-08 22:39:16 --- ERROR: ErrorException [ 2 ]: include(C:\xampp\htdocs\blog3\application\classes/plugin/user.php): failed to open stream: No such file or directory ~ APPPATH\classes\controller\main.php [ 83 ]
2013-02-08 22:39:16 --- STRACE: ErrorException [ 2 ]: include(C:\xampp\htdocs\blog3\application\classes/plugin/user.php): failed to open stream: No such file or directory ~ APPPATH\classes\controller\main.php [ 83 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\main.php(83): Kohana_Core::error_handler(2, 'include(C:\xamp...', 'C:\xampp\htdocs...', 83, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\main.php(83): Controller_Main::after()
#2 [internal function]: Controller_Main->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-08 22:40:14 --- ERROR: View_Exception [ 0 ]: The requested view plugins/login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-02-08 22:40:14 --- STRACE: View_Exception [ 0 ]: The requested view plugins/login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(137): Kohana_View->set_filename('plugins/login')
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(30): Kohana_View->__construct('plugins/login', NULL)
#2 C:\xampp\htdocs\blog3\application\classes\plugin\user.php(10): Kohana_View::factory('plugins/login')
#3 C:\xampp\htdocs\blog3\application\classes\plugin.php(9): Plugin_User->plugin_body()
#4 C:\xampp\htdocs\blog3\application\classes\controller\main.php(85): Plugin->__construct()
#5 [internal function]: Controller_Main->after()
#6 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#7 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#10 {main}