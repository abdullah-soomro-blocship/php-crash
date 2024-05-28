<?php


define('DB_HOST', 'localhost');
define('DB_USER', 'abdullah');
define('DB_PASSWORD', '1234567890');
define('DB_NAME', 'php_dev');
    
/// create connectino
$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/// check connection 
if($connection->connect_error){
    die('Connection failed' . $connection->connect_error);
}

?>