<!DOCTYPE html>

<?php 
include "php/functions.php";

if (isset($_GET['part'])) {
    $part = urldecode($_GET['part']);
} else {
    $part = '';
}
$dynamic_data = json_encode($_GET);
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car part manegment</title>
    </head>
    <header>
        <div class="pad_right">
            <h1 class="glass">Car part manegment</h1>
        </div>
        
    </header>
    <body>
        <script src="scripts/jsisfunjee.js"></script>
        <main class="pad_right" onload='SetUpDynamicData(<?php echo "$dynamic_data"; ?>);'>
            <div class="pad_right search">
                <table>
                    <tr class="search">
                        
                        
                        <th class="search">
                            Part type
                        </th>
                        <?php
                        $data = GetPartIndexes($part);
                        foreach ($data as $row) {
                            echo "<th class='search'>" . $row["Display_string"] . "</th>";
                        }
                        ?>
                    </tr>
                    <tr class="search">
                        <th class="search">
                            <input <?php echo "value='$part'"; ?> type="text" id="part_id" list="part_list" placeholder="Part type" class="custom-select" oninput="SendDataWhenNotTyping(part_id.value, 'part');">
                            <datalist id="part_list">
                                <?php GetPartTypes(); ?>
                            </datalist>
                        </th>
                        <?php
                        if (isset($_GET["last_input"])) {
                            $last = urldecode($_GET['last_input']);
                        } else {
                            $last = '';
                        }
                        $last_input_i = 0;
                        if (isset($_GET["last_input"])) {
                            //trigger exception in a "try" block
                            try {
                                $last_input_i = (int) urldecode($_GET['last_input']);
                            }
                            //catch exception
                            catch(Exception $e) {
                                $last_input_i = 0;
                            }
                        }
                        
                        foreach ($data as $row) {
                            $col = $row["Display_string"];
                            $col_id = $row["Column"];
                            $col_name = $row["Col_name"];
                            $temp;

                            if (isset($_GET[$col])) {
                                $value = urldecode($_GET[$col]);
                            } else {
                                $value = '';
                            }

                            // echo "<th class='search'><input type='text' id='" . $col_id . "' list='" . $col_id . "_list' placeholder='" . $col . "' class='custom-select' oninput='SendDataWhenNotTyping(" . $col_id . ".value, \x27" . $col_id . "\x27);\"><datalist id='" . $col_id . "_list'></datalist></th>";
                            $temp = <<<EOT
                            <th class='search'><input value='$value' type='text' id='$col_id' list='{$col_id}_list' placeholder='$col' class='custom-select' oninput="SendDataWhenNotTyping($col_id.value, \x27$col\x27);"><datalist id='{$col_id}_list'><option value="val"></option></datalist></th>
                            EOT;
                            echo $temp;
                            if ($col == $last) {
                                $js = <<<EOT
                                script type="text/javascript">
                                function moveCursorTo(id, pos) {
                                    const input = document.getElementById(id);
                                    input.focus();  // Focus on the input
                                    input.setSelectionRange(pos, pos);  // Set the cursor to the end
                                }
                                moveCursorTo($col_id, $last_input_i);
                                </script>
                                EOT;
                                echo $js;
                            }
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </main>
    </body>
    <style>
        html, body {
            width: 100%;
            height: 100%;
        }
        /*div.search {
            background-color:rgb(220, 220, 220);
        }*/
        div.part_row {
            font-size: 12px;
        }
        div.row_style1 {
            background-color:rgb(200, 200, 200);
        }
        div.row_style2 {
            background-color:rgb(220, 220, 220);
        }
        div.row_style3 {
            background-color:rgb(147, 162, 255);
        }
        body {
            background: url(../img/background3.webp) no-repeat;
            background-size: cover;
            overflow: hidden;

        }
        .pad_right {
            padding-right: 20px;
        }
        th.search, tr.search {
            padding: 0px;
        }
        
        div.search {
            border-radius: 65px;
            padding: 20px;
            vertical-align: middle;
            
            /*width: 80%;*/
            height: 60px;
            background-color: rgba(220, 220, 220, 0.8);
            font-size: 20px;
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }
        .glass {
            background: rgba(255, 255, 255, 0.28);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.13);
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        }
        h1 {
            font-size: 80px;
            text-align: center;
            color: rgb(42, 42, 252);
        }
        .custom-select {
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.13);
            box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.4);
            background-color: rgb(70, 70, 245);
            /*background-color: rgb(97, 97, 255);*/
            font-size: 20px;
            color: rgb(8, 8, 8);
            width: 128px;
            transition: background-color, 0.7s;
        }
        .custom-select:hover {
            background-color: rgb(120, 120, 255);
        }
        .custom-select::placeholder {
            color: rgb(75, 75, 75);
        }
    </style>
</html>