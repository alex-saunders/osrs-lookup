$(document).ready(function() {
    generate_item_containers(1);
});

function itemTables() {
	var numItems = $('.txtInput').length;
	
	document.getElementById("item_compare").innerHTML = "";

    for (i = 0; i < numItems; i++) {
        var item = $(".txtInput").eq(i).val();
        getItem(item, getTables(), [weaponTable]);

    }



}

function weaponTable(stats) {
	var item = stats[0].replace(/\s/g, "_");
	var css_class = "." + item + "_icon";
	var html = itemTable(stats);
	html += lineBreak();
	html += attackSpeedTable(stats);
	html += lineBreak();
	html += attackStyleTable(stats);
    html += lineBreak();
    html += itemPriceTable(stats);
    html += endTable();
	document.getElementById("item_compare").innerHTML = document.getElementById("item_compare").innerHTML + html;
	$("#bottom_button").css('display', 'initial');
	$("#bottom_hr").css('display', 'block');
    getIcon(stats, css_class);
    getApiData([calcSetupPrice], item);
	compareitems();
}

function getTables() {
    var output = "weapon_items";
    return output;
}