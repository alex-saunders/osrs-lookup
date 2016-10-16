<?php
$item = $_REQUEST["item"];
$items = explode(",", $item);
$arrLengthItems  = count($items);
$output = array();


foreach($items as $item) {
    if ($item !== "") {
        $item = str_replace('_', '+', $item);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = 'http://services.runescape.com/m=itemdb_oldschool/api/catalogue/items.json?category=1&alpha=' . $item . '&page=1';
        $url = strtolower($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        array_push($output, $result);
    }

}
echo json_encode($output);

?>