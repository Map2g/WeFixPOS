<?php
include 'config.php';

//*******************************************************************************************************************
//This is a dropped function of this project. Employees should not be deleted because they are tied to repairs and purchases.

$empID = $_POST['id'];

$sql = "DELETE FROM EMPLOYEE WHERE EMP_ID = '$empID'";

if(mysqli_query($conn, $sql)){
    header("location: Employees.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>