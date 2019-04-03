{"filter":false,"title":"IndividualPurList.php","tooltip":"/queries/IndividualPurList.php","undoManager":{"mark":26,"position":26,"stack":[[{"start":{"row":0,"column":0},"end":{"row":56,"column":2},"action":"insert","lines":["<?php","","include 'config.php';","","$AllEmployee = \"SELECT * FROM EMPLOYEE ORDER BY EMP_LNAME ASC\";","$AllEmpResult = mysqli_query($conn, $AllEmployee);","","//Error message if query doesn't work","if ($AllEmpResult == false ) {","  printf(\"Connection error: %s\\nQuery error: %s\\n\", mysqli_error($conn), $AllEmployee);","}","","","//For search query","if ($_SERVER['REQUEST_METHOD'] == 'POST'){","    $search = $_POST['empSearch'];","    ","    $eSearch = \"SELECT * FROM EMPLOYEE WHERE (EMP_FNAME LIKE '%\" . $search . \"%') OR (EMP_LNAME LIKE '%\" . $search . \"%')\";","    $eSResult = mysqli_query($conn, $eSearch);","","    if ($eSResult == false ) {","        printf(\"Query error: %s\\n\", mysqli_error($conn));","    }","","    $thisQuery = $eSResult;","} else {","    $thisQuery = $AllEmpResult;","}","","","","$Count = 1;","","if (mysqli_num_rows($thisQuery) > 0) {","    $row = mysqli_fetch_assoc($thisQuery);","    while($row) {","        echo '  <tr>","                  <th scope=\"row\">' . $Count . '</th>","                  <td>' . $row[\"EMP_FNAME\"] . '</td>","                  <td>' . $row[\"EMP_LNAME\"] . '</td>","                  <td>' . $row[\"EMP_EMAIL\"] . '</td>","                  <td>' . $row[\"EMP_PHONE\"] . '</td>","                  <td>        ","                      <a href=\"EditEmp.php?id=' . $row[\"EMP_ID\"] . '\" style=\"text-decoration:none\">","                          <span class=\"glyphicon\">&#x270f;</span>","                      </a>","                  </td>","                </tr>';","        $Count = $Count + 1;","        $row = mysqli_fetch_assoc($thisQuery);","    }","} else {","    echo \"<tr> No employees to display.</tr>\";","}","mysqli_close($conn);","","?>"],"id":1}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":63},"action":"remove","lines":["$AllEmployee = \"SELECT * FROM EMPLOYEE ORDER BY EMP_LNAME ASC\";"],"id":2},{"start":{"row":4,"column":0},"end":{"row":18,"column":31},"action":"insert","lines":["$repairSql = \"SELECT ","                DEV_MODEL, ","                DEV_PHONE, ","                EMP_ID, ","                REP_DATE, ","                REP_LOCKRNO, ","                REP_DESC, ","                PROD_ID, ","                PROD_PRICE, ","                PROD_QUANTITY ","            FROM CUSTOMER JOIN DEVICE ON CUSTOMER.CUS_ID = DEVICE.CUS_ID ","                JOIN REPAIR ON DEVICE.DEV_ID = REPAIR.DEV_ID ","                JOIN REPAIR_INVOICE ON REPAIR.REP_ID = REPAIR_INVOICE.REP_ID ","            WHERE CUSTOMER.CUS_ID = '$customerID'","            ORDER BY REP_DATE\";"]}],[{"start":{"row":18,"column":31},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":19,"column":0},"end":{"row":19,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":50},"action":"remove","lines":["$AllEmpResult = mysqli_query($conn, $AllEmployee);"],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":49},"action":"insert","lines":["$repairDetails = mysqli_query($conn, $repairSql);"]}],[{"start":{"row":22,"column":0},"end":{"row":25,"column":1},"action":"remove","lines":["//Error message if query doesn't work","if ($AllEmpResult == false ) {","  printf(\"Connection error: %s\\nQuery error: %s\\n\", mysqli_error($conn), $AllEmployee);","}"],"id":5},{"start":{"row":22,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["//Error message if query doesn't work","if ($repairDetails == false ) {","  printf(\"Connection error: %s\\nQuery error: %s\\n\", mysqli_error($conn), $repairSql);","}"]}],[{"start":{"row":28,"column":0},"end":{"row":42,"column":1},"action":"remove","lines":["//For search query","if ($_SERVER['REQUEST_METHOD'] == 'POST'){","    $search = $_POST['empSearch'];","    ","    $eSearch = \"SELECT * FROM EMPLOYEE WHERE (EMP_FNAME LIKE '%\" . $search . \"%') OR (EMP_LNAME LIKE '%\" . $search . \"%')\";","    $eSResult = mysqli_query($conn, $eSearch);","","    if ($eSResult == false ) {","        printf(\"Query error: %s\\n\", mysqli_error($conn));","    }","","    $thisQuery = $eSResult;","} else {","    $thisQuery = $AllEmpResult;","}"],"id":6},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["",""],"id":7},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":28,"column":0},"end":{"row":29,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":93},"action":"insert","lines":["$RepTotPrice = 0.00; //placeholder for now. Need to calcualate from prod price, prod quantity"],"id":9}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":10}],[{"start":{"row":30,"column":0},"end":{"row":53,"column":1},"action":"remove","lines":["","$Count = 1;","","if (mysqli_num_rows($thisQuery) > 0) {","    $row = mysqli_fetch_assoc($thisQuery);","    while($row) {","        echo '  <tr>","                  <th scope=\"row\">' . $Count . '</th>","                  <td>' . $row[\"EMP_FNAME\"] . '</td>","                  <td>' . $row[\"EMP_LNAME\"] . '</td>","                  <td>' . $row[\"EMP_EMAIL\"] . '</td>","                  <td>' . $row[\"EMP_PHONE\"] . '</td>","                  <td>        ","                      <a href=\"EditEmp.php?id=' . $row[\"EMP_ID\"] . '\" style=\"text-decoration:none\">","                          <span class=\"glyphicon\">&#x270f;</span>","                      </a>","                  </td>","                </tr>';","        $Count = $Count + 1;","        $row = mysqli_fetch_assoc($thisQuery);","    }","} else {","    echo \"<tr> No employees to display.</tr>\";","}"],"id":11},{"start":{"row":30,"column":0},"end":{"row":65,"column":1},"action":"insert","lines":["//Displaying repair query results","$CountR = 1;","","if (mysqli_num_rows($repairDetails) > 0) {","    $rowR = mysqli_fetch_assoc($repairDetails);","    while($rowR) {","        echo '","                    <tr>","                      <th scope=\"row\">' . $CountR . '</th>","                      <td>' . $rowR[\"REP_DATE\"] . '</td>","                      <td>' . $rowR[\"DEV_MODEL\"] . '</td>","                      <td>' . $rowR[\"DEV_PHONE\"] . '</td>","                      <td>' . $rowR[\"EMP_FNAME\"] . ' ' . $rowR[\"EMP_LNAME\"] . '</td>","                      <td>' . $rowR[\"REP_LOCKRNO\"] . '</td>","                      <td>' . $rowR[\"REP_DESC\"] . '</td>","                      <td>' . $RepTotPrice . '</td>","                      <td>        ","                          <a href=\"EditEmp.php?id=' . $rowR[\"REP_ID\"] . '\" style=\"text-decoration:none\">","                              <span class=\"glyphicon\">&#x270f; do not click</span>","                          </a>","                      </td>","                    </tr>","                </tbody>","               </table>","             </div>';","        $CountR = $CountR + 1;","        $rowR = mysqli_fetch_assoc($repairDetails);","    }","} else {","    echo '","                <tbody>","                    <tr> No existing repairs to display.</tr>","                </tbody>","            </table>","        </div>';","}"]}],[{"start":{"row":4,"column":0},"end":{"row":18,"column":31},"action":"remove","lines":["$repairSql = \"SELECT ","                DEV_MODEL, ","                DEV_PHONE, ","                EMP_ID, ","                REP_DATE, ","                REP_LOCKRNO, ","                REP_DESC, ","                PROD_ID, ","                PROD_PRICE, ","                PROD_QUANTITY ","            FROM CUSTOMER JOIN DEVICE ON CUSTOMER.CUS_ID = DEVICE.CUS_ID ","                JOIN REPAIR ON DEVICE.DEV_ID = REPAIR.DEV_ID ","                JOIN REPAIR_INVOICE ON REPAIR.REP_ID = REPAIR_INVOICE.REP_ID ","            WHERE CUSTOMER.CUS_ID = '$customerID'","            ORDER BY REP_DATE\";"],"id":12},{"start":{"row":4,"column":0},"end":{"row":14,"column":35},"action":"insert","lines":["$purchaseSql = \"SELECT ","                    PUR_DATE, ","                    EMP_ID, ","                    PURCHASE_INVOICE.PROD_ID, ","                    PROD_NAME,","                    PURCHASE_INVOICE.PROD_PRICE,","                    PROD_QUANTITY","                FROM PURCHASE JOIN PURCHASE_INVOICE ON PURCHASE.PUR_ID = PURCHASE_INVOICE.PUR_ID","                    JOIN PRODUCT ON PRODUCT.PROD_ID = PURCHASE_INVOICE.PROD_ID","                WHERE PURCHASE.CUS_ID = '$customerID'","                ORDER BY PUR_DATE\";"]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":49},"action":"remove","lines":["$repairDetails = mysqli_query($conn, $repairSql);"],"id":13},{"start":{"row":16,"column":0},"end":{"row":16,"column":53},"action":"insert","lines":["$purchaseDetails = mysqli_query($conn, $purchaseSql);"]}],[{"start":{"row":18,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":["//Error message if query doesn't work","if ($repairDetails == false ) {","  printf(\"Connection error: %s\\nQuery error: %s\\n\", mysqli_error($conn), $repairSql);","}"],"id":14},{"start":{"row":18,"column":0},"end":{"row":21,"column":1},"action":"insert","lines":["//Error checking","if ($purchaseDetails == false){","  printf(\"Connection error: %s\\nQuery error: %s\\n\", mysqli_error($conn), $purchaseSql); ","}"]}],[{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"remove","lines":["$RepTotPrice = 0.00; //placeholder for now. Need to calcualate from prod price, prod quantity",""],"id":15}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":105},"action":"insert","lines":["$PurTotPrice = 0.00; //calculate from prod_price, prod_quantity","$prodList = \"Placeholder\"; //placeholder. Need a method to put all product names into a list in a string."],"id":16}],[{"start":{"row":26,"column":0},"end":{"row":61,"column":1},"action":"remove","lines":["//Displaying repair query results","$CountR = 1;","","if (mysqli_num_rows($repairDetails) > 0) {","    $rowR = mysqli_fetch_assoc($repairDetails);","    while($rowR) {","        echo '","                    <tr>","                      <th scope=\"row\">' . $CountR . '</th>","                      <td>' . $rowR[\"REP_DATE\"] . '</td>","                      <td>' . $rowR[\"DEV_MODEL\"] . '</td>","                      <td>' . $rowR[\"DEV_PHONE\"] . '</td>","                      <td>' . $rowR[\"EMP_FNAME\"] . ' ' . $rowR[\"EMP_LNAME\"] . '</td>","                      <td>' . $rowR[\"REP_LOCKRNO\"] . '</td>","                      <td>' . $rowR[\"REP_DESC\"] . '</td>","                      <td>' . $RepTotPrice . '</td>","                      <td>        ","                          <a href=\"EditEmp.php?id=' . $rowR[\"REP_ID\"] . '\" style=\"text-decoration:none\">","                              <span class=\"glyphicon\">&#x270f; do not click</span>","                          </a>","                      </td>","                    </tr>","                </tbody>","               </table>","             </div>';","        $CountR = $CountR + 1;","        $rowR = mysqli_fetch_assoc($repairDetails);","    }","} else {","    echo '","                <tbody>","                    <tr> No existing repairs to display.</tr>","                </tbody>","            </table>","        </div>';","}"],"id":17},{"start":{"row":26,"column":0},"end":{"row":52,"column":1},"action":"insert","lines":["$CountP = 1;","","if (mysqli_num_rows($purchaseDetails) > 0) {","    $rowP = mysqli_fetch_assoc($purchaseDetails);","    while($rowP) {","        echo '","                    <tr>","                      <th scope=\"row\">' . $Count . '</th>","                      <td>' . $rowP[\"PUR_DATE\"] . '</td>","                      <td>' . $rowP[\"EMP_FNAME\"] . ' ' . $rowR[\"EMP_LNAME\"] . '</td>","                      <td>' . $prodList . '</td>","                      <td>' . $PurTotPrice . '</td>","                    </tr>","                </tbody>","               </table>","             </div>';","        $CountP = $CountP + 1;","        $rowP = mysqli_fetch_assoc($purchaseDetails);","    }","} else {","    echo '","                <tbody>","                    <tr> No existing purchases to display.</tr>","                </tbody>","            </table>","            </div>';","}"]}],[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"insert","lines":["/"]},{"start":{"row":27,"column":1},"end":{"row":27,"column":2},"action":"insert","lines":["/"]},{"start":{"row":27,"column":2},"end":{"row":27,"column":3},"action":"insert","lines":["d"]},{"start":{"row":27,"column":3},"end":{"row":27,"column":4},"action":"insert","lines":["i"]},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["s"]},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"insert","lines":["p"]},{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"insert","lines":["l"]},{"start":{"row":27,"column":7},"end":{"row":27,"column":8},"action":"insert","lines":["a"]}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"insert","lines":["y"],"id":19},{"start":{"row":27,"column":9},"end":{"row":27,"column":10},"action":"insert","lines":["i"]},{"start":{"row":27,"column":10},"end":{"row":27,"column":11},"action":"insert","lines":["n"]},{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"insert","lines":["g"]}],[{"start":{"row":27,"column":12},"end":{"row":27,"column":13},"action":"insert","lines":[" "],"id":20},{"start":{"row":27,"column":13},"end":{"row":27,"column":14},"action":"insert","lines":["p"]},{"start":{"row":27,"column":14},"end":{"row":27,"column":15},"action":"insert","lines":["u"]},{"start":{"row":27,"column":15},"end":{"row":27,"column":16},"action":"insert","lines":["r"]},{"start":{"row":27,"column":16},"end":{"row":27,"column":17},"action":"insert","lines":["c"]},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["h"]},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":["a"]},{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":["s"]},{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"insert","lines":[" "],"id":21},{"start":{"row":27,"column":22},"end":{"row":27,"column":23},"action":"insert","lines":["d"]},{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"insert","lines":["e"]},{"start":{"row":27,"column":24},"end":{"row":27,"column":25},"action":"insert","lines":["t"]},{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"insert","lines":["a"]},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["i"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["l"]},{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"insert","lines":["s"]}],[{"start":{"row":41,"column":1},"end":{"row":43,"column":19},"action":"remove","lines":["               </tbody>","               </table>","             </div>"],"id":22},{"start":{"row":41,"column":0},"end":{"row":41,"column":1},"action":"remove","lines":[" "]},{"start":{"row":40,"column":25},"end":{"row":41,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":48,"column":0},"end":{"row":50,"column":18},"action":"remove","lines":["                </tbody>","            </table>","            </div>"],"id":23},{"start":{"row":47,"column":63},"end":{"row":48,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":46,"column":0},"end":{"row":46,"column":23},"action":"remove","lines":["                <tbody>"],"id":24},{"start":{"row":45,"column":10},"end":{"row":46,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":45,"column":10},"end":{"row":46,"column":0},"action":"remove","lines":["",""],"id":25},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]},{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "]}],[{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"remove","lines":[" "],"id":26}],[{"start":{"row":35,"column":48},"end":{"row":35,"column":49},"action":"insert","lines":["P"],"id":27}]]},"ace":{"folds":[],"scrolltop":334,"scrollleft":0,"selection":{"start":{"row":35,"column":49},"end":{"row":35,"column":49},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":22,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1554314339199,"hash":"b4c7c5e375bd3713be68ab9889139b2d4d4f274b"}