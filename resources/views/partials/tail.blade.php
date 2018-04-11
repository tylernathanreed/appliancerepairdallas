<div id="tail" class="tail">
	<!-- JavaScript files placed at the end of the document so the pages load faster -->
	<!-- ================================================== -->
	<!-- Jquery and Bootstap core js files -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{ config('app.url') }}/media/js/bootstrap.min.js"></script>

	<!-- Modernizr javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/js/modernizr.js"></script>

	<!-- jQuery Revolution Slider  -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Isotope javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/isotope/isotope.pkgd.min.js"></script>
	
	<!-- Magnific Popup javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	
	<!-- Appear javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/waypoints/jquery.waypoints.min.js"></script>

	<!-- Count To javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/js/jquery.countTo.js"></script>
	
	<!-- Parallax javascript -->
	<script src="{{ config('app.url') }}/media/js/jquery.parallax-1.1.3.js"></script>

	<!-- Contact form -->
	<script src="{{ config('app.url') }}/media/js/jquery.validate.js"></script>

	<!-- Morphext -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/morphext/morphext.min.js"></script>

	<!-- Background Video -->
	<script src="{{ config('app.url') }}/media/js/jquery.vide.min.js"></script>

	<!-- Owl carousel javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/owl-carousel/owl.carousel.min.js"></script>

	<!-- SmoothScroll javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/js/jquery.browser.js"></script>
	<script type="text/javascript" src="{{ config('app.url') }}/media/js/SmoothScroll.js"></script>

	<!-- Google Maps javascript -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQeVPJEiUi8YbP4rueUnGXJhCgA2GQcOw"></script>
	<script type="text/javascript" src="{{ asset('media/js/google.map.config.js') }}"></script>

	<!-- Initialization of Plugins -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/js/template.js"></script>

	<!-- Custom Scripts -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/js/custom.js"></script>

	@if(config('app.debug'))
		<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/style-switcher/style-switcher.js"></script>
	@endif

	@yield('tail')
</div>