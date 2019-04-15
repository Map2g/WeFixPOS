<?php
//This is a dropped function of this project. Customers should not be deleted because they are tied to repairs and purchases.


include 'config.php';

//*******************************************************************************************************************

$cusID = $_POST['id'];

$sql = "DELETE FROM CUSTOMER WHERE CUS_ID = '$cusID'";

if(mysqli_query($conn, $sql)){
    header("location: Customers.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>