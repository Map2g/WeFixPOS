<?php

include 'top.php';

if(isset($_GET['id'])){
  $customerID = $_GET['id'];
} else {
  echo "Could not get ID";
}

?>

  <div class="container">

    <div class="row" style="margin-bottom:50px;"></div>

    <div class="row-center-align-items">
        
            <!--<div class="col-6">  -->
              <h1 class="my-4">
                  Repairs: 
              </h1>
              <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Device Model</th>
                      <th scope="col">Device Phone No.</th>
                      <th scope="col">Employee</th>
                      <th scope="col">Locker No.</th>
                      <th scope="col">Description</th>
                      <th scope="col">Price</th>
                      <!--<th scope="col"></th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php include 'RepList.php'; ?>
                </tbody>
              </table>
            <!--</div>-->
        </div>
        
        <hr style="border-width:2px; border-color:#343a40; margin-top:40px;">

        <div class="row-center-align-items">
            <!--<div class="col-5">-->
              <h1 class="my-4">
                  Purchases: 
              </h1>
              <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Employee</th>
                      <th scope="col">Item List</th>
                      <th scope="col">Price</th>
                      <!--<th scope="col"></th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php include 'PurList.php' ?>
                </tbody>
               </table>
            <!--</div>-->
        </div>
        
        <hr style="border-width:2px; border-color:#343a40; margin-top:40px;">
        
        <div class="row">
            <div class="col-8">  
              <h1 class="my-4">
                  My Devices:
              </h1>
              <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Device Model</th>
                      <th scope="col">Device Phone No.</th>
                      <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'IndividualDevList.php' ?>
                </tbody>
              </table>
            </div>
            
                <div class = "col-4" style="top:120px">
                  <div class="row">
                    <div class = "col-10">
                      <center>
                      <?php echo '<a href="AddDevForm.php?id=' . $customerID .'"><button type="button">&plus; Device</button></a>' ?>
                        <!--<a href = "AddDevForm.php?id=' PHP ECHO DOESNT WORK HERE '"><button type="button">&plus; Device</button></a>-->
                      <?php echo '<a href="AddRepairForm.php?id=' . $customerID .'"><button type="button">&plus; Repair</button></a>' ?>
                      </center>
                    </div>
                  </div>
                </div>
                
        </div>
        
    </div>
    <!--./container-->

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