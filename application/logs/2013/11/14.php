<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-14 17:57:04 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php on line 35 and defined ~ SYSPATH/classes/Kohana/Form.php [ 252 ] in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php:252
2013-11-14 17:57:04 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/Ayce/Des...', 252, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php(35): Kohana_Form::select('DOB-day', '', Array)
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(98): Kohana_Response->body(Object(View))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php:252
2013-11-14 18:07:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: gender ~ APPPATH/views/auth/register.php [ 54 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php:54
2013-11-14 18:07:56 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 54, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(98): Kohana_Response->body(Object(View))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php:54
2013-11-14 18:08:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: gender ~ APPPATH/views/auth/register.php [ 54 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php:54
2013-11-14 18:08:54 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 54, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(98): Kohana_Response->body(Object(View))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php:54
2013-11-14 18:15:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH/views/auth/register.php [ 60 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php:60
2013-11-14 18:15:03 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 60, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(98): Kohana_Response->body(Object(View))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/register.php:60
2013-11-14 19:51:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '"2003"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/views/auth/register.php [ 52 ] in file:line
2013-11-14 19:51:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-14 19:51:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/auth/register.php [ 157 ] in file:line
2013-11-14 19:51:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-14 20:32:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 60 ] in file:line
2013-11-14 20:32:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-14 20:32:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '"United Kingdom"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/views/auth/register.php [ 5 ] in file:line
2013-11-14 20:32:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-14 20:33:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''form-signin'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/views/auth/register.php [ 295 ] in file:line
2013-11-14 20:33:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-14 20:33:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''form-control'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/views/auth/register.php [ 303 ] in file:line
2013-11-14 20:33:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-14 20:43:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/User.php [ 42 ] in file:line
2013-11-14 20:43:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-14 20:44:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The Full_name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:702
2013-11-14 20:44:12 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('Full_name', 'Ayce Allchorn')
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(67): Kohana_ORM->__set('Full_name', 'Ayce Allchorn')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:702
2013-11-14 20:48:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH/views/profile.php [ 45 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php:45
2013-11-14 20:48:46 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 45, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(45): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(28): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php:45
2013-11-14 20:54:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/profile.php [ 62 ] in file:line
2013-11-14 20:54:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line