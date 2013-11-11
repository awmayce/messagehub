<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-15 18:00:37 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1362
2013-10-15 18:00:37 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Model/Auth/User.php(94): Kohana_ORM->update()
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/Auth/ORM.php(274): Model_Auth_User->complete_login()
#3 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/Auth/ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 /Users/Ayce/Desktop/htdocs/messagehub/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'password', false)
#5 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(11): Kohana_Auth->login('admin', 'password')
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1362
2013-10-15 18:02:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH/classes/Controller/User.php [ 15 ] in file:line
2013-10-15 18:02:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 18:03:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: post ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:15
2013-10-15 18:03:55 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(15): Kohana_Route::get('post')
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:15
2013-10-15 18:05:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method URL::page() ~ APPPATH/classes/Controller/User.php [ 15 ] in file:line
2013-10-15 18:05:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 18:12:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Main.php [ 8 ] in file:line
2013-10-15 18:12:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 18:18:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php:137
2013-10-15 18:18:42 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(11): Kohana_Controller_Template->before()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php:137
2013-10-15 19:10:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'URL' (T_STRING) ~ APPPATH/classes/Controller/User.php [ 29 ] in file:line
2013-10-15 19:10:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 19:14:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/template/main.php [ 27 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php:27
2013-10-15 19:14:22 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 27, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(20): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php:27
2013-10-15 19:16:39 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Layout.php [ 14 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:14
2013-10-15 19:16:39 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(14): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Ayce/Des...', 14, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:14
2013-10-15 19:18:06 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Layout.php [ 14 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:14
2013-10-15 19:18:06 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(14): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Ayce/Des...', 14, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:14
2013-10-15 19:21:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH/classes/Controller/Layout.php [ 6 ] in file:line
2013-10-15 19:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 19:21:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH/classes/Controller/Layout.php [ 5 ] in file:line
2013-10-15 19:21:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 19:22:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH/classes/Controller/Layout.php [ 16 ] in file:line
2013-10-15 19:22:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 20:36:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting variable (T_VARIABLE) ~ APPPATH/classes/Controller/Layout.php [ 15 ] in file:line
2013-10-15 20:36:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 20:37:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function bind() on a non-object ~ APPPATH/classes/Controller/Layout.php [ 15 ] in file:line
2013-10-15 20:37:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 20:51:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/classes/Controller/Layout.php [ 15 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:51:41 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:51:50 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Layout.php [ 15 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:51:50 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:52:20 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Layout.php [ 15 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:52:20 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:52:21 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Layout.php [ 15 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:52:21 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:52:21 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Layout.php [ 15 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:52:21 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:52:22 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Layout.php [ 15 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:52:22 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:15
2013-10-15 20:53:39 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_View::bind() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Layout.php [ 17 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:17
2013-10-15 20:53:39 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(17): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/Ayce/Des...', 17, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php:17