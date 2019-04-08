<?php

include 'config.php'; // config.php connects to the database
//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
//$repair_date = $_POST['rDate'];
$repair_lockrno = $_POST['rLockrno'];
$repair_description = $_POST['rDesc'];
$device_ID = $_POST['DevID'];
//$employee_ID = $_SESSION['EmpID'];
$employee_ID = $_POST['EmpID'];

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO REPAIR (REP_DATE, REP_LOCKRNO, REP_DESC, DEV_ID, EMP_ID) 
VALUES (CURDATE(), '$repair_lockrno', '$repair_description', '$device_ID','$employee_ID')";

//*************************************************************************************************************************************


if(mysqli_query($conn, $sql)){
    //Get the last ID inserted into the database. REP_ID
    $last_id = mysqli_insert_id($conn);
    header("location: AddRepParts.html?id=$last_id");
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>