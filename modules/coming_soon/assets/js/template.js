/*
 * Version: 2.1
 * File Description: Initializations of plugins
 */
(function($) {

	// USE STRICT
	"use strict";

	$(document).ready(function() {

		// Animations
		//-----------------------------------------------
		if ($("[data-animation-effect]").length>0) {
			$("[data-animation-effect]").each(function() {
				var waypoints = $(this).waypoint(function(direction) {
					var animatedObject;
					animatedObject = $(this.element);
					animatedObject.addClass('animated object-visible ' + animatedObject.attr("data-animation-effect"));
					this.destroy();
				},{
					offset: '90%'
				});
			});
		};

	});

})(jQuery);