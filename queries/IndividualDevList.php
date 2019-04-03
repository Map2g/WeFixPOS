<?php

include 'config.php';

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

//displaying purchase details
$CountD = 1;

if (mysqli_num_rows($deviceDetails) > 0) {
    $rowD = mysqli_fetch_assoc($deviceDetails);
    while($rowD) {
        echo '
                    <tr>
                      <th scope="row">' . $CountD . '</th>
                      <td>' . $rowD["DEV_MODEL"] . '</td>
                      <td>' . $rowD["DEV_PHONE"] . '</td>
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
mysqli_close($conn);

?>