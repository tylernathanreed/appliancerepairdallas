@extends('pages.component-pages.layout')

@section('page.main')

    <!-- Content Sliders start -->
    <!-- ============================================================================== -->
    <section>
        <h3>Content Slider with Controls (Autoplay off)</h3>
        <div class="slick-carousel content-slider-with-controls">
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-2.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-1.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-3.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </section>

    <section>
        <h3 class="mt-4">Content Slider with Controls 2 (Autoplay off)</h3>
        <div class="slick-carousel content-slider-with-large-controls">
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/section-image-1.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/section-image-1.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/section-image-2.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/section-image-2.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </section>

    <section>
        <h3 class="mt-4">Content Slider without controls (Autoplay on)</h3>
        <div class="slick-carousel content-slider">
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-3.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-2.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-1.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </section>

    <section>
        <h3 class="mt-4">Content Slider with Controls (Autoplay on)</h3>
        <div class="slick-carousel content-slider-with-controls-autoplay">
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-2.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-1.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/portfolio-3.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </section>

    <section>
        <h3 class="mt-4">Content Slider with Controls 2 (Autoplay On)</h3>
        <div class="slick-carousel content-slider-with-large-controls-autoplay">
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/section-image-1.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/section-image-1.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/section-image-2.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">Caption Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                    </div>
                </div>
                <a href="{{ asset('media/images/section-image-2.jpg') }}" class="slick-carousel--popup-img overlay-link" title="image title"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </section>

    <section>
        <h3 class="mt-4">Carousel (Autoplay off)</h3>
        <div class="slick-carousel carousel">
            <div class="image-box text-center">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                    <div class="overlay-to-top">
                        <a href="portfolio-item.html" class="small">View Details</a>  
                    </div>
                </div>
            </div>
            <div class="image-box text-center">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                    <div class="overlay-to-top">
                        <a href="portfolio-item.html" class="small">View Details</a>  
                    </div>
                </div>
            </div>
            <div class="image-box text-center">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                    <div class="overlay-to-top">
                        <a href="portfolio-item.html" class="small">View Details</a>  
                    </div>
                </div>
            </div>
            <div class="image-box text-center">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                    <div class="overlay-to-top">
                        <a href="portfolio-item.html" class="small">View Details</a>  
                    </div>
                </div>
            </div>
            <div class="image-box text-center">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                    <div class="overlay-to-top">
                        <a href="portfolio-item.html" class="small">View Details</a>  
                    </div>
                </div>
            </div>
            <div class="image-box text-center">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
                    <div class="overlay-to-top">
                        <a href="portfolio-item.html" class="small">View Details</a>  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h3 class="mt-4">Carousel (Autoplay on)</h3>
        <div class="slick-carousel carousel-autoplay">
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                <div class="overlay-top">
                    <div class="text">
                        <small>Project Title</small>                      
                    </div>
                </div>
                <div class="overlay-bottom">
                    <div class="links">
                        <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-1 fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                <div class="overlay-top">
                    <div class="text">
                        <small>Project Title</small>                      
                    </div>
                </div>
                <div class="overlay-bottom">
                    <div class="links">
                        <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-1 fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                <div class="overlay-top">
                    <div class="text">
                        <small>Project Title</small>                      
                    </div>
                </div>
                <div class="overlay-bottom">
                    <div class="links">
                        <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-1 fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                <div class="overlay-top">
                    <div class="text">
                        <small>Project Title</small>                      
                    </div>
                </div>
                <div class="overlay-bottom">
                    <div class="links">
                        <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-1 fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                <div class="overlay-top">
                    <div class="text">
                        <small>Project Title</small>                      
                    </div>
                </div>
                <div class="overlay-bottom">
                    <div class="links">
                        <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-1 fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
                <div class="overlay-top">
                    <div class="text">
                        <small>Project Title</small>                      
                    </div>
                </div>
                <div class="overlay-bottom">
                    <div class="links">
                        <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-1 fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h3 class="mt-4">Brands</h3>
        @include('partials.carousels.appliance-brands')
    </section>

@endsection