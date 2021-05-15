<?php
include 'userDb.php';


$uname = "";
$email= "";
$password="";
 
#Reading rows                       Better implementation as checks for empty fields, still need to expression match and sanitize input.
#if (!empty($_POST['submit'])){
#$name = $_POST["username"];
#$password = $_POST["password"];

#}


if (isset($_POST['submit'])){
    $uname = $_POST["username"];
    $email= $_POST["email"];
    $password=$_POST["password"];
    
}
else{
    exit(header("Location: https://jeh80.brighton.domains/login.html"));
}


$sql = "SELECT * FROM users WHERE email = ? AND pass = ?;"; 
$resp = mysqli_stmt_init($connect);
if (!mysqli_stmt_prepare($resp, $sql)){
    exit(header("Location: https://jeh80.brighton.domains/login.html?error=statementFailed"));
}
mysqli_stmt_bind_param($resp, "ss", $email, $password);
mysqli_stmt_execute($resp);
$result = mysqli_stmt_get_result($resp);

if ($result->num_rows == 1) {
    exit(header("Location: https://jeh80.brighton.domains/market.html?name=$uname"));
}




    
    
    
    #while ($row = mysqli_fetch_assoc($result)) {
     #   echo "<p>";
      #  echo "$row['name']";
       # echo "<br>";
        #echo "$row['email']";
        #echo "</p>"
   # }


