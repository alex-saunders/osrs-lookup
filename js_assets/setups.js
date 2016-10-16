var currentSelectedSlot;
var calculatedStats;

$(window).resize(function() {
    if (($("#item_find").css("opacity")) !== '0') {
        positionFindBox();
        $(".txtInput").eq(0).focus();
    }
});

$(document).mouseup(function(e) {
    var container = $("#item_find");
    var txtHint = $("#txtHint");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.css("opacity", "0.0");
        container.offset({
            top: -200,
            left: -200
        });
    }
});


function positionFindBox() {
    var item = "#" + currentSelectedSlot + "_icon";

    var offsetTop = $(item).offset().top - 160;
    var offsetLeft = $(item).offset().left - 120;

    $("#item_find").offset({
        top: offsetTop,
        left: offsetLeft
    });
}


function showFindBox(slot) {

    item = slot.split("_");
    item = item[0].substr(1, item[0].length);

    currentSelectedSlot = item;

    var item_html = "<center>" +
        "<br/>" +
        "<span class='Rosario_span'>Please select an item for the " + item + " slot </span>" +
        "<br/>" +
        "<br/>" +
        "<table width='90%'" + "cellspacing='0' style=''>" +
        "<tr>" +
        "</tr>" +
        "<tr>" +
        "<td width='1%' class='left_item_box' id='left_item_box_id' style=''>" +
        "&#128270;" +
        "</td>" +
        "<td width='30%'>" +
        "<input type='text' value='' class='txtInput setups_item_input'" +
        "onkeyup='showHint(this.value, event, 0)'" +
        "onkeydown='navigateTest(event, 0)'" +
        "placeholder='" + item + " slot'" +
        "autocomplete='off'>" +
        "</td>" +
        "</tr>" +
        "<tr>" +
        "<td>" +
        "</td>" +
        "<td class='txtHint'>" +
        "</td>" +
        "</tr>" +
        "</table>" +
        "<br/>" +
        "</center>";

    $("#item_find").html(item_html);
    positionFindBox();

    $("#item_find").css('visibility', 'visible');
    $("#item_find").fadeTo(250, 0.9);
    $(".txtInput").eq(0).focus();
}



function getTables() {
    var table = currentSelectedSlot + "_items";
    return table;
}


function assignSetupItem(stats) {
    var css_class = "#" + currentSelectedSlot + "_icon";
    getIcon(stats, css_class);
    var item_input = "#" + currentSelectedSlot + "_icon_desc";
    $(item_input).val(stats[0]);

	if (currentSelectedSlot == "weapon") {
	    if (stats[17] == "2") {
	        $("#shield_icon_cell").removeAttr("onclick");
	        $("#shield_icon").css("opacity", "0.0");
	        $("#shield_icon").attr("src", "/img_assets/cross.png");
	        $("#shield_icon").fadeTo(250, 0.9);
	        $("#shield_icon_desc").val("unavaliable");
	    } else {
	        $("#shield_icon_cell").attr("onclick", "showFindBox('#shield_icon', 'shield')");
	        if (($("#shield_icon").attr("src")) == ("/img_assets/cross.png")) {
	            $("#shield_icon").attr("src", "/img_assets/transparent.png");
	            $("#shield_icon_desc").val("");
	        }
	    }
    }
    $("#item_find").fadeTo(250, 0.0);
    setTimeout(function() {
        $("#item_find").css('visibility', 'hidden');
    }, 300);

}

function removeSetupItem(slot) {
    // if user tries to remove shield item when shield items are unavailable
    if ((slot == '#shield_icon_desc') && ($("#shield_icon_desc").val() == 'unavaliable')) {
        // return out of the function
        return;
    }
    // if user removes weapon item when shield items are unavailable
    if ((slot == '#weapon_icon_desc') && ($("#shield_icon_desc").val() == 'unavaliable')) {
        // reset the shield item values
        $("#shield_icon_cell").attr("onclick", "showFindBox('#shield_icon', 'shield')");
        $("#shield_icon_desc").val("");
        $("#shield_icon").attr("src", "/img_assets/transparent.png");
    }
    // reset the selected items images and descriptions
    var img = slot.split("_desc");
    $(img[0]).attr("src", "/img_assets/transparent.png");
    $(slot).val("");
}

function getSetup() {
    openModal("Fetching Setup...");
	// an empty calculated stats array
    calculatedStats = ["Generated Setup Stats", "", "", 
    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, , 0, ""];
    
    // reset the generated content divs
    $("#setup_info").html("");
    $("#setup_info_price_weapon").html("");
    $("#weapon_info").html("");

	// array of table names
    var tables = ["head_items",
        "cape_items",
        "neck_items",
        "ammo_items",
        "weapon_items",
        "torso_items",
        "shield_items",
        "legs_items",
        "gloves_items",
        "boots_items",
        "ring_items",
    ];
    

    var items = getItems();

    // get all the items in the item list at the same time
    getItem(items, tables, [addStats]);
}

function getItems() {
    var items = "";
    // cycle through the slot item descriptors
    for (i = 0; i < 11; i++) {
        // if an item has been entered into the slot
        if ($(".item_desc_input").eq(i).val() !== "") {
            // add the item to the item list
            items = items + $(".item_desc_input").eq(i).val() + ",";

        }
    }
    return items;
}


// function to calculate the overall stats of the setup
function addStats(stats, index) {
    var items = getItems();
    stats[0] = "Generated Setup Stats";
    // create an item table from the calculated stats array
    var html = itemTable(stats);
    html += lineBreak();
    html += endTable();
    $("#setup_info").html(html);

    html = "";
    html += itemPriceTable([items]);
    html += lineBreak();
    $("#setup_info_price_weapon").html(html);

	// if the item is a weapon
    if ((stats[18] !== 0) && (stats[18] !== "")) {
    	// create a weapon attack speed and styles table
        html = $("#setup_info_price_weapon").html();
        html += attackSpeedTable(stats);
        html += lineBreak();
        html += attackStyleTable(stats);
        html += lineBreak();
        html += endTable();
        $("#setup_info_gap").css('visibility', 'visible');
        $("#setup_info_price_weapon").html(html);
    }
    // colourise the generated stats table
    compareitems();
    // get the price
    getApiData([calcSetupPrice, displayUntradeables], items);
    // display the bottom feedback button
    $("#bottom_button").css('display', 'inline-block');
    $("#bottom_hr").css('display', 'block');
    closeModal();
    
}

// displays a list of untradeable items found
function displayUntradeables(data, items) {
    // split up the items list sent
    itemsArray = items.split(",");

    // get the amount of items sent
    var arrayLength = data.length;

    // flag - whether an untradeable item has been found yet
    var untradeableFound = false;

    // base extra rows for the price table
    var html="<tr class='item_table_dark'>" +
        "<td colspan='3'><b>Untradeable items</b></td>" +
        "</tr>";

    // cycle through all items
    for (var i = 0; i < arrayLength; i++) {
        // if untradeable item found
        if (data[i].items[0] === undefined) {
            var untradeableItem = itemsArray[i].replace(/\+/g, " ");

            // and that item name isn't 'unavaliable' (when 2h selected)
            if (untradeableItem !== "unavaliable") {

                // if an untradeable item hasn't been found yet
                if (!untradeableFound) {
                    // switch the flag variable
                    untradeableFound = true;
                    // append the base rows to the price table
                    $(".item_price_table TBODY").eq(0).append(html);
                }

                var cssId = untradeableItem + "_untradeable";
                cssId = cssId.replace(/ /g, "_");
                cssId = cssId.replace(/'/g, "");
                cssId = cssId.replace(/\(/g, "");
                cssId = cssId.replace(/\)/g, "");

                // create html for displaying the untradeable item name
                var htmlItemBullet = "<tr class='item_table_light'>"+
                    "<td><img id='" + cssId + "' height='30px'/></td>"+
                    "<td colspan='2'>" + untradeableItem + "</td>";

                // append that to the base row added
                $("#untradeableItems").append(htmlItemBullet);

                getIcon([untradeableItem], "#" + cssId);
            }
        }

    }
}


function breakdownPrice(data) {
    var table = document.getElementById("untradeableItems");
    if ( $( "#priceBreakdown" ).length == 0) {
        var Baserow = table.insertRow(3);
        Baserow.id = "priceBreakdown";
        Baserow.className += "item_table_dark";

        var Basecell1 = Baserow.insertCell(0);
        Basecell1.colSpan = "3";
        Basecell1.innerHTML = "<span onclick='displayBreakdown()' class='breakdownPriceDisplay link'>" +
        "<span id='breakdownPriceArrow'>&#x25B8;</span> Price Breakdown</span>";

    }
    var cssId = data.items[0].name + "_price_breakdown";
    cssId = cssId.replace(/ /g, "_");
    cssId = cssId.replace(/'/g, "");
    cssId = cssId.replace(/\(/g, "");
    cssId = cssId.replace(/\)/g, "");

    var row = table.insertRow(4);
    row.style.display="none";
    row.className += "item_table_light";
    row.className += " priceBreakdownRow";

    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    cell0.innerHTML = " <img src='/img_assets/loading_spinner.gif' height='30px' id='"+cssId+"'/>";
    cell1.innerHTML = data.items[0].name;
    cell2.innerHTML = data.items[0].current.price;

    getIcon([data.items[0].name], "#" + cssId);
}

function displayBreakdown() {
    $(".priceBreakdownRow").toggle();
    if ($(".priceBreakdownRow").is(":visible")) {
        $("#breakdownPriceArrow").html("&#x25BE;");
    } else {
        $("#breakdownPriceArrow").html("&#x25B8;");
    }
}
