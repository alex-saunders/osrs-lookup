<?
$item  = $_REQUEST["item"];
$table = $_REQUEST["table"];

$weapon = false;

//REMOTE WEB SERVER LOCAL DETAILS
/*
$servername = "160.153.16.36";
$username   = "howdybaby123"; 
*/

$servername = "localhost";
$username   = "howdybaby123";
$password   = "290596Curtains";
$dbname     = "osrslookup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_errno);
}

$items           = explode(",", $item);
$tables          = explode(",", $table);
$arrLengthTables = count($tables);
$arrLengthItems  = count($items);

$iteminfo = array(
    "",
    "",
    "",
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    "",
    "",
    ""
);
for ($i = 0; $i < $arrLengthItems; $i++) {
    for ($x = 0; $x < $arrLengthTables; $x++) {
        
        $sql    = 'SELECT * FROM ' . $tables[$x] . ' WHERE name = "' . $items[$i] . '";';
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows) {
            
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    
                    $iteminfo[0] = $row["name"];
                    $iteminfo[1] = $row["type"];
                    $iteminfo[2] = $row["icon"];
                    
                    $iteminfo[3]  = intval($iteminfo[3]) + intval($row["stab_bonus"]);
                    $iteminfo[4]  = intval($iteminfo[4]) + intval($row["slash_bonus"]);
                    $iteminfo[5]  = intval($iteminfo[5]) + intval($row["crush_bonus"]);
                    $iteminfo[6]  = intval($iteminfo[6]) + intval($row["magic_attack_bonus"]);
                    $iteminfo[7]  = intval($iteminfo[7]) + intval($row["ranged_attack_bonus"]);
                    $iteminfo[8]  = intval($iteminfo[8]) + intval($row["stab_defence"]);
                    $iteminfo[9]  = intval($iteminfo[9]) + intval($row["slash_defence"]);
                    $iteminfo[10] = intval($iteminfo[10]) + intval($row["crush_defence"]);
                    $iteminfo[11] = intval($iteminfo[11]) + intval($row["magic_defence"]);
                    $iteminfo[12] = intval($iteminfo[12]) + intval($row["ranged_defence"]);
                    $iteminfo[13] = intval($iteminfo[13]) + intval($row["strength_bonus"]);
                    $iteminfo[14] = intval($iteminfo[14]) + intval($row["ranged_strength_bonus"]);
                    $iteminfo[15] = intval($iteminfo[15]) + intval($row["magic_strength_bonus"]);
                    $iteminfo[16] = intval($iteminfo[16]) + intval($row["prayer_bonus"]);
                    
                    if ($tables[$x] == "weapon_items") {
                        $weapon       = true;
                        $iteminfo[17] = $row["slot"];
                        $iteminfo[18] = $row["attack_speed"];
                        $iteminfo[19] = $row["attack_speed_style"];
                    }
                }
            }
            
            if ($weapon == true) {
                $sql    = "SELECT * FROM attack_styles WHERE weapon_type = '" . $iteminfo[1] . "';";
                $result = $conn->query($sql);
                
                if ($result && $result->num_rows) {
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            array_push($iteminfo, array(
                                $row["style_name"],
                                $row["weapon_type"],
                                $row["style_type"],
                                $row["style_xp"]
                            ));
                        }
                        
                    }
                }
            }
            //array_push($iteminfo, $tables[$x]);
        }
    }
    
    $weapon = false;
}
echo json_encode($iteminfo);

?> 
