<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-08 21:03:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'sender' in 'where clause' [ UPDATE `users` SET `read` = '1' WHERE `sender` = '3' AND `reciever` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251
2013-11-08 21:03:01 --- DEBUG: #0 /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 /Users/Ayce/Desktop/htdocs/messagehub/application/classes/Controller/Main.php(83): Kohana_Database_Query->execute()
#2 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Controller.php(84): Controller_Main->action_message()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/Ayce/Desktop/htdocs/messagehub/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Ayce/Desktop/htdocs/messagehub/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/Ayce/Desktop/htdocs/messagehub/modules/database/classes/Kohana/Database/Query.php:251