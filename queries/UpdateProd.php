<?php
include 'config.php';
//=========================================================================================
//      Updates product record with new information
//
//      Called from EditProd.php
//=========================================================================================

$prodID = $_POST['id'];
//determines which product record will be updated. Sent to EditProd.php in url, sent here as hidden form
$PName = mysql_real_escape_string(htmlspecialchars($_POST['name']));
$PPrice = $_POST['price'];          //price product is worth
$PRetail = $_POST['retail'];        //price customer will pay
$PStock = $_POST['stock'];

$sql = "UPDATE PRODUCT
        SET PROD_NAME = '$PName', PROD_PRICE = '$PPrice', PROD_RETAIL = '$PRetail', PROD_STOCK = '$PStock'
        WHERE PROD_ID = '$prodID'";

//redirects to inventory.php is successful, error message if not.
if(mysqli_query($conn, $sql)){
    header("location: Inventory.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>