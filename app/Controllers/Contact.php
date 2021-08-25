<?php

/**
* Contact Controller
* Use to create new contact.
* created 21.08.2021
* updated: 21.08.2021
* 
* @author Frank Zohim   
*/

require '../app/Models/Database.php';
require '../config/config.ini.php';
use app\Models\Database;

$db = new Database($host,$database,$user,$password);
$db->connect();

