<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-04 16:46:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH/views/messages.php [ 70 ] in file:line
2013-11-04 16:46:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 17:38:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_messages' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-11-04 17:38:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 17:38:43 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ASD - assumed 'ASD' ~ APPPATH/classes/Controller/Main.php [ 13 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:13
2013-11-04 17:38:43 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Ayce/Des...', 13, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:13
2013-11-04 17:39:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASD LIMIT 1' at line 1 [ SELECT `message`.`id` AS `id`, `message`.`conversation` AS `conversation`, `message`.`date` AS `date`, `message`.`sender` AS `sender`, `message`.`reciever` AS `reciever`, `message`.`body` AS `body` FROM `messages` AS `message` WHERE `sender` = '1' OR `reciever` = '1' ORDER BY `date` ASD LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-04 17:39:36 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', 'Model_Message', Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(13): Kohana_ORM->find_all()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-04 18:10:23 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASD LIMIT 1' at line 1 [ SELECT `message`.`id` AS `id`, `message`.`conversation` AS `conversation`, `message`.`date` AS `date`, `message`.`sender` AS `sender`, `message`.`reciever` AS `reciever`, `message`.`body` AS `body` FROM `messages` AS `message` WHERE `sender` = '1' OR `reciever` = '1' ORDER BY `date` ASD LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-04 18:10:23 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', 'Model_Message', Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(13): Kohana_ORM->find_all()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-04 18:10:25 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASD LIMIT 1' at line 1 [ SELECT `message`.`id` AS `id`, `message`.`conversation` AS `conversation`, `message`.`date` AS `date`, `message`.`sender` AS `sender`, `message`.`reciever` AS `reciever`, `message`.`body` AS `body` FROM `messages` AS `message` WHERE `sender` = '1' OR `reciever` = '1' ORDER BY `date` ASD LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-04 18:10:25 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', 'Model_Message', Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(13): Kohana_ORM->find_all()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-04 18:12:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$sender ~ APPPATH/classes/Controller/Main.php [ 15 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:15
2013-11-04 18:12:22 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 15, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php:15
2013-11-04 18:16:05 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASD LIMIT 1' at line 1 [ SELECT `message`.`id` AS `id`, `message`.`conversation` AS `conversation`, `message`.`date` AS `date`, `message`.`sender` AS `sender`, `message`.`reciever` AS `reciever`, `message`.`body` AS `body` FROM `messages` AS `message` WHERE `sender` = '1' OR `reciever` = '1' ORDER BY `date` ASD LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-04 18:16:05 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `message...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(9): Kohana_ORM->find('sender', 'reciever')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-04 18:27:49 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/friends.php [ 11 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php:11
2013-11-04 18:27:49 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Ayce/Des...', 11, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(40): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(28): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php:11
2013-11-04 18:49:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Finduser.php [ 16 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:16
2013-11-04 18:49:23 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php(16): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Ayce/Des...', 16, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_finduser->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_finduser))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:16
2013-11-04 18:49:33 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Finduser.php [ 19 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:49:33 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php(19): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Ayce/Des...', 19, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_finduser->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_finduser))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:49:46 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Finduser.php [ 19 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:49:46 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php(19): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/Ayce/Des...', 19, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_finduser->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_finduser))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:54:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/Finduser.php [ 19 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:54:49 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 19, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_finduser->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_finduser))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:54:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/Finduser.php [ 19 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:54:49 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 19, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_finduser->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_finduser))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:55:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/Controller/Finduser.php [ 19 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:55:00 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 19, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_finduser->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_finduser))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:19
2013-11-04 18:58:45 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Finduser.php [ 20 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:20
2013-11-04 18:58:45 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php(20): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Ayce/Des...', 20, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_finduser->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_finduser))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:20
2013-11-04 18:58:46 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Finduser.php [ 20 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:20
2013-11-04 18:58:46 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php(20): Kohana_Core::error_handler(8, 'Array to string...', '/Users/Ayce/Des...', 20, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_finduser->action_user_id()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_finduser))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Finduser.php:20