@extends('layouts.page', [
	'main' => [
		'class' => 'padding-bottom-clear'
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

@section('page.heading')
	Our <strong>Services</strong>
@endsection

@section('page.main')

	<div class="row">
		<div class="col-md-4">
			@component('components.image-box', [
				'image' => asset('media/images/service-1.jpg')
			])

				@slot('bottom')
					<div class="text">
						<p class="lead margin-clear text-left">Service One</p>
					</div>
				@endslot

				@slot('body')
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					<a class="link-dark" href="#">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
				@endslot

			@endcomponent
		</div>

		<div class="col-md-4">
			@component('components.image-box', [
				'image' => asset('media/images/service-2.jpg')
			])

				@slot('bottom')
					<div class="text">
						<p class="lead margin-clear text-left">Service Two</p>
					</div>
				@endslot

				@slot('body')
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					<a class="link-dark" href="#">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
				@endslot

			@endcomponent
		</div>

		<div class="col-md-4">
			@component('components.image-box', [
				'image' => asset('media/images/service-3.jpg')
			])

				@slot('bottom')
					<div class="text">
						<p class="lead margin-clear text-left">Service Three</p>
					</div>
				@endslot

				@slot('body')
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					<a class="link-dark" href="#">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
				@endslot

			@endcomponent
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			@component('components.image-box', [
				'image' => asset('media/images/service-4.jpg')
			])

				@slot('bottom')
					<div class="text">
						<p class="lead margin-clear text-left">Service Four</p>
					</div>
				@endslot

				@slot('body')
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					<a class="link-dark" href="#">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
				@endslot

			@endcomponent
		</div>

		<div class="col-md-4">
			@component('components.image-box', [
				'image' => asset('media/images/service-5.jpg')
			])

				@slot('bottom')
					<div class="text">
						<p class="lead margin-clear text-left">Service Five</p>
					</div>
				@endslot

				@slot('body')
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					<a class="link-dark" href="#">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
				@endslot

			@endcomponent
		</div>

		<div class="col-md-4">
			@component('components.image-box', [
				'image' => asset('media/images/service-6.jpg')
			])

				@slot('bottom')
					<div class="text">
						<p class="lead margin-clear text-left">Service Six</p>
					</div>
				@endslot

				@slot('body')
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					<a class="link-dark" href="#">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
				@endslot

			@endcomponent
		</div>
	</div>

@endsection

@section('page.bottom')

<section class="clearfix pv-30">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center mt-4">The <strong>Process</strong> We Follow</h3>
				<div class="separator"></div>

				@component('components.tabs', [
					'type' => 'pills',
					'tabs-container' => [
						'class' => 'process'
					],
					'tab-content' => [
						'class' => 'clear-style'
					]
				])

					@slot('items.0.heading')
						<i class="fa fa-dot-circle-o pr-1"></i> Step 1
					@endslot

					@slot('items.0.content')
						<div class="row">
							<div class="col-lg-6">
								<h4 class="title">Contact Us</h4>
								<p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repellendus autem corporis obcaecati, laboriosam ipsam ea, alias saepe libero ab consequuntur.</p>
							</div>

							<div class="col-lg-6">
								<div class="overlay-container">
									<img src="{{ asset('media/images/page-about-2.jpg') }}" alt="">
									<a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
								</div>
							</div>
						</div>
					@endslot

					@slot('items.1.heading')
						<i class="fa fa-dot-circle-o pr-1"></i> Step 2
					@endslot

					@slot('items.1.content')
						<div class="row">
							<div class="col-lg-6">
								<img class="mb-4 mb-lg-0" src="{{ asset('media/images/section-image-3.jpg') }}" alt="">
							</div>

							<div class="col-lg-6">
								<h3 class="title">Service Call</h3>
								<p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt.</p>
							</div>
						</div>
					@endslot

					@slot('items.2.heading')
						<i class="fa fa-dot-circle-o pr-1"></i> Step 3
					@endslot

					@slot('items.2.content')
						<h3 class="title">Repair</h3>
						<p>Consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
						<p>Ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
					@endslot

				@endcomponent

				@include('models.pricing-tables.partials.index', ['style' => 'style-1'])

			</div>
		</div>
	</div>
</section>

@endsection