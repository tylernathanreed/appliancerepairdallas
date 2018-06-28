@extends('layouts.page')

@push('breadcrumbs')

	@component('components.breadcrumb')
		About
	@endcomponent

@endpush

@section('page.heading')
	About Us
@endsection

@section('banner')

	<div class="banner border-clear light-translucent-bg" style="background-image:url({{ asset('media/images/page-about-banner-2.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 pv-20">
					<h2 class="title"><strong>Welcome</strong> To E&amp;M Home Service</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('page.main')

	<div class="row">
		<div class="col-lg-6">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Suspendisse aliquet imperdiet commodo. Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per.</p>
		<p>Sed eget pulvinar quam, vel feugiat enim. Aliquam erat volutpat. Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo. Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per. Vestibulum velmo.</p>
		<ul class="list-icons">
		<li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall"><i class="fa fa-check"></i> Etiam sed dolor ac diam volutpat</li>
		<li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="fa fa-check"></i> Sed eget pulvinar quam, vel feugiat enim aliquam </li>
		<li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="fa fa-check"></i> Erat volutpat. Phasellus eu porta ipsum suspendisse aliquet imperdiet</li>
		<li class="object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="fa fa-check"></i> Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo</li>
		</ul>
		</div>

		<aside class="sidebar col-lg-6">
			<div class="block clearfix">
				<div class="overlay-container">
					<img src="{{ asset('media/images/page-about-2.jpg') }}" alt="">
					<a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
				</div>
			</div>
		</aside>
	</div>

	<h2 class="title">Why <strong>Choose Us</strong></h2>
	<div class="separator-2"></div>

	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Perferendis tenetur beatae adipisci atque.</p>

	<div class="row">
		<div class="col-lg-6">
			@include('components.accordion', [
				'style' => 2,
				'class' => 'mb-4',
				'items' => [
					0 => [
						'heading' => '<i class="fa fa-bold pr-10"></i>Bootstrap Based',
						'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'
					],

					1 => [
						'heading' => '<i class="fa fa-leaf pr-10"></i>Clean &amp; powerful design',
						'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'
					],

					2 => [
						'heading' => '<i class="fa fa-html5 pr-10"></i>HTML5/CSS3',
						'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'
					]

				]
			])
		</div>

		<div class="col-lg-6">
			@component('components.tabs')

				@slot('items.0.heading')
					<i class="fa fa-home pr-10"></i>Very Flexible
				@endslot

				@slot('items.0.content')
					<h3>Very Flexible</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
					<p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
					<a href="#" class="btn btn-default margin-clear">Read more</a>
				@endslot

				@slot('items.1.heading')
					<i class="fa fa-user pr-10"></i>Unt lorem culpa quilor
				@endslot

				@slot('items.1.content')
					<h3>Unt lorem culpa quilor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
					<p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
					<a href="#" class="btn btn-default margin-clear">Read more</a>
				@endslot

			@endcomponent
		</div>
	</div>

@endsection

@section('page.bottom')

	<section class="pv-40 stats padding-bottom-clear light-translucent-bg hovered background-img-5">
    	<div class="container-fluid">
			@include('partials.stats', [
				'iconStyle' => 'dark-bg circle'
			])
		</div>
	</section>

	<section class="pv-30 light-gray-bg clearfix">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="slick-carousel content-slider">
						<div class="testimonial text-center padding-ver-clear">
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

						<div class="testimonial text-center padding-ver-clear">
							<h3>Amazing!</h3>
							<div class="separator"></div>

							<div class="testimonial-body">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
								</blockquote>

								<div class="testimonial-info-1">- John Doe</div>
								<div class="testimonial-info-2">By Other Company</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
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
			</div>
		</div>
	</section>

@endsection