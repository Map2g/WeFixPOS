<?php
include 'config.php';

//*******************************************************************************************************************

$devID = $_POST['id'];
$model = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$phone = htmlspecialchars($_POST['lname']);

$sql = "UPDATE DEVICE
        SET DEV_MODEL = '$model', DEV_PHONE = '$phone'
        WHERE DEV_ID = '$devID'";

if(mysqli_query($conn, $sql)){
    header("location: CusSummary.php");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>