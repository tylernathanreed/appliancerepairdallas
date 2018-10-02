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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('/media/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href="{{ asset('/media/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

	<!-- Plugins -->
	<link href="{{ asset('/media/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/rs-plugin-5/css/settings.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/rs-plugin-5/css/layers.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/rs-plugin-5/css/navigation.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/css/animations.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/plugins/slick/slick.css') }}" rel="stylesheet">
	
	<!-- The Project's core CSS file -->
	<link href="{{ asset('/media/css/template.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/css/typography-default.css') }}" rel="stylesheet">

	<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
	<?php $selected = config('styles.primary-colors.selected'); ?>
	<?php $skin = config('styles.primary-colors.colors.' . $selected . '.style'); ?>

	@if(config('app.debug'))
		<link href="{{ asset('/media/css/skins/' . $skin . '.css') }}" data-style="styles-no-cookie" rel="stylesheet">
		<link href="{{ asset('/media/plugins/style-switcher/style-switcher.css') }}" rel="stylesheet">
	@else
		<link href="{{ asset('/media/css/skins/' . $skin . '.css') }}" rel="stylesheet">
	@endif

	<!-- Custom css --> 
	<link href="{{ asset('/media/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/media/css/custom.css') }}" rel="stylesheet">

	@yield('head')
</head>