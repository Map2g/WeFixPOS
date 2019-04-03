<?php

include 'config.php';

$purchaseSql = "SELECT 
                    PUR_DATE, 
                    EMP_ID, 
                    PURCHASE_INVOICE.PROD_ID, 
                    PROD_NAME,
                    PURCHASE_INVOICE.PROD_PRICE,
                    PROD_QUANTITY
                FROM PURCHASE JOIN PURCHASE_INVOICE ON PURCHASE.PUR_ID = PURCHASE_INVOICE.PUR_ID
                    JOIN PRODUCT ON PRODUCT.PROD_ID = PURCHASE_INVOICE.PROD_ID
                WHERE PURCHASE.CUS_ID = '$customerID'
                ORDER BY PUR_DATE";
            
$purchaseDetails = mysqli_query($conn, $purchaseSql);

//Error checking
if ($purchaseDetails == false){
  printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $purchaseSql); 
}

$PurTotPrice = 0.00; //calculate from prod_price, prod_quantity
$prodList = "Placeholder"; //placeholder. Need a method to put all product names into a list in a string.


//displaying purchase details
$CountP = 1;

if (mysqli_num_rows($purchaseDetails) > 0) {
    $rowP = mysqli_fetch_assoc($purchaseDetails);
    while($rowP) {
        echo '
                    <tr>
                      <th scope="row">' . $CountP . '</th>
                      <td>' . $rowP["PUR_DATE"] . '</td>
                      <td>' . $rowP["EMP_FNAME"] . ' ' . $rowR["EMP_LNAME"] . '</td>
                      <td>' . $prodList . '</td>
                      <td>' . $PurTotPrice . '</td>
                    </tr>';
        $CountP = $CountP + 1;
        $rowP = mysqli_fetch_assoc($purchaseDetails);
    }
} else {
    echo '<tr> No existing purchases to display.</tr>';
}
mysqli_close($conn);

?>