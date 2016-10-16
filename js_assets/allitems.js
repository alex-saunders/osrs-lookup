var error; 

function submitForm() {
	var item = $("#txtInput").val();
	var submission = $("#submission_input").val();
	if ((item == "") || (submission == "")) {
		alert('Please fill out all required fields');
		return;
	}
	var cookieSet=getCookie("cookieSet");
    if (cookieSet == null) {
    	alert('You do not have cookies enabled for this site, so you cannot access this feature');
    	if ($("#cookie_bar").css("display") == 'none') {
	        $("#cookie_bar").fadeIn();
        }
        $("#cookie_bar").animate({bottom:'0%'}, 200);
        return;
    }
	getItem($(".txtInput").eq(0).val(), getTables(), submitEmail);
}

function submitEmail() {
	if (error == true) {
	    alert("something went wrong");
    }
	var name = $("#name_input").val();
	var email = $("#email_input").val();
	var item = $("#txtInput").val();
	var submission = $("#submission_input").val();
	
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                $("body").css("cursor", "default");
                var value = xmlhttp.responseText;
                if (value == "success") {
                	alert('Thank you for your submission!\nYou will now be redirected...');
                	window.location.href = "index";
                }
                if (value == "") {
                    alert('An unspecified error has occured, please try again');
                }
                if (value == "alreadyset") {
	                alert('You can only send 1 item correction per 10 minutes, sorry!');
                }
            }
        }
        xmlhttp.open("GET", "/php_assets/submitcorrectionmail.php?name=" + name +"&email=" + email +"&item=" + item +"&submission=" + submission, true);
        xmlhttp.send();
}

function getTables() {
	var output = "ammo_items,boots_items,cape_items,gloves_items,head_items,legs_items,neck_items,ring_items,shield_items,torso_items,weapon_items";
	return output;
}