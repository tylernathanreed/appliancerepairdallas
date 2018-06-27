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
					<h3 class="title logo-font object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><span class="text-default">E&amp;M</span> Home Service</h3>
					<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('page.main')

	<h3 class="title">Who <strong>We Are</strong></h3>
	<div class="separator-2"></div>
	<div class="row">
		<div class="col-lg-6">
			<p>The E&amp;M Home Service team will repair or install appliances for your residence, rental property, or property being prepared for sale in the Dallas / Fort Worth Metroplex. We specialize in superior customer service. We have a female technician on staff that works exclusively with seniors and women who live alone.</p>
			<p>Blanditiis aspernatur, non quasi, maxime corporis officiis quia. Cupiditate, voluptatibus ducimus, natus, labore mollitia dolorem incidunt voluptatum, delectus eius fugit porro placeat animi voluptatem autem hic eligendi sint. Amet pariatur odit repudiandae sunt. Rem ipsum dolor sit amet, consectetur adipisicing elit. Sunt asperiores a.</p>

			<ul class="list-icons">
				<li><i class="fa fa-check-square-o"></i> Experienced and qualified in-home service technicians</li>
				<li><i class="fa fa-check-square-o"></i> Fully licensed and bonded, E&amp;M Home Service stands behind their work</li>
				<li><i class="fa fa-check-square-o"></i> Better Business Bureau Accredited Since 2005; <b>A+ Rating!</b></li>
				<li><i class="fa fa-check-square-o"></i> Superior technical expertise for all major appliance brands</li>
				<li><i class="fa fa-check-square-o"></i> Simple pricing and wide service area, available 24/7</li>
			</ul>
		</div>

		<div class="col-lg-6">
            @include('components.carousels.content-slider', [
                'controls' => true,
                'autoplay' => false,
                'items' => [
                    [
                        'image' => asset('media/images/page-about-1.jpg'),
                        'title' => 'We Can Do It'
                    ],
                    [
                        'image' => asset('media/images/page-about-2.jpg'),
                        'title' => 'You Can Trust Us'
                    ],
                    [
                        'image' =>asset('media/images/page-about-3.jpg'),
                        'title' => 'We Love What We Do'
                    ]
                ]
            ])
		</div>
	</div>

@endsection

@section('page.main-bottom')

	<div class="light-gray-bg pv-20 section mt-20">
		<div class="container">
			<h4 class="mb-20">Our <strong>Team</strong></h4>
			<div class="row grid-space-10">
				<div class="col-md-6 col-lg-3">
					@component('components.team-member.style-1', [
						'name' => 'Eric',
						'title' => 'Owner / Lead Technician',
						'subtitle' => 'Hardworking',
						'image' => asset('media/images/team-member-1.jpg')
					])

						<ul class="social-links circle animated-effect-1 margin-clear">
							<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
						</ul>

					@endcomponent
				</div>

				<div class="col-md-6 col-lg-3">
					@component('components.team-member.style-1', [
						'name' => 'Lisa',
						'title' => 'Owner / Lead Coordinator',
						'subtitle' => 'Dedicated',
						'image' => asset('media/images/team-member-2.jpg')
					])

						<ul class="social-links circle animated-effect-1 margin-clear">
							<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
						</ul>

					@endcomponent
				</div>

				<div class="col-md-6 col-lg-3">
					@component('components.team-member.style-1', [
						'name' => 'Terry',
						'title' => 'Experienced',
						'subtitle' => 'Loyal',
						'image' => asset('media/images/team-member-3.jpg')
					])

						<ul class="social-links circle animated-effect-1 margin-clear">
							<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
						</ul>

					@endcomponent
				</div>

				<div class="col-md-6 col-lg-3">
					@component('components.team-member.style-1', [
						'name' => 'Ryan',
						'title' => 'Technician',
						'subtitle' => 'Approachable',
						'image' => asset('media/images/team-member-4.jpg')
					])

						<ul class="social-links circle animated-effect-1 margin-clear">
							<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
						</ul>

					@endcomponent
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<h3 class="mt-4">Why <strong>Choose Us</strong></h3>
			<div class="separator-2"></div>
			<div class="row">
				<div class="col-lg-6">
					@include('components.accordion', [
						'items' => [
							0 => [
								'heading' => '<i class="fa fa-rocket pr-10"></i>We Have Strong Background',
								'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put.'
							],

							1 => [
								'heading' => '<i class="fa fa-leaf pr-10"></i>Unt loremcu doloriem sit lormeyci',
								'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put.'
							],

							2 => [
								'heading' => '<i class="fa fa-heart pr-10"></i>We Love What We Do',
								'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put.'
							]
						]
					])
				</div>

				<div class="col-lg-6">
					<div class="progress mt-20 style-1">
						<span class="text"></span>
						<div class="progress-bar progress-bar-default" data-animate-width="90%">
							<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">A/C</span>
						</div>
					</div>

					<div class="progress style-1">
						<span class="text"></span>
						<div class="progress-bar progress-bar-default" data-animate-width="95%">
							<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Dishwashers</span>
						</div>
					</div>

					<div class="progress style-1">
						<span class="text"></span>
						<div class="progress-bar progress-bar-default" data-animate-width="80%">
							<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Refridgerators</span>
						</div>
					</div>

					<div class="progress style-1">
						<span class="text"></span>
						<div class="progress-bar progress-bar-default" data-animate-width="85%">
							<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Installations</span>
						</div>
					</div>

					<div class="progress style-1">
						<span class="text"></span>
						<div class="progress-bar progress-bar-default" data-animate-width="75%">
							<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Dryers</span>
						</div>
					</div>

					<div class="progress style-1">
						<span class="text"></span>
						<div class="progress-bar progress-bar-default" data-animate-width="90%">
							<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Repairs</span>
						</div>
					</div>
				</div>
			</div>

			<div class="separator"></div>

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

@endsection

@section('page.bottom')

	<section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-1" style="background-position: 50% 60%;">
		<div class="container-fluid">
			@include('partials.stats', [
				'style' => 1
			])
		</div>
	</section>

@endsection