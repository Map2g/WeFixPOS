<?php

include 'config.php';

$repairSql = "SELECT 
                REP_ID,
                DEV_MODEL, 
                DEV_PHONE, 
                EMP_FNAME,
                EMP_LNAME,
                REP_DATE, 
                REP_LOCKRNO, 
                REP_DESC
            FROM CUSTOMER JOIN DEVICE ON CUSTOMER.CUS_ID = DEVICE.CUS_ID 
                JOIN REPAIR ON DEVICE.DEV_ID = REPAIR.DEV_ID 
                 JOIN EMPLOYEE ON REPAIR.EMP_ID = EMPLOYEE.EMP_ID
            WHERE CUSTOMER.CUS_ID = '$customerID'
            ORDER BY REP_DATE";
            
            //JOIN REPAIR_INVOICE ON REPAIR.REP_ID = REPAIR_INVOICE.REP_ID
            
$repairDetails = mysqli_query($conn, $repairSql);

//Error message if query doesn't work
if ($repairDetails == false ) {
  printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $repairSql);
}

$RepTotPrice = 0.00; //placeholder for now. Need to calcualate from prod price, prod quantity

//Displaying repair query results
$CountR = 1;

if (mysqli_num_rows($repairDetails) > 0) {
    $rowR = mysqli_fetch_assoc($repairDetails);
    while($rowR) {
        $RepTotPrice = 0.00;
        $rItemList = "";
        
        $repPriceSql = "SELECT  
                    PROD_NAME,
                    REPAIR_INVOICE.PROD_PRICE,
                    REPAIR_INVOICE.PROD_QUANTITY
                FROM REPAIR_INVOICE JOIN PRODUCT ON REPAIR_INVOICE.PROD_ID = PRODUCT.PROD_ID
                WHERE REP_ID = '" . $rowR["REP_ID"] . "'";
        $repPriceResult = mysqli_query($conn, $repPriceSql);
        
        if ($repPriceResult == false){
            printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $priceSql); 
        }
        
        $rowRepPrice = mysqli_fetch_assoc($repPriceResult);
        
        while($rowRepPrice){
            $rItemList = $rItemList . $rowRepPrice["PROD_NAME"] . " x" . $rowRepPrice["PROD_QUANTITY"] . ", ";
            $RepTotPrice = $RepTotPrice + ($rowRepPrice["PROD_PRICE"] * $rowRepPrice["PROD_QUANTITY"]);
            $rowRepPrice = mysqli_fetch_assoc($repPriceResult);
        }
        
        
        echo '
                    <tr>
                      <th scope="row">' . $CountR . '</th>
                      <td>' . $rowR["REP_DATE"] . '</td>
                      <td>' . $rowR["DEV_MODEL"] . '</td>
                      <td>' . $rowR["DEV_PHONE"] . '</td>
                      <td>' . $rowR["EMP_FNAME"] . ' ' . $rowR["EMP_LNAME"] . '</td>
                      <td>' . $rowR["REP_LOCKRNO"] . '</td>
                      <td>' . $rowR["REP_DESC"] . '</td>
                      <td>$' . $RepTotPrice . '</td>
                      <td>        
                          <a href="EditEmp.php?id=' . $rowR["REP_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x270f; do not click</span>
                          </a>
                      </td>
                    </tr>';
        $CountR = $CountR + 1;
        $rowR = mysqli_fetch_assoc($repairDetails);
    }
} else {
    echo '<tr> No existing repairs to display.</tr>';
}

mysqli_close($conn);

?>