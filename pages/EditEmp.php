<!DOCTYPE html>
<html lang="en">
    
<?php

include 'config.php';

if(isset($_GET['id'])){
  $employeeID = $_GET['id'];
} else {
  echo "Could not get ID";
}

$sql = "SELECT * FROM EMPLOYEE WHERE EMP_ID = '" . $employeeID . "'";
$empDetails = mysqli_query($conn, $sql);

if ($empDetails == false ) {
  printf("Query error: %s\n%s", mysqli_error($conn), $sql);
}

// if (mysqli_num_rows($empDetails) == 1){
//     printf("Yay!");
// } else {
//     printf("%s\n%s", $sql, $_GET["id"]);
// }

$row = mysqli_fetch_assoc($empDetails);

$fname = $row["EMP_FNAME"];
$lname = $row["EMP_LNAME"];
$Eemail = $row["EMP_EMAIL"];
$Ephone = $row["EMP_PHONE"];

?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Employee</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->

  <!-- Custom styles for this template-->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit an employee</div>
      <div class="card-body">
        <form action = "UpdateEmp.php" method = "post">
            
        <input type="hidden" name="id" value="<?php echo $employeeID; ?>">
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  First name: <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Last name: <input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>" required="required">
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  Phone number: <input type="tel" name="phone" class="form-control" value="<?php echo $Ephone; ?>" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Email: <input type="text" name="email" class="form-control" value="<?php echo $Eemail; ?>" required="required">
                </div>
              </div>
            </div>
          </div>
          
          <a href = "Employees.php"><button type="button">Cancel</button></a>
          <input type = "submit" value = "Submit">
        </form>
        
        
        <!--<form action = "DeleteEmp.php" method = "post">-->
        <!--    <input type="hidden" name="id" value="<?php echo $employeeID; ?>">-->
        <!--    <br>-->
        <!--    <center><input type = "submit" value = "Delete"></center>-->
        <!--</form>-->
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</form>
</body>

</html>