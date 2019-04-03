<?php

include 'config.php';
session_start();
//*******************************************************************************************************************

$purchase_date= $_POST['PurDate'];
$customer_ID = $_POST['CusID'];
$employee_ID = $_SESSION['EmpID'];;

$sql = "INSERT INTO PURCHASE (PUR_DATE, CUS_ID, EMP_ID) VALUES ('$purchase_date', '$customer_ID', '$employee_ID')";

if(mysqli_query($conn, $sql)){
    header("location: Purchase.php");
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

?>