<?php

include 'config.php'; // config.php connects to the database
session_start(); // starts the session for cookies
//*************************************************************************************************************************************

//creates the variables and stores the user input
$customer_ID = $_POST['cusID'];
//$employee_ID = $_SESSION['EmpID'];
$employee_ID = $_POST['EmpID'];

//*************************************************************************************************************************************

$sql = "INSERT INTO PURCHASE (PUR_DATE, CUS_ID, EMP_ID) 
        VALUES (CURDATE(), '$customer_ID', '$employee_ID')";

//*************************************************************************************************************************************



if(mysqli_query($conn, $sql)){
    //Get the last ID inserted into the database PUR_ID
    $last_id = mysqli_insert_id($conn);
    header("location: AddPurchaseForm.php?pid=$last_id");
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>