<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '185.98.131.93');
define('DB_USERNAME', 'inget984178_2dq5m');
define('DB_PASSWORD', 'dccbv9khce');
define('DB_NAME', 'inget984178_2dq5m');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
