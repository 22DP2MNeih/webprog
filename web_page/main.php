<!DOCTYPE html>

<?php 
if (isset($_GET['part'])) {
    $part = urldecode($_GET['part']);
}

$input_id = '';
if (isset($_GET['current_input'])) {
    $input_id = 'link_to_someware' + urldecode($_GET['current_input']);
} else {
    $input_id = 'link_to_someware2';
}
if (isset($_GET['link_to_someware2'])) {
    echo urldecode($_GET['link_to_someware2']);
    $
}

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>

<html>
    
    <head>
        <title>Car part manegment</title>
    </head>
    <header>
        <div class="Title">
            
            <h1>Car part manegment</h1>
        </div>
    </header>
    <body onload="focusInput()">
        <main>
            <h5><a href="login.html">link text</a></h5>
            <h5><a href="login.html?aaa=bbb">link text</a></h5>
            <h5><input type="text" id="link_to_someware1" oninput="location.href = 'main.php?input2=' + link_to_someware1.value;" value=<?php
                    if (isset($_GET['link_to_someware2'])) {
                        echo urldecode($_GET['link_to_someware2']);
                    }
                ?>>
                </input>
            </h5>
            <h5><input type="text" id="link_to_someware2" oninput="SendDataWhenNotTyping(link_to_someware2.value, 'link_to_someware2');" value=<?php
                    if (isset($_GET['link_to_someware2'])) {
                        echo urldecode($_GET['link_to_someware2']);
                    }
                ?>>
                </input>
                <script src="scripts\jsisfunjee.js" type="text/javascript"></script>
            </h5>
        </main>
    </body>
    <style>
        /*h1 {
            position: absolute;
            font-size: 80px;
            font-weight: bolder;
            text-align: center;
            align-self: center;
            /*color: rgb(20, 20, 80);*//*
            color: transparent;
            background-color: rgb(135, 135, 135);
        }*/
        h5 {
            font-weight: bold;
        }

        /*div.Title {
            position: relative;
            background-image: url(../img/background2.jpg) no-repeat;
            background-image: 
        }*/

        div {
            width: 100%;
            height: 100%;
        }

        h1 {
            color: transparent;
            /*font-size: 28vmax;*/
            font-size: 70px;
            background-size: cover;
            background: url(../img/background2.jpg) 0% 0 no-repeat;
            background-clip: text;
            font-weight: bolder;
        }

        body {
            background-size: 200%;
            background: url(../img/background2.jpg) 0% 0 no-repeat;
        }
        
        .bg {
            position: fixed; 
            top: 0; 
            left: 0; 
                
            /* Preserve aspet ratio */
            min-width: 100%;
            min-height: 100%;
            margin-left: 25%;
        }
        img.bg {
        /* Set rules to fill background */
        min-height: 100%;
        min-width: 1200px;
            
        /* Set up proportionate scaling */
        width: 100%;
        height: auto;
            
        /* Set up positioning */
        position: fixed;
        top: 0;
        left: 0;
        }

        @media screen and (max-width: 1200px) { /* Specific to this particular image */
        img.bg {
            left: 50%;
            margin-left: -600px;   /* 50% */
        }
        }
        body {
            background: url(../img/background3.webp) no-repeat;
            background-size: 100%;
            /*background-position-y: -20%;*/
            overflow: hidden;
        }
    </style>
</html>