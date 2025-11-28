window.addSearchCookie = function(){
	var cookievalue = jQuery(".inputFiltroRicercaPopup").val() ;
	var ricCookie = getCookieByName("LastSearch");
	
	if (ricCookie != ""){
		var arrayCookie = ricCookie.split("#");
		var first = arrayCookie[0];
		ricCookie = cookievalue + "#" + first;
		jQuery.cookie('LastSearch', ricCookie);
	}else{
		jQuery.cookie('LastSearch', cookievalue);
	}
}

window.getCookieByName = function(cname){
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function getSearchCookie() {
	var ricCookie = getCookieByName("LastSearch");
	var html = "";
	if (ricCookie != "" && ricCookie.indexOf("undefined") == -1){
		var arrayCookie = ricCookie.split("#");

		for (var i = 0; i < arrayCookie.length; i++){
			
			if (arrayCookie[i].indexOf("undefined") == -1){
				var cleanCookie = arrayCookie[i].replace(/\\"/g,"");
				cleanCookie = cleanCookie.replace(/"/g,"").replace(/[^\w\s]/gi, '');
				
				var searchField = cleanCookie.split("__")[0].toUpperCase();
				
				if (searchField.length >= 15){
					searchField = searchField.substring(0, 14).concat("...");
				}
				
			
				html += "<button class='btn btn-default btn-small marginLeft10NoMobile btnLastSearch btnPopulateField' data-populatefield='"+cleanCookie+"'><b>"+searchField+"</b></button>";
			}
			
			
		}
		
		jQuery(".lastSearchFromCookie").html(html);
	}
}