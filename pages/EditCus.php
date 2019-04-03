<!DOCTYPE html>
<html lang="en">
    
<?php

include 'config.php';

if(isset($_GET['id'])){
  $customerID = $_GET['id'];
} else {
  echo "Could not get ID";
}

$sql = "SELECT * FROM CUSTOMER WHERE CUS_ID = '" . $customerID . "'";
$cusDetails = mysqli_query($conn, $sql);

if ($cusDetails == false ) {
  printf("Query error: %s\n%s", mysqli_error($conn), $sql);
}

// if (mysqli_num_rows($cusDetails) == 1){
//     printf("Yay!");
// } else {
//     printf("%s\n%s", $sql, $_GET["id"]);
// }

$row = mysqli_fetch_assoc($cusDetails);

$fname = $row["CUS_FNAME"];
$lname = $row["CUS_LNAME"];
$Eemail = $row["CUS_EMAIL"];
$Ephone = $row["CUS_PHONE"];

?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit customer</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->

  <!-- Custom styles for this template-->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit a customer</div>
      <div class="card-body">
        <form action = "UpdateCus.php" method = "post">
            
        <input type="hidden" name="id" value="<?php echo $customerID; ?>">
          
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
                  <!--<input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">-->
                  <!--<label for="lastName">Last name</label>-->
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  Phone number: <input type="tel" name="phone" class="form-control" value="<?php echo $Ephone; ?>" required="required">
                  <!--<input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">-->
                  <!--<label for="lastName">Last name</label>-->
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Email: <input type="text" name="email" class="form-control" value="<?php echo $Eemail; ?>" required="required">
                </div>
              </div>
            </div>
          </div>
          
          <a href = "Customers.php"><button type="button">Cancel</button></a>
          <input type = "submit" value = "Submit">
          <!--<a class="btn btn-primary btn-block" href="login.html">Register</a>-->
        </form>
        
        <form action = "DeleteCus.php" method = "post">
            <input type="hidden" name="id" value="<?php echo $customerID; ?>">
            <br>
            <center><input type = "submit" value = "Delete"></center>
        </form>
        <!--<div class="text-center">-->
        <!--  <a class="d-block small mt-3" href="login.html">Login Page</a>-->
        <!--  <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
        <!--</div>-->
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