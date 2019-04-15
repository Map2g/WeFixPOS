<?php
//=========================================================================================
//      Adds a product record to the PURCHASE_INVOICE or REPAIR_INVOICE tables
//
//      Called from AddPurchaseForm.php and AddRepPartsForm.php
//      Calls nothing
//=========================================================================================


include 'config.php'; // config.php connects to the database
//*************************************************************************************************************************************

//creates the variables and stores the user input to that variable
$repID = $_POST['repID'];
$purID = $_POST['purID'];
$prodID = $_POST['prodID'];
$prodQuantity = $_POST['pQuantity'];

//get product price for corresponding product with prodID
$getPrice = "SELECT PROD_RETAIL FROM PRODUCT WHERE PROD_ID = '". $prodID . "'";     //RETAIL is what customer pays.
$getPriceRow = mysqli_fetch_assoc(mysqli_query($conn, $getPrice));
$prodPrice = $getPriceRow["PROD_RETAIL"];

//used to determine where products to be added are for a purchase or a repair
$purchase = $_POST['purchase'];

//*************************************************************************************************************************************

if ($purchase != true){  //adding parts to repair

    //inserts this repair's id, the product id, the current price, and the number used in this repair
    $sql = "INSERT INTO REPAIR_INVOICE (REP_ID, PROD_ID, PROD_PRICE, PROD_QUANTITY) 
    VALUES ('$repID', '$prodID', '$prodPrice', '$prodQuantity')";
    
    //*************************************************************************************************************************************
    
    //if the query is successful, redirects to the same form so more parts can be added. If not, displays query and error message
    if(mysqli_query($conn, $sql)){
        header("location: AddRepPartsForm.php?id=$repID");
    }else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
    
} else {               //adding parts to a purchase. Same as above, only adding products to purchase
        
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