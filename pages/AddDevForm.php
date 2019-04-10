<!DOCTYPE html>
<html lang="en">
  
<?php

include 'config.php';

if(isset($_GET['id'])){
  $customerID = $_GET['id'];
} else {
  echo "Could not get ID";
}

?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Device</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->

  <!-- Custom styles for this template-->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add a new device</div>
      <div class="card-body">
        <form action = "AddDev.php" method = "post">
          
           <input type="hidden" name="id" value=" <?php echo $_GET['id']; ?> ">
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  Model: <input type="text" name="model" class="form-control" placeholder="Nokia 7 Plus" required="required">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Phone Number: <input type="tel" name="phone" class="form-control" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required">
                  <!--<input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">-->
                  <!--<label for="lastName">Last name</label>-->
                </div>
              </div>
            </div>
          </div>
          
          <a href = "CusSummary.php?id=<?php echo $customerID ?>"><button type="button">Cancel</button></a>
          <input type = "submit" value = "Submit">
          <!--<a class="btn btn-primary btn-block" href="login.html">Register</a>-->
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