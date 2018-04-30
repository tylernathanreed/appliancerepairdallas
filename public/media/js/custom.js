(function($) {

	$(document).ready(function() {

		// Slick carousel
		//-----------------------------------------------
		if ($('.slick-carousel').length > 0) {

			$("*[dir='ltr'] .slick-carousel.brands").slick({
				arrows: false,
				slidesToShow: 10,
				slidesToScroll: 10,
				autoplay: true,
				autoplaySpeed: 5000,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 8,
							slidesToScroll: 8
						}
					},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: 6,
							slidesToScroll: 6
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 4
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3
						}
					}
				]
			});

		}

	});

})(window.jQuery);