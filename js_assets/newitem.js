function submitForm() {
	var item = $("#txtInput").val();
	var submission = $("#submission_input").val();
	if (item == "") {
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
	submitEmail();
}

function submitEmail() {
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
	                alert('You can only send 1 new item request per 10 minutes, sorry!');
                }
            }
        }
        xmlhttp.open("GET", "/php_assets/submitnewitemmail.php?name=" + name +"&email=" + email +"&item=" + item +"&submission=" + submission, true);
        xmlhttp.send();
}