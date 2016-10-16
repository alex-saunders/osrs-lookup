<?php
$cookie_name = "item_sent";
if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, "true", time() + (600), "/"); 
    $name = $_REQUEST["name"];
	$email = $_REQUEST["email"];
	$item = $_REQUEST["item"];
	$submission = $_REQUEST["submission"];
	   
	// the message
	$msg = "ITEM CORRECTION REQUEST\nname: ".$name."\nEmail: ".$email."\n\nItem: ".$item."\nSubmission: ".$submission;
	
	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);
	
	// send email
	$mail = mail("alexsaunders1996@hotmail.co.uk","Item Correction",$msg);
	
	if (!$mail) {
		echo "";
	} else {
		echo "success";
	}
} else {
	echo "alreadyset";
}


?>