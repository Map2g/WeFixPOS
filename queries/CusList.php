<?php

include 'config.php';

$AllCustomer = "SELECT * FROM CUSTOMER ORDER BY CUS_LNAME ASC";
$AllCusResult = mysqli_query($conn, $AllCustomer);

//Error message if query doesn't work
if ($AllCusResult == false ) {
  printf("Query error: %s\n", mysqli_error($conn));
}


//For search query
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['cusSearch'];
    
    $cSearch = "SELECT * FROM CUSTOMER WHERE (CUS_FNAME LIKE '%" . $search . "%') OR (CUS_LNAME LIKE '%" . $search . "%') OR (CUS_EMAIL LIKE '%" . $search . "%')";
    $cSResult = mysqli_query($conn, $cSearch);

    if ($cSResult == false ) {
        printf("Query error: %s\n", mysqli_error($conn));
    }

    $thisQuery = $cSResult;
} else {
    $thisQuery = $AllCusResult;
}

if ($dropdown != true){
    $Count = 1;
    
    if (mysqli_num_rows($thisQuery) > 0) {
        $row = mysqli_fetch_assoc($thisQuery);
        while($row) {
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
            $row = mysqli_fetch_assoc($thisQuery);
        }
    } else {
        echo "<tr> No customers to display.</tr>";
    }
    
//DROPDOWN LIST USED IN FORMS
} else {
    $row = mysqli_fetch_assoc($thisQuery);
    while($row){
        if ($customerID == $row["CUS_ID"])
            echo '<option value="'. $row["CUS_ID"] .'" selected="selected">' . $row["CUS_FNAME"] . ' ' . $row["CUS_LNAME"] . '</option>';
        else
            echo '<option value="'. $row["CUS_ID"] .'">' . $row["CUS_FNAME"] . ' ' . $row["CUS_LNAME"] . '</option>';
        $row = mysqli_fetch_assoc($thisQuery);
    }
}

mysqli_close($conn);

?>