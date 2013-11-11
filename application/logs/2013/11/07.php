<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-07 21:46:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: friend_user ~ APPPATH/views/template/main.php [ 33 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php:33
2013-11-07 21:46:03 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(28): Kohana_Controller_Template->after()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php:33
2013-11-07 21:57:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/Controller/Main.php [ 76 ] in file:line
2013-11-07 21:57:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-07 21:58:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/Controller/Main.php [ 76 ] in file:line
2013-11-07 21:58:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-07 22:00:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Main.php [ 75 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:75
2013-11-07 22:00:39 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 75, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_message()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:75
2013-11-07 22:01:05 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2013-11-07 22:01:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #116, 'read')
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('read')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(75): Kohana_Database_Result->offsetGet('read')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_message()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-07 22:01:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Main.php [ 75 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:75
2013-11-07 22:01:18 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 75, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_message()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:75
2013-11-07 22:01:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Main.php [ 75 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:75
2013-11-07 22:01:57 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 75, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_message()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:75