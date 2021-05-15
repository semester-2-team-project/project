<?php
include "productDb.php";

$sql = "SELECT * FROM products LIMIT 3;";
$result = mysqli_query($sql);
if (mysqli_num_rows($result) > 0){
    while ($record = mysqli_fetch_assoc($result)){
        echo "<p>";
        echo $record['productName'];
        echo "<br>";
        echo $record['price'];
        echo "</p>";
    }
}
else{
    echo "No products"
}
}