(function($) {

	"use strict";

	$(document).ready(function() {

		$('.countdown').countdown(settingsCountTo.expiryDate, function(event) {
		$(this).html(event.strftime('' +
			'<span class="countdown-section"><span class="countdown-amount">%D</span> <span class="countdown-period">'+settingsCountTo.days+'</span></span> ' +
			'<span class="countdown-section"><span class="countdown-amount">%H</span> <span class="countdown-period">'+settingsCountTo.hours+'</span></span> ' +
			'<span class="countdown-section"><span class="countdown-amount">%M</span> <span class="countdown-period">'+settingsCountTo.minutes+'</span></span> ' +
			'<span class="countdown-section"><span class="countdown-amount">%S</span> <span class="countdown-period">'+settingsCountTo.seconds+'</span></span>'));
		});

	}); // End document ready

})(jQuery);