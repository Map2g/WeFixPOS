<?php
include 'config.php';

//*******************************************************************************************************************

$cusID = $_POST['id'];
$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "UPDATE CUSTOMER
        SET CUS_FNAME = '$first_name', CUS_LNAME = '$last_name', CUS_EMAIL = '$email', CUS_PHONE = '$phone'
        WHERE CUS_ID = '$cusID'";

if(mysqli_query($conn, $sql)){
    header("location: Customers.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>