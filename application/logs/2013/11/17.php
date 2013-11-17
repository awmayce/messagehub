<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-17 16:07:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Modal_Auth_User' not found ~ APPPATH/classes/Model/users.php [ 3 ] in file:line
2013-11-17 16:07:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 16:15:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Modal_Auth_User' not found ~ APPPATH/classes/Model/users.php [ 3 ] in file:line
2013-11-17 16:15:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 20:11:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/classes/Controller/Profile.php [ 35 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:35
2013-11-17 20:11:17 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 35, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_password()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:35
2013-11-17 20:12:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Profile.php [ 36 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:36
2013-11-17 20:12:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 36, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_password()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:36
2013-11-17 20:30:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: currentpassword ~ APPPATH/classes/Controller/Profile.php [ 42 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:42
2013-11-17 20:30:39 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 42, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_password()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:42
2013-11-17 20:36:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Profile.php [ 74 ] in file:line
2013-11-17 20:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 20:39:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH/views/user-edit.php [ 26 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/user-edit.php:26
2013-11-17 20:39:07 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/user-edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 26, Array)
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
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/user-edit.php:26
2013-11-17 20:40:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH/views/user-edit.php [ 23 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/user-edit.php:23
2013-11-17 20:40:47 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/user-edit.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 23, Array)
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
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/user-edit.php:23
2013-11-17 20:43:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The fullname property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:603
2013-11-17 20:43:56 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('fullname')
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/views/user-edit.php(278): Kohana_ORM->__get('fullname')
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
2013-11-17 20:52:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Profile.php [ 85 ] in file:line
2013-11-17 20:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 20:54:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Profile.php [ 33 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:33
2013-11-17 20:54:11 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:33
2013-11-17 20:54:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email_unique ~ APPPATH/classes/Controller/Profile.php [ 38 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:38
2013-11-17 20:54:34 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 38, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:38
2013-11-17 20:54:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Profile::_save_image() ~ APPPATH/classes/Controller/Profile.php [ 42 ] in file:line
2013-11-17 20:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 20:54:57 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:54:57 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(52): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:55:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Modal_Auth_User' not found ~ APPPATH/classes/Model/users.php [ 3 ] in file:line
2013-11-17 20:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 20:55:13 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:55:13 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(52): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:55:47 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:55:47 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(54): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:56:28 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:56:28 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(54): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:59:43 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:59:43 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(54): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-17 20:59:53 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'fullname' in 'field list' [ UPDATE `users` SET `email` = 'ayce.media@mail.com', `fullname` = 'ayce.media@mail.com' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-17 20:59:53 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(57): Kohana_Database_Query->execute()
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-17 21:00:02 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'ayce.media@mail.com' for key 'uniq_email' [ UPDATE `users` SET `email` = 'ayce.media@mail.com', `full_name` = 'ayce.media@mail.com' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-17 21:00:02 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(57): Kohana_Database_Query->execute()
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-17 21:00:48 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'ayce.media@mail.com' for key 'uniq_email' [ UPDATE `users` SET `email` = 'ayce.media@mail.com', `full_name` = 'ayce.media@mail.com' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-17 21:00:48 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(57): Kohana_Database_Query->execute()
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-17 21:01:02 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'ayce.media@mail.com' for key 'uniq_email' [ UPDATE `users` SET `email` = 'ayce.media@mail.com', `full_name` = 'Ayce Connor Allchorn' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-17 21:01:02 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(57): Kohana_Database_Query->execute()
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-17 21:35:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'bind' (T_STRING) ~ APPPATH/classes/Controller/Profile.php [ 74 ] in file:line
2013-11-17 21:35:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 21:35:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'bind' (T_STRING) ~ APPPATH/classes/Controller/Profile.php [ 74 ] in file:line
2013-11-17 21:35:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 21:35:46 --- EMERGENCY: ErrorException [ 2 ]: unlink(): http does not allow unlinking ~ APPPATH/classes/Controller/Profile.php [ 44 ] in file:line
2013-11-17 21:35:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(): http ...', '/Users/Ayce/Des...', 44, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(44): unlink('http://messageh...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-11-17 21:36:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Profile.php [ 43 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:43
2013-11-17 21:36:24 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/Ayce/Des...', 43, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:43
2013-11-17 21:36:45 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 76 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:76
2013-11-17 21:36:45 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(76): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Ayce/Des...', 76, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(43): Controller_Profile->_save_image(Array, 'ayceallchorn')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:76
2013-11-17 21:37:19 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 76 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:76
2013-11-17 21:37:19 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(76): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Ayce/Des...', 76, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(43): Controller_Profile->_save_image(Array, 'ayceallchorn')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:76
2013-11-17 21:37:41 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 76 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:76
2013-11-17 21:37:41 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(76): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Ayce/Des...', 76, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php(43): Controller_Profile->_save_image(Array, 'ayceallchorn')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Profile->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Profile.php:76