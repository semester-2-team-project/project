<?php echo htmlspecialchars($_POST['username', 'password']);

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "userlist";
$tablename = "users";

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connection_aborted || $connect->connect_error){
    die("Connection failed: " . $conn->connect_error)
}


?>

