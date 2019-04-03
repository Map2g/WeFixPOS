<?php
include 'config.php';

//*******************************************************************************************************************

$prodID = $_POST['id'];

$sql = "DELETE FROM PRODUCT WHERE PROD_ID = '$prodID'";

if(mysqli_query($conn, $sql)){
    header("location: Inventory.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

//We'll probably have to add an error message or some way to handle trying to delete an employee or customer that is attached to purchases/repairs.
?>