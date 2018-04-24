<div id="tail" class="tail">
	<!-- JavaScript files placed at the end of the document so the pages load faster -->
	<!-- ================================================== -->
	<!-- Jquery and Bootstap core js files -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/jquery.min.js"></script>
	<script type="text/javascript" src="{{ config('app.url') }}/media/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- jQuery Revolution Slider  -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Isotope javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/isotope/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/isotope/isotope.pkgd.min.js"></script>
	
	<!-- Magnific Popup javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	
	<!-- Appear javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/waypoints/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/waypoints/sticky.min.js"></script>

	<!-- Count To javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/countTo/jquery.countTo.js"></script>

	<!-- Morphext -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/typed/typed.min.js"></script>

	<!-- Slick carousel javascript -->
	<script type="text/javascript" src="{{ config('app.url') }}/media/plugins/slick/slick.min.js"></script>

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