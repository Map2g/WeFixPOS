<?php include 'top.php'; session_start();?>

  <div class="container">
        
        <div class="row align-items-center">
          <div class="col-4">
              <h1 class="my-4">
                  Repairs: 
              </h1>
          </div>
            
            <div class="col-5">
              <form action = "Repairs.php" method = "post">
                <input type="search" name="repSearch" placeholder="Search"><input type = "submit" value = "Search">
              </form>
            </div>
            
            <div class="col-3">
                <a href = "AddRepairFormGeneral.php"><button type="button">&plus; Repair</button></a>
            </div>
            
        </div>
       
      <div class="row align-items-center">
        <!--<div class="col-lg-9">-->
          
              <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Employee</th>
                      <th scope="col">Locker No.</th>
                      <th scope="col">Description</th>
                      <th scope="col">Price</th>
                      <th scope="col">Void</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $all = true; include 'RepList.php'; ?>
                </tbody>
              </table>
  
        <!--</div> -->
        <!--/col-lg-9-->
      </div>
      <!--/row-->
  
  </div>
  <!--/.container-->
  
  <!-- Footer -->
  <!--<footer class="py-5 bg-dark sticky">-->
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