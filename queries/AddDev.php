<?php

include 'config.php'; // config.php connects to the database
//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$cusID = $_POST['id'];
$model = mysql_real_escape_string(htmlspecialchars($_POST['model']));
$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO DEVICE (DEV_MODEL, DEV_PHONE, CUS_ID) VALUES ('$model', '$phone', '$cusID')";

//*************************************************************************************************************************************

if(mysqli_query($conn, $sql)){
    header("location: CusSummary.php?id=" . $cusID);
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>