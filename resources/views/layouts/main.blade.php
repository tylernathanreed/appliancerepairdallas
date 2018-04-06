<!DOCTYPE html>
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->

	@include('partials.head')


	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
			@include('partials.header.main.container')
			@include('partials.banner.main')

			<div id="page-start"></div>
			@yield('content')

			@include('partials.footer.main.top')
			@include('partials.footer.main.content')
		</div>
		<!-- page-wrapper end -->

		@include('partials.tail')
	</body>
</html>
