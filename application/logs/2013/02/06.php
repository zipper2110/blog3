<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-06 09:52:45 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'blog3' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2013-02-06 09:52:45 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'blog3' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\blog3\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('blog3')
#1 C:\xampp\htdocs\blog3\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\blog3\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#4 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\blog3\application\classes\controller\frontend\articles.php(35): Kohana_ORM::factory('article')
#9 [internal function]: Controller_Frontend_Articles->action_page()
#10 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#11 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#14 {main}
2013-02-06 09:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-06 09:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-06 09:54:04 --- ERROR: Database_Exception [ 1146 ]: Table 'blog3.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-06 09:54:04 --- STRACE: Database_Exception [ 1146 ]: Table 'blog3.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\blog3\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#2 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\blog3\application\classes\controller\frontend\articles.php(35): Kohana_ORM::factory('article')
#7 [internal function]: Controller_Frontend_Articles->action_page()
#8 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#9 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#12 {main}
2013-02-06 09:54:14 --- ERROR: Database_Exception [ 1146 ]: Table 'blog3.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-06 09:54:14 --- STRACE: Database_Exception [ 1146 ]: Table 'blog3.articles' doesn't exist [ SHOW FULL COLUMNS FROM `articles` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\blog3\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('articles')
#2 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\blog3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\blog3\application\classes\controller\frontend\articles.php(35): Kohana_ORM::factory('article')
#7 [internal function]: Controller_Frontend_Articles->action_page()
#8 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Frontend_Articles))
#9 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#12 {main}
2013-02-06 10:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-06 10:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-06 10:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-06 10:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-06 10:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-06 10:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-06 10:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-06 10:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-06 10:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/AgonYnLegendarY.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-06 10:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: webdav/AgonYnLegendarY.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-06 22:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/frontend/default/aqua/css/msdropdown/dd.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-06 22:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skin/frontend/default/aqua/css/msdropdown/dd.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-06 22:52:23 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin1.php [ 114 ]
2013-02-06 22:52:23 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin1.php [ 114 ]
--
#0 C:\xampp\htdocs\blog3\application\views\admin1.php(114): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 114, Array)
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\blog3\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog3\application\classes\controller\main.php(94): Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\blog3\application\classes\controller\admin.php(21): Controller_Main->after()
#6 C:\xampp\htdocs\blog3\application\classes\controller\admin\articles.php(12): Controller_Admin->after()
#7 [internal function]: Controller_Admin_Articles->after()
#8 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#9 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#12 {main}
2013-02-06 22:52:32 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin1.php [ 114 ]
2013-02-06 22:52:32 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\admin1.php [ 114 ]
--
#0 C:\xampp\htdocs\blog3\application\views\admin1.php(114): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 114, Array)
#1 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\blog3\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\blog3\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\blog3\application\classes\controller\main.php(94): Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\blog3\application\classes\controller\admin.php(21): Controller_Main->after()
#6 C:\xampp\htdocs\blog3\application\classes\controller\admin\articles.php(12): Controller_Admin->after()
#7 [internal function]: Controller_Admin_Articles->after()
#8 C:\xampp\htdocs\blog3\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#9 C:\xampp\htdocs\blog3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\blog3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\blog3\index.php(109): Kohana_Request->execute()
#12 {main}