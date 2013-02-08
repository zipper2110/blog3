<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-07 14:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL male/new-in/link-print-t-shirt-blue was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-02-07 14:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL male/new-in/link-print-t-shirt-blue was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-07 17:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 17:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}