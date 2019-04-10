<?php
include 'config.php';

//*******************************************************************************************************************

$empID = $_POST['id'];
$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
$email = $_POST['email'];
$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);

$sql = "UPDATE EMPLOYEE
        SET EMP_FNAME = '$first_name', EMP_LNAME = '$last_name', EMP_EMAIL = '$email', EMP_PHONE = '$phone'
        WHERE EMP_ID = '$empID'";

if(mysqli_query($conn, $sql)){
    header("location: Employees.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>