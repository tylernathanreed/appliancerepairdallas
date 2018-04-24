<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>@yield('title', config('app.name'))</title>


	<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
	<meta name="author" content="Tyler Reed">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('/media/images/favicon.ico') }}">

	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('/media/css/bootstrap.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href="{{ asset('/media/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/fonts/fontello/css/fontello.css') }}" rel="stylesheet">

	<!-- Plugins -->
	<link href="{{ asset('/media/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/rs-plugin/css/settings.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/css/animations.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/hover/hover-min.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/morphext/morphext.css') }}" rel="stylesheet">
	
	<!-- the project core CSS file -->
	<link href="{{ asset('/media/css/style.css') }}" rel="stylesheet" >

	<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
	@if(config('app.debug'))
		<link href="{{ asset('/media/css/skins/light_blue.css') }}" data-style="styles-no-cookie" rel="stylesheet">
		<link href="{{ asset('/media/plugins/style-switcher/style-switcher.css') }}" rel="stylesheet">
	@else
		<link href="{{ asset('/media/css/skins/light_blue.css') }}" rel="stylesheet">
	@endif

	<!-- Custom css --> 
	<link href="{{ asset('/media/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/css/app.css') }}" rel="stylesheet">

	@yield('head')
</head>