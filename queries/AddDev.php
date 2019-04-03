<?php

include 'config.php';
//*******************************************************************************************************************

$cusID = $_POST['id'];
$model = $_POST['model'];
$phone = $_POST['phone'];

$sql = "INSERT INTO DEVICE (DEV_MODEL, DEV_PHONE, CUS_ID) VALUES ('$model', '$phone', '$cusID')";

if(mysqli_query($conn, $sql)){
    header("location: CusSummary.php?id=" . $cusID);
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>