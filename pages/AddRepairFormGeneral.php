<?php 

//include 'config.php';
session_start(); //No longer used

//gets customerID from AddRepair.php when customer is selected in the dropdown menu
if(isset($_GET['id'])){
  $customerID = $_GET['id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>New Repair Ticket</title>

  <!-- Custom fonts for this template-->
  <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->

  <!-- Custom styles for this template-->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="bg-light">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">New Repair Ticket</div>
      <div class="card-body">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                
               <form action="AddRepair.php" method="post">
                 <!--Submit single dropdown select as form on change so device dropdown is accurate to the selected customer-->
                  Customer: 
                  <select name="cusID" class="form-control" required="required" onchange="this.form.submit()">
                    <option value="">--No option selected--</option>
                    <?php $dropdown = true; include 'CusList.php'; ?>
                  </select>
                </form>
                
            <form action = "AddRepair.php" method = "post">
            <!--Send all repair information to AddRepair to create the record. No record was created with the above form.-->
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  Employee:
                  <select name="EmpID" class="form-control" required="required">
                    <?php $dropdown = true; include 'EmpList.php'; ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                 Device: 
                <select name="DevID" class="form-control">
                  <?php $dropdown = true; include 'IndividualDevList.php'; ?>
                  <!--IndividualDevList.php gets $customerID from this page. No need to send through URL-->
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                   Locker Number: <input type="number" name="rLockrno" class="form-control" placeholder="Storage Locker #" required="required">
                </div>
              </div>
              <div class="col-md-6">
                  Description: <textarea name="rDesc" class="form-control" placeholder="A short description of the repair" required="required"></textarea>
              </div>
            </div>
          </div>
          
          <a href = "index.php"><button type="button">Cancel</button></a>          
          <input type = "submit" value = "Save and add parts">
        </form>
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