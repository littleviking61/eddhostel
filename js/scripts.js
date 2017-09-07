(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
		// slidr-top
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