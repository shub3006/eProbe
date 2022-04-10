<?php

define('DB_SERVER', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'equora'); 

// Try connection to the database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
//Check the connection
if($conn == false){
   dir('Error: Cannot Connect');
}

?>
