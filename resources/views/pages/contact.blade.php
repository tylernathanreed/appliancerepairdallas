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
		
@endsection

@section('page.main')

	<p class="lead">It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
	<div class="contact-form">
		<form class="margin-clear">
			<div class="form-group has-feedback">
				<label for="name">Name: *</label>
				<input type="text" class="form-control" id="name" placeholder="What is your name?" maxlength="70" required>
				<i class="fa fa-user form-control-feedback"></i>
			</div>

			<div class="form-group has-feedback">
				<label for="email">Email: *</label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelperText" placeholder="How should we reply?" maxlength="254" required>
				<i class="fa fa-envelope form-control-feedback"></i>
				<small id="emailHelperText" class="form-text text-muted mt-2">We will respond to you using this email address.</small>
			</div>

			<div class="form-group has-feedback">
				<label for="subject">Subject: *</label>
				<input type="text" class="form-control" id="subject" placeholder="What's the summary?" maxlength="78" required>
				<i class="fa fa-navicon form-control-feedback"></i>
			</div>

			<div class="form-group has-feedback">
				<label for="message">Message: *</label>
				<textarea class="form-control" rows="6" id="message" placeholder="What should we know?" maxlength="2000" required></textarea>
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
			<li><i class="fa fa-home pr-10"></i>{{ address()->toLine1() }}<br><span class="pl-24">{{ address()->toLine2() }}</span></li>
			<li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> (123) 456-7890</li>
			<li><i class="fa fa-mobile pr-10 pl-1"></i><abbr title="Phone">M:</abbr> (123) 456-7890</li>
			<li><i class="fa fa-envelope pr-10"></i><a href="mailto:{{ config('branding.contacts.emails.primary') }}">{{ config('branding.contacts.emails.primary') }}</a></li>
		</ul>
		@include('partials.social-links')
		<div class="separator-2 mt-20 "></div>
		<a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Show Map <i class="fa fa-plus"></i></a>
	</div>

@endsection

@section('page.bottom')

	<section class="collapse" id="collapseMap">
		<div id="map-canvas"></div>
	</section>

@endsection