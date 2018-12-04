@extends('layouts.page')

@push('breadcrumbs')

	@component('components.breadcrumb')
		Coverage
	@endcomponent

@endpush

@section('page.heading')
    Texas Towns and Cities We Service
@endsection

@section('page.main')

	<p class="lead">E&amp;M Home Service will make service calls to the following towns and cities in Texas. Not listed? <a href="{{ route('pages.contact.style-1') }}">Contact Us</a> to see if we can come to you.</p>

	<section>
		<div id="map-canvas"></div>
	</section>

@endsection

@section('page.sidebar-right')

	<div class="side vertical-divider-left">
		<h3 class="title logo-font">Towns and Cities</h3>
		<div class="separator-2 mt-20"></div>
		<div class="row">
			<div class="col-md-6">
				<ul class="list">
					<li>Addison</li>
					<li>Allen</li>
					<li>Anna</li>
					<li>Arlington</li>
					<li>Argyle</li>
					<li>Carrollton</li>
					<li>Cedar Hill</li>
					<li>Celina</li>
					<li>Cockerell Hill</li>
					<li>Colleyville</li>
					<li>Coppell</li>
					<li>Dallas</li>
					<li>Denton</li>
					<li>DeSoto</li>
					<li>Euless</li>
					<li>Fairview</li>
					<li>Farmers Branch</li>
					<li>Farmersville</li>
					<li>Flower Mound</li>
					<li>Fort Worth</li>
					<li>Frisco</li>
					<li>Garland</li>
					<li>Glenn Heights</li>
					<li>Grand Prairie</li>
					<li>Grapevine</li>
					<li>Haltom City</li>
				</ul>
			</div>

			<div class="col-md-6">
				<ul class="list">
					<li>Highland Park</li>
					<li>Hurst, Irving</li>
					<li>Keller</li>
					<li>Lake Dallas</li>
					<li>Lakewood Village</li>
					<li>Lewisville</li>
					<li>Little Elm</li>
					<li>Lucas</li>
					<li>McKinney</li>
					<li>Mesquite</li>
					<li>Melissa</li>
					<li>Mesquite</li>
					<li>Murphy</li>
					<li>North Richland Hills</li>
					<li>Parker</li>
					<li>Plano</li>
					<li>Princeton</li>
					<li>Prosper</li>
					<li>Richardson</li>
					<li>Roanoke</li>
					<li>Rowlett</li>
					<li>Sachse</li>
					<li>Southlake</li>
					<li>The Colony</li>
					<li>University Park</li>
					<li>Westlake</li>
				</ul>
			</div>
		</div>
	</div>

@endsection