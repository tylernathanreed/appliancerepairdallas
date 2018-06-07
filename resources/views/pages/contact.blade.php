@extends('layouts.page', [
	'main' => [
		'class' => 'content-bottom'
	]
])

@push('breadcrumbs')

	@component('components.breadcrumb')
		Contact
	@endcomponent

@endpush

@section('banner')

	<!-- banner start -->
	<!-- ================ -->
	<div class="banner dark-translucent-bg" style="background-image:url('media/images/page-contact-banner.jpg'); background-position: 50% 40%;">
		<div class="container">
			<div class="row justify-content-lg-center">
				<div class="col-lg-8 text-center pv-20">
					<h2 class="title">Contact Us</h2>
					<div class="separator mt-10"></div>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
		
@endsection

@section('page.main')

	<p class="lead">It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
	<div class="contact-form">
		<form class="margin-clear">
			<div class="form-group has-feedback">
				<label for="name">Name: *</label>
				<input type="text" class="form-control" id="name" placeholder="Name" required>
				<i class="fa fa-user form-control-feedback"></i>
			</div>

			<div class="form-group has-feedback">
				<label for="email">Email: *</label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelperText" placeholder="Enter email" required>
				<i class="fa fa-envelope form-control-feedback"></i>
				<small id="emailHelperText" class="form-text text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
			</div>

			<div class="form-group has-feedback">
				<label for="subject">Subject: *</label>
				<input type="text" class="form-control" id="subject" placeholder="Subject" required>
				<i class="fa fa-navicon form-control-feedback"></i>
			</div>

			<div class="form-group has-feedback">
				<label for="message">Message: *</label>
				<textarea class="form-control" rows="6" id="message" placeholder="Message" required></textarea>
				<i class="fa fa-pencil form-control-feedback"></i>
			</div>

			<input type="submit" value="Submit" class="submit-button btn btn-default">
		</form>
	</div>

@endsection

@section('page.sidebar-right')

	<div class="side vertical-divider-left">
		<h3 class="title logo-font">The <span class="text-default">Project</span></h3>
		<div class="separator-2 mt-20"></div>
		<ul class="list">
			<li><i class="fa fa-home pr-10"></i>795 Folsom Ave, Suite 600<br><span class="pl-20">San Francisco, CA 94107</span></li>
			<li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> (123) 456-7890</li>
			<li><i class="fa fa-mobile pr-10 pl-1"></i><abbr title="Phone">M:</abbr> (123) 456-7890</li>
			<li><i class="fa fa-envelope pr-10"></i><a href="mailto:youremail@domain.com">youremail@domain.com</a></li>
		</ul>
		<ul class="social-links circle small margin-clear clearfix animated-effect-1">
			<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
			<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
			<li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
			<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
		</ul>
		<div class="separator-2 mt-20 "></div>
		<a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Show Map <i class="fa fa-plus"></i></a>
	</div>

@endsection

<!-- section start -->
<!-- ================ -->
<section class="collapse" id="collapseMap">
	<div id="map-canvas"></div>
</section>
<!-- section end -->