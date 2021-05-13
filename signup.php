<?php
include 'userDb.php';
#include 'checks.php';

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


#Building querys
$queryUsers = "SELECT * FROM users WHERE usersName=$uname;";
$queryEmails = "SELECT * FROM users WHERE email=$email;";
$responseUsers = mysqli_query($connect, $queryUsers);
$responseEmails = mysqli_query($connect, $queryEmails);


#if (mysqli_num_rows($responseUsers) > 0 ){                                 #Checks for existence of username, redirects back to signup if credentials already exist.
#    exit(header("Location: https://jeh80.brighton.domains/signup.html"));
#}
#else{
    $newUser = "INSERT INTO users (usersName, email, pass) VALUES ('$uname', '$email', '$password');";
    $insert = mysqli_query($connect, $newUser);#
    exit();
#}
