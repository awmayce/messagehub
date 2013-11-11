<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-21 19:01:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'reiever' in 'where clause' [ SELECT `request`.`id` AS `id`, `request`.`sender` AS `sender`, `request`.`reciever` AS `reciever`, `request`.`confirmed` AS `confirmed` FROM `requests` AS `request` WHERE `sender` = '1' AND `reiever` = '' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:01:48 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `request...', 'Model_Request', Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(61): Kohana_ORM->find_all()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:02:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'reiever' in 'where clause' [ SELECT `request`.`id` AS `id`, `request`.`sender` AS `sender`, `request`.`reciever` AS `reciever`, `request`.`confirmed` AS `confirmed` FROM `requests` AS `request` WHERE `sender` = '1' AND `reiever` = '' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:02:43 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `request...', 'Model_Request', Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(61): Kohana_ORM->find_all()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:03:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:03:27 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:03:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:03:42 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:06:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH), expecting ',' or ';' ~ APPPATH/classes/Controller/Friends.php [ 65 ] in file:line
2013-10-21 19:06:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:06:14 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:06:14 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:06:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:06:22 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:06:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$sender ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:06:34 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:07:21 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Request as array ~ APPPATH/classes/Controller/Friends.php [ 69 ] in file:line
2013-10-21 19:07:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:07:33 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2013-10-21 19:07:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #104, 'id')
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Database_Result->offsetGet('id')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-21 19:07:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:07:59 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:08:08 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2013-10-21 19:08:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #104, 'id')
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Database_Result->offsetGet('id')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-21 19:08:15 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2013-10-21 19:08:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #104, 'sender')
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('sender')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Database_Result->offsetGet('sender')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-21 19:08:39 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:08:39 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:08:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:08:46 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:08:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$sender ~ APPPATH/classes/Controller/Friends.php [ 63 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:08:53 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 63, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:63
2013-10-21 19:09:00 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2013-10-21 19:09:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #104, 'sender')
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('sender')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Database_Result->offsetGet('sender')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-21 19:09:05 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2013-10-21 19:09:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #104, 'sender')
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('sender')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Database_Result->offsetGet('sender')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-21 19:09:06 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2013-10-21 19:09:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Users/Ayce/Des...', 33, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #104, 'sender')
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('sender')
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(63): Kohana_Database_Result->offsetGet('sender')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_decline()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-21 19:09:18 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Request as array ~ APPPATH/classes/Controller/Friends.php [ 63 ] in file:line
2013-10-21 19:09:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:12:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Friends.php [ 64 ] in file:line
2013-10-21 19:12:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:17:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$friend' (T_VARIABLE) ~ APPPATH/classes/Controller/Friends.php [ 70 ] in file:line
2013-10-21 19:17:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:21:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '2' in 'where clause' [ SELECT `friend`.`id` AS `id`, `friend`.`userid` AS `userid`, `friend`.`friendid` AS `friendid` FROM `friends` AS `friend` WHERE `2` = '1' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:21:43 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `friend`...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(93): Kohana_ORM->find('id')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_remove()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:23:33 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete request model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:96
2013-10-21 19:23:33 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(96): Kohana_ORM->delete()
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_remove()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:96
2013-10-21 19:24:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete friend model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:95
2013-10-21 19:24:17 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(95): Kohana_ORM->delete()
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_remove()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:95
2013-10-21 19:26:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete friend model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:95
2013-10-21 19:26:16 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php(95): Kohana_ORM->delete()
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Friends->action_remove()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Friends.php:95
2013-10-21 19:29:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: friends ~ APPPATH/views/friends.php [ 6 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php:6
2013-10-21 19:29:37 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Ayce/Des...', 6, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(38): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(21): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php:6
2013-10-21 19:32:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'confirmed' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `id` = '1' AND `confirmed` = '0' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:32:16 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/views/requests.php(5): Kohana_ORM->find('username')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(38): Kohana_View->__toString()
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(21): Kohana_Controller_Template->after()
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#15 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#18 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:33:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'confirmed' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `id` = '1' AND `confirmed` = '0' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:33:19 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/views/requests.php(5): Kohana_ORM->find('username')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(38): Kohana_View->__toString()
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(21): Kohana_Controller_Template->after()
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#15 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#18 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:33:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'confirmed' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `id` = '1' AND `confirmed` = '0' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:33:20 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/Ayce/Desktop/htdocs/messagehub/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Users/Ayce/Desktop/htdocs/messagehub/application/views/requests.php(5): Kohana_ORM->find('username')
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(38): Kohana_View->__toString()
#8 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#10 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(21): Kohana_Controller_Template->after()
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#15 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#18 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-10-21 19:34:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH/views/friends.php [ 6 ] in file:line
2013-10-21 19:34:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:34:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!', expecting '(' ~ APPPATH/views/friends.php [ 6 ] in file:line
2013-10-21 19:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:36:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/views/friends.php [ 21 ] in /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php:21
2013-10-21 19:36:10 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Ayce/Des...', 21, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#3 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/Ayce/Desktop/htdocs/messagehub/application/views/template/main.php(38): Kohana_View->__toString()
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(61): include('/Users/Ayce/Des...')
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/Ayce/Des...', Array)
#7 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Layout.php(21): Kohana_Controller_Template->after()
#9 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#12 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/Ayce/Desktop/htdocs/messagehub/application/views/friends.php:21
2013-10-21 19:37:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/views/friends.php [ 21 ] in file:line
2013-10-21 19:37:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:37:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/friends.php [ 20 ] in file:line
2013-10-21 19:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:37:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/friends.php [ 24 ] in file:line
2013-10-21 19:37:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:39:15 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Friend as array ~ APPPATH/views/friends.php [ 20 ] in file:line
2013-10-21 19:39:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:39:25 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Friend as array ~ APPPATH/views/friends.php [ 20 ] in file:line
2013-10-21 19:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 19:40:00 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Friend as array ~ APPPATH/views/friends.php [ 20 ] in file:line
2013-10-21 19:40:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line