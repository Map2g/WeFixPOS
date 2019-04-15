<?php
//=========================================================================================
//      Generates list of products used in a specific repair or product
//
//      Called from AddPurchaseForm.php, AddRepPartsForm.php
//      Calls nothing
//=========================================================================================

include 'config.php';

//Query to get details of products included in a specific repair
$RepProdList = "SELECT PRODUCT.PROD_NAME, REPAIR_INVOICE.PROD_PRICE, REPAIR_INVOICE.PROD_QUANTITY
                    FROM PRODUCT JOIN REPAIR_INVOICE ON PRODUCT.PROD_ID = REPAIR_INVOICE.PROD_ID
                    WHERE REPAIR_INVOICE.REP_ID = '". $repairID ."'";
$RepProdResult = mysqli_query($conn, $RepProdList);

//Query to get details of products included in a specific purchase
$PurProdList = "SELECT PRODUCT.PROD_NAME, PURCHASE_INVOICE.PROD_PRICE, PURCHASE_INVOICE.PROD_QUANTITY
                    FROM PRODUCT JOIN PURCHASE_INVOICE ON PRODUCT.PROD_ID = PURCHASE_INVOICE.PROD_ID
                    WHERE PURCHASE_INVOICE.PUR_ID = '". $purchaseID ."'";
$PurProdResult = mysqli_query($conn, $PurProdList);

//Error message if query doesn't work or there is a connection error
if ($RepProdResult == false || $PurProdResult == false) {
  printf("Query error: %s\n", mysqli_error($conn));
}

//$purchase = true when this is called from AddPurchaseForm.php
if ($purchase == true){
    $query = $PurProdResult;
} else {
    $query = $RepProdResult;
}

//Initialize the total price variable so it can be added on to.
$TotPrice = 0.00;

if (mysqli_num_rows($query) > 0) {
    $rowN = mysqli_fetch_assoc($query);
    while($rowN) {
        $TotPrice = $TotPrice + ($rowN["PROD_PRICE"] * $rowN["PROD_QUANTITY"]);
        //Add on to the total price for every row
        echo '<tr>
                <td>' . $rowN["PROD_NAME"] . '</td>
                <td>$' . number_format($rowN["PROD_PRICE"], 2) . '</td>
                <td>x' . $rowN["PROD_QUANTITY"] . '</td>
              </tr>';
        $rowN = mysqli_fetch_assoc($query);
    }
    //show the total price as the last row of the table.
    echo '<td></td><td></td><td style="color:red;">$'. number_format($TotPrice, 2) . '<td>';
}

mysqli_close($conn);

?>