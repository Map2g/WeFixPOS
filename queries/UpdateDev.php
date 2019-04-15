<?php
include 'config.php';
//=========================================================================================
//      Updates device record with new information
//
//      Called from EditDev.php
//=========================================================================================


//*******************************************************************************************************************

$devID = $_POST['id'];
//determines which device record will be updated. Sent to EditDev.php in url, sent here as hidden form
$cusID = $_POST['cusID'];
$model = mysql_real_escape_string(htmlspecialchars($_POST['model']));
$phone = preg_replace("/[^0-9]/", "", $_POST['phone']);
//removes hyphens from phone number

$sql = "UPDATE DEVICE
        SET DEV_MODEL = '$model', DEV_PHONE = '$phone'
        WHERE DEV_ID = '$devID'";

//redirects to CusSummary.php for customer owning device is successful, error message if not.
if(mysqli_query($conn, $sql)){
    header("location: CusSummary.php?id=" . $cusID);
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>