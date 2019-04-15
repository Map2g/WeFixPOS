<?php
include 'config.php';

//*******************************************************************************************************************
//This is a dropped function of this project. Products should not be deleted because they are tied to repairs and purchases.

$prodID = $_POST['id'];

$sql = "DELETE FROM PRODUCT WHERE PROD_ID = '$prodID'";

if(mysqli_query($conn, $sql)){
    header("location: Inventory.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>