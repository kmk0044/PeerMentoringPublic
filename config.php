<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
   define('DB_SERVER', 'acadmysql.duc.auburn.edu');
   define('DB_USERNAME', 'kmk0044');
   define('DB_PASSWORD', 'Mkmm2013');
   define('DB_NAME', 'kmk0044db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>