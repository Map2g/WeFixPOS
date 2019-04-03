<?php
include 'config.php';

//*******************************************************************************************************************

$empID = $_POST['id'];

$sql = "DELETE FROM EMPLOYEE WHERE EMP_ID = '$empID'";

if(mysqli_query($conn, $sql)){
    header("location: Employees.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}


//We'll probably have to add an error message or some way to handle trying to delete an employee or customer that is attached to purchases/repairs.
?>