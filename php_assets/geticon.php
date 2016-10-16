<?php
$item = $_REQUEST["item"];

$url = "http://2007.runescape.wikia.com/wiki/" . $item;

$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTMLFile($url);

echo json_encode($dom->saveHTML());
?>