<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-13 18:38:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: friend_user ~ APPPATH/views/profile.php [ 11 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php:11
2013-11-13 18:38:27 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 11, Array)
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
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php:11
2013-11-13 18:50:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The full_name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:603
2013-11-13 18:50:26 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('full_name')
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php(21): Kohana_ORM->__get('full_name')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(45): Kohana_View->__toString()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(28): Kohana_Controller_Template->after()
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#13 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#16 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:603
2013-11-13 19:06:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Profile.php [ 23 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:23
2013-11-13 19:06:50 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 23, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:23
2013-11-13 19:07:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Profile.php [ 25 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:25
2013-11-13 19:07:27 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 25, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:25
2013-11-13 19:07:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Profile.php [ 25 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:25
2013-11-13 19:07:36 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 25, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:25
2013-11-13 19:08:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Profile.php [ 25 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:25
2013-11-13 19:08:20 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 25, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:25
2013-11-13 19:08:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Profile.php [ 25 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:25
2013-11-13 19:08:35 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 25, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:25
2013-11-13 19:08:42 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Profile.php [ 21 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:21
2013-11-13 19:08:42 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(21): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Ayce/Des...', 21, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:21
2013-11-13 19:08:55 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2013-11-13 19:08:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #105, 'id')
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(21): Kohana_Database_Result->offsetGet('id')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-13 19:09:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Profile.php [ 21 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:21
2013-11-13 19:09:05 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 21, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:21