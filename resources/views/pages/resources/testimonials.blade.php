@extends('layouts.page', [
	'main-container' => [
		'class' => 'padding-bottom-clear'
	]
])

@push('breadcrumbs')

    @component('components.breadcrumb')
        Testimonials
    @endcomponent

@endpush

@section('page.main')

	<section class="mb-20">
		<h3 class="title">Testimonials from our Customers</h3>
		<div class="separator-2"></div>


		<?php $testimonials = App\Models\Testimonial::all(); ?>

		<div style="display: flex; flex-wrap: wrap; margin: 0 -15px; align-items: stretch;">
			@foreach($testimonials as $testimony)
				<div class="col-md-6 mt-3">
					@include('components.testimony', array_merge($testimony->getAttributes(), [
						'border' => true
					]))
				</div>
			@endforeach
		</div>

	</section>

@endsection