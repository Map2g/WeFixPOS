<?php include ('top.php'); session_start();?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">WeFix</h1>
        <div class="list-group">
          <a href="Customers.php" class="list-group-item">Customers</a>
          <a href="Employees.php" class="list-group-item">Employees</a>
          <a href="Inventory.php" class="list-group-item">Inventory</a>
          <a href="Purchase.php" class="list-group-item">Past Purchases</a>
          <a href="Repairs.php" class="list-group-item">All Repair Tickets</a> 
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4" style="top:90px; left:40px;">
              <a href="AddPurchaseForm.php"><button class="btn-lg">New Purchase</button></a>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4" style="top:90px; left:40px;">
            <a href="AddRepairFormGeneral.php"><button class="btn-lg">New Repair</button></a>
          </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->
      
      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <!--<footer class="py-5 bg-dark fixed-bottom">-->
  <!--  <div class="container">-->
  <!--    <p class="m-0 text-center text-white">Copyright &copy; WeFix 2019</p>-->
  <!--  </div>-->
    <!-- /.container -->
  <!--</footer>-->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
