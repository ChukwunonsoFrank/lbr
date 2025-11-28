/*1762412974000*/
jQuery(document).ready(function(){
	
	var spinner = new Spinner({opacity: 0}).spin();
    
    var y;
    window.onmousemove = function (e) {
        y = e.clientY;
    };
    
    window.blockScreen = function(){
    	if (!isIOSMobile()){
    		var target = jQuery("html");
        	target.append(spinner.el);
        	jQuery.blockUI({ message: null });
        	jQuery(".spinner").css('top', y + 'px');
        	setTimeout(unblockScreen, 500);
    	}
    	
    }

    window.unblockScreen = function() {
    	jQuery.unblockUI();
    	spinner.stop();
    }              
    
    jQuery(".itemWithChildren").on("click", function(e){
    	e.preventDefault();
    	jQuery(this).prev(".mm-next").click();
    });
    
    // block screen sui paginator
    jQuery('.lfr-pagination-delta-selector .dropdown-menu.lfr-menu-list.direction-down').find('li a').on('click', function(){
		blockScreen();
	});
	
    jQuery('.lfr-pagination-page-selector .dropdown-menu.lfr-menu-list.direction-down').find('li a').on('click', function(){
		blockScreen();
	});
	
    jQuery('.pager.lfr-pagination-buttons').find('li').each(function(){
		if (!jQuery(this).hasClass("disabled")){
			var link = jQuery(this).first("a");
			link.on('click', function(){
				blockScreen();
			});
		}
	});
    
    jQuery("ul.breadcrumb:not(.noBlock)").find("li").find("a").on("click", function(){
    	blockScreen();
    });
    
    jQuery('.playPauseVideo.play').on("click", function(){
    	jQuery(this).hide();
    	jQuery('.playPauseVideo.pause').show();
    	jQuery('#hpFrame')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
    });
    
    jQuery('.playPauseVideo.pause').on("click", function(){
    	jQuery(this).hide();
    	jQuery('.playPauseVideo.play').show();
    	jQuery('#hpFrame')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    });
    
    jQuery("#resp-menu").mmenu({
		"extensions": [
	          "effect-menu-zoom",
	          "pagedim-black"
	       ],
	       "counters": true,
	       "navbars": [
	          {
	             "position": "bottom",
	             "content": [
	                "",
	                getNavbarBottomForMobile(),
	                "",
	             ]
	          }
	       ],
	       "navbar":{title: "<img src='" + themeDisplay.getPathThemeImages() + "/ri/logo-menu.svg' alt='Italian Business Register'/>"}
	      });
	
	jQuery( window ).resize(function() {
		closeMobileMenu();
	});
	
	// script injection
	jQuery( "input" ).change(function(){
		jQuery(this).val(htmlEscape(jQuery(this).val()));
	});
	
   var isChina = jQuery("#isChina").val() == "true";
   		
	// settare la proprieta' user-agent nel tag html per identificare browser e versione
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
	

	if (!detectIE()){
		jQuery('.inputWithDelete').wrap('<span class="deleteicon" />').after(jQuery('<span/>').click(function() {
	    	jQuery(this).prev('input').val('').focus();
	    }));
		
		jQuery('.inputWithDeleteBlack').wrap('<span class="deleteiconBlack" />').after(jQuery('<span/>').click(function() {
	    	jQuery(this).prev('input').val('').focus();
	    }));
	}
	
	jQuery("#btn_login").on("click", function(){
		var user = jQuery("#username_login");
		var pwd = jQuery("#pwd_login");
		
		if (isBlank(user.val())){
			user.addClass("error");
			jQuery(".error-message-input-username").show();
		}else{
			user.removeClass("error");
			jQuery(".error-message-input-username").hide();
		}
		
		if (isBlank(pwd.val())){
			pwd.addClass("error");
			jQuery(".error-message-input-pwd").show();
		}else{
			pwd.removeClass("error");
			jQuery(".error-message-input-pwd").hide();
		}
		
		if (!isBlank(user.val()) && !isBlank(pwd.val())){
			callLoginFunction();
		}
		
	});
	
	jQuery("#btn_register").on("click", function(){
		var mail = jQuery("#email_register");
		var name = jQuery("#name_register");
		var surname = jQuery("#surname_register");

		if (isBlank(mail.val())){
			mail.addClass("error");
			jQuery(".error-message-input-email-register").show();
		}else{
			
			if (!validateEmail(mail.val())){
				mail.addClass("error");
				jQuery(".error-message-input-email-register").hide();
				jQuery(".error-message-input-email-register-not-valid").show();
			}else{
				mail.removeClass("error");
				jQuery(".error-message-input-email-register").hide();
				jQuery(".error-message-input-email-register-not-valid").hide();
			}
		}
		
		if (isBlank(name.val())){
			name.addClass("error");
			jQuery(".error-message-input-name-register").show();
		}else{
			name.removeClass("error");
			jQuery(".error-message-input-name-register").hide();
		}
		
		if (isBlank(surname.val())){
			surname.addClass("error");
			jQuery(".error-message-input-surname-register").show();
		}else{
			surname.removeClass("error");
			jQuery(".error-message-input-surname-register").hide();
		}
		
		if (!isBlank(mail.val()) && !isBlank(name.val()) && !isBlank(surname.val()) && validateEmail(mail.val())){
			callRegisterFunction();
		}
		
	});
	
	jQuery(".openRegisterPopup").on("click", function(){
		jQuery('#modalLogin').modal("hide");
		jQuery('#modalLogin').css("z-index", "1050");
		openRegisterLogin();
	});
	
	jQuery(".openLoginPopup").on("click", function(){
		jQuery('#modalRegister').modal("hide");
		jQuery('#modalRegister').css("z-index", "1050");
		openModalLogin();
	});
	
	jQuery(".goToMySearches").on("click", function(){
		openModalMySearches();
	});
	
	jQuery(".goToMyDocs").on("click", function(){
		openModalMyDocs();
	});

	jQuery(".goToFeedback").on("click", function(){
		openModalFeedback(true);
	});
	
	jQuery('[data-toggle="tooltip"]').tooltip();
	
	jQuery("input[name='privacyConsent']").on("change", function(){
		var priv = jQuery(this).val();
		updatePrivacy(priv);
	});
	
	closeMobileMenu();
	
	// Gestione DIDOMI
	if (!isChina) {
	setTimeout(function() {
		var didomiHost = jQuery('#didomi-host')[0];
		var actualHost = localStorage.getItem('didomiHost');
		if (didomiHost && !actualHost) {
			localStorage.setItem('didomiHost', didomiHost.outerHTML);				
		}
		var didomiCss = jQuery('#didomi-css')[0];
		var actualCss = localStorage.getItem('didomiCss');
		if (didomiCss && !actualCss) {
			localStorage.setItem('didomiCss', didomiCss.innerHTML);        	
		}
	}, 700);
	
	setTimeout(function() {
		restoreDidomiDiv();
	}, 750);
	}
});

window.restoreDidomiDiv = function() {	
    var divContent = localStorage.getItem('didomiHost');
	var actualDidomiHost = jQuery('#didomi-host')[0];
    if (!actualDidomiHost) {
    	if (divContent.indexOf('didomi-popup-notice-logo') > 0) {
    		location.reload();
    	} else {
	    	jQuery('#fb-root').before(divContent);
		    jQuery('<style>')
		    	.prop('type', 'text/css')
		    	.prop('id', 'didomi-css')
		    	.html(localStorage.getItem('didomiCss'))
		    	.prependTo('#didomi-host');
	    }
    }     
}

function htmlEscape(str) {
	return ('' + str).replace(/</g, '&lt;').replace(/>/g, '&gt;');
}


window.goToHome = function(){
	blockScreen();
	var href = jQuery("a.brand").attr("href");
	location.href = href;
}

window.isBlank = function(text){
	return jQuery.trim(text) == '';
}

window.addInputError = function(elem){
	elem.addClass("error");
	elem.prev(".add-on").css("border", "1px solid #EE2E24" )
	elem.prev("label").addClass("color-red").removeClass("color-black");
	elem.prev().prev("label").addClass("color-red").removeClass("color-black");
}

window.removeInputError = function(elem){
	elem.removeClass("error");
	elem.prev(".add-on").css("border", "1px solid #ccc" )
	elem.prev("label").removeClass("color-red").addClass("color-black");
	elem.prev().prev("label").removeClass("color-red").addClass("color-black");
}


function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function callLoginFunction(){
	alert("OK LOGGED");
}

function callRegisterFunction(){
	alert("OK REGISTER");
}

window.openModalLogin = function(){
	jQuery('#modalLogin').modal("show");
	jQuery('#modalLogin').css("height", "auto");
	jQuery('#modalLogin').css("z-index", "1051");	
	jQuery('#modalLogin').css("width", getModalLoginWidth());
}

window.openRegisterLogin = function(){
	jQuery('#modalRegister').modal("show");
	jQuery('#modalRegister').css("height", "auto");
	jQuery('#modalRegister').css("z-index", "1051");
	jQuery('#modalRegister').css("width", getModalLoginWidth());
}

window.openResetPwdLogin = function(){
	jQuery('#modalResetPwd').modal("show");
	jQuery('#modalResetPwd').css("height", "auto");
	jQuery('#modalResetPwd').css("z-index", "1051");
	jQuery('#modalResetPwd').css("width", getModalLoginWidth());
}

window.openModalMySearches = function(){
	jQuery('#modalMySearches').modal({show: true});
	closeMobileMenu();
	dataLayer.push({'event':'clickheader', 'action': 'My Searches'})
	
}

window.openModalMyDocs = function(){
	jQuery('#modalMyDocs').modal({show: true});
	closeMobileMenu();
	dataLayer.push({'event':'clickheader', 'action': 'My Docs'})
}

window.openModalFeedback = function(flagClosable){
	//reset
	jQuery("#_mysearches_WAR_pimysearches_suggestion").val("");
	jQuery("div.rate input").prop("checked", false);
	jQuery("#btnSendFeedback").prop("disabled", true);
	jQuery("#rateDiv").show();
	jQuery("#thankyouRateDiv").hide();	
	//open
	if(!flagClosable){
		jQuery('#modalFeedback').modal({show: true, backdrop: 'static', keyboard: false});
	}else{
		jQuery('#modalFeedback').modal({show: true, backdrop: true, keyboard: true});
	}
	closeMobileMenu();
	dataLayer.push({'event':'clickheader', 'action': 'Feedback'})
}

window.closeModalFeedback = function(){
	jQuery('#modalFeedback').modal('toggle');
}

window.openUserInfoLogin = function(){
	jQuery('#modalLogin').modal("show");
	jQuery('#modalLogin').css("height", "auto");
	jQuery('#modalLogin').css("z-index", "1051");
	jQuery('#modalLogin').css("top", "10%");
	jQuery('#modalLogin').css("left", "40%");
	jQuery('#modalLogin').css("width", getModalLoginWidth());
	dataLayer.push({'event':'clickheader', 'action': 'My Account'})
}

window.closeMobileMenu = function() {
	var API = jQuery("#resp-menu").data( "mmenu" ); 
    if(API) API.close();
}

window.isIOSMobile = function(){
	 return (
		    (navigator.userAgent.toLowerCase().indexOf("ipad") > -1) ||
		    (navigator.userAgent.toLowerCase().indexOf("iphone") > -1) ||
		    (navigator.userAgent.toLowerCase().indexOf("ipod") > -1)
		   );
}


function detectIE(){
	return jQuery("html").attr("class").indexOf("ie") == -1 ? false : true;
}

function getNavbarBottomForMobile(){
	var html = "";
	var elem = jQuery(".languageItem").clone();
	elem.removeClass("pull-right");
	html += jQuery("<ul />").append(elem).html();
	return html;
	
}

function getModalWidth(){
	if (!isMobileWidth()){
		return 650;
	} else {
		return "auto";
	}
}

function getModalLoginWidth(){
	if (!isMobileWidth()){
		return 450;
	} else {
		return "auto";
	}
}

function isMobileWidth(){
	var screenWidth = jQuery( window ).width();
	return (screenWidth <= 979);
}

function is_touch_device() {
	 return (('ontouchstart' in window)
	      || (navigator.MaxTouchPoints > 0)
	      || (navigator.msMaxTouchPoints > 0));
	}

function tell_to_friend() {	
	window.location.href = "mailto:maildest?subject=" + encodeURIComponent('Italian Business Register') + "&body=" + encodeURIComponent('Hello, I suggest https://italianbusinessregister.it');
}

function monitoringAcquistiGTA(section,transactionId,documentID,transactionAffiliation,transactionTotal,transactionTax,transactionShipping,sku,name,category,price,quantity){
			
	console.log("section:" + section);
	console.log("transactionId:" + transactionId);
	console.log("documentId:" + documentID);
	console.log("transactionAffiliation:" + transactionAffiliation);
	console.log("transactionTotal:" + transactionTotal);
	console.log("transactionTax:" + transactionTax);
	console.log("transactionShipping:" + transactionShipping);
	console.log("sku:" + sku);
	console.log("name:" + name);
	console.log("category:" + category);
	console.log("price:" + price);
	console.log("quantity:" + quantity);
	
	
	// Push per i nuovi eventi GA4
	dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
	try {
		dataLayer.push({
            'event': 'purchase',
            'ecommerce': {
	            'transaction_id': transactionId, // Transaction ID - Type:String - Required
	            'affiliation': transactionAffiliation, // Provenienza Acquisto (registroimprese, ricerca libera, ricerca guidata)
	            'value': parseFloat(transactionTotal.replace(",",".")), //total revenue - Type:Numeric - Required
	            'tax': transactionTax, // Tax amount for transaction - Type:Numeric - Optional to use
	            'shipping': transactionShipping, // Shipping cost - Type:Numeric - Optional to use
	            'currency': 'EUR',
	            'items': [{
		            'item_id': sku, // SKU o nome prodotto acquistato - Required
		            'item_name': name, // Prodotto acquistato - Type:String - Required
		            'affiliation': transactionAffiliation,
		            'index': 0,
		            'item_brand': section,
		            'location_id': documentID,
		            'item_category': category, // Categoria (Elenco, Visura, ecc) - Type:String - Rquired
		            'price': parseFloat(price.replace(",",".")), // Product Price - Type:Numeric - Required
		            'quantity': quantity// Product Quantity - Type:Numeric - Required
	            }]
            }
		});
	} catch (e) {
		console.error('Errore invio evento GA4: ' + e);
	}
}

function addToCartTagManager( prezzo, descrDoc, prezzoTot){
	addAcquistiGTA(prezzoTot,descrDoc,descrDoc,prezzo,1);
}

function addAcquistiGTA(transactionTotal,sku,name,price,quantity){
	console.log("transactionTotal:" + transactionTotal);	
	console.log("sku:" + sku);
	console.log("name:" + name);
	console.log("price:" + price);
	console.log("quantity:" + quantity);
	
	// Push per i nuovi eventi GA4
	dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
	try {
			dataLayer.push({
			  'event': "add_to_cart",
			  'ecommerce': {
			    'currency':'EUR',
			    'value': parseFloat(transactionTotal.replace(",",".")),
			    'items': [
			    {
			      'item_id': sku,
			      'item_name': name,
			      'price': parseFloat(price.replace(",",".")),
			      'quantity': quantity
			    }
			    ]
			  }
			});
	
	} catch (e) {
		console.error('Errore invio evento GA4: ' + e);
	}
}

function removeFromCartTagManager( prezzo, descrDoc, prezzoTot){
	removeAcquistiGTA(prezzoTot,descrDoc,descrDoc,prezzo,1);
}

function removeAcquistiGTA(transactionTotal,sku,name,price,quantity){
	console.log("transactionTotal:" + transactionTotal);
	console.log("sku:" + sku);
	console.log("name:" + name);
	console.log("price:" + price);
	console.log("quantity:" + quantity);
	
	// Push per i nuovi eventi GA4
	dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
	try {
			dataLayer.push({
			  'event': "remove_from_cart",
			  'ecommerce': {
			    'currency':'EUR',
			    'value': parseFloat(transactionTotal.replace(',', '.')),
			    'items': [
			    {
			      'item_id': sku,
			      'item_name': name,
			      'price': parseFloat(price.replace(",",".")),
			      'quantity': quantity
			    }
			    ]
			  }
			});
	
	} catch (e) {
		console.error('Errore invio evento GA4: ' + e);
	}
}