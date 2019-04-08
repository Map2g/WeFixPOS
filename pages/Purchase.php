<?php include 'top.php'; session_start();?>
<!DOCTYPE html>
<html lang="en">

  
  <div class="container">
        
        <div class="row align-items-center">
          <div class="col-4">
              <h1 class="my-4">
                  Purchases: 
              </h1>
          </div> 
            
            <div class="col-5">
                <input type="text" name="purSearch" class="form" placeholder="Search">
            </div>
            
            <div class="col-3">
                <a href = "AddPurchaseForm.php"><button type="button">&plus; Purchase</button></a>
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
                  <th scope="col">Item List</th>
                  <th scope="col">Total Price</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                  
                  
                <?php include 'PurList.php'; ?>
           
            
            </tbody>
          </table>
  
        <!--</div> -->
        <!--/col-lg-9-->
      </div>
      <!--/row-->
  
  </div>
  <!--/.container-->
  
  <!-- Footer -->
  <footer class="py-5 bg-dark sticky">
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
