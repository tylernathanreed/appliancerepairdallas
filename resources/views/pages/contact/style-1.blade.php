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

	<div class="banner dark-translucent-bg" style="background-image:url({{ asset('media/images/page-contact-banner.jpg') }}); background-position: 50% 40%;">
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
		@include('pages.forms.contact')
	</div>

@endsection

@section('page.sidebar-right')

	<div class="sidebar">
		<div class="side vertical-divider-left">
			<h3 class="title logo-font"><span class="text-default">E&amp;M</span> Home Service</h3>

			<div class="separator-2 mt-20"></div>

			<ul class="list">
				<li><i class="fa fa-home pr-10"></i>{{ address('primary')->toLine1() }}<br><span class="pl-24">{{ address('primary')->toLine2() }}</span></li>
				<li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> {{ phone('primary') }}</li>
				<li><i class="fa fa-mobile pr-10 pl-1"></i><abbr title="Phone">M:</abbr> {{ phone('secondary') }}</li>
				<li><i class="fa fa-envelope pr-10"></i><a href="mailto:{{ email('primary') }}">{{ email('primary') }}</a></li>
			</ul>

			@include('partials.social-links')

			<div class="separator-2 mt-20"></div>

			<a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">
				Show Map <i class="fa fa-plus"></i>
			</a>
		</div>
	</div>

@endsection

@section('page.bottom')

	<section class="collapse" id="collapseMap">
		<div id="map-canvas"></div>
	</section>

@endsection