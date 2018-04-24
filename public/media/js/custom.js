(function($) {

	$(document).ready(function() {

		//Owl carousel
		//-----------------------------------------------
		if ($('.owl-carousel').length>0) {

			$('.owl-carousel.brands').owlCarousel({
				items: 10,
				autoPlay: true,
				pagination: false,
				loop: true,
				rewind: false,
				itemsDesktop: [1199, 8],
				itemsDesktopSmall: [992, 6],
				itemsTablet: [768, 4],
				itemsMobile: [479, 3]
			});

		}

	});

})(window.jQuery);