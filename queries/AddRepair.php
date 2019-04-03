<?php

include 'config.php';
//*******************************************************************************************************************

$repair_date = $_POST['rDate'];
$repair_lockrno = $_POST['rLockrno'];
$repair_description = $_POST['rDesc'];
$device_ID = $_POST['DevID'];
$employee_ID = $_SESSION['EmpID'];;

$sql = "INSERT INTO REPAIR (REP_DATE, REP_LOCKRNO, REP_DESC, DEV_ID, EMP_ID) 
VALUES ('$repair_date', '$repair_lockrno', '$repair_description', '$device_ID','$employee_ID')";

if(mysqli_query($conn, $sql)){
    header("location: pages/index.html");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>