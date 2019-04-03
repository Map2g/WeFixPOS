<?php
include 'config.php';

//*******************************************************************************************************************

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


//We'll probably have to add an error message or some way to handle trying to delete an employee or customer that is attached to purchases/repairs.
?>