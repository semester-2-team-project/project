<?php
$servername = "localhost";
$username = "jeh80_dbUser";
#omitted password due to public repo
$password ="";
$dbname = "jeh80_userlist";
 
#need to store password hashed in a config file.

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect){
    die("Connection failed: " . mysqli_connect_error());
}
