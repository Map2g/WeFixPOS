{"filter":false,"title":"AddRepairFormGeneral.php","tooltip":"/AddRepairFormGeneral.php","undoManager":{"mark":92,"position":92,"stack":[[{"start":{"row":0,"column":0},"end":{"row":103,"column":7},"action":"insert","lines":["<?php ","","//include 'config.php';","session_start(); ","","if(isset($_GET['id'])){","  $customerID = $_GET['id'];","} else {","  echo \"Could not get ID\";","}","","?>","","<!DOCTYPE html>","<html lang=\"en\">","","<head>","","  <meta charset=\"utf-8\">","  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">","  <meta name=\"description\" content=\"\">","  <meta name=\"author\" content=\"\">","","  <title>New Repair Ticket</title>","","  <!-- Custom fonts for this template-->","  <!--<link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">-->","","  <!-- Custom styles for this template-->","  <link href=\"css/shop-homepage.css\" rel=\"stylesheet\">","","</head>","","<body class=\"bg-light\">","  <div class=\"container\">","    <div class=\"card card-register mx-auto mt-5\">","      <div class=\"card-header\">New Repair Ticket</div>","      <div class=\"card-body\">","        <form action = \"AddRepair.php\" method = \"post\">","          ","          <div class=\"form-group\">","            <div class=\"form-row\">","              <div class=\"col-md-6\">","                <div class=\"form-label-group\">","                  Customer ID: <input type=\"text\" name=\"cusID\" class=\"form-control\" value=\"<?php echo $customerID; ?>\" required=\"required\" readonly>","                </div>","              </div>","              <div class=\"col-md-6\">","                <div class=\"form-label-group\">","                  Employee ID: <input type=\"text\" name=\"EmpID\" class=\"form-control\" placeholder=\"ID of employee who conducted repair\" required=\"required\">","                  <!--<input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Last name\" required=\"required\">-->","                  <!--<label for=\"lastName\">Last name</label>-->","                </div>","              </div>","            </div>","          </div>","          ","          <div class=\"form-group\">","            <div class=\"form-row\">","              <div class=\"col-md-6\">","                 Device: ","                <select name=\"DevID\" class=\"form-control\">","                  <?php $dropdown = true; include 'IndividualDevList.php'; ?>","                </select>","              </div>","            </div>","          </div>","          <div class=\"form-group\">","            <div class=\"form-row\">","              <div class=\"col-md-6\">","                <div class=\"form-group\">","                   Locker Number: <input type=\"number\" name=\"rLockrno\" class=\"form-control\" placeholder=\"Storage Locker #\" required=\"required\">","                </div>","              </div>","              <div class=\"col-md-6\">","                  Description: <textarea name=\"rDesc\" class=\"form-control\" placeholder=\"A short description of the repair\" required=\"required\"></textarea>","              </div>","            </div>","          </div>","          ","          <a href = \"index.php\"><button type=\"button\">Cancel</button></a>          ","          <!--<input type = \"submit\" value = \"Save and continue\">-->","          <input type = \"submit\" value = \"Save and add parts\">","          <!--<a class=\"btn btn-primary btn-block\" href=\"login.html\">Register</a>-->","        </form>","        <!--<div class=\"text-center\">-->","        <!--  <a class=\"d-block small mt-3\" href=\"login.html\">Login Page</a>-->","        <!--  <a class=\"d-block small\" href=\"forgot-password.html\">Forgot Password?</a>-->","        <!--</div>-->","      </div>","    </div>","  </div>","","  <!-- Bootstrap core JavaScript-->","  <script src=\"vendor/jquery/jquery.min.js\"></script>","  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>","","  <!-- Core plugin JavaScript-->","  <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>","</form>","</body>","","</html>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":3},"action":"insert","lines":["// "],"id":2},{"start":{"row":2,"column":0},"end":{"row":2,"column":3},"action":"insert","lines":["// "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"insert","lines":["// "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"insert","lines":["// "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":3},"action":"insert","lines":["// "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":3},"action":"insert","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"insert","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"insert","lines":["// "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":[" "],"id":5},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["/"]},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["/"]},{"start":{"row":11,"column":2},"end":{"row":11,"column":3},"action":"remove","lines":[" "]},{"start":{"row":11,"column":1},"end":{"row":11,"column":2},"action":"remove","lines":["/"]},{"start":{"row":11,"column":0},"end":{"row":11,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":50,"column":18},"end":{"row":52,"column":64},"action":"remove","lines":["Employee ID: <input type=\"text\" name=\"EmpID\" class=\"form-control\" placeholder=\"ID of employee who conducted repair\" required=\"required\">","                  <!--<input type=\"text\" id=\"lastName\" class=\"form-control\" placeholder=\"Last name\" required=\"required\">-->","                  <!--<label for=\"lastName\">Last name</label>-->"],"id":6}],[{"start":{"row":50,"column":18},"end":{"row":53,"column":27},"action":"insert","lines":["Employee:","                  <select name=\"EmpID\" class=\"form-control\" required=\"required\">","                    <?php $dropdown = true; include 'EmpList.php'; ?>","                  </select>"],"id":7}],[{"start":{"row":44,"column":16},"end":{"row":46,"column":22},"action":"remove","lines":["<div class=\"form-label-group\">","                  Customer ID: <input type=\"text\" name=\"cusID\" class=\"form-control\" value=\"<?php echo $customerID; ?>\" required=\"required\" readonly>","                </div>"],"id":20},{"start":{"row":44,"column":16},"end":{"row":48,"column":16},"action":"insert","lines":["Customer: ","                <select name=\"cusID\" class=\"form-control\" required=\"required\">","                  <?php $dropdown = true; include 'CusList.php'; ?>","                </select>","                "]}],[{"start":{"row":48,"column":14},"end":{"row":48,"column":16},"action":"remove","lines":["  "],"id":21},{"start":{"row":48,"column":12},"end":{"row":48,"column":14},"action":"remove","lines":["  "]},{"start":{"row":48,"column":10},"end":{"row":48,"column":12},"action":"remove","lines":["  "]},{"start":{"row":48,"column":8},"end":{"row":48,"column":10},"action":"remove","lines":["  "]},{"start":{"row":48,"column":6},"end":{"row":48,"column":8},"action":"remove","lines":["  "]},{"start":{"row":48,"column":4},"end":{"row":48,"column":6},"action":"remove","lines":["  "]},{"start":{"row":48,"column":2},"end":{"row":48,"column":4},"action":"remove","lines":["  "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":2},"action":"remove","lines":["  "]},{"start":{"row":47,"column":25},"end":{"row":48,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":43,"column":36},"end":{"row":44,"column":16},"action":"insert","lines":["","                "],"id":22}],[{"start":{"row":44,"column":16},"end":{"row":44,"column":48},"action":"insert","lines":["<form action=\"/action_page.php\">"],"id":23}],[{"start":{"row":44,"column":41},"end":{"row":44,"column":42},"action":"remove","lines":["e"],"id":24},{"start":{"row":44,"column":40},"end":{"row":44,"column":41},"action":"remove","lines":["g"]},{"start":{"row":44,"column":39},"end":{"row":44,"column":40},"action":"remove","lines":["a"]},{"start":{"row":44,"column":38},"end":{"row":44,"column":39},"action":"remove","lines":["p"]},{"start":{"row":44,"column":37},"end":{"row":44,"column":38},"action":"remove","lines":["_"]},{"start":{"row":44,"column":36},"end":{"row":44,"column":37},"action":"remove","lines":["n"]},{"start":{"row":44,"column":35},"end":{"row":44,"column":36},"action":"remove","lines":["o"]},{"start":{"row":44,"column":34},"end":{"row":44,"column":35},"action":"remove","lines":["i"]},{"start":{"row":44,"column":33},"end":{"row":44,"column":34},"action":"remove","lines":["t"]},{"start":{"row":44,"column":32},"end":{"row":44,"column":33},"action":"remove","lines":["c"]},{"start":{"row":44,"column":31},"end":{"row":44,"column":32},"action":"remove","lines":["a"]},{"start":{"row":44,"column":30},"end":{"row":44,"column":31},"action":"remove","lines":["/"]}],[{"start":{"row":44,"column":30},"end":{"row":44,"column":31},"action":"insert","lines":["A"],"id":25},{"start":{"row":44,"column":31},"end":{"row":44,"column":32},"action":"insert","lines":["d"]},{"start":{"row":44,"column":32},"end":{"row":44,"column":33},"action":"insert","lines":["d"]},{"start":{"row":44,"column":33},"end":{"row":44,"column":34},"action":"insert","lines":["R"]},{"start":{"row":44,"column":34},"end":{"row":44,"column":35},"action":"insert","lines":["e"]},{"start":{"row":44,"column":35},"end":{"row":44,"column":36},"action":"insert","lines":["p"]},{"start":{"row":44,"column":36},"end":{"row":44,"column":37},"action":"insert","lines":["a"]},{"start":{"row":44,"column":37},"end":{"row":44,"column":38},"action":"insert","lines":["i"]},{"start":{"row":44,"column":38},"end":{"row":44,"column":39},"action":"insert","lines":["r"]}],[{"start":{"row":44,"column":16},"end":{"row":44,"column":45},"action":"remove","lines":["<form action=\"AddRepair.php\">"],"id":26},{"start":{"row":44,"column":14},"end":{"row":44,"column":16},"action":"remove","lines":["  "]},{"start":{"row":44,"column":12},"end":{"row":44,"column":14},"action":"remove","lines":["  "]},{"start":{"row":44,"column":10},"end":{"row":44,"column":12},"action":"remove","lines":["  "]},{"start":{"row":44,"column":8},"end":{"row":44,"column":10},"action":"remove","lines":["  "]},{"start":{"row":44,"column":6},"end":{"row":44,"column":8},"action":"remove","lines":["  "]},{"start":{"row":44,"column":4},"end":{"row":44,"column":6},"action":"remove","lines":["  "]},{"start":{"row":44,"column":2},"end":{"row":44,"column":4},"action":"remove","lines":["  "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":2},"action":"remove","lines":["  "]}],[{"start":{"row":43,"column":36},"end":{"row":44,"column":0},"action":"remove","lines":["",""],"id":27}],[{"start":{"row":65,"column":42},"end":{"row":65,"column":43},"action":"insert","lines":["$"],"id":28}],[{"start":{"row":65,"column":42},"end":{"row":65,"column":43},"action":"remove","lines":["$"],"id":29}],[{"start":{"row":47,"column":25},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":48,"column":0},"end":{"row":48,"column":16},"action":"insert","lines":["                "]},{"start":{"row":48,"column":16},"end":{"row":49,"column":0},"action":"insert","lines":["",""]},{"start":{"row":49,"column":0},"end":{"row":49,"column":16},"action":"insert","lines":["                "]},{"start":{"row":49,"column":16},"end":{"row":49,"column":17},"action":"insert","lines":["<"]},{"start":{"row":49,"column":17},"end":{"row":49,"column":18},"action":"insert","lines":["n"]}],[{"start":{"row":49,"column":17},"end":{"row":49,"column":18},"action":"remove","lines":["n"],"id":31}],[{"start":{"row":49,"column":17},"end":{"row":49,"column":18},"action":"insert","lines":["i"],"id":32},{"start":{"row":49,"column":18},"end":{"row":49,"column":19},"action":"insert","lines":["n"]},{"start":{"row":49,"column":19},"end":{"row":49,"column":20},"action":"insert","lines":["p"]},{"start":{"row":49,"column":20},"end":{"row":49,"column":21},"action":"insert","lines":["u"]},{"start":{"row":49,"column":21},"end":{"row":49,"column":22},"action":"insert","lines":["t"]}],[{"start":{"row":49,"column":22},"end":{"row":49,"column":23},"action":"insert","lines":[" "],"id":33},{"start":{"row":49,"column":23},"end":{"row":49,"column":24},"action":"insert","lines":["t"]},{"start":{"row":49,"column":24},"end":{"row":49,"column":25},"action":"insert","lines":["y"]},{"start":{"row":49,"column":25},"end":{"row":49,"column":26},"action":"insert","lines":["p"]},{"start":{"row":49,"column":26},"end":{"row":49,"column":27},"action":"insert","lines":["e"]},{"start":{"row":49,"column":27},"end":{"row":49,"column":28},"action":"insert","lines":["="]}],[{"start":{"row":49,"column":28},"end":{"row":49,"column":29},"action":"insert","lines":["h"],"id":34},{"start":{"row":49,"column":29},"end":{"row":49,"column":30},"action":"insert","lines":["i"]}],[{"start":{"row":49,"column":29},"end":{"row":49,"column":30},"action":"remove","lines":["i"],"id":35},{"start":{"row":49,"column":28},"end":{"row":49,"column":29},"action":"remove","lines":["h"]}],[{"start":{"row":49,"column":27},"end":{"row":49,"column":28},"action":"remove","lines":["="],"id":36},{"start":{"row":49,"column":26},"end":{"row":49,"column":27},"action":"remove","lines":["e"]},{"start":{"row":49,"column":25},"end":{"row":49,"column":26},"action":"remove","lines":["p"]},{"start":{"row":49,"column":24},"end":{"row":49,"column":25},"action":"remove","lines":["y"]},{"start":{"row":49,"column":23},"end":{"row":49,"column":24},"action":"remove","lines":["t"]},{"start":{"row":49,"column":22},"end":{"row":49,"column":23},"action":"remove","lines":[" "]},{"start":{"row":49,"column":21},"end":{"row":49,"column":22},"action":"remove","lines":["t"]},{"start":{"row":49,"column":20},"end":{"row":49,"column":21},"action":"remove","lines":["u"]},{"start":{"row":49,"column":19},"end":{"row":49,"column":20},"action":"remove","lines":["p"]},{"start":{"row":49,"column":18},"end":{"row":49,"column":19},"action":"remove","lines":["n"]},{"start":{"row":49,"column":17},"end":{"row":49,"column":18},"action":"remove","lines":["i"]},{"start":{"row":49,"column":16},"end":{"row":49,"column":17},"action":"remove","lines":["<"]}],[{"start":{"row":49,"column":14},"end":{"row":49,"column":16},"action":"remove","lines":["  "],"id":37},{"start":{"row":49,"column":12},"end":{"row":49,"column":14},"action":"remove","lines":["  "]},{"start":{"row":49,"column":10},"end":{"row":49,"column":12},"action":"remove","lines":["  "]},{"start":{"row":49,"column":8},"end":{"row":49,"column":10},"action":"remove","lines":["  "]},{"start":{"row":49,"column":6},"end":{"row":49,"column":8},"action":"remove","lines":["  "]},{"start":{"row":49,"column":4},"end":{"row":49,"column":6},"action":"remove","lines":["  "]},{"start":{"row":49,"column":2},"end":{"row":49,"column":4},"action":"remove","lines":["  "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":2},"action":"remove","lines":["  "]},{"start":{"row":48,"column":16},"end":{"row":49,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":48,"column":14},"end":{"row":48,"column":16},"action":"remove","lines":["  "],"id":38},{"start":{"row":48,"column":12},"end":{"row":48,"column":14},"action":"remove","lines":["  "]},{"start":{"row":48,"column":10},"end":{"row":48,"column":12},"action":"remove","lines":["  "]},{"start":{"row":48,"column":8},"end":{"row":48,"column":10},"action":"remove","lines":["  "]},{"start":{"row":48,"column":6},"end":{"row":48,"column":8},"action":"remove","lines":["  "]},{"start":{"row":48,"column":4},"end":{"row":48,"column":6},"action":"remove","lines":["  "]},{"start":{"row":48,"column":2},"end":{"row":48,"column":4},"action":"remove","lines":["  "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":2},"action":"remove","lines":["  "]},{"start":{"row":47,"column":25},"end":{"row":48,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":47,"column":25},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":39},{"start":{"row":48,"column":0},"end":{"row":48,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":48,"column":16},"end":{"row":48,"column":17},"action":"insert","lines":["<"],"id":40},{"start":{"row":48,"column":17},"end":{"row":48,"column":18},"action":"insert","lines":["i"]},{"start":{"row":48,"column":18},"end":{"row":48,"column":19},"action":"insert","lines":["n"]},{"start":{"row":48,"column":19},"end":{"row":48,"column":20},"action":"insert","lines":["p"]},{"start":{"row":48,"column":20},"end":{"row":48,"column":21},"action":"insert","lines":["u"]},{"start":{"row":48,"column":21},"end":{"row":48,"column":22},"action":"insert","lines":["t"]}],[{"start":{"row":48,"column":22},"end":{"row":48,"column":23},"action":"insert","lines":[" "],"id":41},{"start":{"row":48,"column":23},"end":{"row":48,"column":24},"action":"insert","lines":["t"]},{"start":{"row":48,"column":24},"end":{"row":48,"column":25},"action":"insert","lines":["y"]},{"start":{"row":48,"column":25},"end":{"row":48,"column":26},"action":"insert","lines":["p"]},{"start":{"row":48,"column":26},"end":{"row":48,"column":27},"action":"insert","lines":["e"]},{"start":{"row":48,"column":27},"end":{"row":48,"column":28},"action":"insert","lines":["="]},{"start":{"row":48,"column":28},"end":{"row":48,"column":29},"action":"insert","lines":["h"]},{"start":{"row":48,"column":29},"end":{"row":48,"column":30},"action":"insert","lines":["i"]},{"start":{"row":48,"column":30},"end":{"row":48,"column":31},"action":"insert","lines":["d"]}],[{"start":{"row":48,"column":31},"end":{"row":48,"column":32},"action":"insert","lines":["d"],"id":42},{"start":{"row":48,"column":32},"end":{"row":48,"column":33},"action":"insert","lines":["e"]},{"start":{"row":48,"column":33},"end":{"row":48,"column":34},"action":"insert","lines":["n"]},{"start":{"row":48,"column":34},"end":{"row":48,"column":35},"action":"insert","lines":["\""]}],[{"start":{"row":48,"column":28},"end":{"row":48,"column":29},"action":"insert","lines":["\""],"id":43}],[{"start":{"row":48,"column":36},"end":{"row":48,"column":37},"action":"insert","lines":[" "],"id":44},{"start":{"row":48,"column":37},"end":{"row":48,"column":38},"action":"insert","lines":["v"]},{"start":{"row":48,"column":38},"end":{"row":48,"column":39},"action":"insert","lines":["a"]},{"start":{"row":48,"column":39},"end":{"row":48,"column":40},"action":"insert","lines":["l"]},{"start":{"row":48,"column":40},"end":{"row":48,"column":41},"action":"insert","lines":["u"]},{"start":{"row":48,"column":41},"end":{"row":48,"column":42},"action":"insert","lines":["e"]},{"start":{"row":48,"column":42},"end":{"row":48,"column":43},"action":"insert","lines":["="]}],[{"start":{"row":48,"column":43},"end":{"row":48,"column":44},"action":"insert","lines":[" "],"id":45}],[{"start":{"row":48,"column":43},"end":{"row":48,"column":44},"action":"remove","lines":[" "],"id":46}],[{"start":{"row":48,"column":43},"end":{"row":48,"column":45},"action":"insert","lines":["\"\""],"id":47}],[{"start":{"row":48,"column":44},"end":{"row":48,"column":45},"action":"insert","lines":["c"],"id":48},{"start":{"row":48,"column":45},"end":{"row":48,"column":46},"action":"insert","lines":["u"]},{"start":{"row":48,"column":46},"end":{"row":48,"column":47},"action":"insert","lines":["s"]},{"start":{"row":48,"column":47},"end":{"row":48,"column":48},"action":"insert","lines":["t"]},{"start":{"row":48,"column":48},"end":{"row":48,"column":49},"action":"insert","lines":["o"]},{"start":{"row":48,"column":49},"end":{"row":48,"column":50},"action":"insert","lines":["m"]},{"start":{"row":48,"column":50},"end":{"row":48,"column":51},"action":"insert","lines":["e"]},{"start":{"row":48,"column":51},"end":{"row":48,"column":52},"action":"insert","lines":["r"]}],[{"start":{"row":48,"column":51},"end":{"row":48,"column":52},"action":"remove","lines":["r"],"id":49},{"start":{"row":48,"column":50},"end":{"row":48,"column":51},"action":"remove","lines":["e"]},{"start":{"row":48,"column":49},"end":{"row":48,"column":50},"action":"remove","lines":["m"]},{"start":{"row":48,"column":48},"end":{"row":48,"column":49},"action":"remove","lines":["o"]},{"start":{"row":48,"column":47},"end":{"row":48,"column":48},"action":"remove","lines":["t"]},{"start":{"row":48,"column":46},"end":{"row":48,"column":47},"action":"remove","lines":["s"]},{"start":{"row":48,"column":45},"end":{"row":48,"column":46},"action":"remove","lines":["u"]},{"start":{"row":48,"column":44},"end":{"row":48,"column":45},"action":"remove","lines":["c"]}],[{"start":{"row":45,"column":77},"end":{"row":45,"column":78},"action":"insert","lines":[" "],"id":50}],[{"start":{"row":45,"column":78},"end":{"row":45,"column":106},"action":"insert","lines":["onchange=\"this.form.submit()"],"id":51}],[{"start":{"row":48,"column":45},"end":{"row":48,"column":46},"action":"insert","lines":[">"],"id":52}],[{"start":{"row":43,"column":36},"end":{"row":44,"column":16},"action":"insert","lines":["","                "],"id":53}],[{"start":{"row":44,"column":16},"end":{"row":44,"column":17},"action":"insert","lines":["<"],"id":54},{"start":{"row":44,"column":17},"end":{"row":44,"column":18},"action":"insert","lines":["f"]},{"start":{"row":44,"column":18},"end":{"row":44,"column":19},"action":"insert","lines":["o"]},{"start":{"row":44,"column":19},"end":{"row":44,"column":20},"action":"insert","lines":["r"]},{"start":{"row":44,"column":20},"end":{"row":44,"column":21},"action":"insert","lines":["m"]}],[{"start":{"row":44,"column":21},"end":{"row":44,"column":22},"action":"insert","lines":[" "],"id":55},{"start":{"row":44,"column":22},"end":{"row":44,"column":23},"action":"insert","lines":["a"]},{"start":{"row":44,"column":23},"end":{"row":44,"column":24},"action":"insert","lines":["c"]},{"start":{"row":44,"column":24},"end":{"row":44,"column":25},"action":"insert","lines":["t"]},{"start":{"row":44,"column":25},"end":{"row":44,"column":26},"action":"insert","lines":["i"]},{"start":{"row":44,"column":26},"end":{"row":44,"column":27},"action":"insert","lines":["o"]},{"start":{"row":44,"column":27},"end":{"row":44,"column":28},"action":"insert","lines":["n"]}],[{"start":{"row":44,"column":28},"end":{"row":44,"column":29},"action":"insert","lines":["="],"id":56}],[{"start":{"row":44,"column":29},"end":{"row":44,"column":31},"action":"insert","lines":["\"\""],"id":57}],[{"start":{"row":44,"column":30},"end":{"row":44,"column":31},"action":"insert","lines":["A"],"id":58}],[{"start":{"row":44,"column":30},"end":{"row":44,"column":31},"action":"remove","lines":["A"],"id":59}],[{"start":{"row":44,"column":30},"end":{"row":44,"column":31},"action":"insert","lines":["I"],"id":60},{"start":{"row":44,"column":31},"end":{"row":44,"column":32},"action":"insert","lines":["n"]},{"start":{"row":44,"column":32},"end":{"row":44,"column":33},"action":"insert","lines":["d"]},{"start":{"row":44,"column":33},"end":{"row":44,"column":34},"action":"insert","lines":["i"]}],[{"start":{"row":44,"column":30},"end":{"row":44,"column":34},"action":"remove","lines":["Indi"],"id":61},{"start":{"row":44,"column":30},"end":{"row":44,"column":47},"action":"insert","lines":["IndividualDevList"]}],[{"start":{"row":44,"column":47},"end":{"row":44,"column":48},"action":"insert","lines":["."],"id":62},{"start":{"row":44,"column":48},"end":{"row":44,"column":49},"action":"insert","lines":["p"]},{"start":{"row":44,"column":49},"end":{"row":44,"column":50},"action":"insert","lines":["h"]},{"start":{"row":44,"column":50},"end":{"row":44,"column":51},"action":"insert","lines":["p"]}],[{"start":{"row":44,"column":52},"end":{"row":44,"column":53},"action":"insert","lines":[" "],"id":63},{"start":{"row":44,"column":53},"end":{"row":44,"column":54},"action":"insert","lines":["m"]},{"start":{"row":44,"column":54},"end":{"row":44,"column":55},"action":"insert","lines":["e"]},{"start":{"row":44,"column":55},"end":{"row":44,"column":56},"action":"insert","lines":["t"]},{"start":{"row":44,"column":56},"end":{"row":44,"column":57},"action":"insert","lines":["h"]},{"start":{"row":44,"column":57},"end":{"row":44,"column":58},"action":"insert","lines":["o"]},{"start":{"row":44,"column":58},"end":{"row":44,"column":59},"action":"insert","lines":["d"]},{"start":{"row":44,"column":59},"end":{"row":44,"column":60},"action":"insert","lines":["-"]}],[{"start":{"row":44,"column":60},"end":{"row":44,"column":61},"action":"insert","lines":["\""],"id":64}],[{"start":{"row":44,"column":60},"end":{"row":44,"column":61},"action":"remove","lines":["\""],"id":65},{"start":{"row":44,"column":59},"end":{"row":44,"column":60},"action":"remove","lines":["-"]}],[{"start":{"row":44,"column":59},"end":{"row":44,"column":60},"action":"insert","lines":["-"],"id":66},{"start":{"row":44,"column":60},"end":{"row":44,"column":61},"action":"insert","lines":["\""]},{"start":{"row":44,"column":61},"end":{"row":44,"column":62},"action":"insert","lines":["p"]},{"start":{"row":44,"column":62},"end":{"row":44,"column":63},"action":"insert","lines":["o"]},{"start":{"row":44,"column":63},"end":{"row":44,"column":64},"action":"insert","lines":["s"]},{"start":{"row":44,"column":64},"end":{"row":44,"column":65},"action":"insert","lines":["t"]}],[{"start":{"row":44,"column":65},"end":{"row":44,"column":66},"action":"insert","lines":["\""],"id":67}],[{"start":{"row":44,"column":66},"end":{"row":44,"column":74},"action":"insert","lines":["></form>"],"id":68}],[{"start":{"row":44,"column":67},"end":{"row":44,"column":68},"action":"remove","lines":["<"],"id":69},{"start":{"row":44,"column":67},"end":{"row":44,"column":68},"action":"remove","lines":["/"]},{"start":{"row":44,"column":67},"end":{"row":44,"column":68},"action":"remove","lines":["f"]},{"start":{"row":44,"column":67},"end":{"row":44,"column":68},"action":"remove","lines":["o"]},{"start":{"row":44,"column":67},"end":{"row":44,"column":68},"action":"remove","lines":["r"]},{"start":{"row":44,"column":67},"end":{"row":44,"column":68},"action":"remove","lines":["m"]},{"start":{"row":44,"column":67},"end":{"row":44,"column":68},"action":"remove","lines":[">"]}],[{"start":{"row":48,"column":25},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":70},{"start":{"row":49,"column":0},"end":{"row":49,"column":16},"action":"insert","lines":["                "]},{"start":{"row":49,"column":16},"end":{"row":49,"column":17},"action":"insert","lines":["<"]}],[{"start":{"row":49,"column":17},"end":{"row":49,"column":18},"action":"insert","lines":["/"],"id":71},{"start":{"row":49,"column":18},"end":{"row":49,"column":19},"action":"insert","lines":["f"]},{"start":{"row":49,"column":19},"end":{"row":49,"column":20},"action":"insert","lines":["o"]},{"start":{"row":49,"column":20},"end":{"row":49,"column":21},"action":"insert","lines":["r"]},{"start":{"row":49,"column":21},"end":{"row":49,"column":22},"action":"insert","lines":["m"]},{"start":{"row":49,"column":22},"end":{"row":49,"column":23},"action":"insert","lines":[">"]}],[{"start":{"row":44,"column":59},"end":{"row":44,"column":60},"action":"remove","lines":["-"],"id":72}],[{"start":{"row":44,"column":59},"end":{"row":44,"column":60},"action":"insert","lines":["="],"id":73}],[{"start":{"row":46,"column":106},"end":{"row":46,"column":107},"action":"insert","lines":["\""],"id":74}],[{"start":{"row":50,"column":16},"end":{"row":50,"column":46},"action":"remove","lines":["<input type=\"hidden\" value=\"\">"],"id":75}],[{"start":{"row":43,"column":36},"end":{"row":44,"column":16},"action":"insert","lines":["","                "],"id":76}],[{"start":{"row":51,"column":16},"end":{"row":52,"column":0},"action":"insert","lines":["",""],"id":77},{"start":{"row":52,"column":0},"end":{"row":52,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":52,"column":16},"end":{"row":52,"column":46},"action":"insert","lines":["<input type=\"hidden\" value=\"\">"],"id":78}],[{"start":{"row":39,"column":55},"end":{"row":39,"column":58},"action":"insert","lines":["-->"],"id":79},{"start":{"row":39,"column":8},"end":{"row":39,"column":12},"action":"insert","lines":["<!--"]}],[{"start":{"row":51,"column":16},"end":{"row":52,"column":0},"action":"insert","lines":["",""],"id":80},{"start":{"row":52,"column":0},"end":{"row":52,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":52,"column":16},"end":{"row":52,"column":63},"action":"insert","lines":["<form action = \"AddRepair.php\" method = \"post\">"],"id":81}],[{"start":{"row":52,"column":14},"end":{"row":52,"column":16},"action":"remove","lines":["  "],"id":82},{"start":{"row":52,"column":12},"end":{"row":52,"column":14},"action":"remove","lines":["  "]}],[{"start":{"row":53,"column":44},"end":{"row":53,"column":45},"action":"insert","lines":["c"],"id":83},{"start":{"row":53,"column":45},"end":{"row":53,"column":46},"action":"insert","lines":["u"]},{"start":{"row":53,"column":46},"end":{"row":53,"column":47},"action":"insert","lines":["s"]},{"start":{"row":53,"column":47},"end":{"row":53,"column":48},"action":"insert","lines":["I"]},{"start":{"row":53,"column":48},"end":{"row":53,"column":49},"action":"insert","lines":["d"]}],[{"start":{"row":53,"column":16},"end":{"row":53,"column":51},"action":"remove","lines":["<input type=\"hidden\" value=\"cusId\">"],"id":84},{"start":{"row":53,"column":14},"end":{"row":53,"column":16},"action":"remove","lines":["  "]},{"start":{"row":53,"column":12},"end":{"row":53,"column":14},"action":"remove","lines":["  "]},{"start":{"row":53,"column":10},"end":{"row":53,"column":12},"action":"remove","lines":["  "]},{"start":{"row":53,"column":8},"end":{"row":53,"column":10},"action":"remove","lines":["  "]},{"start":{"row":53,"column":6},"end":{"row":53,"column":8},"action":"remove","lines":["  "]},{"start":{"row":53,"column":4},"end":{"row":53,"column":6},"action":"remove","lines":["  "]},{"start":{"row":53,"column":2},"end":{"row":53,"column":4},"action":"remove","lines":["  "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":2},"action":"remove","lines":["  "]},{"start":{"row":52,"column":59},"end":{"row":53,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":3},"action":"remove","lines":["// "],"id":85},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"remove","lines":["// "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"remove","lines":["// "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":3},"action":"remove","lines":["// "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":3},"action":"remove","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"remove","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"remove","lines":["// "]}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"insert","lines":["// "],"id":86},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"insert","lines":["// "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":3},"action":"insert","lines":["// "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":3},"action":"insert","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"insert","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"remove","lines":["// "],"id":87},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"remove","lines":["// "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":3},"action":"remove","lines":["// "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":3},"action":"remove","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"remove","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"remove","lines":["// "]}],[{"start":{"row":45,"column":30},"end":{"row":45,"column":47},"action":"remove","lines":["IndividualDevList"],"id":88},{"start":{"row":45,"column":30},"end":{"row":45,"column":31},"action":"insert","lines":["A"]},{"start":{"row":45,"column":31},"end":{"row":45,"column":32},"action":"insert","lines":["d"]},{"start":{"row":45,"column":32},"end":{"row":45,"column":33},"action":"insert","lines":["d"]}],[{"start":{"row":45,"column":30},"end":{"row":45,"column":33},"action":"remove","lines":["Add"],"id":89},{"start":{"row":45,"column":30},"end":{"row":45,"column":39},"action":"insert","lines":["AddRepair"]}],[{"start":{"row":50,"column":23},"end":{"row":50,"column":26},"action":"insert","lines":["-->"],"id":90},{"start":{"row":50,"column":16},"end":{"row":50,"column":20},"action":"insert","lines":["<!--"]}],[{"start":{"row":52,"column":59},"end":{"row":52,"column":62},"action":"insert","lines":["-->"],"id":91},{"start":{"row":52,"column":12},"end":{"row":52,"column":16},"action":"insert","lines":["<!--"]}],[{"start":{"row":50,"column":27},"end":{"row":50,"column":30},"action":"remove","lines":["-->"],"id":92},{"start":{"row":50,"column":16},"end":{"row":50,"column":20},"action":"remove","lines":["<!--"]}],[{"start":{"row":52,"column":63},"end":{"row":52,"column":66},"action":"remove","lines":["-->"],"id":93},{"start":{"row":52,"column":12},"end":{"row":52,"column":16},"action":"remove","lines":["<!--"]}],[{"start":{"row":47,"column":108},"end":{"row":48,"column":18},"action":"insert","lines":["","                  "],"id":100}],[{"start":{"row":48,"column":18},"end":{"row":48,"column":19},"action":"insert","lines":["<"],"id":101},{"start":{"row":48,"column":19},"end":{"row":48,"column":20},"action":"insert","lines":["o"]},{"start":{"row":48,"column":20},"end":{"row":48,"column":21},"action":"insert","lines":["p"]},{"start":{"row":48,"column":21},"end":{"row":48,"column":22},"action":"insert","lines":["t"]},{"start":{"row":48,"column":22},"end":{"row":48,"column":23},"action":"insert","lines":["i"]},{"start":{"row":48,"column":23},"end":{"row":48,"column":24},"action":"insert","lines":["o"]},{"start":{"row":48,"column":24},"end":{"row":48,"column":25},"action":"insert","lines":["n"]}],[{"start":{"row":48,"column":25},"end":{"row":48,"column":26},"action":"insert","lines":[" "],"id":102},{"start":{"row":48,"column":26},"end":{"row":48,"column":27},"action":"insert","lines":["v"]},{"start":{"row":48,"column":27},"end":{"row":48,"column":28},"action":"insert","lines":["a"]},{"start":{"row":48,"column":28},"end":{"row":48,"column":29},"action":"insert","lines":["l"]},{"start":{"row":48,"column":29},"end":{"row":48,"column":30},"action":"insert","lines":["u"]},{"start":{"row":48,"column":30},"end":{"row":48,"column":31},"action":"insert","lines":["e"]},{"start":{"row":48,"column":31},"end":{"row":48,"column":32},"action":"insert","lines":["="]}],[{"start":{"row":48,"column":32},"end":{"row":48,"column":34},"action":"insert","lines":["\"\""],"id":103}],[{"start":{"row":48,"column":34},"end":{"row":48,"column":44},"action":"insert","lines":["></option>"],"id":104}],[{"start":{"row":48,"column":35},"end":{"row":48,"column":36},"action":"insert","lines":["N"],"id":105},{"start":{"row":48,"column":36},"end":{"row":48,"column":37},"action":"insert","lines":["o"]}],[{"start":{"row":48,"column":37},"end":{"row":48,"column":38},"action":"insert","lines":[" "],"id":106},{"start":{"row":48,"column":38},"end":{"row":48,"column":39},"action":"insert","lines":["d"]}],[{"start":{"row":48,"column":38},"end":{"row":48,"column":39},"action":"remove","lines":["d"],"id":107}],[{"start":{"row":48,"column":38},"end":{"row":48,"column":39},"action":"insert","lines":["o"],"id":108},{"start":{"row":48,"column":39},"end":{"row":48,"column":40},"action":"insert","lines":["p"]},{"start":{"row":48,"column":40},"end":{"row":48,"column":41},"action":"insert","lines":["t"]},{"start":{"row":48,"column":41},"end":{"row":48,"column":42},"action":"insert","lines":["i"]},{"start":{"row":48,"column":42},"end":{"row":48,"column":43},"action":"insert","lines":["o"]},{"start":{"row":48,"column":43},"end":{"row":48,"column":44},"action":"insert","lines":["n"]}],[{"start":{"row":48,"column":44},"end":{"row":48,"column":45},"action":"insert","lines":[" "],"id":109},{"start":{"row":48,"column":45},"end":{"row":48,"column":46},"action":"insert","lines":["s"]},{"start":{"row":48,"column":46},"end":{"row":48,"column":47},"action":"insert","lines":["e"]},{"start":{"row":48,"column":47},"end":{"row":48,"column":48},"action":"insert","lines":["l"]},{"start":{"row":48,"column":48},"end":{"row":48,"column":49},"action":"insert","lines":["e"]},{"start":{"row":48,"column":49},"end":{"row":48,"column":50},"action":"insert","lines":["c"]},{"start":{"row":48,"column":50},"end":{"row":48,"column":51},"action":"insert","lines":["t"]},{"start":{"row":48,"column":51},"end":{"row":48,"column":52},"action":"insert","lines":["e"]}],[{"start":{"row":48,"column":52},"end":{"row":48,"column":53},"action":"insert","lines":["d"],"id":110},{"start":{"row":48,"column":53},"end":{"row":48,"column":54},"action":"insert","lines":["-"]},{"start":{"row":48,"column":54},"end":{"row":48,"column":55},"action":"insert","lines":["-"]}],[{"start":{"row":48,"column":35},"end":{"row":48,"column":36},"action":"insert","lines":["-"],"id":111},{"start":{"row":48,"column":36},"end":{"row":48,"column":37},"action":"insert","lines":["-"]}],[{"start":{"row":7,"column":2},"end":{"row":9,"column":1},"action":"remove","lines":["else {","  echo \"Could not get ID\";","}"],"id":112},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":[" "]}],[{"start":{"row":87,"column":54},"end":{"row":87,"column":60},"action":"remove","lines":["Cancel"],"id":113},{"start":{"row":87,"column":54},"end":{"row":87,"column":55},"action":"insert","lines":["E"]},{"start":{"row":87,"column":55},"end":{"row":87,"column":56},"action":"insert","lines":["x"]},{"start":{"row":87,"column":56},"end":{"row":87,"column":57},"action":"insert","lines":["i"]},{"start":{"row":87,"column":57},"end":{"row":87,"column":58},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":1056,"scrollleft":0,"selection":{"start":{"row":87,"column":58},"end":{"row":87,"column":58},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":74,"state":"start","mode":"ace/mode/php"}},"timestamp":1554742222632,"hash":"015d5b42c1356c636e6334702bec46858b9a17c3"}