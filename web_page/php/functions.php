<?php
require "config.php";

function DBConnect() {
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if ($mysqli->connect_errno != 0) {
        echo "fuck";
    } else {
        echo "not fuck";
    }
    return $mysqli;
}

$mysqli = DBConnect();

function GetPartTypes() {
    global $mysqli;
    $sql = "SELECT * FROM part_types";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<option value=" . $row["id"] . "></option>";
        }
    } else {
        echo "0 results";
    }
}

// function GetPartTypesArr() {
//     global $mysqli;
//     $sql = "SELECT * FROM part_types";
//     $result = $mysqli->query($sql);

//     return $result;
// }

function GetPartIndexes($part) {
    global $mysqli;

    // prepare and bind
    $stmt = $mysqli->prepare("SELECT part_display_colums.Display_string, CONCAT(display_colums.Data_type, part_display_colums.Column_id) AS `Column`, LOWER(REPLACE(part_display_colums.Display_string, ' ', '_')) AS `Col_name` FROM part_display_colums INNER JOIN display_colums ON part_display_colums.Display_string = display_colums.id WHERE Part_type = ?;");

    $stmt->bind_param("s", $part);
    $stmt->execute();
    // set parameters and execute
    
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);

    return $data;
}

// function DistinctColData($part, $col) {
//     $stmt = $mysqli->prepare("SELECT Display_columns FROM part_display_colums WHERE Part_type = ?;");
// }
?>