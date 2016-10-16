/**
 *
 * GENERIC FUNCTIONS THAT ARE USED ON MORE THAN 1 PAGE
 *
 * @author: Alex Saunders
 *
 */
// on document load
$(document).ready(function() {
    window.displayBoxIndex = -1;
    cookieSet=getCookie("cookieSet");
    if (cookieSet == null) {
        setTimeout(function () {
            $("#cookie_bar").animate({bottom: '0%'}, 200);
        }, 1000)
    }
});

$(document).ajaxError(function(e, xhr){
    var errText = xhr.responseText;
    var status = xhr.status;
    var statusText = xhr.statusText;
    alert(errText + "\nStatus: " + status + " " + statusText);
});


// on window scroll
$(document).scroll(function() {
    // if scroll is past '40' then fade out the menu bar to 0.5 opacity
    if ($(this).scrollTop() > 40) {
        $("#menu-bar").stop().animate({
            backgroundColor: "#4a4a4a",
            opacity: '0.5'
        }, 300);
    } else {
        // else fade it back up to 1.0 opacity
        $("#menu-bar").stop().animate({
            backgroundColor: "#EAEAEA",
            opacity: '1.0'
        }, 300);
    }
});

$(window).resize(function() {

    var width = $('#txtInput').width();
    $("#txtHint").width(width);

});

$('html').click(function() {
    for (var i = 0; i <= $(".txtHint").length; i++) {
        $(".txtHint").eq(i).html("");
        $(".txtHint").eq(i).css("display", "none");
    }

});


// change arrow in menu on hover
function changeArrow(str, eq) {
    if (str == 'up') {
        $(".menu_arrow").eq(eq).html("&#x25B2;");
    } else {
        $(".menu_arrow").eq(eq).html("&#x25BC;");
    }
}

// loading modal function
function openModal(str) {
    // get document width and height
    var docWidth = ($(document).width());
    var docHeight = ($(document).height());
    // get the modal elements height
    var containerHeight = ($("#modal").height());
    // get the windows height
    var winH = $(window).height();
    // set the top position of the modal to window height / 2 - modal container's height
    var top = (winH / 2) - containerHeight;
    // set the faded (0.5 opacity) element to cover the whole document
    $("#fade").width(docWidth);
    $("#fade").height(docHeight);
    // set all appropriate styles and display the modal
    document.getElementById('modal').style.top = (top + "px");
    document.getElementById('modal').style.display = 'block';
    document.getElementById('fade').style.display = 'block';
    // set the modal text
    document.getElementById('modal_text').innerHTML = str;
}

// closing modal
function closeModal() {
    // set display to modal and the faded container to none
    document.getElementById('modal').style.display = 'none';
    document.getElementById('fade').style.display = 'none';
}

function scroll(str) {
    var height = $("." + str).eq(0).position().top;
    $("html, body").animate({
        scrollTop: height - 40
    }, 1000);

}

// generates item search boxes
function generate_item_containers(str) {
    // reset all elements created by the function
    $("#itemContainers").html("");
    $("#itemContainers").html("");
    $("#step2_hr").remove();

    // if search boxes are contained in a table row, reset the table row
    if ($("#item_containers_tr").length) {
        $("#item_containers_tr").css("display", "none");
    }

    // if selected item is not a valid option
    if ((str == "--")) {
        // inform the user their selection was not valid
        alert('Please choose how many items you want to compare');
    } else {
        // if search boxes are contained in a table row, set the display of that row
        if ($("#item_containers_tr").length) {
            $("#item_containers_tr").css("display", "table-row");
        }

        // create and append selected items list title
        var html = "<span class='Rosario_span'><br/><b>Selected Items:</b></span><br/><br/>";
        $(html).hide().appendTo("#itemContainers").fadeIn(1000);

        // create and append the appropriate amount of search boxes to itemContainers element
        var amount = parseInt(str);
        for (var i = 0; i < amount; i++) {
            j = i - 1;
            var item_html = "<table width='90%' cellspacing='0' style=''>" +
                "<tr>" +
                "</tr>" +
                "<tr>" +
                "<td width='1%' class='left_item_box' id='left_item_box_id' style=''>" +
                "&#128270;" +
                "</td>" +
                "<td width='30%'>" +
                "<input type='text' class='txtInput' value='' style='width:98%; height:30px'" +
                "onkeyup='showHint(this.value, event, " + i + ")'" +
                "onkeydown='navigateTest(event, " + i + ")' placeholder='item " + (i + 1) + "' autocomplete='off'>" +
                "</td>" +
                "</tr>" +
                "<tr>" +
                "<td style='visibility:hidden'>" +
                "</td>" +
                "<td class='txtHint'>" +
                "</td>" +
                "</tr>" +
                "</table>" +
                "<br/>";
            $(item_html).hide().appendTo("#itemContainers").fadeIn(1000);
        }
        // Change button text to either 'Compare' or 'Lookup' dependent on amount of search boxes
        if (amount > 1) {
            var button_html = "<div id='compare_scroll_point'></div><button class='button' onclick='itemTables()' id='compare_button'" +
                "style='opacity:0.5;' disabled>Compare</button></div>";
        } else {
            var button_html = "<div id='compare_scroll_point'></div><button class='button' onclick='itemTables()' id='compare_button'" +
                "style='opacity:0.5;' disabled>Lookup</button></div>";
        }
        // append the butotn to itemContainers element
        $(button_html).hide().appendTo("#itemContainers").fadeIn(1000);
    }
}

function itemTable(stats) {
    var item = stats[0].replace(/\s/g, "_");
    var sb = "<td width='50%' style='vertical-align:top;'>" +
        " <center>" +
        " <div class='table_wrapper'>" +
        " <table cellspacing='0' cellpadding='7' class='item_table item_stats'>" +
        " <tr>" +
        " </tr>";
        
        if (stats[0] !== "Generated Setup Stats") {
        sb = sb + " <tr class='item_table_dark'>" +
        " </center>" +
        " <td>" +
        " <img class=" + item + "_icon style='height:30px;' >" +
        " </td>" +
        " <td colspan='4'><b>" +
        " " + stats[0] +
        " </b></td>" +
        " </tr>";
        }
        
        sb = sb + " <tr class='item_table_dark'> " +
        " <th colspan='5'>" +
        " <center>" +
        " <img src='/img_assets/stats_icons/Attack-icon.png' alt='attack bonus' title='attack bonus' height='21px'>" +
        " Attack Bonus" +
        " </center> " +
        " </th>" +
        " </tr>" +
        " <tr class='item_table_dark'>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Rune_dagger.png' alt='stab bonus' title='stab bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Rune_scimitar.png' alt='slash bonus' title='slash bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Rune_warhammer.png' alt='crush bonus' title='crush bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Magic-icon.png' alt='magic attack bonus' title='magic attack bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Ranged-icon.png' alt='range attack bonus' title='range attack bonus' height='30px'>" +
        " </td>" +
        " </tr>" +
        " <tr class='item_table_light'>" +
        " <td class='stab_bonus'>" + stats[3] +
        " </td>" +
        " <td class='slash_bonus'>" + stats[4] +
        " </td>" +
        " <td class='crush_bonus'>" + stats[5] +
        " </td>" +
        " <td class='magic_attack_bonus'>" + stats[6] +
        " </td>" +
        " <td class='ranged_attack_bonus'>" + stats[7] +
        " </td>" +
        " </tr>" +
        " <tr class='item_table_dark'> " +
        " <th colspan='5'>" +
        " <center>" +
        " <img src='/img_assets/stats_icons/Defence-icon.png' alt='defence bonus' title='defence bonus' height='21px'>" +
        " Defence Bonus" +
        " </center>" +
        " </th>" +
        " </tr>" +
        " <tr class='item_table_dark'>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Rune_dagger.png' alt='stab defence bonus' title='stab defence bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Rune_scimitar.png' alt='slash defence bonus' title='slash defence bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Rune_warhammer.png' alt='crush defence bonus' title='crush defence bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Magic-icon.png' alt='magic defence bonus' title='magic defence bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Ranged-icon.png' alt='range defence bonus' title='range defence bonus' height='30px'>" +
        " </td>" +
        " </tr>" +
        " <tr class='item_table_light'>" +
        " <td class='stab_defence'>" + stats[8] +
        " </td>" +
        " <td class='slash_defence'>" + stats[9] +
        " </td>" +
        " <td class='crush_defence'>" + stats[10] +
        " </td>" +
        " <td class='magic_defence'>" + stats[11] +
        " </td>" +
        " <td class='ranged_defence'>" + stats[12] +
        " </td>" +
        " </tr>" +
        " <tr class='item_table_dark'>" +
        " <td colspan='5'>" +
        " <Center>" +
        " Other Bonuses" +
        " </Center>" +
        " </td>" +
        " </tr>" +
        " <tr class='item_table_dark'>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Strength-icon.png' alt='strength bonus' title='strength bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/RangedStrength-icon.png' alt='ranged strength bonus' title='ranged strength bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/MagicDamage-icon.png' alt='magic damage bonus' title='magic damage bonus' height='30px'>" +
        " </td>" +
        " <td>" +
        " <img src='/img_assets/stats_icons/Prayer-icon.png' alt='prayer bonus' title='prayer bonus' height='30px'>" +
        " </td>";
		
    if (stats[17] == "") {
            if (stats[0] == "Generated Setup Stats") {
                    sb = sb + " <td rowspan='2 ' class='item_table_light'>" +
						" </td>";
            } else {
	            var url = '/img_assets/' + stats[1].split("_")[0] + '_slot.png';
				sb = sb + " <td rowspan='2 ' class='item_table_dark'>" +
					" <img src=" + url +
					" width='30px' height='30px'>" +
					" </td>";
            }
    }
    else if (stats[17] == 1) {
        sb = sb + "<td rowspan='2'>" +
            "<img src='http://vignette1.wikia.nocookie.net/2007scape/images/d/d1/Weapon_slot.png/revision/latest/scale-to-width-down/29" +
            "?cb=20130227121007'" +
            "width='30px' height='30px'></td>";

    }
    else if (stats[17] == 2) {
        sb = sb + "<td rowspan='2'>" +
            "<img src='http://vignette2.wikia.nocookie.net/2007scape/images/a/a9/2h_slot.png/revision/latest/scale-to-width-down/29?" +
            "cb=20130321232300&format=webp'" +
            "width='30px' height='30px'></td>";

    }
    else if (stats[17] == 3) {
        sb = sb + "<td rowspan='2'>" +
            "<img src='http://vignette2.wikia.nocookie.net/2007scape/images/6/64/Ammo_slot.png/revision/latest/scale-to-width-down/29?" +
            "cb=20130227122436&format=webp'" +
            "width='30px' height='30px'></td>";

    }
    sb = sb + " </tr>" +
        " <tr class='item_table_light'>" +
        " <td class='strength_bonus'>" + stats[13] +
        " </td>" +
        " <td class='ranged_strength_bonus'>" + stats[14] +
        " </td>" +
        " <td class='magic_strength_bonus'>" + stats[15] + "%" +
        " </td>" +
        " <td class='prayer_bonus'>" + stats[16] +
        " </td>" +
        " </tr>" +
        " </table>" +
        " </div>";

    return sb;
}

function attackSpeedTable(stats) {
    var sb;
    if (stats[18] == 0) {
        sb = "<div class='table_wrapper'>" +
            " <table cellspacing='0' cellpadding='7' class='item_table attack_speed' style='width:235px;'>" +
            " <tr></tr>" +
            " <tr>" +
            " <td class='item_table_dark'>" +
            " Attack Interval:" +
            " </td>" +
            " </tr>" +
            " <tr>" +
            " <td class='item_table_light'>" +
            " (Ammunition attack speeds depend on the bow/crossbow)" +
            " </td>" +
            " </tr>" +
            " </table></div>";
    } else {
        sb = "<div class='table_wrapper'>" +
            " <table cellspacing='0' cellpadding='7' class='item_table attack_speed' style='width:235px;'>" +
            " <tr></tr>";
            
            if (stats[0] == "Generated Setup Stats") {
            	sb = sb + "<tr>" +
            	" <td class='item_table_dark' colspan='2'>" +
            	" Weapon: <b>" +
            	$("#weapon_icon_desc").val() +
            	" </b>" +
            	" </td>" +
            	" </tr>";
            }
            
            sb = sb + " <tr>" +
            " <td class='item_table_dark'>" +
            " Attack Interval:" +
            " </td>" +
            " <td class='item_table_light attack_speed'>" +
            stats[18] + " secs " + stats[19] +
            " </td>" +
            " </tr>" +
            " <tr>" +
            " <td colspan='2' class='item_table_light'>" +
            " <div class='meter orange nostripes'>" +
            " <span style='width: " + ((stats[18] * 10) * 2) + "%'></span>" +
            " </div>" +
            " </td>" +
            " </tr>" +
            " </table></div>";
    }
    return sb;
}

function attackStyleTable(stats) {

    var sb = "<div class='table_wrapper'>" +
        " <table cellspacing='0' cellpadding='7' class='item_table attack_styles' style='width:235px;'>" +
        " <tr></tr>" +
        " <tr>" +
        " <td class='item_table_dark' colspan='3'>" +
        " <b>Attack Styles</b>" +
        " </td>" +
        " </tr>" +
        " <tr class='item_table_dark'> " +
        " <td><b>Attack style</b></td>" +
        " <td><b>Type</b></td>" +
        " <td><b>XP</b></td>" +
        " </tr>";

    var arrayLength = stats.length;

    for (var i = 20; i < arrayLength; i++) {
        sb = sb + "<tr class='item_table_light'><td>" + stats[i][0] + "</td><td>" +
            stats[i][2] + "</td><td>" + stats[i][3] + "</td>";
    }

    sb = sb + "</table></div>";

    return sb;
}

function itemPriceTable(stats) {
    var items = stats[0].replace(/ /g, "_");
    items = items.replace(/,/g,'_') + "_price";
    items = items.replace(/'/g, "");
    items = items.replace(/\(/g, "");
    items = items.replace(/\)/g, "");

    var sb = "<div class='table_wrapper'>" +
        " <table cellspacing='0' cellpadding='7' class='item_table item_price_table' style='width:235px;'>" +
        " <tbody id='untradeableItems'>" +
        " <tr></tr>" +
        " <tr>" +
        " <td class='item_table_dark' colspan='3'>" +
        " <b>Estimate Price</b>" +
        " <i class='fa fa-question-circle item_price_desc' onclick='alertPriceInfo()'>" +
        " </i>" +
        " </td>" +
        " </tr>" +
        " <tr class='item_table_light'>" +
        " <td><img src='/img_assets/Coins.png' height='30px' />" +
        " <td colspan='2'><div class='" + items + " item_price'>" +
        " <img src='/img_assets/loading_spinner.gif' height='30px'/>" +
        " </div></td>" +
        " </tr>" +
        " </tbody>" +
        " </table>" +
        " </div>";

    return sb;
}

function endTable() {
    var sb = "</center></td>";

    return sb;
}

function lineBreak() {
    var sb = "<br/><br/>";
    return sb;
}

function correctionButton() {
	var sb = "<a href='submitreport' class='button'>" +
	"<i class='fa fa-pencil-square-o'></i>" +
	"&nbsp;Submit Correction" +
	"</a>";
	
	return sb;
}

function getItem(item, tables, callbacks) {
    if (item == "unavaliable") {
        return;
    }
    $("body").css("cursor", "progress");
    $.ajax({
        url: "/php_assets/getitem.php?item=" + item + "&table=" + tables,
        success: function(data) {
            if (data[0] == "") {
                alert("The following item was not found: " + item);
            } else {
                var arrayLength = callbacks.length;
                for (var i = 0; i < arrayLength; i++) {
                    callbacks[i](data);
                }
            }
            $("body").css("cursor", "auto");
        },
        dataType: "json"
    });
}

function getIcon(stats, css_class) {
    css_class = css_class.replace("'", "\\'");
    css_class = css_class.replace("(", "\\(");
    css_class = css_class.replace(")", "\\)");

    $(css_class).attr('src', '/img_assets/loading_spinner.gif');

    var item = stats[0].replace(/\s/g, "_");
    $.ajax({
        url: "/php_assets/geticon.php?item=" + item,
        success: function(data) {
            var elements = $(data);
            var found = $('.wikitable', elements);
            var tr = $("tr", found[0]).first();
            var a = $("a", tr).first().attr('href');

            $(css_class).attr('src', a);

        },
        dataType: "json"
    });
}

function getApiData(functions, items) {
    items = items.replace(/\s/g, "+");

    $.ajax({
        url: "/php_assets/getapi.php?item=" + items,
        success: function(data) {
            var arrayLength = data.length;
            for (var i = 0; i < arrayLength; i++) {
                data[i] = JSON.parse(data[i]);
            }
            arrayLength = functions.length;
            for (var i = 0; i < arrayLength; i++) {
                functions[i](data, items);
            }
        },
        dataType: "json"
    });
}

// calculates an estimation for the overall price
function calcSetupPrice(data, items, eq) {
    // initialise the price at 0
    var price = 0;

    // get the amount of items sent
    var arrayLength = data.length;

    // cycle through all items
    for (var i = 0; i < arrayLength; i++) {
        // if current item has defined data
        // (if the current item is untradable it will have no defined data returned)
        if (data[i].items[0] !== undefined) {

            // get the returned price string from the parsed JSON
            var temp = (data[i].items[0].current.price).toString();
            temp = temp.replace(/,/g, "");
            temp = temp.replace(/ /g, "");

            // if the price is in millions, multiply by 1,000,000 and add the returned price
            if (temp.endsWith('m')) {
                price = price + (parseFloat(temp) * 1000000);
            }
            // if the price is in thousands, multiply by 1,000 and add the returned price
            else if (temp.endsWith('k')) {
                price = price + (parseFloat(temp) * 1000);
            }
            // if the price is in billions, multiply by 1,000,000,000 and add the returned price
            else if (temp.endsWith('b')) {
                price = price + (parseFloat(temp) * 1000000000);
            }
            // else just add the returned price
            else {
                price = price + parseFloat(temp);
            }
            
            if (arrayLength > 1) {
            	breakdownPrice(data[i]);
            }
        }
    }
    var priceString;
    
    price = parseInt(price);
    
    if (price == 0) {
	    priceString = "<b>(Untradeable)</b>";
    } else {
    	priceString = "<b>" + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " gp</b>";
    }
    
    // find the appropriate price div
    items = items.replace(/,/g, "_");
    items = items.replace(/'/g, "");
    items = items.replace(/\(/g, "");
    items = items.replace(/\)/g, "");
    items = "." + items.replace(/\+/g,'_') + "_price";
    // display the calculated price in this div
    $(items).eq(0).html(priceString);


    comparePrice();

}


function alertPriceInfo() {
    alert('Price Calculated using GE data, currently no high alch values implemented ' +
    'so untradable items are not added to the price');
}

function showHint(str, event, eq) {
    var x = event.which || event.keyCode;

    // arrow keys
    if ((x == 40) || (x == 38)) {
        return;
    }
    // enter
    if (x == 13) {
        EnterPressed(eq);
        return;
    }
    // escape or tab
    if ((x == 27) || (x == 9)) {
        // hide the hint box
        $(".txtHint").eq(eq).css("display", "none");
        return;
    }
    // no input
    if (str.length == 0) {
        // hide the hint box
        $(".txtHint").eq(eq).css("display", "none");
        return;
    } else {
		// display progress cursor to user
		$("body").css("cursor", "progress");

        // split up the given tables string
        tables = getTables().split(",");
        var arrayLength = tables.length;

        // ajax call to get all hints
        $.ajax({
            url: "/php_assets/gethint.php?item=" + str + "&tables=" + tables,
            success: function(data) {
                // if hints returned
                if (data.length > 0) {
                
                	//sort the returned hints alphabetically
                	data.sort();
                	
                    var itemArrayLength = data.length;
                    var html = "";
                    for (var m = 0; m < itemArrayLength; m++) {
                        // cycle through all hints and add them to hint box
                        html = html + "<div onclick=updateinput(`" + data[m].replace(/ /g, "_") + "`," + eq + ") " +
                            "class='suggestSpan' id='suggestSpanID'>" + highlightHint(str, data[m]) + "</div>";
                    }
                } else {
                    // else provide a no results found div
                    html = "<div class='suggestSpan'> No Results Found </div>";
                }
                // assign generated html to hint box
                $(".txtHint").eq(eq).html(html);
                // make hint box visible
                var width = $('.txtInput').eq(eq).width();
                $(".txtHint").eq(eq).width(width);
                $(".txtHint").eq(eq).css("display", "block");
                $(".txtHint").eq(eq).scrollTop(0);
                
                // reset the cursor
                $("body").css("cursor", "auto");
                
            },
            dataType: "json"
        });
    }
}

// function to highlight the inputted part of generated hint
function highlightHint(input, hint) {
	if (input == "*") {
		return hint;
	}
    // normalise (lower case) the input and generated hint
    var inputNormalised = input.toLowerCase();
    var hintNormalised = hint.toLowerCase();
    // get the position of the input within the hint
    var stringPos = hintNormalised.indexOf(inputNormalised);

    // create html string highlighting the inputted part of the hint
    var output = hint.substr(0, stringPos) +
        "<span class='highlight_hint'>" + hint.substr(stringPos, input.length) + "</span>" +
        hint.substr(stringPos + input.length, hint.length);

    return output;
}


// tests whether arrow keys are pressed and so if navigation is needed
function navigateTest(event, eq) {
    //eq = eq - 1;
    var x = event.which || event.keyCode;
    if (x == 40) {
        Navigate(1, eq);
        return;
    }
    if (x == 38) {
        Navigate(-1, eq);
        return;
    }
}

// navigates the hint box
function Navigate(diff, eq) {
    displayBoxIndex += diff;
    var oBoxCollection = $(".suggestSpan");
    if (displayBoxIndex >= oBoxCollection.length)
        displayBoxIndex = 0;
    if (displayBoxIndex < 0)
        displayBoxIndex = oBoxCollection.length - 1;
    var cssClass = "suggestSpanHover";
    oBoxCollection.removeClass(cssClass).eq(displayBoxIndex).addClass(cssClass);
    var pos = $(".suggestSpanHover").position().top;
    if (pos > 125) {
        current = $(".txtHint").eq(eq).scrollTop()
        $(".txtHint").eq(eq).scrollTop(current + (pos - 124));

    }
    if (pos < 0) {
        current = $(".txtHint").eq(eq).scrollTop()
        $(".txtHint").eq(eq).scrollTop(current + pos);
    }
}

// adds the navigated hint to the input box
function EnterPressed(eq) {
    var selectedItem = $(".suggestSpanHover");
    var selectedValue = selectedItem.text();
    if (selectedValue !== "") {
        $(".txtHint").eq(eq).html("");
        $(".txtHint").eq(eq).css("display", "none");
        $(".txtInput").eq(eq).val(selectedValue);
        checkItems();
    } else {
        $(".txtHint").eq(eq).html("");
        $(".txtHint").eq(eq).css("display", "none");

    }
}

// adds the clicked hint to the input box
function updateinput(str, eq) {
    str = str.split("_").join(" ");
    $(".txtHint").eq(eq).html("");
    $(".txtHint").eq(eq).css("display", "none");
    $(".txtInput").eq(eq).val(str);
    checkItems();
}

// check if all text inputs have been entered in
function checkItems() {
    var full = "true";
    var oItemContainerCollection = $(".txtInput");
    for (var i = 0; i <= (oItemContainerCollection.length - 1); i++) {
        if ($(".txtInput").eq(i).val() == "") {
            full = "false"
            break;
        }
    }
    if (full == "true") {
    	// if we're comparing items (i.e. either on the weapons or armour page)
    	if ( $( "#compare_button" ).length ) {
	    	// set the compare button to enabled
	        document.getElementById('compare_button').disabled = false;
	        $("#compare_button").css("opacity", "1.0");
	        return;
        } 
        // if we're in the feedback page
        if ($("#feedback_button").length) {
        		// return out the function
	        	return;
        }
        // if we're selecting an item on the setups page 
        else {
	        // get the item and then the set the icon
	        getItem($(".txtInput").eq(0).val(), getTables(), [assignSetupItem]);
        }
    }
}

// compares stats of generated item tables
function compareitems() {
    var stats = [".stab_bonus", ".slash_bonus", ".crush_bonus", ".magic_attack_bonus", ".ranged_attack_bonus", ".stab_defence", ".slash_defence",
        ".crush_defence", ".magic_defence", ".ranged_defence", ".strength_bonus", ".ranged_strength_bonus", ".magic_strength_bonus", ".prayer_bonus"
    ];
    
    if ($(stats[0]).length == 1) {
	    for (var i = 0; i < stats.length; i++) {
        if ((parseInt($(stats[i]).eq(0).html())) > 0) {
            $(stats[i]).eq(0).css("color", "green");
        }
        if ((parseInt($(stats[i]).eq(0).html())) < 0) {
            $(stats[i]).eq(0).css("color", "red");
        }
        }
    } else {

    for (var i = 0; i < stats.length; i++) {
        if ((parseInt($(stats[i]).eq(0).html())) > (parseInt($(stats[i]).eq(1).html()))) {
            $(stats[i]).eq(0).css("color", "green");
            $(stats[i]).eq(1).css("color", "red");
        }
        if ((parseInt($(stats[i]).eq(1).html())) > (parseInt($(stats[i]).eq(0).html()))) {
            $(stats[i]).eq(0).css("color", "red");
            $(stats[i]).eq(1).css("color", "green");
        }
    }
    if ((parseFloat($(".attack_speed").eq(1).html())) < (parseFloat($(".attack_speed").eq(3).html()))) {
        $(".attack_speed").eq(1).css("color", "green");
        $(".attack_speed").eq(3).css("color", "red");
    }
    if ((parseFloat($(".attack_speed").eq(3).html())) < (parseFloat($(".attack_speed").eq(1).html()))) {
        $(".attack_speed").eq(1).css("color", "red");
        $(".attack_speed").eq(3).css("color", "green");
    }
    }

}

// compare the price
function comparePrice() {
    var price = ".item_price";
    if ($(price).length > 1) {
        var price1 = $(price).eq(0).html();
        var price2 = $(price).eq(1).html();
        price1 = price1.replace(/,/g, "");
        price2 = price2.replace(/,/g, "");

        if ((parseInt(price1)) < (parseInt(price2))) {
            $(price).eq(0).css("color", "green");
            $(price).eq(1).css("color", "red");
        }
        if ((parseInt(price2)) < (parseInt(price1))) {
            $(price).eq(0).css("color", "red");
            $(price).eq(1).css("color", "green");
        }
    }
}