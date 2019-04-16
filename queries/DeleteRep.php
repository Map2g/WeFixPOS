<?php
//=========================================================================================
//      Deletes a repair from the database. In the real world this could represent 
//      voiding a repair transaction, although money exchanged either way is not recorded.
//      Product stock is not updated because in the real world the products used in a
//       repair will not be returned when a repair is voided.
//
//      Called from RepList.php with REP_ID sent through url
//      Calls nothing
//=========================================================================================

include 'config.php';   

//*******************************************************************************************************************

if(isset($_GET['id'])){
    //from RepList.php
  $repairID = $_GET['id'];
} else {
  echo "Could not get ID";
}

//deletes all repair_invoice records associated with this repair ID.
//In other words, deletes record of products included in the repair
$deleteRepItem = "DELETE FROM REPAIR_INVOICE WHERE REP_ID = '$repairID'";

//If first query worked, move on to deleting the corresponding record in REPAIR
if(mysqli_query($conn, $deleteRepItem)){
    $deleteRep = "DELETE FROM REPAIR WHERE REP_ID = '$repairID'";
    
    //If final query worked, go back to repair page
    if(mysqli_query($conn, $deleteRep)){
        header("location: Repairs.php");
    }else {
        echo "Error" . $deleteRep . "<br>" . mysqli_error($conn);
    }
}else {
    echo "Error" . $deleteRepItem . "<br>" . mysqli_error($conn);
}

?>