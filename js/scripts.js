(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
		// slidr-top
		// 
		$( ".header.header" ).clone().insertAfter( ".header.header" ).addClass('headroom');
		$('.headroom .background-image').remove();
		// grab an element
		var myElement = document.querySelector(".headroom");
		// construct an instance of Headroom, passing the element
		var headroom  = new Headroom(myElement, {
			"offset": 370,	
		  "tolerance": 5,
		});
		// initialise
		headroom.init();


		if($('#slidr-top').length > 0) {
			slidr.create('slidr-top', {
				breadcrumbs: true,
				fade: false,
				keyboard: true,
				touch: true,
				controls: 'none',
			}).start();
		}
	});

} ( this, jQuery ));