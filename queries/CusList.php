<?php
//=========================================================================================
//      Generates list of customer details
//
//      Called from AddPurchaseForm.php, AddRepairFormGeneral.php, Customers.php
//      Calls EditCus.php
//=========================================================================================

include 'config.php';   //establish database connection

$AllCustomer = "SELECT * FROM CUSTOMER ORDER BY CUS_LNAME ASC";
$AllCusResult = mysqli_query($conn, $AllCustomer);

//Error message if query doesn't work or there is a connection error
if ($AllCusResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}


//For search query. This file is called as a form action with search as the only input.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //This executes only if the file is called as a form.
    
    $search = $_POST['cusSearch'];      //The user's search input
    
    $cSearch = "SELECT * FROM CUSTOMER
                WHERE (CUS_FNAME LIKE '%" . $search . "%') 
                    OR (CUS_LNAME LIKE '%" . $search . "%') 
                    OR (CUS_EMAIL LIKE '%" . $search . "%')";
    $cSResult = mysqli_query($conn, $cSearch);

    if ($cSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

//determines which resulting table will be displayed as the customer list
    $thisQuery = $cSResult;
} else {
    $thisQuery = $AllCusResult;
}

//dropdown = true when CusList is called from purchase and generalRepair forms
if ($dropdown != true){
    
    $Count = 1;     //simply numbers the rows in the produced table
    
    if (mysqli_num_rows($thisQuery) > 0) {          //if there are any results for the query
        $row = mysqli_fetch_assoc($thisQuery);      //fetch row of the resulting table
        while($row) {
            //Prints query results in table format. Count column links to CusSummary page by sending CUS_ID in url
            //Phone number column formats the phone number to be easier to read. All phone numbers are stored as 10 digits in the database. No hyphens or special characters.
            //Final column provides a link to the edit form for a specific customer.
            echo '  <tr>
                      <th scope="row"><a href="CusSummary.php?id=' . $row["CUS_ID"] . '" style="text-decoration:none">' . $Count . '</a></th>
                      <td>' . $row["CUS_FNAME"] . '</td>
                      <td>' . $row["CUS_LNAME"] . '</td>
                      <td>' . $row["CUS_EMAIL"] . '</td>
                      <td>' . substr($row["CUS_PHONE"], 0, 3) .'-'. substr($row["CUS_PHONE"], 3, 3) .'-'. substr($row["CUS_PHONE"], 6, 4) . '</td>
                      <td>        
                          <a href="EditCus.php?id=' . $row["CUS_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x270f;</span>
                          </a>
                      </td>
                    </tr>';
                    
            $Count = $Count + 1;
            $row = mysqli_fetch_assoc($thisQuery);      //fetch next row of the resulting table
        }
    } else {
        echo "<tr> No customers to display.</tr>";
    }
    
//DROPDOWN LIST USED IN FORMS
} else {
    $row = mysqli_fetch_assoc($thisQuery);          //thisQuery will always be $AllCusResult in this case
    while($row){
        //displays customer names in a dropdown list. Value is CUS_ID so when they're selected, the file indicated in form action will receive the ID.
        //  $customerID will be defined when this file is included in AddRepairFormGeneral. Customer will stay selected in dropdown menu even when the form
        //  is reloaded by AddRepair.php
        if ($customerID == $row["CUS_ID"])
            echo '<option value="'. $row["CUS_ID"] .'" selected="selected">' . $row["CUS_FNAME"] . ' ' . $row["CUS_LNAME"] . '</option>';
        else
            echo '<option value="'. $row["CUS_ID"] .'">' . $row["CUS_FNAME"] . ' ' . $row["CUS_LNAME"] . '</option>';
        $row = mysqli_fetch_assoc($thisQuery);
    }
}

mysqli_close($conn);

?>