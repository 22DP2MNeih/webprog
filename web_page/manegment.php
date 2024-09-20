<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Car part manegment</title>
        <link rel="icon" type="image/x-icon" href="../Img/car_parts_logo.avif">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css_styles/charts.css">
        <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }
        
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
        </style>
        <script src="scripts/chart_fn.js"></script>
    </head>
    <body onload="setUpChart()">
        <main>
            <div class="chart_border">
                <div class="chart_label">This is chart!</div>
                <table class="inner_border", id="chart1">
                    <tr>
                        <th class="cell"><div class="chart_cell"><div class="bar"><span class="details_info">Detiled info:</span></div></div></th>
                        <th class="cell"><div class="chart_cell"><div class="bar"><span class="details_info">Detiled info:</span></div></div></th>
                        <th class="cell"><div class="chart_cell"><div class="bar"><span class="details_info">Detiled info:</span></div></div></th>
                        <th class="cell"><div class="chart_cell"><div class="bar"><span class="details_info">Detiled info:</span></div></div></th>
                        <th class="cell"><div class="chart_cell"><div class="bar"><span class="details_info">Detiled info:</span></div></div></th>
                        <th class="cell"><div class="chart_cell"><div class="bar"><span class="details_info">Detiled info:</span></div></div></th>
                        <th class="cell"><div class="chart_cell"><div class="bar"><span class="details_info">Detiled info:</span></div></div></th>
                        <th class="cell"><div class="chart_cell"><div class="bar"><span class="details_info">Detiled info:</span></div></div></th>
                    <tr>
                        <th class="chart_legend" colspan="2">col1</th>
                        <th class="chart_legend" colspan="2">col2</th>
                        <th class="chart_legend" colspan="2">col3</th>
                        <th class="chart_legend" colspan="2">col4</th>
                    </tr>
                </table>
            </div>
        </main>
    </body>
</html>
    