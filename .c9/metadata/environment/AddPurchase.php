{"filter":false,"title":"AddPurchase.php","tooltip":"/AddPurchase.php","undoManager":{"mark":69,"position":69,"stack":[[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["?"]},{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":2},"action":"remove","lines":["<?php","","?>"],"id":3},{"start":{"row":0,"column":0},"end":{"row":18,"column":2},"action":"insert","lines":["<?php","","include 'config.php';","//*******************************************************************************************************************","","$first_name = $_POST['fname'];","$last_name = $_POST['lname'];","$email = $_POST['email'];","$phone = $_POST['phone'];","","$sql = \"INSERT INTO CUSTOMER (CUS_FNAME, CUS_LNAME, CUS_PHONE, CUS_EMAIL) VALUES ('$first_name', '$last_name', '$phone', '$email')\";","","if(mysqli_query($conn, $sql)){","    header(\"location: Customer.php\");","}else {","    echo \"Error\" . $sql . \"<br>\" . mysqli_error($conn);","}","","?>"]}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":12},"action":"remove","lines":["first_name "],"id":4},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["P"]},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["u"]},{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":["r"]},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["c"]},{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["h"]},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["a"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["s"]},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["e"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["_"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["d"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["a"]},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["t"]},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"remove","lines":["e"],"id":5},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"remove","lines":["t"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"remove","lines":["a"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"remove","lines":["d"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":["_"]},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"remove","lines":["e"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"remove","lines":["s"]},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"remove","lines":["a"]},{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"remove","lines":["h"]},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":["c"]}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"remove","lines":["r"],"id":6},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"remove","lines":["u"]},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":["P"]}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["p"],"id":7},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["u"]},{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":["r"]},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["h"]},{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["c"]},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["a"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["s"]},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["e"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["_"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["d"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["a"]},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["t"]},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":28},"end":{"row":5,"column":29},"action":"remove","lines":["e"],"id":8},{"start":{"row":5,"column":27},"end":{"row":5,"column":28},"action":"remove","lines":["m"]},{"start":{"row":5,"column":26},"end":{"row":5,"column":27},"action":"remove","lines":["a"]},{"start":{"row":5,"column":25},"end":{"row":5,"column":26},"action":"remove","lines":["n"]},{"start":{"row":5,"column":24},"end":{"row":5,"column":25},"action":"remove","lines":["f"]}],[{"start":{"row":5,"column":24},"end":{"row":5,"column":25},"action":"insert","lines":["P"],"id":9},{"start":{"row":5,"column":25},"end":{"row":5,"column":26},"action":"insert","lines":["u"]},{"start":{"row":5,"column":26},"end":{"row":5,"column":27},"action":"insert","lines":["r"]},{"start":{"row":5,"column":27},"end":{"row":5,"column":28},"action":"insert","lines":["D"]},{"start":{"row":5,"column":28},"end":{"row":5,"column":29},"action":"insert","lines":["a"]},{"start":{"row":5,"column":29},"end":{"row":5,"column":30},"action":"insert","lines":["t"]},{"start":{"row":5,"column":30},"end":{"row":5,"column":31},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":1},"end":{"row":6,"column":10},"action":"remove","lines":["last_name"],"id":10},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"insert","lines":["c"]},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"insert","lines":["u"]},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":["s"]},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["t"]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["o"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["m"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["e"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["r"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["_"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["d"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["i"]}],[{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"remove","lines":["i"],"id":11},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"remove","lines":["d"]}],[{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["I"],"id":12},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["D"]}],[{"start":{"row":6,"column":23},"end":{"row":6,"column":28},"action":"remove","lines":["lname"],"id":13},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["C"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["U"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["S"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["I"]},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["D"]}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"remove","lines":["D"],"id":14},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"remove","lines":["I"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"remove","lines":["S"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["U"]}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["u"],"id":15},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["s"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["I"]},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["D"]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":25},"action":"remove","lines":["$phone = $_POST['phone'];"],"id":16},{"start":{"row":7,"column":25},"end":{"row":8,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":7,"column":17},"end":{"row":7,"column":22},"action":"remove","lines":["email"],"id":17},{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["E"]},{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["M"]}],[{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"remove","lines":["M"],"id":18}],[{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["m"],"id":19},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["p"]},{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["I"]},{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["D"]}],[{"start":{"row":7,"column":2},"end":{"row":7,"column":6},"action":"remove","lines":["mail"],"id":20},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":["e"]}],[{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"insert","lines":["e"],"id":21},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"insert","lines":["m"]},{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"insert","lines":["p"]},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["l"]},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["y"]},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"insert","lines":["e"]},{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"insert","lines":["e"]},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["_"]}],[{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":["I"],"id":22},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["D"]}],[{"start":{"row":9,"column":30},"end":{"row":9,"column":72},"action":"remove","lines":["CUS_FNAME, CUS_LNAME, CUS_PHONE, CUS_EMAIL"],"id":23},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":["P"]},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"insert","lines":["u"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"insert","lines":["r"]},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"insert","lines":["D"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["a"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["t"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["e"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["."]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":[","]}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":[" "],"id":24}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":[" "],"id":25},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"remove","lines":[","]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"remove","lines":["."]}],[{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":[","],"id":26}],[{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":[" "],"id":27},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["C"]}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":["C"],"id":28},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"remove","lines":[" "]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"remove","lines":[","]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"remove","lines":["e"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["t"]}],[{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"remove","lines":["a"],"id":29},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"remove","lines":["D"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"remove","lines":["r"]},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"remove","lines":["u"]}],[{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"insert","lines":["U"],"id":30},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"insert","lines":["R"]},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"insert","lines":["_"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["D"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["A"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["T"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["E"]}],[{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":[","],"id":31}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":[" "],"id":32},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["C"]}],[{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["U"],"id":33},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["S"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["_"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["I"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["D"]},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":[","]}],[{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"insert","lines":[" "],"id":34},{"start":{"row":9,"column":48},"end":{"row":9,"column":49},"action":"insert","lines":["E"]},{"start":{"row":9,"column":49},"end":{"row":9,"column":50},"action":"insert","lines":["M"]},{"start":{"row":9,"column":50},"end":{"row":9,"column":51},"action":"insert","lines":["P"]},{"start":{"row":9,"column":51},"end":{"row":9,"column":52},"action":"insert","lines":[")"]},{"start":{"row":9,"column":52},"end":{"row":9,"column":53},"action":"insert","lines":["I"]},{"start":{"row":9,"column":53},"end":{"row":9,"column":54},"action":"insert","lines":["D"]}],[{"start":{"row":9,"column":53},"end":{"row":9,"column":54},"action":"remove","lines":["D"],"id":35},{"start":{"row":9,"column":52},"end":{"row":9,"column":53},"action":"remove","lines":["I"]},{"start":{"row":9,"column":51},"end":{"row":9,"column":52},"action":"remove","lines":[")"]},{"start":{"row":9,"column":50},"end":{"row":9,"column":51},"action":"remove","lines":["P"]}],[{"start":{"row":9,"column":50},"end":{"row":9,"column":51},"action":"insert","lines":["P"],"id":36},{"start":{"row":9,"column":51},"end":{"row":9,"column":52},"action":"insert","lines":["_"]},{"start":{"row":9,"column":52},"end":{"row":9,"column":53},"action":"insert","lines":["I"]},{"start":{"row":9,"column":53},"end":{"row":9,"column":54},"action":"insert","lines":["D"]}],[{"start":{"row":9,"column":75},"end":{"row":9,"column":76},"action":"remove","lines":["e"],"id":37},{"start":{"row":9,"column":74},"end":{"row":9,"column":75},"action":"remove","lines":["m"]},{"start":{"row":9,"column":73},"end":{"row":9,"column":74},"action":"remove","lines":["a"]},{"start":{"row":9,"column":72},"end":{"row":9,"column":73},"action":"remove","lines":["n"]},{"start":{"row":9,"column":71},"end":{"row":9,"column":72},"action":"remove","lines":["_"]},{"start":{"row":9,"column":70},"end":{"row":9,"column":71},"action":"remove","lines":["t"]},{"start":{"row":9,"column":69},"end":{"row":9,"column":70},"action":"remove","lines":["s"]},{"start":{"row":9,"column":68},"end":{"row":9,"column":69},"action":"remove","lines":["r"]},{"start":{"row":9,"column":67},"end":{"row":9,"column":68},"action":"remove","lines":["i"]},{"start":{"row":9,"column":66},"end":{"row":9,"column":67},"action":"remove","lines":["f"]}],[{"start":{"row":9,"column":66},"end":{"row":9,"column":67},"action":"insert","lines":["p"],"id":38},{"start":{"row":9,"column":67},"end":{"row":9,"column":68},"action":"insert","lines":["u"]},{"start":{"row":9,"column":68},"end":{"row":9,"column":69},"action":"insert","lines":["r"]},{"start":{"row":9,"column":69},"end":{"row":9,"column":70},"action":"insert","lines":["c"]},{"start":{"row":9,"column":70},"end":{"row":9,"column":71},"action":"insert","lines":["h"]},{"start":{"row":9,"column":71},"end":{"row":9,"column":72},"action":"insert","lines":["a"]},{"start":{"row":9,"column":72},"end":{"row":9,"column":73},"action":"insert","lines":["s"]},{"start":{"row":9,"column":73},"end":{"row":9,"column":74},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":74},"end":{"row":9,"column":75},"action":"insert","lines":["_"],"id":39},{"start":{"row":9,"column":75},"end":{"row":9,"column":76},"action":"insert","lines":["d"]},{"start":{"row":9,"column":76},"end":{"row":9,"column":77},"action":"insert","lines":["a"]},{"start":{"row":9,"column":77},"end":{"row":9,"column":78},"action":"insert","lines":["t"]},{"start":{"row":9,"column":78},"end":{"row":9,"column":79},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":92},"end":{"row":9,"column":93},"action":"remove","lines":["e"],"id":40},{"start":{"row":9,"column":91},"end":{"row":9,"column":92},"action":"remove","lines":["m"]},{"start":{"row":9,"column":90},"end":{"row":9,"column":91},"action":"remove","lines":["a"]},{"start":{"row":9,"column":89},"end":{"row":9,"column":90},"action":"remove","lines":["n"]},{"start":{"row":9,"column":88},"end":{"row":9,"column":89},"action":"remove","lines":["_"]},{"start":{"row":9,"column":87},"end":{"row":9,"column":88},"action":"remove","lines":["t"]},{"start":{"row":9,"column":86},"end":{"row":9,"column":87},"action":"remove","lines":["s"]}],[{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"remove","lines":["a"],"id":41},{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"remove","lines":["l"]}],[{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"insert","lines":["C"],"id":42}],[{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"remove","lines":["C"],"id":43}],[{"start":{"row":9,"column":84},"end":{"row":9,"column":85},"action":"insert","lines":["c"],"id":44},{"start":{"row":9,"column":85},"end":{"row":9,"column":86},"action":"insert","lines":["u"]},{"start":{"row":9,"column":86},"end":{"row":9,"column":87},"action":"insert","lines":["s"]}],[{"start":{"row":9,"column":83},"end":{"row":9,"column":87},"action":"remove","lines":["$cus"],"id":45},{"start":{"row":9,"column":83},"end":{"row":9,"column":95},"action":"insert","lines":["$customer_ID"]}],[{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":[","],"id":46},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":[" "]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["'"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["$"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["e"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["m"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["a"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["i"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["l"]},{"start":{"row":9,"column":106},"end":{"row":9,"column":107},"action":"remove","lines":["'"]}],[{"start":{"row":9,"column":104},"end":{"row":9,"column":105},"action":"remove","lines":["e"],"id":47}],[{"start":{"row":9,"column":103},"end":{"row":9,"column":104},"action":"remove","lines":["n"],"id":48},{"start":{"row":9,"column":102},"end":{"row":9,"column":103},"action":"remove","lines":["o"]},{"start":{"row":9,"column":101},"end":{"row":9,"column":102},"action":"remove","lines":["h"]},{"start":{"row":9,"column":100},"end":{"row":9,"column":101},"action":"remove","lines":["p"]}],[{"start":{"row":9,"column":100},"end":{"row":9,"column":101},"action":"insert","lines":["e"],"id":49}],[{"start":{"row":9,"column":99},"end":{"row":9,"column":101},"action":"remove","lines":["$e"],"id":50},{"start":{"row":9,"column":99},"end":{"row":9,"column":111},"action":"insert","lines":["$employee_ID"]}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["0"],"id":51}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"remove","lines":["0"],"id":52}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["o"],"id":53}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":12},"action":"remove","lines":["$employee_ID"],"id":54},{"start":{"row":7,"column":0},"end":{"row":7,"column":12},"action":"insert","lines":["$employee_ID"]}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":["h"],"id":55,"ignore":true}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["h"],"id":56,"ignore":true}],[{"start":{"row":17,"column":2},"end":{"row":17,"column":3},"action":"insert","lines":[" "],"id":57},{"start":{"row":17,"column":3},"end":{"row":17,"column":4},"action":"insert","lines":["g"]},{"start":{"row":17,"column":4},"end":{"row":17,"column":5},"action":"insert","lines":["e"]},{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"insert","lines":[" "],"id":58},{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"insert","lines":["o"]},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["u"]},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":10},"end":{"row":17,"column":11},"action":"insert","lines":[" "],"id":59},{"start":{"row":17,"column":11},"end":{"row":17,"column":12},"action":"insert","lines":["o"]},{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["f"]}],[{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":[" "],"id":60},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["h"]},{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["e"]},{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":["r"]},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":[" "],"id":61},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["m"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["e"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["l"]}],[{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":[" "],"id":62},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["j"]},{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["k"]},{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["j"]},{"start":{"row":17,"column":26},"end":{"row":17,"column":27},"action":"insert","lines":["k"]},{"start":{"row":17,"column":27},"end":{"row":17,"column":28},"action":"insert","lines":["j"]},{"start":{"row":17,"column":28},"end":{"row":17,"column":29},"action":"insert","lines":["k"]},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["j"]},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["k"]}],[{"start":{"row":17,"column":3},"end":{"row":17,"column":31},"action":"remove","lines":["get out of here mel jkjkjkjk"],"id":63},{"start":{"row":17,"column":2},"end":{"row":17,"column":3},"action":"remove","lines":[" "]}],[{"start":{"row":13,"column":1},"end":{"row":13,"column":2},"action":"insert","lines":[" "],"id":64}],[{"start":{"row":12,"column":30},"end":{"row":12,"column":31},"action":"insert","lines":["s"],"id":65,"ignore":true}],[{"start":{"row":12,"column":22},"end":{"row":12,"column":31},"action":"remove","lines":["Customers"],"id":66},{"start":{"row":12,"column":22},"end":{"row":12,"column":23},"action":"insert","lines":["P"]},{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["u"]},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"insert","lines":["r"]},{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"insert","lines":["c"]},{"start":{"row":12,"column":26},"end":{"row":12,"column":27},"action":"insert","lines":["h"]},{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"insert","lines":["a"]},{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":["s"]},{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":28},"action":"remove","lines":["CUSTOMER"],"id":67},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":["P"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"insert","lines":["u"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["r"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":["c"]},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"insert","lines":["h"]},{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"insert","lines":["a"]}],[{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"remove","lines":["a"],"id":68},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":["h"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["c"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["r"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":["u"]}],[{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"insert","lines":["U"],"id":69},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["Y"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":["R"]}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["R"],"id":70},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["Y"]}],[{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["R"],"id":71},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":["C"]},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"insert","lines":["H"]},{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"insert","lines":["A"]},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":["S"]},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"insert","lines":["E"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":28},"end":{"row":9,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1554236124795,"hash":"fa608e192e168858ab85ea8b24a4189941ab5cc8"}