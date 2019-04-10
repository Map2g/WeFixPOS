<?php

include 'config.php'; // config.php connects to the database
//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
$email = $_POST['email'];
$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO CUSTOMER (CUS_FNAME, CUS_LNAME, CUS_PHONE, CUS_EMAIL) VALUES ('$first_name', '$last_name', '$phone', '$email')";

//*************************************************************************************************************************************

if(mysqli_query($conn, $sql)){
    header("location: Customers.php");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>