<?php
//=========================================================================================
//      Generates a list of employee details 
//
//      Called from AddPurchaseForm.php, AddRepairForm.php, AddRepairFormGeneral.php, Employees.php
//      Calls EditEmp.php
//=========================================================================================

include 'config.php';

$AllEmployee = "SELECT * FROM EMPLOYEE ORDER BY EMP_LNAME ASC";
$AllEmpResult = mysqli_query($conn, $AllEmployee);

//Error message if query doesn't work
if ($AllEmpResult == false ) {
  printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $AllEmployee);
}


//For search query. This file is called as a form action with search as the only input.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //This executes only if the file is called as a form.
    
    $search = $_POST['empSearch'];      //The user's search input
    
    $eSearch = "SELECT * FROM EMPLOYEE 
                WHERE (EMP_FNAME LIKE '%" . $search . "%') 
                    OR (EMP_LNAME LIKE '%" . $search . "%') 
                    OR (EMP_EMAIL LIKE '%" . $search . "%')";
    $eSResult = mysqli_query($conn, $eSearch);

    if ($eSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

//determines which resulting table will be displayed as the employee list
    $thisQuery = $eSResult;
} else {
    $thisQuery = $AllEmpResult;
}

//dropdown = true when EmpList is called from purchase and generalRepair forms
if ($dropdown != true){
    
    $Count = 1;     //simply numbers the rows in the produced table
    
    if (mysqli_num_rows($thisQuery) > 0) {                  //if there are any results for the query
        $row = mysqli_fetch_assoc($thisQuery);              //fetch row of the resulting table
        while($row) {
            //Prints query results in table format.
            //Phone number column formats the phone number to be easier to read. All phone numbers are stored as 10 digits in the database. No hyphens or special characters.
            //Final column provides a link to the edit form for a specific employee.
            echo '  <tr>
                      <th scope="row">' . $Count . '</th>
                      <td>' . $row["EMP_FNAME"] . '</td>
                      <td>' . $row["EMP_LNAME"] . '</td>
                      <td>' . $row["EMP_EMAIL"] . '</td>
                      <td>' . substr($row["EMP_PHONE"], 0, 3) .'-'. substr($row["EMP_PHONE"], 3, 3) .'-'. substr($row["EMP_PHONE"], 6, 4) . '</td>
                      <td>        
                          <a href="EditEmp.php?id=' . $row["EMP_ID"] . '" style="text-decoration:none">
                              <span class="glyphicon">&#x270f;</span>
                          </a>
                      </td>
                    </tr>';
            $Count = $Count + 1;
            $row = mysqli_fetch_assoc($thisQuery);              //fetch next row of the resulting table
        }
    } else {
        echo "<tr> No employees to display.</tr>";
    }
    
//DROPDOWN LIST USED IN FORMS
} else {
    $row = mysqli_fetch_assoc($thisQuery);          //thisQuery will always be $AllCusResult in this case
    while($row){
        //displays employee names in a dropdown list. Value is EMP_ID so when they're selected, the file indicated in form action will receive the ID.
        echo '<option value="'. $row["EMP_ID"] .'">' . $row["EMP_FNAME"] . ' ' . $row["EMP_LNAME"] . '</option>';
        $row = mysqli_fetch_assoc($thisQuery);
    }
}
mysqli_close($conn);

?>