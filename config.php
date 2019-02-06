<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
   //define('DB_SERVER', 'auburnpeermentoring.database.windows.net');
   //define('DB_USERNAME', 'peermentoring');
   //define('DB_PASSWORD', 'Group8!2019');
 //  define('DB_NAME', 'kmk0044db');
 


 $serverName = "auburnpeermentoring.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "auburnpeermentoringdb", // update me
        "Uid" => "peermentoring", // update me
        "PWD" => "Group8!2019" // update me
    );
    //Establishes the connection
    $link = sqlsrv_connect($serverName, $connectionOptions); 

/* Attempt to connect to MySQL database */
//$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>