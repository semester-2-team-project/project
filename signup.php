<?php
include 'userDb.php';

#Reading rows
$uname = "";
$email= "";
$password="";

#$sql = "SELECT * FROM 'users'";
#$test = mysqli_query($connect, sql);


if (isset($_POST['submit'])){
$uname = $_POST["username"];
$email= $_POST["email"];
$password=$_POST["password"];


}
else{
    exit(header("Location: https://jeh80.brighton.domains/signup.html"));
}


#if(emptysignup($usersName,$email,$password) !== false){
#    exit(header("Location: https://jeh80.brighton.domains/signup.html?error=emptyfields"));
#}



#Checking if user exists


$sql = "SELECT * FROM users WHERE email = ?;";
$resp = mysqli_stmt_init($connect);
if (!mysqli_stmt_prepare($resp, $sql)){
    exit(header("Location: https://jeh80.brighton.domains/signup.html?error=statementFailed"));
}
mysqli_stmt_bind_param($resp, "s", $email);
mysqli_stmt_execute($resp);
$result = mysqli_stmt_get_result($resp);

    #if(mysqli_fetch_assoc($result)){

   # }



if ($result->num_rows > 0){
    exit(header("Location: https://jeh80.brighton.domains/signup.html?error=userExists"));
}
else {
$newUser = "INSERT INTO users (usersName, email, pass) VALUES ('$uname', '$email', '$password');";
$insert = mysqli_query($connect, $newUser);#
exit(header("Location: https://jeh80.brighton.domains/market.html?name=$uname"));
}
    
