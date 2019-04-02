<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Database Project">
  <meta name="author" content="Team Wardia">

  <title>WeFix - Inventory</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">WeFix</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Customers.php">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Employees.php">Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Inventory.php">Inventory</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container">
        
        <div class="row align-items-center">
          <div class="col-4">
              <h1 class="my-4">
                  Inventory: 
              </h1>
          </div> 
            
            <div class="col-5">
              <form action = "Inventory.php" method = "post">
                <input type="search" name="prodSearch" placeholder="Search"><input type = "submit" value = "Search">
              </form>
            </div>
            
            <div class="col-3">
                <a href = "AddProd.html"><button type="button">&plus; Product</button></a>
            </div>
            
        </div>
       
      <div class="row align-items-center">
        <!--<div class="col-lg-9">-->
          
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Stock</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                  
                <?php include 'ProdList.php'; ?>
           
            </tbody>
          </table>
  
        <!--</div> -->
        <!--/col-lg-9-->
      </div>
      <!--/row-->
  
  </div>
  <!--/.container-->
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
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
