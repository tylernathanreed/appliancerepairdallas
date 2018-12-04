@extends('layouts.page', [
	'main' => [
		'class' => 'border-clear light-gray-bg padding-bottom-clear'
	],
	'title' => [
		'class' => 'text-center'
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
					<h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">We Provide You The Best Solutions</h2>
					<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">We offer a six month warranty on both parts and labor.</p>
				</div>
			</div>
		</div>
	</div>
			
@endsection

@section('page.heading')
	Our Services
@endsection


@section('page.main')

	<div class="image-box space-top style-4">
		<div class="row grid-space-0">
			<div class="col-lg-6">
				<div class="overlay-container">
					<img src="{{ asset('media/images/service-1.jpg') }}" alt="">
					<div class="overlay-to-top">
						<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="body">
					<div class="pv-30 hidden-lg-down"></div>
					<h3>First Service Title</h3>
					<div class="separator-2"></div>
					<p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
					<br>
					<a href="#" class="btn btn-lg btn-gray-transparent btn-sm btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="image-box style-4">
		<div class="row grid-space-0">
			<div class="col-lg-6 order-lg-2">
				<div class="overlay-container">
					<img src="{{ asset('media/images/service-2.jpg') }}" alt="">
					<div class="overlay-to-top">
						<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 order-lg-1">
				<div class="body text-right">
					<div class="pv-30 hidden-lg-down"></div>
					<h3>Second Service Title</h3>
					<div class="separator-3"></div>
					<p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
					<br>
					<a href="#" class="btn btn-lg btn-gray-transparent btn-sm btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="image-box style-4">
		<div class="row grid-space-0">
			<div class="col-lg-6">
				<div class="overlay-container">
					<img src="{{ asset('media/images/service-3.jpg') }}" alt="">
					<div class="overlay-to-top">
						<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="body">
					<div class="pv-30 hidden-lg-down"></div>
					<h3>Third Service Title</h3>
					<div class="separator-2"></div>
					<p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
					<br>
					<a href="#" class="btn btn-lg btn-gray-transparent btn-sm btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="image-box style-4">
		<div class="row grid-space-0">
			<div class="col-lg-6 order-lg-2">
				<div class="overlay-container">
					<img src="{{ asset('media/images/service-4.jpg') }}" alt="">
					<div class="overlay-to-top">
						<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 order-lg-1">
				<div class="body text-right">
					<div class="pv-30 hidden-lg-down"></div>
					<h3>Fourth Service Title</h3>
					<div class="separator-3"></div>
					<p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
					<br>
					<a href="#" class="btn btn-lg btn-gray-transparent btn-sm btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('page.bottom')

	<section class="pv-40 dark-translucent-bg background-img-1">
		<div class="container">
			<h2 class="title text-center"><strong>Benefits</strong></h2>
			<div class="separator"></div>
			<br>
			<div class="row">
				<div class="col-lg-6">
					<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class="fa fa-support"></i></span>
						<div class="body">
							<h4 class="title">Unt in culpa qui</h4>
							<p>Adipisci blanditiis placeat suscipit itaque obcaecati explicabo minus ex voluptatum aper.</p>
							<div class="separator-3"></div>
							<ul class="list-icons">
								<li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
								<li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
								<li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
								<li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
							</ul>
							<div class="separator-2"></div>
						</div>
					</div>
					<br>
					<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class="fa fa-arrows"></i></span>
						<div class="body">
							<h4 class="title">Responsive Design</h4>
							<p>Our design is with responsive in mind. Our themes are compatible with various devices.</p>
							<div class="separator-3"></div>
						</div>
					</div>
					<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class="fa fa-bullhorn"></i></span>
						<div class="body">
							<h4 class="title">Inve et ita</h4>
							<p>Our design is with responsive in mind. Our themes are compatible with various devices.</p>
							<div class="separator-3"></div>
						</div>
					</div>
					<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class="fa fa-umbrella"></i></span>
						<div class="body">
							<h4 class="title">Labore et dolore magna aliqua</h4>
							<p>Our design is with responsive in mind. Our themes are compatible with various devices.</p>
							<div class="separator-3"></div>
						</div>
					</div>
					<br>
				</div>
				<div class="col-lg-6">
					<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class="fa fa-diamond"></i></span>
						<div class="body">
							<h4 class="title">Crystal Clean Design</h4>
							<p>Eum voluptatem explicabo cumque inventore et itaque quisquam sunteas. Elegant layouts.</p>
							<div class="separator-2"></div>
							<ul class="list-icons">
								<li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
								<li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
								<li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
								<li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
							</ul>
							<div class="separator-3"></div>
						</div>
					</div>
					<br>
					<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class="fa fa-snowflake-o"></i></span>
						<div class="body">
							<h4 class="title">Latest Technologies</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
							<div class="separator-2"></div>
						</div>
					</div>
					<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class=" fa fa-cogs"></i></span>
						<div class="body">
							<h4 class="title">Unt in culpa qui</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
							<div class="separator-2"></div>
						</div>
					</div>
					<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon without-bg"><i class="fa fa-star-o"></i></span>
						<div class="body">
							<h4 class="title">Quis harum</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
							<div class="separator-2"></div>
						</div>
					</div>
					<br>
				</div>
			</div>
		</div>
	</section>

	<section class="section dark-bg pv-40 clearfix">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="call-to-action text-center">
						<div class="row justify-content-lg-center">
							<div class="col-lg-8">
								<h3 class="title"><strong>Send</strong> Us A Service Request</h3>
								<p>Have an appliance that needs to be fixed? Sending us a service request is the fast way to get in touch with us. Contacting us is the first step in solving your problem.</p>
								<div class="separator"></div>
								<a href="{{ route('pages.contact.style-1') }}" class="btn btn-animated-left radius-50 btn-lg btn-gray-transparent">
									<i class="fa fa-truck pr-20"></i>Submit a Service Request
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="clearfix space-top">
		<div class="container">
			<div class="row">
				<div class="col-12">
					@include('models.pricing-tables.partials.index', ['style' => 'style-2'])
				</div>
			</div>
		</div>
	</section>

@endsection