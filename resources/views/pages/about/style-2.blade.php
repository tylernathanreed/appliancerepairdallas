@extends('layouts.page', [
	'main-container' => [
		'class' => 'padding-bottom-clear'
	]
])

@push('breadcrumbs')

	@component('components.breadcrumb')
		About
	@endcomponent

@endpush

@section('banner')

	<div class="banner dark-translucent-bg" style="background-image:url({{ asset('media/images/page-about-banner.jpg') }}); background-position: 50% 27%;">
		<div class="container">
			<div class="row justify-content-lg-center">
				<div class="col-lg-8 text-center pv-20">
					<h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">About Us</h2>
					<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('page.main')

	<div class="row">
		<div class="col-lg-4">
			@include('components.feature-box.style-2', [
				'icon' => '<i class="fa fa-diamond"></i>',
				'title' => 'We Have Strong Background',
				'href' => '#',
				'body' => 'Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.'
			])
		</div>

		<div class="col-lg-4">
			@include('components.feature-box.style-2', [
				'icon' => '<i class="fa fa-connectdevelop"></i>',
				'title' => 'We Love Details',
				'href' => '#',
				'body' => 'Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.'
			])
		</div>

		<div class="col-lg-4">
			@include('components.feature-box.style-2', [
				'icon' => '<i class="fa fa-connectdevelop"></i>',
				'title' => 'We Love Details',
				'href' => '#',
				'body' => 'Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.'
			])
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			@include('components.feature-box.style-2', [
				'icon' => '<i class="fa fa-heart"></i>',
				'title' => 'We Love to Help',
				'href' => '#',
				'body' => 'Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.'
			])
		</div>

		<div class="col-lg-4">
			@include('components.feature-box.style-2', [
				'icon' => '<i class="fa fa-cogs"></i>',
				'title' => 'We Are Experienced',
				'href' => '#',
				'body' => 'Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.'
			])
		</div>

		<div class="col-lg-4">
			@include('components.feature-box.style-2', [
				'icon' => '<i class="fa fa fa-life-ring"></i>',
				'title' => 'We Are Affordable',
				'href' => '#',
				'body' => 'Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.'
			])
		</div>
	</div>

@endsection

@section('page.bottom')

	<section class="object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
		<div class="full-width-section">
			<div class="full-image-container hovered">
				<img class="to-right-block" src="{{ asset('media/images/page-about-1.jpg') }}" alt="">
				<div class="full-image-overlay text-right">
					<h3 class="mt-4">What <strong>We Offer</strong></h3>

					<ul class="list-icons">
						<li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
						<li>Elegant Design <i class="fa fa-check-square-o"></i></li>
						<li>ipsam asperiores fugiat quo <i class="fa fa-check-square-o"></i></li>
						<li>Animi veniam veritatis sint <i class="fa fa-check-square-o"></i></li>
						<li>Voluptatum officia suscipit <i class="fa fa-check-square-o"></i></li>
						<li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
					</ul>
				</div>
			</div>

			<div class="full-text-container light-gray-bg border-bottom-clear">
				<h2>Why <strong>Choose Us</strong></h2>

				<div class="separator-2 hidden-lg-down"></div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>

				<div class="separator-3 hidden-lg-down"></div>

				<a href="mailto:{{ email() }}" class="btn btn-default btn-animated">Contact Us <i class="pl-1 fa fa-envelope-o"></i></a>
			</div>
		</div>
	</section>

	<section class="section pv-40 stats">
		<div class="container">
			<h3 class="text-center mt-4">
				Some <strong>Info</strong> about <span class="logo-font"><span class="text-muted">E&amp;M</span> <span class="text-default">Home Service</span></span>
			</h3>

			<div class="separator mb-20"></div>

			@include('partials.stats', [
				'style' => 3
			])

			<div class="clients-container">
				<div class="clients">
					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
						<a href="#"><img src="{{ asset('media/images/client-1.png') }}" alt=""></a>
					</div>

					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
						<a href="#"><img src="{{ asset('media/images/client-2.png') }}" alt=""></a>
					</div>

					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
						<a href="#"><img src="{{ asset('media/images/client-3.png') }}" alt=""></a>
					</div>

					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
						<a href="#"><img src="{{ asset('media/images/client-4.png') }}" alt=""></a>
					</div>

					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
						<a href="#"><img src="{{ asset('media/images/client-5.png') }}" alt=""></a>
					</div>

					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
						<a href="#"><img src="{{ asset('media/images/client-6.png') }}" alt=""></a>
					</div>

					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
						<a href="#"><img src="{{ asset('media/images/client-7.png') }}" alt=""></a>
					</div>

					<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
						<a href="#"><img src="{{ asset('media/images/client-8.png') }}" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="pv-40 fixed-bg dark-translucent-bg hovered background-img-4">
		<div class="container">
			<div class="row justify-content-lg-center">
				<div class="col-lg-8">
					<div class="testimonial text-center">
						<div class="testimonial-image">
							<img src="{{ asset('media/images/testimonial-1.jpg') }}" alt="Jane Doe" title="Jane Doe" class="rounded-circle">
						</div>

						<h3>Just Perfect!</h3>
						<div class="separator"></div>
						<div class="testimonial-body">
							<blockquote>
								<p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
							</blockquote>

							<div class="testimonial-info-1">- Jane Doe</div>
							<div class="testimonial-info-2">By Company</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection