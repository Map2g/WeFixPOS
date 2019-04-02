<?php
include 'config.php';

//*******************************************************************************************************************

$prodID = $_POST['id'];
$PName = mysql_real_escape_string(htmlspecialchars($_POST['name']));
$PPrice = $_POST['price'];
$PDesc = mysql_real_escape_string(htmlspecialchars($_POST['desc']));
$PStock = $_POST['stock'];

$sql = "UPDATE PRODUCT
        SET PROD_NAME = '$PName', PROD_PRICE = '$PPrice', PROD_DESC = '$PDesc', PROD_STOCK = '$PStock'
        WHERE PROD_ID = '$prodID'";

if(mysqli_query($conn, $sql)){
    header("location: Inventory.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>