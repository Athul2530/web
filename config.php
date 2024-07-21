<?php

ob_start();
session_start();
//=========== database connection variables ====================
define('DB_SERVER', "localhost"); // database host name eg. localhost or 127.0.0.1
define('DB_USER', "root"); // database user name eg. root
define('DB_DATABASE', "webdatabase"); //database name
define('DB_PASSWORD', ""); //database user password
define('DB_TYPE', 'mysql'); //database drive eg. mysql, pgsql, mongodb etc

//url information
define('BASE_URL', 'http://localhost/webmini/');

// included main class
require_once 'app/Main.php';
require_once 'app/Admin.php';
?>
