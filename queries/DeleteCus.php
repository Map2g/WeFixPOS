<?php
//This page is to be removed from the project


include 'config.php';

//*******************************************************************************************************************

$cusID = $_POST['id'];

$sql = "DELETE FROM CUSTOMER WHERE CUS_ID = '$cusID'";

if(mysqli_query($conn, $sql)){
    header("location: Customers.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}


//We'll probably have to add an error message or some way to handle trying to delete an employee or customer that is attached to purchases/repairs.
?>