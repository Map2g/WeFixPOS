<?php
include 'config.php';
//=========================================================================================
//      Updates customer record with new information
//
//      Called from EditCus.php
//=========================================================================================


$cusID = $_POST['id'];
//determines which customer record will be updated. Sent to EditCus.php in url, sent here as hidden form
$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
$email = $_POST['email'];
$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);
    //removes hyphens from phone number

$sql = "UPDATE CUSTOMER
        SET CUS_FNAME = '$first_name', CUS_LNAME = '$last_name', CUS_EMAIL = '$email', CUS_PHONE = '$phone'
        WHERE CUS_ID = '$cusID'";

//redirects to customers.php is successful, error message if not.
if(mysqli_query($conn, $sql)){
    header("location: Customers.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>