<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-16 20:04:38 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php on line 73 and defined ~ SYSPATH/classes/Kohana/Form.php [ 354 ] in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php:354
2013-11-16 20:04:38 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php(354): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Ayce/Des...', 354, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/views/profile.php(73): Kohana_Form::submit('Change Password')
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
#16 {main} in /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Form.php:354
2013-11-16 20:30:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$post' (T_VARIABLE) ~ APPPATH/classes/Controller/Changepassword.php [ 10 ] in file:line
2013-11-16 20:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-16 20:47:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 20:47:59 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php(19): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_ChangePassword->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ChangePassword))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:01:07 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:01:07 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php(19): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_ChangePassword->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ChangePassword))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:01:31 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:01:31 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php(19): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_ChangePassword->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ChangePassword))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:02:11 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:02:11 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php(19): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_ChangePassword->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ChangePassword))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:03:14 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:03:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php(19): Kohana_ORM->save()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_ChangePassword->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ChangePassword))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php:1302
2013-11-16 21:05:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: newpassword ~ APPPATH/classes/Controller/Changepassword.php [ 18 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php:18
2013-11-16 21:05:40 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 18, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_ChangePassword->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ChangePassword))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php:18
2013-11-16 21:06:57 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'messagehub.user' doesn't exist [ UPDATE `user` SET `password` = 'newpassword' WHERE `username` = 'ayceallchorn' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-16 21:06:57 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `user` S...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php(19): Kohana_Database_Query->execute()
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_ChangePassword->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ChangePassword))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-16 21:07:05 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'messagehub.user' doesn't exist [ UPDATE `user` SET `password` = 'newpassword' WHERE `username` = 'ayceallchorn' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-16 21:07:05 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `user` S...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Changepassword.php(19): Kohana_Database_Query->execute()
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_ChangePassword->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_ChangePassword))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-16 21:07:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Modal_Auth_User' not found ~ APPPATH/classes/Model/users.php [ 3 ] in file:line
2013-11-16 21:07:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line