<?php

include 'config.php';

//--------------------------Main queries to get repair list--------------------------------------                   
//Repair tickets made by individual customer. Used for CusSummary.php
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
            ORDER BY REP_DATE DESC";
$repairDetails = mysqli_query($conn, $repairSql);            
        
//All repairs. Used for Repairs.php
$repairSqlAll = "SELECT 
                REP_ID,
                CUS_FNAME,
                CUS_LNAME,
                EMP_FNAME,
                EMP_LNAME,
                REP_DATE, 
                REP_LOCKRNO, 
                REP_DESC
            FROM CUSTOMER JOIN DEVICE ON CUSTOMER.CUS_ID = DEVICE.CUS_ID 
                JOIN REPAIR ON DEVICE.DEV_ID = REPAIR.DEV_ID 
                 JOIN EMPLOYEE ON REPAIR.EMP_ID = EMPLOYEE.EMP_ID
            ORDER BY REP_DATE DESC";
$repairDetailsAll = mysqli_query($conn, $repairSqlAll);


//Error message if query doesn't work
if ($repairDetails == false || $repairDetailsAll == false) {
  printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $repairSql);
}
//------------------------end repair list queries------------------------------------------------------


//-----------------For search query. Search option only available for full repair list.----------------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['repSearch'];
    
    //Search only works for employee name, customer name, repair date, and repair description. 
    $rSearch = "SELECT 
                    REP_ID,
                    CUS_FNAME,
                    CUS_LNAME,
                    EMP_FNAME,
                    EMP_LNAME,
                    REP_DATE, 
                    REP_LOCKRNO, 
                    REP_DESC
                FROM CUSTOMER JOIN DEVICE ON CUSTOMER.CUS_ID = DEVICE.CUS_ID 
                    JOIN REPAIR ON DEVICE.DEV_ID = REPAIR.DEV_ID 
                     JOIN EMPLOYEE ON REPAIR.EMP_ID = EMPLOYEE.EMP_ID
                WHERE (CUS_FNAME LIKE '%" . $search . "%') OR (CUS_LNAME LIKE '%" . $search . "%')
                    OR (EMP_FNAME LIKE '%" . $search . "%') OR (EMP_LNAME LIKE '%" . $search . "%')
                    OR (REP_DATE LIKE '%" . $search . "%') OR (REP_DESC LIKE '%" . $search . "%')
                ORDER BY REP_DATE DESC";
    $rSResult = mysqli_query($conn, $rSearch);

    if ($rSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

    $thisQuery = $rSResult;
//---------------------------------end search----------------------------------------------------------------
//-------------------determining whether to display results for all or individual----------------------------
} else if ($all == true){
    $thisQuery = $repairDetailsAll;
} else{
    $thisQuery = $repairDetails;
}
//------------------------------------------------------------------------------------------------

//-----------------begin displaying portion of code-----------------------------------------------
$CountR = 1;

if (mysqli_num_rows($thisQuery) > 0) {
    $rowR = mysqli_fetch_assoc($thisQuery);
    while($rowR) {
        
        //-----------Get the repair's total price and list of items used------------------------------

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
            $rItemList = $rItemList . $rowRepPrice["PROD_NAME"] . " x" . $rowRepPrice["PROD_QUANTITY"] . "<br>";
            $RepTotPrice = $RepTotPrice + ($rowRepPrice["PROD_PRICE"] * $rowRepPrice["PROD_QUANTITY"]);
            $rowRepPrice = mysqli_fetch_assoc($repPriceResult);
        }
        
        //==================================================================================================
        
        if ($all == true){
                    echo '
                    <tr>
                      <th scope="row">' . $CountR . '</th>
                      <td>' . $rowR["REP_DATE"] . '</td>
                      <td>' . $rowR["CUS_FNAME"] . ' ' . $rowR["CUS_LNAME"] . '</td>
                      <td>' . $rowR["EMP_FNAME"] . ' ' . $rowR["EMP_LNAME"] . '</td>
                      <td>' . $rowR["REP_LOCKRNO"] . '</td>
                      <td>' . $rowR["REP_DESC"] . '</td>
                      <td>$' . number_format($RepTotPrice, 2) . '</td>
                      <td>
                          <a href="DeleteRep.php?id=' . $rowR["REP_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x274C;</span>
                          </a>
                      </td>
                    </tr>';
        } else {
                    echo '
                    <tr>
                      <th scope="row">' . $CountR . '</th>
                      <td>' . $rowR["REP_DATE"] . '</td>
                      <td>' . $rowR["DEV_MODEL"] . '</td>
                      <td>' . substr($rowR["DEV_PHONE"], 0, 3) .'-'. substr($rowR["DEV_PHONE"], 3, 3) .'-'. substr($rowR["DEV_PHONE"], 6, 4) . '</td>
                      <td>' . $rowR["EMP_FNAME"] . ' ' . $rowR["EMP_LNAME"] . '</td>
                      <td>' . $rowR["REP_LOCKRNO"] . '</td>
                      <td>' . $rowR["REP_DESC"] . '</td>
                      <td>$' . number_format($RepTotPrice, 2) . '</td>
                      <td>
                          <a href="DeleteRep.php?id=' . $rowR["REP_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x274C;</span>
                          </a>
                      </td>
                    </tr>';
        }
        $CountR = $CountR + 1;
        $rowR = mysqli_fetch_assoc($thisQuery);
    }
} else {
    echo '<tr> No existing repairs to display.</tr>';
}

//-----------------------end display--------------------------------------------------------------------------------

mysqli_close($conn);

?>