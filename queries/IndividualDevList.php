<?php
//=========================================================================================
//      Generates a list of device details for a specific customer
//
//      Called from AddRepairForm.php, AddRepairFormGeneral.php, CusSummary.php
//      Calls EditDev.php
//=========================================================================================

include 'config.php';       //establish database connection

$deviceSql = "SELECT 
                    DEV_ID,
                    DEV_MODEL,
                    DEV_PHONE
                FROM DEVICE
                WHERE CUS_ID = '$customerID'";
            
$deviceDetails = mysqli_query($conn, $deviceSql);

//Error checking
if ($deviceDetails == false){
  printf("Connection error: %s\nQuery error: %s\n", mysqli_error($conn), $deviceSql); 
}

//===========================================================================================================================================

$CountD = 1;

//dropdown = true when this is called from generalRepair form
if ($dropdown != true){
    if (mysqli_num_rows($deviceDetails) > 0) {
        $rowD = mysqli_fetch_assoc($deviceDetails);
        while($rowD) {
            echo '
                        <tr>
                          <th scope="row">' . $CountD . '</th>
                          <td>' . $rowD["DEV_MODEL"] . '</td>
                          <td>' . substr($rowD["DEV_PHONE"], 0, 3) .'-'. substr($rowD["DEV_PHONE"], 3, 3) .'-'. substr($rowD["DEV_PHONE"], 6, 4) . '</td>
                          <td>        
                              <a href="EditDev.php?id=' . $rowD["DEV_ID"] . '" style="text-decoration:none">
                                  <span class="glyphicon">&#x270f;</span>
                              </a>
                          </td>
                        </tr>';
            $CountD = $CountD + 1;
            $rowD = mysqli_fetch_assoc($deviceDetails);
        }
    } else {
        echo '<tr> No devices to display.</tr>';
    }

//Get individual device list in dropdown format    
} else {
    if (mysqli_num_rows($deviceDetails) > 0) {
        $rowD = mysqli_fetch_assoc($deviceDetails);
        //value is DEV_ID so when this option is selected, the corresponding form is sent the ID.
        while($rowD){
            echo '<option value="'. $rowD["DEV_ID"] .'">' . $rowD["DEV_MODEL"] . " " . substr($rowD["DEV_PHONE"], 0, 3) .'-'. substr($rowD["DEV_PHONE"], 3, 3) .'-'. substr($rowD["DEV_PHONE"], 6, 4) . '</option>';
            $rowD = mysqli_fetch_assoc($deviceDetails);
        }
    } else {
        echo '<option value="">--No devices registered--</option>';
    }
}


mysqli_close($conn);

?>