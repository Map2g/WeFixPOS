{"filter":false,"title":"DeleteCus.php","tooltip":"/DeleteCus.php","undoManager":{"mark":82,"position":82,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":2},"action":"insert","lines":["<?php","include 'config.php';","","//*******************************************************************************************************************","","$cusID = $_POST['id'];","$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));","$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));","$email = $_POST['email'];","$phone = $_POST['phone'];","","$sql = \"UPDATE CUSTOMER","        SET CUS_FNAME = '$first_name', CUS_LNAME = '$last_name', CUS_EMAIL = '$email', CUS_PHONE = '$phone'","        WHERE CUS_ID = '$cusID'\";","","if(mysqli_query($conn, $sql)){","    header(\"location: Customers.php\");","}else {","    echo \"Error\" . $sql . \"<br>\" . mysqli_error($conn);","}","","?>"],"id":1}],[{"start":{"row":6,"column":0},"end":{"row":9,"column":25},"action":"remove","lines":["$first_name = mysql_real_escape_string(htmlspecialchars($_POST['fname']));","$last_name = mysql_real_escape_string(htmlspecialchars($_POST['lname']));","$email = $_POST['email'];","$phone = $_POST['phone'];"],"id":2},{"start":{"row":5,"column":22},"end":{"row":6,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":14},"action":"remove","lines":["UPDATE"],"id":3},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["d"]}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"remove","lines":["d"],"id":4}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["D"],"id":5},{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":["E"]},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["L"]},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"insert","lines":["E"]},{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"insert","lines":["T"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["E"]}],[{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":[" "],"id":6},{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["W"]},{"start":{"row":7,"column":25},"end":{"row":7,"column":26},"action":"insert","lines":["H"]},{"start":{"row":7,"column":26},"end":{"row":7,"column":27},"action":"insert","lines":["E"]},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["R"]},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["E"]}],[{"start":{"row":7,"column":24},"end":{"row":8,"column":107},"action":"remove","lines":["WHERE","        SET CUS_FNAME = '$first_name', CUS_LNAME = '$last_name', CUS_EMAIL = '$email', CUS_PHONE = '$phone'"],"id":7},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "]}],[{"start":{"row":7,"column":23},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":8}],[{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "],"id":9},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "]},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"remove","lines":[" "]}],[{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":[" "],"id":10}],[{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["F"],"id":11},{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["R"]},{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["O"]},{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["M"]}],[{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":[" "],"id":12}],[{"start":{"row":15,"column":2},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""]},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":["/"]},{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"insert","lines":["/"]},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"insert","lines":["W"]}],[{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"insert","lines":["e"],"id":14}],[{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"remove","lines":["e"],"id":15},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"remove","lines":["W"]},{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"remove","lines":["/"]},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"remove","lines":["/"]},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"remove","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["",""]},{"start":{"row":15,"column":2},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":["/"]},{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"insert","lines":["/"]},{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"insert","lines":["W"]},{"start":{"row":16,"column":3},"end":{"row":16,"column":4},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":["'"],"id":17},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["l"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["l"]}],[{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":[" "],"id":18}],[{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"remove","lines":[" "],"id":19},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"remove","lines":["l"]},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"remove","lines":["l"]},{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"remove","lines":["'"]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":[" "],"id":20},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["m"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["g"]}],[{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"remove","lines":["g"],"id":21},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"remove","lines":["m"]}],[{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["m"],"id":22},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["i"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":["g"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["h"]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":[" "],"id":23},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["h"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["a"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["v"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":["e"],"id":24},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":["v"]},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["a"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"remove","lines":["h"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"remove","lines":[" "]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"remove","lines":["t"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"remove","lines":["h"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"remove","lines":["g"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"remove","lines":["i"]},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"remove","lines":["m"]},{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":["'"],"id":25},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["l"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["l"]}],[{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":[" "],"id":26},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["p"]},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["r"]},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":["o"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["a"]}],[{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"remove","lines":["a"],"id":27}],[{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["b"],"id":28},{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["a"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["b"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["l"]},{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["y"]}],[{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":[" "],"id":29},{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":["h"]},{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["v"]}],[{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"remove","lines":["v"],"id":30}],[{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["a"],"id":31},{"start":{"row":16,"column":19},"end":{"row":16,"column":20},"action":"insert","lines":["v"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":[" "],"id":32},{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["t"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"insert","lines":["o"]}],[{"start":{"row":16,"column":24},"end":{"row":16,"column":25},"action":"insert","lines":[" "],"id":33},{"start":{"row":16,"column":25},"end":{"row":16,"column":26},"action":"insert","lines":["a"]},{"start":{"row":16,"column":26},"end":{"row":16,"column":27},"action":"insert","lines":["d"]}],[{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":[" "],"id":34},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":["a"]},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":[" "],"id":35}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"remove","lines":[" "],"id":36},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"remove","lines":["n"]},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"remove","lines":["a"]},{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":["d"],"id":37}],[{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":[" "],"id":38},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["a"]},{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":31},"end":{"row":16,"column":32},"action":"insert","lines":[" "],"id":39},{"start":{"row":16,"column":32},"end":{"row":16,"column":33},"action":"insert","lines":["e"]},{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"insert","lines":["r"]},{"start":{"row":16,"column":34},"end":{"row":16,"column":35},"action":"insert","lines":["r"]},{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"insert","lines":["o"]}],[{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":[" "],"id":40}],[{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"remove","lines":[" "],"id":41}],[{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":["r"],"id":42}],[{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"insert","lines":[" "],"id":43},{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"remove","lines":["e"],"id":44}],[{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["m"],"id":45},{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"insert","lines":["e"]},{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"insert","lines":["s"]},{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"insert","lines":["s"]},{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"insert","lines":["a"]},{"start":{"row":16,"column":43},"end":{"row":16,"column":44},"action":"insert","lines":["g"]},{"start":{"row":16,"column":44},"end":{"row":16,"column":45},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":45},"end":{"row":16,"column":46},"action":"insert","lines":[" "],"id":46},{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"insert","lines":["o"]},{"start":{"row":16,"column":47},"end":{"row":16,"column":48},"action":"insert","lines":["r"]}],[{"start":{"row":16,"column":48},"end":{"row":16,"column":49},"action":"insert","lines":[" "],"id":47},{"start":{"row":16,"column":49},"end":{"row":16,"column":50},"action":"insert","lines":["s"]},{"start":{"row":16,"column":50},"end":{"row":16,"column":51},"action":"insert","lines":["o"]},{"start":{"row":16,"column":51},"end":{"row":16,"column":52},"action":"insert","lines":["m"]},{"start":{"row":16,"column":52},"end":{"row":16,"column":53},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":53},"end":{"row":16,"column":54},"action":"insert","lines":[" "],"id":48},{"start":{"row":16,"column":54},"end":{"row":16,"column":55},"action":"insert","lines":["w"]},{"start":{"row":16,"column":55},"end":{"row":16,"column":56},"action":"insert","lines":["a"]},{"start":{"row":16,"column":56},"end":{"row":16,"column":57},"action":"insert","lines":["y"]}],[{"start":{"row":16,"column":57},"end":{"row":16,"column":58},"action":"insert","lines":[" "],"id":49},{"start":{"row":16,"column":58},"end":{"row":16,"column":59},"action":"insert","lines":["t"]},{"start":{"row":16,"column":59},"end":{"row":16,"column":60},"action":"insert","lines":["o"]}],[{"start":{"row":16,"column":60},"end":{"row":16,"column":61},"action":"insert","lines":[" "],"id":50},{"start":{"row":16,"column":61},"end":{"row":16,"column":62},"action":"insert","lines":["h"]},{"start":{"row":16,"column":62},"end":{"row":16,"column":63},"action":"insert","lines":["a"]},{"start":{"row":16,"column":63},"end":{"row":16,"column":64},"action":"insert","lines":["n"]},{"start":{"row":16,"column":64},"end":{"row":16,"column":65},"action":"insert","lines":["d"]}],[{"start":{"row":16,"column":65},"end":{"row":16,"column":66},"action":"insert","lines":[" "],"id":51},{"start":{"row":16,"column":66},"end":{"row":16,"column":67},"action":"insert","lines":["l"]}],[{"start":{"row":16,"column":66},"end":{"row":16,"column":67},"action":"remove","lines":["l"],"id":52},{"start":{"row":16,"column":65},"end":{"row":16,"column":66},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":65},"end":{"row":16,"column":66},"action":"insert","lines":["l"],"id":53},{"start":{"row":16,"column":66},"end":{"row":16,"column":67},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":67},"end":{"row":16,"column":68},"action":"insert","lines":[" "],"id":54},{"start":{"row":16,"column":68},"end":{"row":16,"column":69},"action":"insert","lines":["t"]},{"start":{"row":16,"column":69},"end":{"row":16,"column":70},"action":"insert","lines":["r"]},{"start":{"row":16,"column":70},"end":{"row":16,"column":71},"action":"insert","lines":["y"]},{"start":{"row":16,"column":71},"end":{"row":16,"column":72},"action":"insert","lines":["i"]},{"start":{"row":16,"column":72},"end":{"row":16,"column":73},"action":"insert","lines":["n"]},{"start":{"row":16,"column":73},"end":{"row":16,"column":74},"action":"insert","lines":["g"]}],[{"start":{"row":16,"column":74},"end":{"row":16,"column":75},"action":"insert","lines":[" "],"id":55},{"start":{"row":16,"column":75},"end":{"row":16,"column":76},"action":"insert","lines":["t"]},{"start":{"row":16,"column":76},"end":{"row":16,"column":77},"action":"insert","lines":["o"]}],[{"start":{"row":16,"column":77},"end":{"row":16,"column":78},"action":"insert","lines":[" "],"id":56},{"start":{"row":16,"column":78},"end":{"row":16,"column":79},"action":"insert","lines":["d"]},{"start":{"row":16,"column":79},"end":{"row":16,"column":80},"action":"insert","lines":["e"]},{"start":{"row":16,"column":80},"end":{"row":16,"column":81},"action":"insert","lines":["l"]},{"start":{"row":16,"column":81},"end":{"row":16,"column":82},"action":"insert","lines":["e"]},{"start":{"row":16,"column":82},"end":{"row":16,"column":83},"action":"insert","lines":["t"]},{"start":{"row":16,"column":83},"end":{"row":16,"column":84},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"insert","lines":[" "],"id":57},{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"insert","lines":["a"]}],[{"start":{"row":16,"column":86},"end":{"row":16,"column":87},"action":"insert","lines":[" "],"id":58}],[{"start":{"row":16,"column":86},"end":{"row":16,"column":87},"action":"remove","lines":[" "],"id":59}],[{"start":{"row":16,"column":86},"end":{"row":16,"column":87},"action":"insert","lines":["n"],"id":60}],[{"start":{"row":16,"column":87},"end":{"row":16,"column":88},"action":"insert","lines":[" "],"id":61},{"start":{"row":16,"column":88},"end":{"row":16,"column":89},"action":"insert","lines":["e"]},{"start":{"row":16,"column":89},"end":{"row":16,"column":90},"action":"insert","lines":["m"]},{"start":{"row":16,"column":90},"end":{"row":16,"column":91},"action":"insert","lines":["p"]},{"start":{"row":16,"column":91},"end":{"row":16,"column":92},"action":"insert","lines":["l"]},{"start":{"row":16,"column":92},"end":{"row":16,"column":93},"action":"insert","lines":["o"]},{"start":{"row":16,"column":93},"end":{"row":16,"column":94},"action":"insert","lines":["y"]},{"start":{"row":16,"column":94},"end":{"row":16,"column":95},"action":"insert","lines":["e"]},{"start":{"row":16,"column":95},"end":{"row":16,"column":96},"action":"insert","lines":["e"]},{"start":{"row":16,"column":96},"end":{"row":16,"column":97},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":96},"end":{"row":16,"column":97},"action":"remove","lines":["e"],"id":62}],[{"start":{"row":16,"column":96},"end":{"row":16,"column":97},"action":"insert","lines":[" "],"id":63},{"start":{"row":16,"column":97},"end":{"row":16,"column":98},"action":"insert","lines":["o"]},{"start":{"row":16,"column":98},"end":{"row":16,"column":99},"action":"insert","lines":["r"]}],[{"start":{"row":16,"column":99},"end":{"row":16,"column":100},"action":"insert","lines":[" "],"id":64},{"start":{"row":16,"column":100},"end":{"row":16,"column":101},"action":"insert","lines":["c"]},{"start":{"row":16,"column":101},"end":{"row":16,"column":102},"action":"insert","lines":["u"]},{"start":{"row":16,"column":102},"end":{"row":16,"column":103},"action":"insert","lines":["s"]},{"start":{"row":16,"column":103},"end":{"row":16,"column":104},"action":"insert","lines":["t"]},{"start":{"row":16,"column":104},"end":{"row":16,"column":105},"action":"insert","lines":["o"]},{"start":{"row":16,"column":105},"end":{"row":16,"column":106},"action":"insert","lines":["m"]},{"start":{"row":16,"column":106},"end":{"row":16,"column":107},"action":"insert","lines":["e"]},{"start":{"row":16,"column":107},"end":{"row":16,"column":108},"action":"insert","lines":["r"]}],[{"start":{"row":16,"column":108},"end":{"row":16,"column":109},"action":"insert","lines":[" "],"id":65},{"start":{"row":16,"column":109},"end":{"row":16,"column":110},"action":"insert","lines":["w"]}],[{"start":{"row":16,"column":109},"end":{"row":16,"column":110},"action":"remove","lines":["w"],"id":66}],[{"start":{"row":16,"column":109},"end":{"row":16,"column":110},"action":"insert","lines":["t"],"id":67},{"start":{"row":16,"column":110},"end":{"row":16,"column":111},"action":"insert","lines":["h"]},{"start":{"row":16,"column":111},"end":{"row":16,"column":112},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":111},"end":{"row":16,"column":112},"action":"remove","lines":["t"],"id":68}],[{"start":{"row":16,"column":111},"end":{"row":16,"column":112},"action":"insert","lines":["a"],"id":69},{"start":{"row":16,"column":112},"end":{"row":16,"column":113},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":113},"end":{"row":16,"column":114},"action":"insert","lines":[" "],"id":70},{"start":{"row":16,"column":114},"end":{"row":16,"column":115},"action":"insert","lines":["i"]},{"start":{"row":16,"column":115},"end":{"row":16,"column":116},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":116},"end":{"row":16,"column":117},"action":"insert","lines":[" "],"id":71},{"start":{"row":16,"column":117},"end":{"row":16,"column":118},"action":"insert","lines":["a"]},{"start":{"row":16,"column":118},"end":{"row":16,"column":119},"action":"insert","lines":["t"]},{"start":{"row":16,"column":119},"end":{"row":16,"column":120},"action":"insert","lines":["t"]},{"start":{"row":16,"column":120},"end":{"row":16,"column":121},"action":"insert","lines":["e"]}],[{"start":{"row":16,"column":120},"end":{"row":16,"column":121},"action":"remove","lines":["e"],"id":72}],[{"start":{"row":16,"column":120},"end":{"row":16,"column":121},"action":"insert","lines":["a"],"id":73},{"start":{"row":16,"column":121},"end":{"row":16,"column":122},"action":"insert","lines":["c"]},{"start":{"row":16,"column":122},"end":{"row":16,"column":123},"action":"insert","lines":["k"]}],[{"start":{"row":16,"column":122},"end":{"row":16,"column":123},"action":"remove","lines":["k"],"id":74}],[{"start":{"row":16,"column":122},"end":{"row":16,"column":123},"action":"insert","lines":["h"],"id":75},{"start":{"row":16,"column":123},"end":{"row":16,"column":124},"action":"insert","lines":["e"]},{"start":{"row":16,"column":124},"end":{"row":16,"column":125},"action":"insert","lines":["d"]}],[{"start":{"row":16,"column":125},"end":{"row":16,"column":126},"action":"insert","lines":[" "],"id":76},{"start":{"row":16,"column":126},"end":{"row":16,"column":127},"action":"insert","lines":["t"]},{"start":{"row":16,"column":127},"end":{"row":16,"column":128},"action":"insert","lines":["o"]}],[{"start":{"row":16,"column":128},"end":{"row":16,"column":129},"action":"insert","lines":[" "],"id":77}],[{"start":{"row":16,"column":129},"end":{"row":16,"column":130},"action":"insert","lines":["p"],"id":78},{"start":{"row":16,"column":130},"end":{"row":16,"column":131},"action":"insert","lines":["u"]},{"start":{"row":16,"column":131},"end":{"row":16,"column":132},"action":"insert","lines":["r"]}],[{"start":{"row":16,"column":131},"end":{"row":16,"column":132},"action":"remove","lines":["r"],"id":79},{"start":{"row":16,"column":130},"end":{"row":16,"column":131},"action":"remove","lines":["u"]},{"start":{"row":16,"column":129},"end":{"row":16,"column":130},"action":"remove","lines":["p"]}],[{"start":{"row":16,"column":129},"end":{"row":16,"column":130},"action":"insert","lines":["p"],"id":80},{"start":{"row":16,"column":130},"end":{"row":16,"column":131},"action":"insert","lines":["u"]},{"start":{"row":16,"column":131},"end":{"row":16,"column":132},"action":"insert","lines":["r"]},{"start":{"row":16,"column":132},"end":{"row":16,"column":133},"action":"insert","lines":["c"]},{"start":{"row":16,"column":133},"end":{"row":16,"column":134},"action":"insert","lines":["h"]},{"start":{"row":16,"column":134},"end":{"row":16,"column":135},"action":"insert","lines":["a"]},{"start":{"row":16,"column":135},"end":{"row":16,"column":136},"action":"insert","lines":["s"]},{"start":{"row":16,"column":136},"end":{"row":16,"column":137},"action":"insert","lines":["e"]},{"start":{"row":16,"column":137},"end":{"row":16,"column":138},"action":"insert","lines":["s"]},{"start":{"row":16,"column":138},"end":{"row":16,"column":139},"action":"insert","lines":["/"]}],[{"start":{"row":16,"column":139},"end":{"row":16,"column":140},"action":"insert","lines":[" "],"id":81}],[{"start":{"row":16,"column":139},"end":{"row":16,"column":140},"action":"remove","lines":[" "],"id":82}],[{"start":{"row":16,"column":139},"end":{"row":16,"column":140},"action":"insert","lines":["r"],"id":83},{"start":{"row":16,"column":140},"end":{"row":16,"column":141},"action":"insert","lines":["e"]},{"start":{"row":16,"column":141},"end":{"row":16,"column":142},"action":"insert","lines":["p"]},{"start":{"row":16,"column":142},"end":{"row":16,"column":143},"action":"insert","lines":["a"]},{"start":{"row":16,"column":143},"end":{"row":16,"column":144},"action":"insert","lines":["i"]},{"start":{"row":16,"column":144},"end":{"row":16,"column":145},"action":"insert","lines":["r"]},{"start":{"row":16,"column":145},"end":{"row":16,"column":146},"action":"insert","lines":["s"]},{"start":{"row":16,"column":146},"end":{"row":16,"column":147},"action":"insert","lines":["."]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":0},"end":{"row":16,"column":147},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1554250643314,"hash":"ae9bb597d9392b57d170d549aab4bd6d05f6e86e"}