<!DOCTYPE html>

<?php 
include "php/functions.php";

if (isset($_GET['part'])) {
    $part = urldecode($_GET['part']);
} else {
    $part = '';
}


$input_id = '';
if (isset($_GET['current_input'])) {
    $input_id = 'link_to_someware' + urldecode($_GET['current_input']);
} else {
    $input_id = 'link_to_someware2';
}
if (isset($_GET['link_to_someware2'])) {
    echo urldecode($_GET['link_to_someware2']);
}

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x";
}
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
        <main class="pad_right">
            <div class="pad_right search">
                <table>
                    <tr class="search">
                        
                        
                        <th class="search">
                            Part type
                        </th>
                        <?php
                        $data = GetPartIndexes($part);
                        foreach ($data as $row) {
                            echo "<th class='search'>" . $row["Display_columns"] . "</th>";
                        }
                        ?>
                    </tr>
                    <tr class="search">
                        <th class="search">
                            <input type="text" id="part" list="part_list" placeholder="Part type" class="custom-select" oninput="SendDataWhenNotTyping(part.value, 'part')">
                            <datalist id="part_list">
                                <?php GetPartTypes(); ?>
                            </datalist>
                        </th>
                        <?php
                        foreach ($data as $row) {
                            $col = $row["Display_columns"];
                            $col_id = $row["Column"];

                            echo "<th class='search'><input type='text' id=" . $col . " list='" . $col . "_list' placeholder='" . $col . "' class='custom-select'><datalist id='" . $col_id . "' oninput='SendDataWhenNotTyping(" . $col_id . ", " . $col_id . ")'></datalist></th>";
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
            background-color: rgb(97, 97, 255);
            font-size: 20px;
            color: rgb(8, 8, 8);
            width: 128px;
        }
        .custom-select:hover {
            background-color: rgb(120, 120, 255);
        }
        .custom-select::placeholder {
            color: rgb(75, 75, 75);
        }

    </style>
</html>