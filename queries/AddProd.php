<?php

include 'config.php';
//*******************************************************************************************************************

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$desc = $_POST['desc'];

$sql = "INSERT INTO PRODUCT (PROD_PRICE, PROD_NAME, PROD_DESC, PROD_STOCK) VALUES ('$price', '$name', '$desc', '$stock')";

if(mysqli_query($conn, $sql)){
    header("location: Inventory.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>