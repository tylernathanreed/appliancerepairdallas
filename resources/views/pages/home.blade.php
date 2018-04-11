@extends('layouts.page')

@section('banner')

    @include('partials.slideshow')

    @component('components.call-to-action', ['link' => '#', 'action' => 'Learn More'])
        Free Repair, Installation, and Maintenance Tips!
    @endcomponent

    <!-- section -->
    <!-- ================ -->
    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <div class="overlay-container overlay-visible">
                        <div id="map-canvas"></div>
                        {{-- <img src="{{ asset('media/images/coverage.jpg') }}" alt=""> --}}
                        <div class="overlay-bottom hidden-xs">
                            <div class="text">
                                E&amp;M Home Service has a wide service area for you.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-md-pull-6">
                    <h3 class="title">E&amp;M Home Service is <span class="text-rotator" data-rotator-animation-effect="fadeIn">Reliable, Committed, Honest</span></h3>
                    <p>We repairs all makes and models of home appliances in the <span class="text-default">Dallas / Fort Worth Metroplex</span> area.</p>
                    <p>We are <strong>A+</strong> rated by the Dallas Better Business Bureau.</p>
                    <p>We strive to provide great appliance repairs and outstanding service.</p>
                    <p>We do not charge extra for Saturday service.</p>
                    <a href="page-about.html" class="btn radius-50 btn-default btn-hvr hvr-shutter-out-horizontal"><i class="icon-users-1 pr-10"></i>Learn More</a>
                </div>
            </div>
        </div>
        <br>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="dark-translucent-bg pv-30" style="background-image:url({{ asset('media/images/page-services-banner.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Why <strong>Choose</strong> Us?</h2>
                    <div class="separator"></div>
                    <p class="large text-center">The E&amp;M Home Service team will repair or install appliances for your residence, rental property, or property being prepared for sale in the Dallas / Fort Worth Metroplex.</p>
                </div>

                <div class="col-md-3">
                    <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon default-bg circle"><i class="fa fa-hourglass-half"></i></span>
                        <h3>Incredibly<br>Fast and Reliable</h3>
                        <div class="separator clearfix"></div>
                        <p>We provide a <span class="text-default">six-month warranty</span> on parts and labor, tips for do-it-yourselfers, fresh blog content, and and extraordinary prompt service.</p>
                        <a class="btn btn-gray-transparent radius-50 btn-animated" href="page-services.html">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                        <span class="icon default-bg circle"><i class="fa fa-usd"></i></span>
                        <h3>Free Service Call<br>with Repair</h3>
                        <div class="separator clearfix"></div>
                        <p>We will not nickle and dime you to drive up your bill. We are <span class="text-default">upfront</span> and honest will our pricing and strive to provide you with the most service for your money.</p>
                        <a class="btn btn-gray-transparent radius-50 btn-animated" href="page-services.html">See Pricing <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
                        <span class="icon default-bg circle"><i class="fa fa-wrench"></i></span>
                        <h3>Commitment to<br>Service</h3>
                        <div class="separator clearfix"></div>
                        <p>E&amp;M Home Service is committed to providing <span class="text-default">superior appliance repair</span> service in Dallas / Fort Worth Metroplex area in Texas.</p>
                        <a class="btn btn-gray-transparent radius-50 btn-animated" href="page-services.html">View Coverage <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
                        <span class="icon default-bg circle"><i class="fa fa-truck"></i></span>
                        <h3>Submit a<br>Service Request</h3>
                        <div class="separator clearfix"></div>
                        <p>The quickest way to have a highly qualified friendly technician at your location is to submit a <span class="text-default">service request form</span>.</p>
                        <a class="btn btn-gray-transparent radius-50 btn-animated" href="page-services.html">Submit Request<i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

@endsection