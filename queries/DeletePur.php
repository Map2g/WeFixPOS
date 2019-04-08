<?php
//This page is to be removed from the project


include 'config.php';

//*******************************************************************************************************************

if(isset($_GET['id'])){
  $purchaseID = $_GET['id'];
} else {
  echo "Could not get ID";
}


$deletePurItem = "DELETE FROM PURCHASE_INVOICE WHERE PUR_ID = '$purchaseID'";

if(mysqli_query($conn, $deletePurItem)){
    $deletePur = "DELETE FROM PURCHASE WHERE PUR_ID = '$purchaseID'";
    
    if(mysqli_query($conn, $deletePur)){
        header("location: Purchase.php");
    }else {
        echo "Error" . $deletePur . "<br>" . mysqli_error($conn);
    }
}else {
    echo "Error" . $deletePurItem . "<br>" . mysqli_error($conn);
}

?>