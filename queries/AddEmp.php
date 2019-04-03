<?php
include 'config.php';

//*******************************************************************************************************************

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['Password'];

$sql = "INSERT INTO EMPLOYEE (EMP_FNAME, EMP_LNAME, EMP_PHONE, EMP_EMAIL, EMP_PASS) VALUES ('$first_name', '$last_name', '$phone', '$email', '$password')";

if(mysqli_query($conn, $sql)){
    header("location: Employees.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>