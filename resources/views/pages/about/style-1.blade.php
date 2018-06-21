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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus illo vero cupiditate, sed enim voluptatibus provident consectetur. Quo dolor sunt nostrum, eligendi illo accusamus odit, ipsam excepturi voluptatem nulla minus.</p>
			<p>Blanditiis aspernatur, non quasi, maxime corporis officiis quia. Cupiditate, voluptatibus ducimus, natus, labore mollitia dolorem incidunt voluptatum, delectus eius fugit porro placeat animi voluptatem autem hic eligendi sint. Amet pariatur odit repudiandae sunt. Rem ipsum dolor sit amet, consectetur adipisicing elit. Sunt asperiores a.</p>

			<ul class="list-icons">
				<li><i class="fa fa-check-square-o"></i> Unt in culpa qui deserunt</li>
				<li><i class="fa fa-check-square-o"></i> Elegant Design</li>
				<li><i class="fa fa-check-square-o"></i> Labore et dolore magna aliqua</li>
				<li><i class="fa fa-check-square-o"></i> ipsam asperiores fugiat quo</li>
			</ul>
		</div>

		<div class="col-lg-6">
			<div class="slick-carousel content-slider-with-controls">
				<div class="overlay-container overlay-visible">
					<img src="{{ asset('media/images/page-about-1.jpg') }}" alt="">
					<div class="overlay-bottom hidden-sm-down">
						<div class="text">
							<h3 class="title">We Can Do It</h3>
						</div>
					</div>
					<a href="images/page-about-1.jpg" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
				</div>

				<div class="overlay-container overlay-visible">
					<img src="{{ asset('media/images/page-about-2.jpg') }}" alt="">
					<div class="overlay-bottom hidden-sm-down">
						<div class="text">
							<h3 class="title">You Can Trust Us</h3>
						</div>
					</div>
					<a href="images/page-about-2.jpg" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
				</div>

				<div class="overlay-container overlay-visible">
					<img src="{{ asset('media/images/page-about-3.jpg') }}" alt="">
					<div class="overlay-bottom hidden-sm-down">
						<div class="text">
							<h3 class="title">We Love What We Do</h3>
						</div>
					</div>
					<a href="images/page-about-3.jpg" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
				</div>
			</div>
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
						'name' => 'Jane Doe',
						'title' => 'CEO',
						'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit!',
						'image' => asset('media/images/team-member-1.jpg')
					])

						<ul class="social-links circle colored margin-clear">
							<li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
						</ul>

					@endcomponent
				</div>

				<div class="col-md-6 col-lg-3">
					@component('components.team-member.style-1', [
						'name' => 'John Doe',
						'title' => 'CTO',
						'subtitle' => 'Ipsum dolor sit amet, consectetur adipisicing elit!',
						'image' => asset('media/images/team-member-2.jpg')
					])

						<ul class="social-links circle colored margin-clear">
							<li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
						</ul>

					@endcomponent
				</div>

				<div class="col-md-6 col-lg-3">
					@component('components.team-member.style-1', [
						'name' => 'Anne Doe',
						'title' => 'Project Manager',
						'subtitle' => 'Dolor sit amet, praesentium consectetur adipisicing elit!',
						'image' => asset('media/images/team-member-3.jpg')
					])

						<ul class="social-links circle colored margin-clear">
							<li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="xing"><a href="#"><i class="fa fa-xing"></i></a></li>
						</ul>

					@endcomponent
				</div>

				<div class="col-md-6 col-lg-3">
					@component('components.team-member.style-1', [
						'name' => 'Maria Doe',
						'title' => 'Designer',
						'subtitle' => 'Voluptates praesentium nulla cupiditate explicabo!',
						'image' => asset('media/images/team-member-4.jpg')
					])

						<ul class="social-links circle colored margin-clear">
							<li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
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
					<div id="accordion" class="collapse-style-1" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="fa fa-rocket pr-10"></i>We Have Strong Background
									</a>
								</h4>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<div class="card-block">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put.
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="true" aria-controls="collapseTwo">
										<i class="fa fa-leaf pr-10"></i>Unt loremcu doloriem sit lormeyci
									</a>
								</h4>
							</div>

							<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-block">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put.
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="true" aria-controls="collapseThree">
										<i class="fa fa-heart pr-10"></i>We Love What We Do
									</a>
								</h4>
							</div>

							<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="card-block">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put.
								</div>
							</div>
						</div>
					</div>
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
			<div class="row">
				<div class="col-lg-3 col-sm-6 text-center">
					<div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
						<span class="icon default-bg circle"><i class="fa fa-wrench"></i></span>
						<h3><strong>Repairs</strong></h3>
						<span class="counter" data-to="1525" data-speed="5000">0</span>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6 text-center">
					<div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
						<span class="icon default-bg circle"><i class="fa fa-plus"></i></span>
						<h3><strong>Installations</strong></h3>
						<span class="counter" data-to="1225" data-speed="5000">0</span>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6 text-center">
					<div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
						<span class="icon default-bg circle"><i class="fa fa-phone"></i></span>
						<h3><strong>Service Calls</strong></h3>
						<span class="counter" data-to="6532" data-speed="5000">0</span>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6 text-center">
					<div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
						<span class="icon default-bg circle"><i class="fa fa-users"></i></span>
						<h3><strong>Customers</strong></h3>
						<span class="counter" data-to="15002" data-speed="5000">0</span>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection