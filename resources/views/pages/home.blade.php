@extends('layouts.page')

@section('banner')
    @include('partials.slideshow')
@endsection

@section('content')

    @component('components.call-to-action', ['link' => route('pages.repair-tips'), 'action' => 'Learn More'])
        Free Repair, Installation, and Maintenance Tips!
    @endcomponent

    <!-- section -->
    <!-- ================ -->
    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 id="text-rotator" class="title d-inline-block text-rotator"></h3>
                    <div id="text-rotator-text" class="mt-4 text-rotator-text d-none">
                        <p>E&amp;M Home Service is Reliable</p>
                        <p>E&amp;M Home Service is Committed</p>
                        <p>E&amp;M Home Service is Honest</p>
                    </div>

                    <p>We repairs all makes and models of home appliances in the <span class="text-default">Dallas / Fort Worth Metroplex</span> area.</p>
                    <p>We are <strong>A+</strong> rated by the Dallas Better Business Bureau since 2005.</p>
                    <p>We strive to provide great appliance repairs and outstanding service.</p>
                    <p>We do not charge extra for Saturday service.</p>
                    <a href="{{ route('pages.about.style-1') }}" class="btn radius-50 btn-default btn-hvr hvr-shutter-out-horizontal"><i class="fa fa-arrow-left pr-10"></i>Learn More</a>
                </div>

                <div class="col-md-6">
                    <div class="overlay-container overlay-visible hover-hide-container">
                        <div id="map-canvas"></div>
                        <div class="overlay-bottom hidden-xs hover-hide-item">
                            <div class="text">
                                E&amp;M Home Service has a wide service area for you.
                            </div>
                        </div>
                    </div>
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
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <h2 class="text-center mt-4">Why <strong>Choose</strong> Us?</h2>
                    <div class="separator"></div>
                    <p class="large text-center">The E&amp;M Home Service team will repair or install appliances for your residence, rental property, or property being prepared for sale in the Dallas / Fort Worth Metroplex.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon default-bg circle"><i class="fa fa-hourglass-half"></i></span>
                        <h3>Incredibly<br>Fast and Reliable</h3>
                        <div class="separator clearfix"></div>
                        <p>We provide a <span class="text-default text-glow text-bold">six-month warranty</span> on parts and labor. We also provide tips for do-it-yourselfers and extraordinarily prompt service.</p>
                        <a class="btn btn-gray-transparent radius-50 btn-animated" href="{{ route('pages.services.style-1') }}">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                        <span class="icon default-bg circle"><i class="fa fa-usd"></i></span>
                        <h3>Free Service Call<br>with Repair</h3>
                        <div class="separator clearfix"></div>
                        <p>We will not nickle and dime you to drive up your bill. We are <span class="text-default text-glow text-bold">upfront and honest</span> with our pricing and strive to provide you with the most service for your money.</p>
                        <a class="btn btn-gray-transparent radius-50 btn-animated" href="{{ route('pages.services.style-1') }}">See Pricing <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
                        <span class="icon default-bg circle"><i class="fa fa-wrench"></i></span>
                        <h3>Commitment to<br>Service</h3>
                        <div class="separator clearfix"></div>
                        <p>E&amp;M Home Service is committed to providing <span class="text-default text-glow text-bold">superior appliance repair</span> service in Dallas / Fort Worth Metroplex area in Texas.</p>
                        <a class="btn btn-gray-transparent radius-50 btn-animated" href="{{ route('pages.services.style-1') }}">View Coverage <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
                        <span class="icon default-bg circle"><i class="fa fa-truck"></i></span>
                        <h3>Submit a<br>Service Request</h3>
                        <div class="separator clearfix"></div>
                        <p>The quickest way to have a highly qualified friendly technician at your location is to submit a <span class="text-default text-glow text-bold">service request form</span>.</p>
                        <a class="btn btn-gray-transparent radius-50 btn-animated" href="{{ route('pages.contact.style-1') }}">Submit Request<i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    @include('partials.carousels.appliance-brands')

    <section id="services" class="light-gray-bg pv-30 clearfix">
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <h2 class="text-center">Main <strong>Services</strong></h2>
              <div class="separator"></div>
              <p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="image-box style-2 mb-20">
                <div class="overlay-container overlay-visible">
                  <img src="{{ asset('media/images/service-1.jpg') }}" alt="">
                  <a href="{{ asset('media/images/service-1.jpg') }}" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
                  <div class="overlay-bottom hidden-sm-down">
                    <div class="text">
                      <p class="lead margin-clear text-left">Service One</p>
                    </div>
                  </div>
                </div>
                <div class="body padding-horizontal-clear">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="image-box style-2 mb-20">
                <div class="overlay-container overlay-visible">
                  <img src="{{ asset('media/images/service-2.jpg') }}" alt="">
                  <a href="{{ asset('media/images/service-2.jpg') }}" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
                  <div class="overlay-bottom hidden-sm-down">
                    <div class="text">
                      <p class="lead margin-clear text-left">Service Two</p>
                    </div>
                  </div>
                </div>
                <div class="body padding-horizontal-clear">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="image-box style-2 mb-20">
                <div class="overlay-container overlay-visible">
                  <img src="{{ asset('media/images/service-3.jpg') }}" alt="">
                  <a href="{{ asset('media/images/service-3.jpg') }}" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
                  <div class="overlay-bottom hidden-sm-down">
                    <div class="text">
                      <p class="lead margin-clear text-left">Service Three</p>
                    </div>
                  </div>
                </div>
                <div class="body padding-horizontal-clear">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection