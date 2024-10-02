<!DOCTYPE html>
<?php
$all_parts = array("rims", "angle_kit", "springs");
$part_img_dict = [
  "rims" => "Rims2.jpeg",
  "angle_kit" => "bmw_drifting_angle_kit.webp",
  "springs" => "adjustable_springs.webp",
];
$part_names = [
  "rims" => "Black rims",
  "angle_kit" => "BMW angle kit",
  "springs" => "Adjustable springs",
];
$part_descs = [
  "rims" => "These are the best rims on the market. These rims will make evry car look beter.",
  "angle_kit" => "This is the best angle kit BMW offers. If you want to drift grab them while they have good price.",
  "springs" => "These springs have adjustable stiffness. Tune them to make the sexiest drift.",
];
$part_prices = [
  "rims" => 199.99,
  "angle_kit" => 239.99,
  "springs" => 169.99,
];

$part_img = "Err loading img!";
$part_name = "Err loading name!";
$part_desc = "Err loading desc!";
$part_price = "Err loading price!";

if (isset($_GET["part"])) {
    $part = urldecode($_GET["part"]);
    
    if (!in_array($part, $all_parts)) {
        $part = "Error part does not exist!";
    } else {
        $part_img = $part_img_dict[$part];
        $part_name = $part_names[$part];
        $part_desc = $part_descs[$part];
        $part_price = $part_prices[$part];
    }
} else {
    $part = "Error part not found!";
}

?>
<html>
  <head>
    <title>Car part manegment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../Img/car_parts_logo.avif">
    <style>
      header{
        width: 100%;
        font-size: medium;
        background-color: #f1f1f1;
      }

      footer {
        position: absolute; 
        bottom: 0%; 
        width: 100%;
        background-color: #f1f1f1;
      }

      .flex-container {
        display: flex;
        flex-wrap: nowrap;
        /* background-color: #f1f1f1; */
        flex-direction: row;
        align-items: center;
        width: 100%;
      }

      .link {
        width: 120px;
        height: 30px;
        background-color: rgb(0, 87, 248);
        color: rgba(240, 240, 240, 0.896);
        margin: 10px;
        text-align: center;
        padding: 8px;
        transition: all 0.4s;
        border-radius: 7px;
      }

      .link:hover {
        background-color: rgb(3, 0, 178);
      }
      

      .autortiesibas {
        width: 200px;
        height: 30px;
        color: rgba(30, 30, 30, 0.896);
        margin: 10px;
        text-align: center;
        padding: 8px;
      }

      body html {
        width: 100%;
        height: 100%;
        background-color: cornflowerblue;
        
      }

      h1 {
        font-size: 40px;
      }
      .more_info_tbl {
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 80%, rgba(5,106,185,1) 90%);
        margin: 0px;
        padding: 25px;
        border-radius: 10px;
      }
      .more_info_tbl img {
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="flex-container">
        <a href="../web_page/main.html">
          <div class="link">
            Home
          </div>
        </a>
        <a href="about.html">
          <div class="link">
            About
          </div>
        </a>
        <a href="contact.html">
          <div class="link">
            Contact
          </div>
        </a>
      </div>
    </header>
    <main>
      <h1>
        More info about <?php echo $part; ?>
      </h1>
      <table class="more_info_tbl">
        <tr>
          <th rowspan="3">
            <img src="../Img/<?php echo $part_img; ?>" alt="No img for <?php echo $part_img; ?>" width="600px" height="400px">
          </th>
          <th>
            <h1>
              <?php echo $part_name; ?>
            </h1>
          </th>
        </tr>
        <tr>
          <th style="padding: 30px; font-size: 22px;">
            <p>
              <?php echo $part_desc; ?>
            </p>
          </th>
        </tr>
        <tr>
          <th style="font-size: 60px;">
            <?php echo $part_price; ?>€
          </th>
        </tr>

      </div>
    </main>
    <footer>
      <div class="flex-container">
        <a href="https://x.com/">
          <div class="link">
            X.com
          </div>
        </a>
        <a href="https://www.youtube.com/">
          <div class="link">
            Youtube
          </div>
        </a>
        <a href="https://www.tiktok.com/explore">
          <div class="link">
            TikTok
          </div>
        </a>
        <div class="autortiesibas">
          All rights reserved!
        </div>
      </div>
    </footer>
  </body>
</html>