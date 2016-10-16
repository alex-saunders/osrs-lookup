<?

// get the q parameter from U
$item   = $_REQUEST["item"];
$tables = $_REQUEST["tables"];

$tableArr = explode(",", $tables);

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

$names = array();

$arrlength = count($tableArr);

for ($x = 0; $x < $arrlength; $x++) {
    if ($item == "*") {
        $sql = 'SELECT name FROM ' . $tableArr[$x];
    } else {
        $sql = 'SELECT name FROM ' . $tableArr[$x] . ' WHERE name LIKE "%' . $item . '%" ';
    }
    $result = $conn->query($sql);
    
    
    if ($result && $result->num_rows) {
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                array_push($names, $row["name"]);
            }
        }
    }
}

echo json_encode($names);


$conn->close();
?>