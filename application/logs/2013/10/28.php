<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-28 16:33:32 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be of the type array, string given, called in /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/login.php on line 21 and defined ~ SYSPATH/classes/Kohana/Form.php [ 35 ] in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php:35
2013-10-28 16:33:32 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php(35): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/Ayce/Des...', 35, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/views/auth/login.php(21): Kohana_Form::open('', '', Array)
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(27): Kohana_Response->body(Object(View))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php:35
2013-10-28 16:57:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH/classes/Controller/User.php [ 31 ] in file:line
2013-10-28 16:57:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 17:03:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2013-10-28 17:03:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 17:03:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_team' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-28 17:03:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 17:04:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_team' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-28 17:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 17:04:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_team' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-28 17:04:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 17:04:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_team' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-28 17:04:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 17:04:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_team' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-28 17:04:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 17:05:08 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 76 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:76
2013-10-28 17:05:08 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(76): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/Ayce/Des...', 76, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:76
2013-10-28 17:05:21 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 76 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:76
2013-10-28 17:05:21 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(76): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/Ayce/Des...', 76, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:76
2013-10-28 17:05:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view auth/register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php:137
2013-10-28 17:05:42 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('auth/register')
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(30): Kohana_View->__construct('auth/register', NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(76): Kohana_View::factory('auth/register')
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php:137
2013-10-28 17:06:12 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 76 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:76
2013-10-28 17:06:12 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(76): Kohana_Core::error_handler(2, 'Creating defaul...', '/Users/Ayce/Des...', 76, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:76
2013-10-28 18:24:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/User.php [ 67 ] in file:line
2013-10-28 18:24:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:24:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 71 ] in file:line
2013-10-28 18:24:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:25:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: team_id ~ APPPATH/classes/Controller/User.php [ 54 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:54
2013-10-28 18:25:52 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(54): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 54, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:54
2013-10-28 18:29:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 81 ] in file:line
2013-10-28 18:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:29:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 86 ] in file:line
2013-10-28 18:29:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:31:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 86 ] in file:line
2013-10-28 18:31:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:31:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 86 ] in file:line
2013-10-28 18:31:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:31:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 86 ] in file:line
2013-10-28 18:31:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:34:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2013-10-28 18:34:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:34:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2013-10-28 18:34:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:34:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2013-10-28 18:34:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:34:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2013-10-28 18:34:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:34:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2013-10-28 18:34:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:34:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2013-10-28 18:34:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-28 18:34:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2013-10-28 18:34:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line