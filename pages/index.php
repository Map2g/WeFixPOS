<?php include ('top.php'); session_start();?>
<!DOCTYPE html>
<!--<html lang="en">-->

<!--<head>-->

<!--  <meta charset="utf-8">-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--  <meta name="description" content="Database Project">-->
<!--  <meta name="author" content="Team Wardia">-->

<!--  <title>WeFix</title>-->

<!--   Bootstrap core CSS -->
<!--  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

<!--   Custom styles for this template -->
<!--  <link href="css/shop-homepage.css" rel="stylesheet">-->

<!--</head>-->

<!--<body>-->

<!--   Navigation -->
<!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">-->
<!--    <div class="container">-->
<!--      <a class="navbar-brand" href="index.html">We Fix</a>-->
<!--      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--      </button>-->
<!--      <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--        <ul class="navbar-nav ml-auto">-->
<!--          <li class="nav-item active">-->
<!--            <a class="nav-link" href="index.php">Home-->
<!--              <span class="sr-only">(current)</span>-->
<!--            </a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="Customers.php">Customers</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="Employees.php">Employees</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="Inventory.php">Inventory</a>-->
<!--          </li>-->
<!--          <li class="nav-item">-->
<!--            <a class="nav-link" href="Purchase.php">Purchase</a>-->
<!--          </li>          -->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->
<!--  </nav>-->

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">WeFix</h1>
        <div class="list-group">
          <a href="Customers.php" class="list-group-item">Customers</a>
          <a href="#" class="list-group-item">Tickets</a> 
          <a href="Inventory.php" class="list-group-item">Inventory</a>
          <a href="Employees.php" class="list-group-item">Employees</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4" style="top:90px; left:40px;">
              <a href="AddPurchaseForm.php"><button class="button">New Purchase</button></a>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; WeFix 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
