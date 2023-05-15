<?php
/*Here we add database and store the data*/

define('DB_SERVER',  'localhost');
define('DB_email',  'root');
define('DB_PASSWORD',  '');
define('DB_NAME',  'sportx');

//try coonect data base

$conn = mysqli_connect(DB_SERVER,DB_email,DB_PASSWORD,DB_NAME);

//cheack the connection

if($conn ==false){
   dir('Error : cannot connect');
}

?>