<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-15 08:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog3/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-15 08:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog3/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-15 08:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-15 08:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-15 10:10:55 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:10:55 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:11:01 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:11:01 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:11:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:11:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:11:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:11:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:12:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: plugins ~ APPPATH\classes\controller\blog.php [ 22 ]
2012-02-15 10:12:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: plugins ~ APPPATH\classes\controller\blog.php [ 22 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
#1 [internal function]: Controller_Blog->after()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-15 10:12:44 --- ERROR: ErrorException [ 2 ]: include(/blog3/application/classes/plugin/ipphp) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:12:44 --- STRACE: ErrorException [ 2 ]: include(/blog3/application/classes/plugin/ipphp) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Kohana_Core::error_handler(2, 'include(/blog3/...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:12:56 --- ERROR: ErrorException [ 2 ]: include(/blog3/application/classes/plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:12:56 --- STRACE: ErrorException [ 2 ]: include(/blog3/application/classes/plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Kohana_Core::error_handler(2, 'include(/blog3/...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:14:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:14:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:15:09 --- ERROR: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:15:09 --- STRACE: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Kohana_Core::error_handler(2, 'include(../plug...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:16:20 --- ERROR: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:16:20 --- STRACE: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Kohana_Core::error_handler(2, 'include(../plug...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:16:21 --- ERROR: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:16:21 --- STRACE: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Kohana_Core::error_handler(2, 'include(../plug...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:16:21 --- ERROR: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:16:21 --- STRACE: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Kohana_Core::error_handler(2, 'include(../plug...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:16:28 --- ERROR: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:16:28 --- STRACE: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Kohana_Core::error_handler(2, 'include(../plug...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:16:29 --- ERROR: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
2012-02-15 10:16:29 --- STRACE: ErrorException [ 2 ]: include(../plugin/ip.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 23 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Kohana_Core::error_handler(2, 'include(../plug...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(23): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:17:36 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:17:36 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Blog' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Blog_Controller' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Blog_Controller' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:18:45 --- ERROR: ErrorException [ 1 ]: Class 'Blog_Controller' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:18:45 --- STRACE: ErrorException [ 1 ]: Class 'Blog_Controller' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:18:46 --- ERROR: ErrorException [ 1 ]: Class 'Blog_Controller' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:18:46 --- STRACE: ErrorException [ 1 ]: Class 'Blog_Controller' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:18:47 --- ERROR: ErrorException [ 1 ]: Class 'Blog_Controller' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-02-15 10:18:47 --- STRACE: ErrorException [ 1 ]: Class 'Blog_Controller' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:19:14 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
2012-02-15 10:19:14 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:19:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\controller\blog.php [ 33 ]
2012-02-15 10:19:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\controller\blog.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:20:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\controller\blog.php [ 33 ]
2012-02-15 10:20:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\controller\blog.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:22:42 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 29 ]
2012-02-15 10:22:42 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:22:52 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 26 ]
2012-02-15 10:22:52 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:24:15 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
2012-02-15 10:24:15 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:25:15 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
2012-02-15 10:25:15 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:26:18 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
2012-02-15 10:26:18 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:26:19 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
2012-02-15 10:26:19 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:26:19 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
2012-02-15 10:26:19 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:26:20 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
2012-02-15 10:26:20 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:26:25 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
2012-02-15 10:26:25 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_content() ~ APPPATH\classes\controller\blog.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-15 10:28:49 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\blog.php [ 24 ]
2012-02-15 10:28:49 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\blog.php [ 24 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 24, Array)
#1 [internal function]: Controller_Blog->after()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-15 10:36:57 --- ERROR: ErrorException [ 2 ]: include(C:\xampp\htdocs\blog3\application\classes\plugin\MyClass.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 26 ]
2012-02-15 10:36:57 --- STRACE: ErrorException [ 2 ]: include(C:\xampp\htdocs\blog3\application\classes\plugin\MyClass.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\blog.php [ 26 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(26): Kohana_Core::error_handler(2, 'include(C:\xamp...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(26): Controller_Blog::after()
#2 [internal function]: Controller_Blog->after()
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#7 {main}
2012-02-15 10:37:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index::$plugins_result ~ APPPATH\classes\controller\blog.php [ 30 ]
2012-02-15 10:37:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index::$plugins_result ~ APPPATH\classes\controller\blog.php [ 30 ]
--
#0 C:\xampp\htdocs\blog3\application\classes\controller\blog.php(30): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 30, Array)
#1 [internal function]: Controller_Blog->after()
#2 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#3 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#6 {main}