<?php
//Generates list of products used in a specific repair or product. Included in AddRepPartForm.php and AddPurchaseForm.php

include 'config.php';

$RepProdList = "SELECT PRODUCT.PROD_NAME, REPAIR_INVOICE.PROD_PRICE, REPAIR_INVOICE.PROD_QUANTITY
                    FROM PRODUCT JOIN REPAIR_INVOICE ON PRODUCT.PROD_ID = REPAIR_INVOICE.PROD_ID
                    WHERE REPAIR_INVOICE.REP_ID = '". $repairID ."'";
$RepProdResult = mysqli_query($conn, $RepProdList);
//echo $RepProdResult;

$PurProdList = "SELECT PRODUCT.PROD_NAME, PURCHASE_INVOICE.PROD_PRICE, PURCHASE_INVOICE.PROD_QUANTITY
                    FROM PRODUCT JOIN PURCHASE_INVOICE ON PRODUCT.PROD_ID = PURCHASE_INVOICE.PROD_ID
                    WHERE PURCHASE_INVOICE.PUR_ID = '". $purchaseID ."'";
$PurProdResult = mysqli_query($conn, $PurProdList);

//Error message if query doesn't work
if ($RepProdResult == false || $PurProdResult == false) {
  printf("Query error: %s\n", mysqli_error($conn));
}

if ($purchase == true){
    $query = $PurProdResult;
} else {
    $query = $RepProdResult;
}


if (mysqli_num_rows($query) > 0) {
    $rowN = mysqli_fetch_assoc($query);
    while($rowN) {
        echo '<li class="list-group-item">'. 
                $rowN["PROD_NAME"] . '&ensp;&ensp;&ensp;$' . $rowN["PROD_PRICE"] . '&ensp;&ensp;&ensp;&ensp;' . $rowN["PROD_QUANTITY"] . '
             </li>';
        $rowN = mysqli_fetch_assoc($query);
    }
}

mysqli_close($conn);

?>