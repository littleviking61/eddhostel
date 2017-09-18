var points = [];
var mapLoaded = false;

function initMap(){
	mapLoaded = true;
}

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

		var el2 = document.querySelector(".booking");
		var el2h = $(el2).offset().top - $(window).height() - $(el2).height();
		// construct an instance of Headroom, passing the element
		var headroom2  = new Headroom(el2, {
			"offset": el2h,	
		  "tolerance": 5,
		  "classes" : {
		          // when element is initialised
		          "initial" : "topbar",
		          // when scrolling up
		          "pinned" : "topbar--pinned",
		          // when scrolling down
		          "unpinned" : "topbar--unpinned",
		          // when above offset
		          "top" : "topbar--top",
		          // when below offset
		          "notTop" : "topbar--not-top",
		          // when at bottom of scoll area
		          "bottom" : "topbar--bottom",
		          // when not at bottom of scroll area
		          "notBottom" : "topbar--not-bottom"
		      },
		});
		// initialise
		headroom2.init();

		if($('#slidr-top').length > 0) {
			slidr.create('slidr-top', {
				breadcrumbs: true,
				transition: 'fade',
				keyboard: false,
				touch: true,
				controls: 'none',
			}).auto(5000, 'right');
		}

		// google map
		var geocoder;
		var map;
	 	var abcd = 'abcd';
	 	var bcde = 'abcd';

		function initMap() {
			var lat = 48.5442012;
			var lng = -1.7492409;
			var zoom = parseFloat($('#map').data('zoom'));
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
			        icon: '/wp-content/themes/eddhostel/img/hostel.png'
			    });
			  }
			});

		 	// Create markers.
		 	// 
		 	var markers = [];
		 	var i = 0;
		 	$('.story[data-lat]:not([data-lat=""])').each(function() {
		 		i++;
		 		var latlng = new google.maps.LatLng($(this).data('lat'), $(this).data('lng'));
		 		var marker = new google.maps.Marker({
		      position: latlng,
		      map: map,
		      title: 'story-'+i,
		      icon: '/wp-content/themes/eddhostel/img/icon-'+i+'.png'
		    });
		    markers.push(marker);

		    marker.addListener('click', function() {
    			$('html, body').animate({
    	        scrollTop: $("#"+this.title).offset().top
    	    }, 600);
		    });

		    $('a[href="#maps"]', $(this)).click(function(event){
					var latlng = new google.maps.LatLng($(this).data('lat'), $(this).data('lng'));
					map.setCenter(latlng);
					$('html, body').animate({
    	        scrollTop: $("#maps").offset().top
    	    }, 600);
    	    clearMarkers();

    	    marker.setAnimation(google.maps.Animation.BOUNCE);

    	    if(abcd !== 'abcd') clearTimeout(abcd);
    	    abcd = setTimeout(clearMarkers, 5000);
					return false;
				})
		 	});
			
			function clearMarkers() {
	      for (var i = 0; i < markers.length; i++) {
	        markers[i].setAnimation(null);
	      }
	    }
		}

		function checkInit() {
			if(mapLoaded) {
				if($('#map').length >0 ) initMap();
			}else{
				if(bcde !== 'abcd') clearTimeout(bcde);
				bcde = setTimeout(checkInit, 500);
			}
		}

		checkInit();

	});

} ( this, jQuery ));

