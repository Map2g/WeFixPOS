<?php
include 'config.php';

//*******************************************************************************************************************

$devID = $_POST['id'];
$cusID = $_POST['cusID'];
$model = mysql_real_escape_string(htmlspecialchars($_POST['model']));
$phone = htmlspecialchars($_POST['phone']);

$sql = "UPDATE DEVICE
        SET DEV_MODEL = '$model', DEV_PHONE = '$phone'
        WHERE DEV_ID = '$devID'";

if(mysqli_query($conn, $sql)){
    header("location: CusSummary.php?id=" . $cusID);
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>