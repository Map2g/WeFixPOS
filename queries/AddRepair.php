<?php
//=========================================================================================
//      Adds a repair record to the REPAIR table
//
//      Called from AddRepairForm.php and AddRepairFormGeneral.php
//      Calls nothing
//=========================================================================================


include 'config.php'; // config.php connects to the database

//Get customer ID to send in form url or dropdown
$customerID = $_POST['cusID'];

//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$repair_lockrno = $_POST['rLockrno'];
$repair_description = mysql_real_escape_string(htmlspecialchars($_POST['rDesc']));
    //mysql_real_escape_string is a php function that escapes all special characters so they can be inserted.
$device_ID = $_POST['DevID'];
$employee_ID = $_POST['EmpID'];

//*************************************************************************************************************************************

// inserts the variables into the columns of the table
$sql = "INSERT INTO REPAIR (REP_DATE, REP_LOCKRNO, REP_DESC, DEV_ID, EMP_ID) 
        VALUES (NOW(), '$repair_lockrno', '$repair_description', '$device_ID','$employee_ID')";
        //repair date is the current day and time

//*************************************************************************************************************************************

if($customerID != NULL){
    header("location: AddRepairFormGeneral.php?id=$customerID");
}


if(mysqli_query($conn, $sql)){
    $last_id = mysqli_insert_id($conn);
        //Get the last ID inserted into the database. REP_ID in this case
    header("location: AddRepPartsForm.php?id=$last_id");
        //send repair ID to the parts form so parts are added to the corresponding repair.
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>