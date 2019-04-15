<?php
//=========================================================================================
//      Deletes a purchase from the database. In the real world this may represent 
//      voiding a transaction, although money exchanged either way is not recorded.
//      Product stock is not updated because in the real world the products may not 
//      always be returned when a purchase is voided.
//
//      Called from PurList.php with PUR_ID sent through url
//=========================================================================================


include 'config.php'; //establish db connection

//*******************************************************************************************************************

//Get PUR_ID sent through URL.
if(isset($_GET['id'])){
  $purchaseID = $_GET['id'];
} else {
  echo "Could not get ID";
}

//deletes all purchase_invoice records associated with this purchase ID.
//In other words, deletes record of products included in the purchase
$deletePurItem = "DELETE FROM PURCHASE_INVOICE WHERE PUR_ID = '$purchaseID'";

//If first query worked, move on to deleting the corresponding record in PURCHASE
if(mysqli_query($conn, $deletePurItem)){
    $deletePur = "DELETE FROM PURCHASE WHERE PUR_ID = '$purchaseID'";
    
    //If final query worked, go back to purchases page
    if(mysqli_query($conn, $deletePur)){
        header("location: Purchase.php");
    }else {
        echo "Error" . $deletePur . "<br>" . mysqli_error($conn);
    }
}else {
    echo "Error" . $deletePurItem . "<br>" . mysqli_error($conn);
}

?>