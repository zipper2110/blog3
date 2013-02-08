<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-30 00:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 00:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 15:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 15:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 16:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 16:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 17:04:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~media/elements/Clipart/sports/football.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 17:04:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ~media/elements/Clipart/sports/football.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:36:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:36:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}