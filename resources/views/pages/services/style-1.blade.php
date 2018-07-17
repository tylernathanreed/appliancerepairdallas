@extends('layouts.page', [
	'main' => [
		'class' => 'padding-bottom-clear'
	]
])

@push('breadcrumbs')

	@component('components.breadcrumb')
		Services
	@endcomponent

@endpush

@section('banner')

	<div class="banner dark-translucent-bg" style="background-image:url({{ asset('media/images/page-services-banner.jpg') }}); background-position: 50% 32%;">
		<div class="container">
			<div class="row justify-content-lg-center">
				<div class="col-lg-8 text-center pv-20">
					<h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">What We <strong>Provide</strong></h2>
					<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
				</div>
			</div>
		</div>
	</div>
		
@endsection

@section('page.main')

	<div class="row">
		<div class="col-lg-4 col-md-6">
			@component('components.feature-box', [
				'class' => 'ph-20 text-center',
				'title' => 'Great &amp; elegant',
				'iconStyle' => 'large default-bg circle',
				'iconClass' => 'fa fa-diamond',
				'link' => [
					'href' => '#'
				]
			])

				<div class="separator clearfix"></div>
				<p class="text-muted">Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>

			@endcomponent
		</div>

		<div class="col-lg-4 col-md-6">
			@component('components.feature-box', [
				'class' => 'ph-20 text-center',
				'title' => 'Porro ullam volu',
				'iconStyle' => 'large dark-bg circle',
				'iconClass' => 'fa fa-connectdevelop',
				'link' => [
					'href' => '#',
					'class' => 'link-dark'
				]
			])

				<div class="separator clearfix"></div>
				<p class="text-muted">Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>

			@endcomponent
		</div>

		<div class="col-lg-4 col-md-6">
			@component('components.feature-box', [
				'class' => 'ph-20 text-center',
				'title' => 'Latest Technologies',
				'iconStyle' => 'large default-bg circle',
				'iconClass' => 'fa fa-snowflake-o',
				'link' => [
					'href' => '#'
				]
			])

				<div class="separator clearfix"></div>
				<p class="text-muted">Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>

			@endcomponent
		</div>

		<div class="clearfix visible-md"></div>

		<div class="col-lg-4 col-md-6">
			@component('components.feature-box', [
				'class' => 'ph-20 text-center',
				'title' => 'Elegant Design',
				'iconStyle' => 'large dark-bg circle',
				'iconClass' => 'fa fa-check',
				'link' => [
					'href' => '#',
					'class' => 'link-dark'
				]
			])

				<div class="separator clearfix"></div>
				<p class="text-muted">Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>

			@endcomponent
		</div>

		<div class="col-lg-4 col-md-6">
			@component('components.feature-box', [
				'class' => 'ph-20 text-center',
				'title' => 'Unt loremcu',
				'iconStyle' => 'large default-bg circle',
				'iconClass' => 'fa fa-life-ring',
				'link' => [
					'href' => '#'
				]
			])

				<div class="separator clearfix"></div>
				<p class="text-muted">Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>

			@endcomponent
		</div>

		<div class="col-lg-4 col-md-6">
			@component('components.feature-box', [
				'class' => 'ph-20 text-center',
				'title' => 'Packed Full Of Features',
				'iconStyle' => 'large dark-bg circle',
				'iconClass' => 'fa fa-gift',
				'link' => [
					'href' => '#',
					'class' => 'link-dark'
				]
			])

				<div class="separator clearfix"></div>
				<p class="text-muted">Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>

			@endcomponent
		</div>
	</div>

@endsection

@section('page.bottom')

	@component('components.call-to-action', [
		'background' => 'background-img-1 dark-translucent-bg',
		'style' => 'background-position: 50% 42%;',
		'class' => 'text-center'
	])

		@slot('header')
			<h1 class="title mt-2">Contact Us</h1>
			<p>Ready to utilize our services? Submit a service request form!</p>
		@endslot

		@slot('button')
			<div class="mv-4">
				<a href="#" class="btn btn-lg btn-animated-left btn-gray-transparent radius-50">
					<i class="fa fa-truck pr-20"></i>Submit a Service Request
				</a>
			</div>
		@endslot

	@endcomponent

	<!-- section start -->
	<!-- ================ -->
	<section class="pv-20 padding-bottom-clear clearfix">
		<div class="container">
			<h2 class="text-center">Extra Services</h2>
			<div class="separator"></div>

			<p class="text-center space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus veritatis unde quibusdam, saepe quidem nisi aliquid illo distinctio, cum id dolorum consectetur ipsam perspiciatis provident voluptatibus quaerat! Nulla, quaerat! Possimus.</p>

			<div class="row">
				<div class="col-lg-6 space-top">
					<br>
					<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class="fa fa-arrows"></i></span>
						<div class="body">
							<h4 class="title">Responsive Design</h4>
							<p>Our design is with responsive in mind. Our website is compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
							<div class="separator-3"></div>
						</div>
					</div>

					<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
						<span class="icon without-bg"><i class="fa fa-bullhorn"></i></span>
						<div class="body">
							<h4 class="title">Inve et ita</h4>
							<p>Our design is with responsive in mind. Our website is compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
							<div class="separator-3"></div>
						</div>
					</div>

					<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
						<span class="icon without-bg"><i class="fa fa-umbrella"></i></span>
						<div class="body">
							<h4 class="title">Labore et dolore magna aliqua</h4>
							<p>Our design is with responsive in mind. Our website is compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<img src="{{ asset('media/images/service-image-1.png') }}" alt="">
				</div>
			</div>

			@include('models.pricing-tables.partials.index', ['style' => 'style-3'])
		</div>
	</section>
	<!-- section end -->

@endsection