<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-25 17:40:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/messages.php [ 22 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php:22
2013-10-25 17:40:07 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/Ayce/Des...', 22, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(40): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(21): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php:22
2013-10-25 17:47:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: friend_id ~ APPPATH/views/messages.php [ 5 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php:5
2013-10-25 17:47:13 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 5, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(40): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(21): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php:5
2013-10-25 18:03:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 99 ] in file:line
2013-10-25 18:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 18:03:51 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Main.php [ 98 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:98
2013-10-25 18:03:51 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(98): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Ayce/Des...', 98, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_getmessage()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:98
2013-10-25 18:04:11 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Main.php [ 98 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:98
2013-10-25 18:04:11 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(98): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Ayce/Des...', 98, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_getmessage()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:98
2013-10-25 18:04:36 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Main.php [ 98 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:98
2013-10-25 18:04:36 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(98): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Ayce/Des...', 98, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_getmessage()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:98
2013-10-25 18:04:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Main.php [ 98 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:98
2013-10-25 18:04:45 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(98): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 98, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_getmessage()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:98
2013-10-25 18:05:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The conversation_id property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:603
2013-10-25 18:05:37 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('conversation_id')
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(99): Kohana_ORM->__get('conversation_id')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_getmessage()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:603
2013-10-25 18:06:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$body ~ APPPATH/classes/Controller/Main.php [ 96 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:96
2013-10-25 18:06:33 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 96, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_getmessage()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:96
2013-10-25 18:06:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Main.php [ 96 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:96
2013-10-25 18:06:53 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 96, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_getmessage()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:96
2013-10-25 18:19:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/Controller/Main.php [ 108 ] in file:line
2013-10-25 18:19:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 18:23:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 110 ] in file:line
2013-10-25 18:23:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 18:50:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: friend ~ APPPATH/views/messages.php [ 8 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php:8
2013-10-25 18:50:28 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 8, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(40): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(21): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/messages.php:8
2013-10-25 19:05:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 19:05:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 55 ] in file:line
2013-10-25 19:05:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line