{"filter":false,"title":"AddRepParts1.php","tooltip":"/pages/AddRepParts1.php","undoManager":{"mark":37,"position":37,"stack":[[{"start":{"row":0,"column":0},"end":{"row":100,"column":7},"action":"insert","lines":["<?php ","","include 'config.php';","session_start(); ","","if(isset($_GET['id'])){","  $customerID = $_GET['id'];","} else {","  echo \"Could not get ID\";","}","","?>","","<!DOCTYPE html>","<html lang=\"en\">","","<head>","","  <meta charset=\"utf-8\">","  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">","  <meta name=\"description\" content=\"\">","  <meta name=\"author\" content=\"\">","","  <title>New Repair Ticket</title>","","  <!-- Custom fonts for this template-->","  <!--<link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">-->","","  <!-- Custom styles for this template-->","  <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">","","</head>","","<body class=\"bg-light\">","  <div class=\"container\">","    <div class=\"card card-register mx-auto mt-5\">","      <div class=\"card-header\">New Repair Ticket</div>","      <div class=\"card-body\">","        <form action = \"AddRepair.php\" method = \"post\">","          ","          <div class=\"form-group\">","            <div class=\"form-row\">","              <div class=\"col-md-6\">","                <div class=\"form-label-group\">","                  Customer ID: <input type=\"text\" name=\"cusID\" class=\"form-control\" value=\"<?php echo $customerID; ?>\" required=\"required\">","                </div>","              </div>","              <div class=\"col-md-6\">","                <div class=\"form-label-group\">","                  Employee ID: <input type=\"text\" name=\"EmpID\" class=\"form-control\" placeholder=\"ID of employee who conducted repair\" required=\"required\">","                  <!--<input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Last name\" required=\"required\">-->","                  <!--<label for=\"lastName\">Last name</label>-->","                </div>","              </div>","            </div>","          </div>","          ","          <div class=\"form-group\">","            <div class=\"form-row\">","              <div class=\"col-md-6\">","                 Device: ","                <select name=\"DevID\">","                  <?php $dropdown = true; include 'IndividualDevList.php'; ?>","                </select>","            ","                <div class=\"form-group\">","                   Locker Number: <input type=\"number\" name=\"rLockrno\" class=\"form-control\" placeholder=\"Storage Locker #\" required=\"required\">","                </div>","              </div>","              <div class=\"col-md-14\">","                <div class=\"form-group\">","                  Description: <textarea name=\"rDesc\" class=\"form-control\" placeholder=\"A short description of the repair\" required=\"required\"></textarea>","                </div>","              </div>","            </div>","          </div>","          ","          <a href = \"index.php\"><button type=\"button\">Cancel</button></a>          ","          <!--<input type = \"submit\" value = \"Save and continue\">-->","          <input type = \"submit\" value = \"Save and add parts\">","          <!--<a class=\"btn btn-primary btn-block\" href=\"login.html\">Register</a>-->","        </form>","        <!--<div class=\"text-center\">-->","        <!--  <a class=\"d-block small mt-3\" href=\"login.html\">Login Page</a>-->","        <!--  <a class=\"d-block small\" href=\"forgot-password.html\">Forgot Password?</a>-->","        <!--</div>-->","      </div>","    </div>","  </div>","","  <!-- Bootstrap core JavaScript-->","  <script src=\"vendor/jquery/jquery.min.js\"></script>","  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>","","  <!-- Core plugin JavaScript-->","  <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>","</form>","</body>","","</html>"],"id":1}],[{"start":{"row":6,"column":3},"end":{"row":6,"column":11},"action":"remove","lines":["customer"],"id":2},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":["r"]},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["e"]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["p"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["a"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["i"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["r"]}],[{"start":{"row":24,"column":10},"end":{"row":24,"column":26},"action":"remove","lines":["ew Repair Ticket"],"id":3},{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"remove","lines":["N"]}],[{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"insert","lines":["A"],"id":4},{"start":{"row":24,"column":10},"end":{"row":24,"column":11},"action":"insert","lines":["d"]},{"start":{"row":24,"column":11},"end":{"row":24,"column":12},"action":"insert","lines":["d"]}],[{"start":{"row":24,"column":12},"end":{"row":24,"column":13},"action":"insert","lines":[" "],"id":5},{"start":{"row":24,"column":13},"end":{"row":24,"column":14},"action":"insert","lines":["p"]},{"start":{"row":24,"column":14},"end":{"row":24,"column":15},"action":"insert","lines":["a"]},{"start":{"row":24,"column":15},"end":{"row":24,"column":16},"action":"insert","lines":["r"]},{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"insert","lines":["t"]},{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"remove","lines":["s"],"id":6}],[{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"insert","lines":[" "],"id":7},{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"insert","lines":["t"]},{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"insert","lines":["o"]}],[{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"insert","lines":[" "],"id":8}],[{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"remove","lines":[" "],"id":9},{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"remove","lines":["o"]},{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"remove","lines":["t"]},{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"remove","lines":[" "]}],[{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"insert","lines":["s"],"id":10}],[{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"insert","lines":[" "],"id":11},{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"insert","lines":["t"]},{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"insert","lines":["o"]}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"insert","lines":[" "],"id":12},{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"insert","lines":["R"]},{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"insert","lines":["e"]},{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"insert","lines":["p"]},{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"insert","lines":["a"]}],[{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"remove","lines":["a"],"id":13},{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"remove","lines":["p"]},{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"remove","lines":["e"]},{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"remove","lines":["R"]},{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"remove","lines":[" "]},{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"remove","lines":["o"]},{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"remove","lines":["t"]}],[{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"insert","lines":["r"],"id":14},{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"insert","lines":["o"]}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"insert","lines":[" "],"id":15}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"remove","lines":[" "],"id":16},{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"remove","lines":["o"]},{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"remove","lines":["r"]},{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"remove","lines":[" "]}],[{"start":{"row":37,"column":31},"end":{"row":37,"column":48},"action":"remove","lines":["New Repair Ticket"],"id":17},{"start":{"row":37,"column":31},"end":{"row":37,"column":32},"action":"insert","lines":["A"]},{"start":{"row":37,"column":32},"end":{"row":37,"column":33},"action":"insert","lines":["d"]},{"start":{"row":37,"column":33},"end":{"row":37,"column":34},"action":"insert","lines":["d"]}],[{"start":{"row":37,"column":34},"end":{"row":37,"column":35},"action":"insert","lines":[" "],"id":18},{"start":{"row":37,"column":35},"end":{"row":37,"column":36},"action":"insert","lines":["p"]},{"start":{"row":37,"column":36},"end":{"row":37,"column":37},"action":"insert","lines":["a"]},{"start":{"row":37,"column":37},"end":{"row":37,"column":38},"action":"insert","lines":["r"]}],[{"start":{"row":37,"column":38},"end":{"row":37,"column":39},"action":"insert","lines":["t"],"id":19},{"start":{"row":37,"column":39},"end":{"row":37,"column":40},"action":"insert","lines":["s"]}],[{"start":{"row":37,"column":40},"end":{"row":37,"column":41},"action":"insert","lines":[" "],"id":20},{"start":{"row":37,"column":41},"end":{"row":37,"column":42},"action":"insert","lines":["t"]},{"start":{"row":37,"column":42},"end":{"row":37,"column":43},"action":"insert","lines":["o"]}],[{"start":{"row":37,"column":43},"end":{"row":37,"column":44},"action":"insert","lines":[" "],"id":21},{"start":{"row":37,"column":44},"end":{"row":37,"column":45},"action":"insert","lines":["r"]},{"start":{"row":37,"column":45},"end":{"row":37,"column":46},"action":"insert","lines":["e"]},{"start":{"row":37,"column":46},"end":{"row":37,"column":47},"action":"insert","lines":["p"]},{"start":{"row":37,"column":47},"end":{"row":37,"column":48},"action":"insert","lines":["a"]},{"start":{"row":37,"column":48},"end":{"row":37,"column":49},"action":"insert","lines":["i"]},{"start":{"row":37,"column":49},"end":{"row":37,"column":50},"action":"insert","lines":["r"]}],[{"start":{"row":39,"column":32},"end":{"row":39,"column":33},"action":"remove","lines":["r"],"id":22},{"start":{"row":39,"column":31},"end":{"row":39,"column":32},"action":"remove","lines":["i"]},{"start":{"row":39,"column":30},"end":{"row":39,"column":31},"action":"remove","lines":["a"]}],[{"start":{"row":39,"column":30},"end":{"row":39,"column":31},"action":"insert","lines":["P"],"id":23},{"start":{"row":39,"column":31},"end":{"row":39,"column":32},"action":"insert","lines":["a"]},{"start":{"row":39,"column":32},"end":{"row":39,"column":33},"action":"insert","lines":["r"]},{"start":{"row":39,"column":33},"end":{"row":39,"column":34},"action":"insert","lines":["t"]},{"start":{"row":39,"column":34},"end":{"row":39,"column":35},"action":"insert","lines":["s"]}],[{"start":{"row":39,"column":57},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":40,"column":0},"end":{"row":40,"column":8},"action":"insert","lines":["        "]},{"start":{"row":40,"column":8},"end":{"row":41,"column":0},"action":"insert","lines":["",""]},{"start":{"row":41,"column":0},"end":{"row":41,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":41,"column":8},"end":{"row":41,"column":116},"action":"insert","lines":["<input type=\"text\" name=\"cusID\" class=\"form-control\" value=\"<?php echo $customerID; ?>\" required=\"required\">"],"id":25}],[{"start":{"row":41,"column":24},"end":{"row":41,"column":25},"action":"remove","lines":["t"],"id":26},{"start":{"row":41,"column":23},"end":{"row":41,"column":24},"action":"remove","lines":["x"]},{"start":{"row":41,"column":22},"end":{"row":41,"column":23},"action":"remove","lines":["e"]},{"start":{"row":41,"column":21},"end":{"row":41,"column":22},"action":"remove","lines":["t"]}],[{"start":{"row":41,"column":21},"end":{"row":41,"column":22},"action":"insert","lines":["h"],"id":27},{"start":{"row":41,"column":22},"end":{"row":41,"column":23},"action":"insert","lines":["i"]},{"start":{"row":41,"column":23},"end":{"row":41,"column":24},"action":"insert","lines":["d"]},{"start":{"row":41,"column":24},"end":{"row":41,"column":25},"action":"insert","lines":["d"]},{"start":{"row":41,"column":25},"end":{"row":41,"column":26},"action":"insert","lines":["e"]},{"start":{"row":41,"column":26},"end":{"row":41,"column":27},"action":"insert","lines":["n"]}],[{"start":{"row":41,"column":37},"end":{"row":41,"column":38},"action":"remove","lines":["s"],"id":28},{"start":{"row":41,"column":36},"end":{"row":41,"column":37},"action":"remove","lines":["u"]},{"start":{"row":41,"column":35},"end":{"row":41,"column":36},"action":"remove","lines":["c"]}],[{"start":{"row":41,"column":35},"end":{"row":41,"column":36},"action":"insert","lines":["r"],"id":29},{"start":{"row":41,"column":36},"end":{"row":41,"column":37},"action":"insert","lines":["e"]},{"start":{"row":41,"column":37},"end":{"row":41,"column":38},"action":"insert","lines":["p"]}],[{"start":{"row":41,"column":89},"end":{"row":41,"column":90},"action":"remove","lines":["r"],"id":30},{"start":{"row":41,"column":88},"end":{"row":41,"column":89},"action":"remove","lines":["e"]},{"start":{"row":41,"column":87},"end":{"row":41,"column":88},"action":"remove","lines":["m"]},{"start":{"row":41,"column":86},"end":{"row":41,"column":87},"action":"remove","lines":["o"]},{"start":{"row":41,"column":85},"end":{"row":41,"column":86},"action":"remove","lines":["t"]},{"start":{"row":41,"column":84},"end":{"row":41,"column":85},"action":"remove","lines":["s"]},{"start":{"row":41,"column":83},"end":{"row":41,"column":84},"action":"remove","lines":["u"]},{"start":{"row":41,"column":82},"end":{"row":41,"column":83},"action":"remove","lines":["c"]}],[{"start":{"row":41,"column":82},"end":{"row":41,"column":83},"action":"insert","lines":["e"],"id":31},{"start":{"row":41,"column":83},"end":{"row":41,"column":84},"action":"insert","lines":["r"]},{"start":{"row":41,"column":84},"end":{"row":41,"column":85},"action":"insert","lines":["p"]}],[{"start":{"row":41,"column":84},"end":{"row":41,"column":85},"action":"remove","lines":["p"],"id":32},{"start":{"row":41,"column":83},"end":{"row":41,"column":84},"action":"remove","lines":["r"]},{"start":{"row":41,"column":82},"end":{"row":41,"column":83},"action":"remove","lines":["e"]}],[{"start":{"row":41,"column":82},"end":{"row":41,"column":83},"action":"insert","lines":["r"],"id":33},{"start":{"row":41,"column":83},"end":{"row":41,"column":84},"action":"insert","lines":["e"]},{"start":{"row":41,"column":84},"end":{"row":41,"column":85},"action":"insert","lines":["p"]},{"start":{"row":41,"column":85},"end":{"row":41,"column":86},"action":"insert","lines":["a"]},{"start":{"row":41,"column":86},"end":{"row":41,"column":87},"action":"insert","lines":["i"]},{"start":{"row":41,"column":87},"end":{"row":41,"column":88},"action":"insert","lines":["r"]}],[{"start":{"row":41,"column":95},"end":{"row":41,"column":115},"action":"remove","lines":[" required=\"required\""],"id":34},{"start":{"row":41,"column":94},"end":{"row":41,"column":95},"action":"remove","lines":["\""]}],[{"start":{"row":41,"column":94},"end":{"row":41,"column":95},"action":"insert","lines":[" "],"id":35}],[{"start":{"row":41,"column":94},"end":{"row":41,"column":95},"action":"insert","lines":["\""],"id":36}],[{"start":{"row":41,"column":42},"end":{"row":41,"column":63},"action":"remove","lines":["class=\"form-control\" "],"id":37}],[{"start":{"row":45,"column":36},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":46,"column":0},"end":{"row":46,"column":14},"action":"insert","lines":["              "]},{"start":{"row":46,"column":14},"end":{"row":47,"column":0},"action":"insert","lines":["",""]},{"start":{"row":47,"column":0},"end":{"row":47,"column":14},"action":"insert","lines":["              "]}]]},"ace":{"folds":[],"scrolltop":456,"scrollleft":0,"selection":{"start":{"row":46,"column":14},"end":{"row":46,"column":14},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":31,"state":"start","mode":"ace/mode/php"}},"timestamp":1554598750216,"hash":"94e6fef6f181ec7235b876cc41983f769bf1dde1"}