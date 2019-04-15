<?php
include 'config.php';

//*******************************************************************************************************************
//This is a dropped function of this project. Devices should not be deleted because they are tied to repairs. You do 
// not want to lose a record of a repair even if you want to delete a device.

$devID = $_POST['id'];

//****************Just used to get back to the right page *************
$cusIDsql = "SELECT CUS_ID FROM DEVICE WHERE DEV_ID = '$devID'";
$result = mysqli_query($conn, $cusIDsql);
$row = mysqli_fetch_assoc($result);
$cusID = $row["CUS_ID"];
//*********************************************************************

$sql = "DELETE FROM DEVICE WHERE DEV_ID = '$devID'";

if(mysqli_query($conn, $sql)){
    header("location: CusSummary.php?id=$cusID");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>