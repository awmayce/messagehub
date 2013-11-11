<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-02 17:11:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'badge' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/main.php [ 30 ] in file:line
2013-11-02 17:11:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:16:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_requests' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-02 17:16:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:18:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: requests ~ APPPATH/views/template/main.php [ 30 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php:30
2013-11-02 17:18:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 30, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(28): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php:30
2013-11-02 17:18:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: notifications ~ APPPATH/views/template/main.php [ 30 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php:30
2013-11-02 17:18:46 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 30, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(28): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php:30
2013-11-02 17:21:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:21:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:21:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:21:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:21:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:21:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:22:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:22:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:22:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:22:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:22:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:22:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:22:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:25:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$requests' (T_VARIABLE) ~ APPPATH/classes/Controller/Friends.php [ 52 ] in file:line
2013-11-02 17:25:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 17:35:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/template/main.php [ 32 ] in file:line
2013-11-02 17:35:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 18:57:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH/classes/Controller/User.php [ 53 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:53
2013-11-02 18:57:04 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 53, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:53
2013-11-02 19:27:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH/classes/Controller/User.php [ 52 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:52
2013-11-02 19:27:49 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 52, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/User.php:52