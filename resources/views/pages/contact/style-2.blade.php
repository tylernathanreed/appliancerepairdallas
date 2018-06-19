@extends('layouts.page', [
	'main' => [
		'class' => 'space-bottom'
	]
])

@push('breadcrumbs')

	@component('components.breadcrumb')
		Contact
	@endcomponent

@endpush

@section('banner')

	<div class="banner dark-translucent-bg" style="background-image:url({{ asset('media/images/page-contact-banner.jpg') }}); background-position: 50% 30%;">
		<div class="container">
			<div class="row justify-content-lg-center">
				<div class="col-lg-8 text-center pv-20">
					<h1 class="page-title text-center">Contact Us</h1>

					<div class="separator"></div>

					<p class="lead text-center">
						It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!
					</p>

					<ul class="list-inline mb-20 text-center">
						<li class="list-inline-item">
							<i class="text-default fa fa-map-marker pr-2"></i>{{ address('primary') }}
						</li>

						<li class="list-inline-item">
							<a href="#" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-2"></i>{{ phone('primary') }}</a>
						</li>

						<li class="list-inline-item">
							<a href="{{ email('primary') }}" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-2"></i>{{ email('primary') }}</a>
						</li>
					</ul>

					<div class="separator"></div>

					@include('partials.social-links')
				</div>
			</div>
		</div>
	</div>

@endsection

@section('page.main')

	<h2 class="title">Drop Us a Line</h2>

	<div class="row">
		<div class="col-lg-6">
			<p>Submit the form below, and we'll get back to you as soon as possible!</p>
			<div class="contact-form">
				@include('pages.forms.contact')
			</div>
		</div>

		<div class="col-lg-6">
			<div id="map-canvas"></div>
		</div>
	</div>

@endsection