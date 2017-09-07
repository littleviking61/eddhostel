(function( root, $, undefined ) {
	"use strict";

	$(function () {

		// DOM ready, take it away
		// headrooms
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

var geocoder;
var map;

function initMap() {
	var map = $('#map');
	var lat = 48.5442012;
	var lng = -1.7492409;
	var zoom = parseFloat(map.data('zoom'));
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(lat, lng);
	var mapOptions = {
		zoom: zoom,
		center: latlng
	}
	map = new google.maps.Map(document.getElementById('map'), mapOptions);

	geocoder.geocode( { 'placeId': 'ChIJM7HJPYqXDkgR-_TKdlE-0dU'}, function(results, status) {
	  if (status == 'OK') {
	    map.setCenter(results[0].geometry.location);
	    var marker = new google.maps.Marker({
	        map: map,
	        position: results[0].geometry.location,
	        icon: '/wp-content/themes/eddhostel/img/icon.png'
	    });
	  }
	});
}


function initMapp() {

  if(map.length > 0) {

	  var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: zoom,
	    center: uluru
	  });
	  var marker = new google.maps.Marker({
	    position: uluru,
	    map: map,
	    icon: '/wp-content/themes/eddhostel/img/icon.png'
	  });
  	
  }
}