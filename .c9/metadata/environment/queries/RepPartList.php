{"filter":false,"title":"RepPartList.php","tooltip":"/queries/RepPartList.php","undoManager":{"mark":52,"position":52,"stack":[[{"start":{"row":1,"column":54},"end":{"row":1,"column":55},"action":"insert","lines":[" "],"id":259},{"start":{"row":1,"column":55},"end":{"row":1,"column":56},"action":"insert","lines":["o"]},{"start":{"row":1,"column":56},"end":{"row":1,"column":57},"action":"insert","lines":["r"]}],[{"start":{"row":1,"column":57},"end":{"row":1,"column":58},"action":"insert","lines":[" "],"id":260},{"start":{"row":1,"column":58},"end":{"row":1,"column":59},"action":"insert","lines":["p"]},{"start":{"row":1,"column":59},"end":{"row":1,"column":60},"action":"insert","lines":["r"]},{"start":{"row":1,"column":60},"end":{"row":1,"column":61},"action":"insert","lines":["o"]},{"start":{"row":1,"column":61},"end":{"row":1,"column":62},"action":"insert","lines":["d"]},{"start":{"row":1,"column":62},"end":{"row":1,"column":63},"action":"insert","lines":["y"]},{"start":{"row":1,"column":63},"end":{"row":1,"column":64},"action":"insert","lines":["c"]}],[{"start":{"row":1,"column":63},"end":{"row":1,"column":64},"action":"remove","lines":["c"],"id":261},{"start":{"row":1,"column":62},"end":{"row":1,"column":63},"action":"remove","lines":["y"]}],[{"start":{"row":1,"column":62},"end":{"row":1,"column":63},"action":"insert","lines":["u"],"id":262},{"start":{"row":1,"column":63},"end":{"row":1,"column":64},"action":"insert","lines":["c"]},{"start":{"row":1,"column":64},"end":{"row":1,"column":65},"action":"insert","lines":["t"]}],[{"start":{"row":1,"column":97},"end":{"row":1,"column":98},"action":"insert","lines":[" "],"id":263},{"start":{"row":1,"column":98},"end":{"row":1,"column":99},"action":"insert","lines":["a"]},{"start":{"row":1,"column":99},"end":{"row":1,"column":100},"action":"insert","lines":["n"]},{"start":{"row":1,"column":100},"end":{"row":1,"column":101},"action":"insert","lines":["d"]}],[{"start":{"row":1,"column":101},"end":{"row":1,"column":102},"action":"insert","lines":[" "],"id":264}],[{"start":{"row":1,"column":102},"end":{"row":1,"column":103},"action":"insert","lines":["A"],"id":265},{"start":{"row":1,"column":103},"end":{"row":1,"column":104},"action":"insert","lines":["d"]},{"start":{"row":1,"column":104},"end":{"row":1,"column":105},"action":"insert","lines":["d"]},{"start":{"row":1,"column":105},"end":{"row":1,"column":106},"action":"insert","lines":["P"]},{"start":{"row":1,"column":106},"end":{"row":1,"column":107},"action":"insert","lines":["u"]},{"start":{"row":1,"column":107},"end":{"row":1,"column":108},"action":"insert","lines":["r"]},{"start":{"row":1,"column":108},"end":{"row":1,"column":109},"action":"insert","lines":["c"]},{"start":{"row":1,"column":109},"end":{"row":1,"column":110},"action":"insert","lines":["h"]},{"start":{"row":1,"column":110},"end":{"row":1,"column":111},"action":"insert","lines":["a"]}],[{"start":{"row":1,"column":111},"end":{"row":1,"column":112},"action":"insert","lines":["s"],"id":266},{"start":{"row":1,"column":112},"end":{"row":1,"column":113},"action":"insert","lines":["e"]},{"start":{"row":1,"column":113},"end":{"row":1,"column":114},"action":"insert","lines":["F"]},{"start":{"row":1,"column":114},"end":{"row":1,"column":115},"action":"insert","lines":["o"]},{"start":{"row":1,"column":115},"end":{"row":1,"column":116},"action":"insert","lines":["r"]},{"start":{"row":1,"column":116},"end":{"row":1,"column":117},"action":"insert","lines":["m"]}],[{"start":{"row":1,"column":117},"end":{"row":1,"column":118},"action":"insert","lines":["."],"id":267},{"start":{"row":1,"column":118},"end":{"row":1,"column":119},"action":"insert","lines":["p"]},{"start":{"row":1,"column":119},"end":{"row":1,"column":120},"action":"insert","lines":["h"]},{"start":{"row":1,"column":120},"end":{"row":1,"column":121},"action":"insert","lines":["p"]}],[{"start":{"row":9,"column":22},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":268},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":11,"column":0},"end":{"row":14,"column":51},"action":"insert","lines":["$RepProdList = \"SELECT PRODUCT.PROD_NAME, REPAIR_INVOICE.PROD_PRICE, REPAIR_INVOICE.PROD_QUANTITY","                    FROM PRODUCT JOIN REPAIR_INVOICE ON PRODUCT.PROD_ID = REPAIR_INVOICE.PROD_ID","                    WHERE REPAIR_INVOICE.REP_ID = '\". $repairID .\"'\";","$RepProdResult = mysqli_query($conn, $RepProdList);"],"id":269}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"remove","lines":["p"],"id":270},{"start":{"row":11,"column":2},"end":{"row":11,"column":3},"action":"remove","lines":["e"]},{"start":{"row":11,"column":1},"end":{"row":11,"column":2},"action":"remove","lines":["R"]}],[{"start":{"row":11,"column":1},"end":{"row":11,"column":2},"action":"insert","lines":["P"],"id":271},{"start":{"row":11,"column":2},"end":{"row":11,"column":3},"action":"insert","lines":["u"]},{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"insert","lines":["r"]}],[{"start":{"row":11,"column":42},"end":{"row":11,"column":48},"action":"remove","lines":["REPAIR"],"id":272},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"insert","lines":["P"]},{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"insert","lines":["U"]},{"start":{"row":11,"column":44},"end":{"row":11,"column":45},"action":"insert","lines":["R"]},{"start":{"row":11,"column":45},"end":{"row":11,"column":46},"action":"insert","lines":["C"]},{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"insert","lines":["H"]},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"insert","lines":["A"]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"insert","lines":["S"]},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"insert","lines":["E"]}],[{"start":{"row":11,"column":72},"end":{"row":11,"column":77},"action":"remove","lines":["EPAIR"],"id":273},{"start":{"row":11,"column":71},"end":{"row":11,"column":72},"action":"remove","lines":["R"]}],[{"start":{"row":11,"column":71},"end":{"row":11,"column":72},"action":"insert","lines":["P"],"id":274},{"start":{"row":11,"column":72},"end":{"row":11,"column":73},"action":"insert","lines":["U"]},{"start":{"row":11,"column":73},"end":{"row":11,"column":74},"action":"insert","lines":["R"]},{"start":{"row":11,"column":74},"end":{"row":11,"column":75},"action":"insert","lines":["C"]},{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"insert","lines":["H"]},{"start":{"row":11,"column":76},"end":{"row":11,"column":77},"action":"insert","lines":["A"]},{"start":{"row":11,"column":77},"end":{"row":11,"column":78},"action":"insert","lines":["S"]},{"start":{"row":11,"column":78},"end":{"row":11,"column":79},"action":"insert","lines":["E"]}],[{"start":{"row":12,"column":38},"end":{"row":12,"column":44},"action":"remove","lines":["REPAIR"],"id":275},{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"insert","lines":["P"]},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"insert","lines":["U"]},{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"insert","lines":["R"]},{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"insert","lines":["C"]},{"start":{"row":12,"column":42},"end":{"row":12,"column":43},"action":"insert","lines":["H"]},{"start":{"row":12,"column":43},"end":{"row":12,"column":44},"action":"insert","lines":["A"]},{"start":{"row":12,"column":44},"end":{"row":12,"column":45},"action":"insert","lines":["S"]},{"start":{"row":12,"column":45},"end":{"row":12,"column":46},"action":"insert","lines":["E"]}],[{"start":{"row":12,"column":76},"end":{"row":12,"column":82},"action":"remove","lines":["REPAIR"],"id":276},{"start":{"row":12,"column":76},"end":{"row":12,"column":77},"action":"insert","lines":["P"]},{"start":{"row":12,"column":77},"end":{"row":12,"column":78},"action":"insert","lines":["U"]},{"start":{"row":12,"column":78},"end":{"row":12,"column":79},"action":"insert","lines":["R"]},{"start":{"row":12,"column":79},"end":{"row":12,"column":80},"action":"insert","lines":["C"]},{"start":{"row":12,"column":80},"end":{"row":12,"column":81},"action":"insert","lines":["H"]},{"start":{"row":12,"column":81},"end":{"row":12,"column":82},"action":"insert","lines":["A"]},{"start":{"row":12,"column":82},"end":{"row":12,"column":83},"action":"insert","lines":["S"]},{"start":{"row":12,"column":83},"end":{"row":12,"column":84},"action":"insert","lines":["E"]}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":32},"action":"remove","lines":["REPAIR"],"id":277},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["P"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["U"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["R"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["C"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["H"]},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["A"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["S"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["E"]}],[{"start":{"row":13,"column":57},"end":{"row":13,"column":63},"action":"remove","lines":["repair"],"id":278},{"start":{"row":13,"column":57},"end":{"row":13,"column":58},"action":"insert","lines":["p"]},{"start":{"row":13,"column":58},"end":{"row":13,"column":59},"action":"insert","lines":["u"]},{"start":{"row":13,"column":59},"end":{"row":13,"column":60},"action":"insert","lines":["r"]},{"start":{"row":13,"column":60},"end":{"row":13,"column":61},"action":"insert","lines":["c"]},{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"insert","lines":["h"]},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"insert","lines":["a"]},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"insert","lines":["s"]},{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":38},"end":{"row":14,"column":41},"action":"remove","lines":["Rep"],"id":279},{"start":{"row":14,"column":38},"end":{"row":14,"column":39},"action":"insert","lines":["P"]},{"start":{"row":14,"column":39},"end":{"row":14,"column":40},"action":"insert","lines":["u"]},{"start":{"row":14,"column":40},"end":{"row":14,"column":41},"action":"insert","lines":["r"]}],[{"start":{"row":14,"column":1},"end":{"row":14,"column":4},"action":"remove","lines":["Rep"],"id":280},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":["P"]},{"start":{"row":14,"column":2},"end":{"row":14,"column":3},"action":"insert","lines":["u"]},{"start":{"row":14,"column":3},"end":{"row":14,"column":4},"action":"insert","lines":["r"]}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":281}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"remove","lines":["",""],"id":282}],[{"start":{"row":17,"column":27},"end":{"row":17,"column":28},"action":"insert","lines":[" "],"id":283},{"start":{"row":17,"column":28},"end":{"row":17,"column":29},"action":"insert","lines":["|"]},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["|"]}],[{"start":{"row":17,"column":31},"end":{"row":17,"column":54},"action":"insert","lines":["$RepProdResult == false"],"id":284}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"remove","lines":["p"],"id":285},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"remove","lines":["e"]},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"remove","lines":["R"]}],[{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["P"],"id":286},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["u"]},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["r"]}],[{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":287}],[{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":288},{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"insert","lines":["i"],"id":289},{"start":{"row":21,"column":1},"end":{"row":21,"column":2},"action":"insert","lines":["f"]}],[{"start":{"row":21,"column":2},"end":{"row":21,"column":3},"action":"insert","lines":[" "],"id":290}],[{"start":{"row":21,"column":3},"end":{"row":21,"column":5},"action":"insert","lines":["()"],"id":291}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":5},"action":"insert","lines":["$"],"id":292},{"start":{"row":21,"column":5},"end":{"row":21,"column":6},"action":"insert","lines":["p"]},{"start":{"row":21,"column":6},"end":{"row":21,"column":7},"action":"insert","lines":["u"]},{"start":{"row":21,"column":7},"end":{"row":21,"column":8},"action":"insert","lines":["r"]},{"start":{"row":21,"column":8},"end":{"row":21,"column":9},"action":"insert","lines":["c"]},{"start":{"row":21,"column":9},"end":{"row":21,"column":10},"action":"insert","lines":["h"]},{"start":{"row":21,"column":10},"end":{"row":21,"column":11},"action":"insert","lines":["a"]},{"start":{"row":21,"column":11},"end":{"row":21,"column":12},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":12},"end":{"row":21,"column":13},"action":"insert","lines":["e"],"id":293}],[{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":[" "],"id":294},{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"insert","lines":["="]}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":[" "],"id":295},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":["t"]},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["r"]},{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["u"]},{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["{"],"id":296}],[{"start":{"row":21,"column":22},"end":{"row":23,"column":1},"action":"insert","lines":["","    ","}"],"id":297}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":5},"action":"insert","lines":["$"],"id":298},{"start":{"row":22,"column":5},"end":{"row":22,"column":6},"action":"insert","lines":["q"]},{"start":{"row":22,"column":6},"end":{"row":22,"column":7},"action":"insert","lines":["u"]},{"start":{"row":22,"column":7},"end":{"row":22,"column":8},"action":"insert","lines":["e"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"insert","lines":["r"]},{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"insert","lines":["y"]}],[{"start":{"row":22,"column":10},"end":{"row":22,"column":11},"action":"insert","lines":[" "],"id":299},{"start":{"row":22,"column":11},"end":{"row":22,"column":12},"action":"insert","lines":["="]}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"insert","lines":[" "],"id":300}],[{"start":{"row":22,"column":13},"end":{"row":22,"column":27},"action":"insert","lines":["$PurProdResult"],"id":301}],[{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"insert","lines":[";"],"id":302}],[{"start":{"row":23,"column":1},"end":{"row":23,"column":2},"action":"insert","lines":[" "],"id":303},{"start":{"row":23,"column":2},"end":{"row":23,"column":3},"action":"insert","lines":["e"]},{"start":{"row":23,"column":3},"end":{"row":23,"column":4},"action":"insert","lines":["l"]},{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["s"]},{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"insert","lines":[" "],"id":304},{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"insert","lines":["{"]}],[{"start":{"row":23,"column":8},"end":{"row":25,"column":1},"action":"insert","lines":["","    ","}"],"id":305}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":28},"action":"insert","lines":["$query = $PurProdResult;"],"id":306}],[{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"remove","lines":["r"],"id":307},{"start":{"row":24,"column":15},"end":{"row":24,"column":16},"action":"remove","lines":["u"]},{"start":{"row":24,"column":14},"end":{"row":24,"column":15},"action":"remove","lines":["P"]}],[{"start":{"row":24,"column":14},"end":{"row":24,"column":15},"action":"insert","lines":["R"],"id":308},{"start":{"row":24,"column":15},"end":{"row":24,"column":16},"action":"insert","lines":["e"]},{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"insert","lines":["p"]}],[{"start":{"row":28,"column":21},"end":{"row":28,"column":34},"action":"remove","lines":["RepProdResult"],"id":309},{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"insert","lines":["q"]},{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"insert","lines":["u"]},{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"insert","lines":["e"]},{"start":{"row":28,"column":24},"end":{"row":28,"column":25},"action":"insert","lines":["r"]},{"start":{"row":28,"column":25},"end":{"row":28,"column":26},"action":"insert","lines":["y"]}],[{"start":{"row":29,"column":32},"end":{"row":29,"column":45},"action":"remove","lines":["RepProdResult"],"id":310},{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"insert","lines":["q"]},{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"insert","lines":["u"]},{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"insert","lines":["e"]},{"start":{"row":29,"column":35},"end":{"row":29,"column":36},"action":"insert","lines":["r"]},{"start":{"row":29,"column":36},"end":{"row":29,"column":37},"action":"insert","lines":["y"]}],[{"start":{"row":34,"column":36},"end":{"row":34,"column":49},"action":"remove","lines":["RepProdResult"],"id":311},{"start":{"row":34,"column":36},"end":{"row":34,"column":37},"action":"insert","lines":["q"]},{"start":{"row":34,"column":37},"end":{"row":34,"column":38},"action":"insert","lines":["u"]},{"start":{"row":34,"column":38},"end":{"row":34,"column":39},"action":"insert","lines":["e"]},{"start":{"row":34,"column":39},"end":{"row":34,"column":40},"action":"insert","lines":["r"]},{"start":{"row":34,"column":40},"end":{"row":34,"column":41},"action":"insert","lines":["y"]}]]},"ace":{"folds":[],"scrolltop":144,"scrollleft":0,"selection":{"start":{"row":35,"column":5},"end":{"row":35,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":9,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1554608376725,"hash":"6a00830d04ca807b594d2753573954f28dd70f9b"}