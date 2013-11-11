<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-17 18:51:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'main' (T_STRING) ~ APPPATH/views/template/main.php [ 22 ] in file:line
2013-10-17 18:51:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 19:06:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view friends could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php:137
2013-10-17 19:06:42 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('friends')
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(30): Kohana_View->__construct('friends', NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(8): Kohana_View::factory('friends')
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php:137
2013-10-17 20:06:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Modal_Auth_User' not found ~ APPPATH/classes/Model/users.php [ 3 ] in file:line
2013-10-17 20:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 20:08:05 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php on line 14 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1849
2013-10-17 20:08:05 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Ayce/Des...', 1849, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(14): Kohana_ORM->where('username', 'Search')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_add_friend()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1849
2013-10-17 20:09:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: submit ~ APPPATH/classes/Controller/Friends.php [ 14 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:14
2013-10-17 20:09:40 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 14, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_add_friend()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:14
2013-10-17 20:11:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/Controller/Friends.php [ 18 ] in file:line
2013-10-17 20:11:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 20:11:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Friends.php [ 18 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:18
2013-10-17 20:11:16 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_add_friend()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:18
2013-10-17 20:12:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Friends.php [ 18 ] in file:line
2013-10-17 20:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 20:13:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Modal_Auth_User' not found ~ APPPATH/classes/Model/users.php [ 3 ] in file:line
2013-10-17 20:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 20:13:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Friends.php [ 18 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:18
2013-10-17 20:13:08 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_add_friend()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:18