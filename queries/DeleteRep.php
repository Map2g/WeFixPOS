<?php
//This page is to be removed from the project


include 'config.php';

//*******************************************************************************************************************

if(isset($_GET['id'])){
  $repairID = $_GET['id'];
} else {
  echo "Could not get ID";
}


$deleteRepItem = "DELETE FROM REPAIR_INVOICE WHERE REP_ID = '$repairID'";

if(mysqli_query($conn, $deleteRepItem)){
    $deleteRep = "DELETE FROM REPAIR WHERE REP_ID = '$repairID'";
    
    if(mysqli_query($conn, $deleteRep)){
        header("location: Repairs.php");
    }else {
        echo "Error" . $deleteRep . "<br>" . mysqli_error($conn);
    }
}else {
    echo "Error" . $deleteRepItem . "<br>" . mysqli_error($conn);
}

?>