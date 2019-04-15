<?php
include 'config.php';
//=========================================================================================
//      Updates employee record with new information
//
//      Called from EditEmp.php
//=========================================================================================

$empID = $_POST['id'];
//determines which employee record will be updated. Sent to EditEmp.php in url, sent here as hidden form
$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
$email = $_POST['email'];
$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);
//remove hyphens from phone number

$sql = "UPDATE EMPLOYEE
        SET EMP_FNAME = '$first_name', EMP_LNAME = '$last_name', EMP_EMAIL = '$email', EMP_PHONE = '$phone'
        WHERE EMP_ID = '$empID'";

//redirects to employees.php is successful, error message if not.
if(mysqli_query($conn, $sql)){
    header("location: Employees.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>