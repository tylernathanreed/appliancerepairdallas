@extends('layouts.page', [
	'main-container' => [
		'class' => 'padding-bottom-clear'
	]
])

@push('breadcrumbs')

    @component('components.breadcrumb')
        Appliances
    @endcomponent

@endpush

@section('page.main')

	<h3 class="title">Appliances <strong>We Service</strong></h3>
	<div class="separator-2"></div>

	<div class="row">
		<div class="col-lg-6">
			<p>The E&amp;M Home Service team will repair or install appliances for your residence, rental property, or property being prepared for sale in the Dallas / Fort Worth Metroplex. We specialize in superior customer service. We have a female technician on staff that works exclusively with seniors and women who live alone.</p>
			<p>We service the following types of appliances:</p>

			<div class="row">
				<div class="col-lg-6">
					<ul class="list-icons">
						<li><i class="fa fa-check-square-o"></i>Cook Tops</i>
						<li><i class="fa fa-check-square-o"></i>Dishwashers</i>
						<li><i class="fa fa-check-square-o"></i>Disposals</i>
						<li><i class="fa fa-check-square-o"></i>Dryers</i>
						<li><i class="fa fa-check-square-o"></i>Freezers</i>
						<li><i class="fa fa-check-square-o"></i>And Others!</i>
					</ul>
				</div>

				<div class="col-lg-6">
					<ul class="list-icons">
						<li><i class="fa fa-check-square-o"></i>Ice Makers</i>
						<li><i class="fa fa-check-square-o"></i>Ovens</i>
						<li><i class="fa fa-check-square-o"></i>Ranges</i>
						<li><i class="fa fa-check-square-o"></i>Refrigerators</i>
						<li><i class="fa fa-check-square-o"></i>Washers</i>
					</ul>
				</div>
			</div>
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

    @component('components.call-to-action', ['link' => '#', 'action' => 'Contact Us'])
        Not seeing your appliance? Call to ask!
    @endcomponent

    <!-- section start -->
    <!-- ================ -->
    <section class="dark-translucent-bg pv-30" style="background-image:url({{ asset('media/images/page-services-banner.jpg') }});">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <h2 class="text-center mt-4">We service all makes and models!</h2>
                    <div class="separator"></div>
                    <p class="large text-center">Don't see your brand? Don't hesitate to ask!</p>
                </div>
            </div>

            <?php $appliances = [
				'Admiral',
				'Amana',
				'Asko',
				'Bosh',
				'Caloric',
				'Coldspot',
				'Crosley',
				'Dacor',
				'Estate',
				'Frigidaire',
				'Gaffters & Sattler',
				'Gaggenau',
				'General Electric',
				'Gibson',
				'Haier',
				'Hotpoint',
				'Insinkerator',
				'Jenn-Air',
				'Kelvinator',
				'Kenmore',
				'Kirkland',
				'Kitchenaid',
				'LG',
				'Magic Chef',
				'Maytag',
				'Norge',
				'O\'Keefe & Merritt',
				'RCA',
				'Roper',
				'Samsung',
				'Scotsman',
				'Sears',
				'Signature',
				'Speed Queen',
				'Sub-Zero',
				'Tappan',
				'Thermador',
				'ULINE',
				'Wards',
				'Westinghouse',
				'Whirlpool'
			]; ?>

            <div class="row">
            	@foreach($appliances as $appliance)
            		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            			<i class="fa fa-check-square-o"></i> {{ $appliance }}
            		</div>
            	@endforeach
            </div>
        </div>
    </section>
    <!-- section end -->

	@include('partials.carousels.appliance-brands')

@endsection