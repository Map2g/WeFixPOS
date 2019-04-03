<?php

include 'config.php';
//*******************************************************************************************************************

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO CUSTOMER (CUS_FNAME, CUS_LNAME, CUS_PHONE, CUS_EMAIL) VALUES ('$first_name', '$last_name', '$phone', '$email')";

if(mysqli_query($conn, $sql)){
    header("location: Customers.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>