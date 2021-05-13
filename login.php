<?php
include 'userDb.php';

#Building query
$query = "SELECT * FROM email;";
$response = mysqli_query($connect, $query);
 
#Reading rows
if (!empty($_POST['submit'])){
$name = $_POST["username"];
$password = $_POST["password"];

}

    
    
    
    
    #while ($row = mysqli_fetch_assoc($result)) {
     #   echo "<p>";
      #  echo "$row['name']";
       # echo "<br>";
        #echo "$row['email']";
        #echo "</p>"
   # }


