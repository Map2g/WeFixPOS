{"filter":false,"title":"AddProd.php","tooltip":"/queries/AddProd.php","undoManager":{"mark":47,"position":47,"stack":[[{"start":{"row":0,"column":0},"end":{"row":18,"column":2},"action":"insert","lines":["<?php","","include 'config.php';","//*******************************************************************************************************************","","$first_name = $_POST['fname'];","$last_name = $_POST['lname'];","$email = $_POST['email'];","$phone = $_POST['phone'];","","$sql = \"INSERT INTO EMPLOYEE (EMP_FNAME, EMP_LNAME, EMP_PHONE, EMP_EMAIL) VALUES ('$first_name', '$last_name', '$email', '$phone')\";","","if(mysqli_query($conn, $sql)){","    header(\"location: pages/index.html\");","}else {","    echo \"Error\" . $sql . \"<br>\" . mysqli_error($conn);","}","","?>"],"id":1}],[{"start":{"row":5,"column":22},"end":{"row":5,"column":23},"action":"remove","lines":["f"],"id":2}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"remove","lines":["t"],"id":3},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":["s"]},{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"remove","lines":["r"]},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"remove","lines":["i"]},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":["f"]}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["p"],"id":4},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["r"]},{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":["o"]},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["d"]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":["t"],"id":5},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"remove","lines":["s"]},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"remove","lines":["a"]},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"remove","lines":["l"]}],[{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"insert","lines":["p"],"id":6},{"start":{"row":6,"column":2},"end":{"row":6,"column":3},"action":"insert","lines":["r"]},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":["o"]},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["d"]}],[{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"remove","lines":["e"],"id":7},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"remove","lines":["m"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"remove","lines":["a"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["n"]}],[{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"insert","lines":["d"],"id":8},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"insert","lines":["e"]},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["s"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"remove","lines":["c"],"id":9},{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"remove","lines":["s"]},{"start":{"row":6,"column":7},"end":{"row":6,"column":8},"action":"remove","lines":["e"]},{"start":{"row":6,"column":6},"end":{"row":6,"column":7},"action":"remove","lines":["d"]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"remove","lines":["_"]},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":["d"]},{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"remove","lines":["o"]}],[{"start":{"row":6,"column":3},"end":{"row":6,"column":4},"action":"insert","lines":["i"],"id":10},{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"insert","lines":["c"]},{"start":{"row":6,"column":5},"end":{"row":6,"column":6},"action":"insert","lines":["e"]}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"remove","lines":["l"],"id":11},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":["i"]},{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"remove","lines":["a"]},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"remove","lines":["m"]},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":["e"]}],[{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"insert","lines":["s"],"id":12},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"insert","lines":["t"]},{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"insert","lines":["r"]},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["o"]},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["c"]}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"remove","lines":["c"],"id":13},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"remove","lines":["o"]},{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"remove","lines":["r"]}],[{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"insert","lines":["o"],"id":14},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["c"]},{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["e"],"id":15},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["n"]},{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"remove","lines":["o"]},{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"remove","lines":["h"]},{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"remove","lines":["p"]}],[{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"insert","lines":["d"],"id":16},{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"insert","lines":["e"]},{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"insert","lines":["s"]},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["c"]}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"remove","lines":["_"],"id":17},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":["d"]},{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"remove","lines":["o"]},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"remove","lines":["r"]},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":["p"]}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"remove","lines":["e"],"id":18},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"remove","lines":["m"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["a"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["n"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["l"]}],[{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["p"],"id":19},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["r"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["i"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["c"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"remove","lines":["e"],"id":20},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"remove","lines":["c"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["i"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["r"]}],[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["r"],"id":21},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["i"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["c"]},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"remove","lines":["l"],"id":22},{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"remove","lines":["i"]},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"remove","lines":["a"]},{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"remove","lines":["m"]},{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"remove","lines":["e"]}],[{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["s"],"id":23},{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["t"]},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["o"]},{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["c"]},{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"remove","lines":["e"],"id":24},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"remove","lines":["n"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["o"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["h"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["p"]}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["d"],"id":25},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["e"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["s"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":["c"]}],[{"start":{"row":10,"column":20},"end":{"row":10,"column":28},"action":"remove","lines":["EMPLOYEE"],"id":26},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["P"]},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":["R"]},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["O"]},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"insert","lines":["D"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"insert","lines":["U"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"insert","lines":["C"]},{"start":{"row":10,"column":26},"end":{"row":10,"column":27},"action":"insert","lines":["T"]}],[{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"remove","lines":["P"],"id":27},{"start":{"row":10,"column":30},"end":{"row":10,"column":31},"action":"remove","lines":["M"]},{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"remove","lines":["E"]}],[{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"insert","lines":["P"],"id":28},{"start":{"row":10,"column":30},"end":{"row":10,"column":31},"action":"insert","lines":["R"]},{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"insert","lines":["O"]},{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"insert","lines":["D"]}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"remove","lines":["F"],"id":29}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"remove","lines":["P"],"id":30},{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"remove","lines":["M"]},{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"remove","lines":["E"]}],[{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"insert","lines":["P"],"id":31},{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"insert","lines":["R"]},{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":["O"]},{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"insert","lines":["D"]}],[{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"remove","lines":["E"],"id":32},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"remove","lines":["M"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"remove","lines":["A"]},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"remove","lines":["N"]}],[{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["P"],"id":33},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"insert","lines":["R"]},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["C"]}],[{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"remove","lines":["C"],"id":34}],[{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["I"],"id":35},{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["C"]},{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"insert","lines":["E"]}],[{"start":{"row":10,"column":46},"end":{"row":10,"column":47},"action":"remove","lines":["L"],"id":36}],[{"start":{"row":10,"column":52},"end":{"row":10,"column":61},"action":"remove","lines":["EMP_PHONE"],"id":37},{"start":{"row":10,"column":52},"end":{"row":10,"column":53},"action":"insert","lines":["P"]},{"start":{"row":10,"column":53},"end":{"row":10,"column":54},"action":"insert","lines":["R"]},{"start":{"row":10,"column":54},"end":{"row":10,"column":55},"action":"insert","lines":["O"]},{"start":{"row":10,"column":55},"end":{"row":10,"column":56},"action":"insert","lines":["D"]},{"start":{"row":10,"column":56},"end":{"row":10,"column":57},"action":"insert","lines":["_"]},{"start":{"row":10,"column":57},"end":{"row":10,"column":58},"action":"insert","lines":["D"]},{"start":{"row":10,"column":58},"end":{"row":10,"column":59},"action":"insert","lines":["E"]},{"start":{"row":10,"column":59},"end":{"row":10,"column":60},"action":"insert","lines":["S"]},{"start":{"row":10,"column":60},"end":{"row":10,"column":61},"action":"insert","lines":["C"]}],[{"start":{"row":10,"column":63},"end":{"row":10,"column":72},"action":"remove","lines":["EMP_EMAIL"],"id":38},{"start":{"row":10,"column":63},"end":{"row":10,"column":64},"action":"insert","lines":["P"]},{"start":{"row":10,"column":64},"end":{"row":10,"column":65},"action":"insert","lines":["R"]},{"start":{"row":10,"column":65},"end":{"row":10,"column":66},"action":"insert","lines":["O"]},{"start":{"row":10,"column":66},"end":{"row":10,"column":67},"action":"insert","lines":["D"]},{"start":{"row":10,"column":67},"end":{"row":10,"column":68},"action":"insert","lines":["_"]},{"start":{"row":10,"column":68},"end":{"row":10,"column":69},"action":"insert","lines":["S"]},{"start":{"row":10,"column":69},"end":{"row":10,"column":70},"action":"insert","lines":["T"]},{"start":{"row":10,"column":70},"end":{"row":10,"column":71},"action":"insert","lines":["O"]},{"start":{"row":10,"column":71},"end":{"row":10,"column":72},"action":"insert","lines":["C"]},{"start":{"row":10,"column":72},"end":{"row":10,"column":73},"action":"insert","lines":["K"]}],[{"start":{"row":10,"column":85},"end":{"row":10,"column":95},"action":"remove","lines":["first_name"],"id":39},{"start":{"row":10,"column":85},"end":{"row":10,"column":86},"action":"insert","lines":["P"]},{"start":{"row":10,"column":86},"end":{"row":10,"column":87},"action":"insert","lines":["R"]},{"start":{"row":10,"column":87},"end":{"row":10,"column":88},"action":"insert","lines":["I"]}],[{"start":{"row":10,"column":87},"end":{"row":10,"column":88},"action":"remove","lines":["I"],"id":40},{"start":{"row":10,"column":86},"end":{"row":10,"column":87},"action":"remove","lines":["R"]},{"start":{"row":10,"column":85},"end":{"row":10,"column":86},"action":"remove","lines":["P"]}],[{"start":{"row":10,"column":85},"end":{"row":10,"column":86},"action":"insert","lines":["p"],"id":41},{"start":{"row":10,"column":86},"end":{"row":10,"column":87},"action":"insert","lines":["r"]},{"start":{"row":10,"column":87},"end":{"row":10,"column":88},"action":"insert","lines":["i"]},{"start":{"row":10,"column":88},"end":{"row":10,"column":89},"action":"insert","lines":["c"]},{"start":{"row":10,"column":89},"end":{"row":10,"column":90},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":95},"end":{"row":10,"column":104},"action":"remove","lines":["last_name"],"id":42},{"start":{"row":10,"column":95},"end":{"row":10,"column":96},"action":"insert","lines":["n"]},{"start":{"row":10,"column":96},"end":{"row":10,"column":97},"action":"insert","lines":["a"]},{"start":{"row":10,"column":97},"end":{"row":10,"column":98},"action":"insert","lines":["m"]},{"start":{"row":10,"column":98},"end":{"row":10,"column":99},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":104},"end":{"row":10,"column":108},"action":"remove","lines":["emai"],"id":43},{"start":{"row":10,"column":104},"end":{"row":10,"column":105},"action":"insert","lines":["d"]},{"start":{"row":10,"column":105},"end":{"row":10,"column":106},"action":"insert","lines":["e"]},{"start":{"row":10,"column":106},"end":{"row":10,"column":107},"action":"insert","lines":["s"]},{"start":{"row":10,"column":107},"end":{"row":10,"column":108},"action":"insert","lines":["c"]}],[{"start":{"row":10,"column":108},"end":{"row":10,"column":109},"action":"remove","lines":["l"],"id":44}],[{"start":{"row":10,"column":113},"end":{"row":10,"column":118},"action":"remove","lines":["phone"],"id":45},{"start":{"row":10,"column":113},"end":{"row":10,"column":114},"action":"insert","lines":["s"]},{"start":{"row":10,"column":114},"end":{"row":10,"column":115},"action":"insert","lines":["t"]},{"start":{"row":10,"column":115},"end":{"row":10,"column":116},"action":"insert","lines":["o"]},{"start":{"row":10,"column":116},"end":{"row":10,"column":117},"action":"insert","lines":["c"]},{"start":{"row":10,"column":117},"end":{"row":10,"column":118},"action":"insert","lines":["k"]}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["/"],"id":46},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["s"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"remove","lines":["e"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"remove","lines":["g"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["a"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["p"]}],[{"start":{"row":13,"column":22},"end":{"row":13,"column":32},"action":"remove","lines":["index.html"],"id":47},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["I"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["n"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["v"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["e"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["n"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["t"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["o"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["r"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["y"]},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["."]}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["p"],"id":48},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["h"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["p"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":38},"end":{"row":13,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1554222613269,"hash":"c324a179d62930bd2bf687d690d949205d9d4927"}