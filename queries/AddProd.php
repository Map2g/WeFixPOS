<?php

include 'config.php';
//*******************************************************************************************************************

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$retail = $_POST['retail'];

$sql = "INSERT INTO PRODUCT (PROD_PRICE, PROD_NAME, PROD_RETAIL, PROD_STOCK) VALUES ('$price', '$name', '$retail', '$stock')";

if(mysqli_query($conn, $sql)){
    header("location: Inventory.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>