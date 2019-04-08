<?php

include 'config.php'; // config.php connects to the database
//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$repID = $_POST['repID'];
$purID = $_POST['purID'];
$prodID = $_POST['prodID'];
$prodQuantity = $_POST['pQuantity'];

//get product price from prodID
$getPrice = "SELECT PROD_PRICE FROM PRODUCT WHERE PROD_ID = '". $prodID . "'";
$getPriceRow = mysqli_fetch_assoc(mysqli_query($conn, $getPrice));
$prodPrice = $getPriceRow["PROD_PRICE"];

$purchase = $_POST['purchase'];

//*************************************************************************************************************************************

if ($purchase != true){  //adding parts to repair

    // inserts the variables into the columns of the table
    $sql = "INSERT INTO REPAIR_INVOICE (REP_ID, PROD_ID, PROD_PRICE, PROD_QUANTITY) 
    VALUES ('$repID', '$prodID', '$prodPrice', '$prodQuantity')";
    
    //*************************************************************************************************************************************
    
    if(mysqli_query($conn, $sql)){
        header("location: AddRepPartsForm.php?id=$repID");
    }else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
    
} else {               //adding parts to a purchase
        
    // inserts the variables into the columns of the table
    $sql = "INSERT INTO PURCHASE_INVOICE (PUR_ID, PROD_ID, PROD_PRICE, PROD_QUANTITY) 
    VALUES ('$purID', '$prodID', '$prodPrice', '$prodQuantity')";
    
    //*************************************************************************************************************************************
    
    if(mysqli_query($conn, $sql)){
        header("location: AddPurchaseForm.php?pid=$purID");
    }else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
}

?>