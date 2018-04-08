@extends('layouts.page')

@section('page.content')

    <div class="row">
        <div class="col-sm-6">
            <h3>Content Slider with Controls (Autoplay off)</h3>
            @include('components.content-sliders.style-1', [
                'items' => [
                    [
                        'image' => asset('media/images/section-image-2.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ],
                    [
                        'image' => asset('media/images/section-image-1.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ],
                    [
                        'image' => asset('media/images/section-image-3.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ]
                ]
            ])
        </div>

        <div class="col-sm-6">
            <h3>Content Slider with Controls 2 (Autoplay off)</h3>
            <div class="owl-carousel content-slider-with-large-controls">
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/section-image-1.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                        </div>
                    </div>
                    <a href="{{ asset('media/images/section-image-1.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/section-image-2.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                        </div>
                    </div>
                    <a href="{{ asset('media/images/section-image-2.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <h3>Content Slider without controls (Autoplay on)</h3>
            <div class="owl-carousel content-slider">
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.
                        </div>
                    </div>
                    <a href="{{ asset('media/images/portfolio-3.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.
                        </div>
                    </div>
                    <a href="{{ asset('media/images/portfolio-2.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.
                        </div>
                    </div>
                    <a href="{{ asset('media/images/portfolio-1.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <h3>Content Slider with Controls (Autoplay on)</h3>
            <div class="owl-carousel content-slider-with-controls-autoplay">
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                        </div>
                    </div>
                    <a href="{{ asset('media/images/portfolio-2.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                        </div>
                    </div>
                    <a href="{{ asset('media/images/portfolio-1.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                        </div>
                    </div>
                    <a href="{{ asset('media/images/portfolio-3.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <h3>Content Slider with Controls 2 (Autoplay On)</h3>
            <div class="owl-carousel content-slider-with-large-controls-autoplay">
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/section-image-1.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                        </div>
                    </div>
                    <a href="{{ asset('media/images/section-image-1.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
                <div class="overlay-container overlay-visible">
                    <img src="{{ asset('media/images/section-image-2.jpg') }}" alt="">
                    <div class="overlay-bottom hidden-xs">
                        <div class="text">
                            <h3 class="title">Caption Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.</p>
                        </div>
                    </div>
                    <a href="{{ asset('media/images/section-image-2.jpg') }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <h3>Carousel (Autoplay off)</h3>
            <div class="owl-carousel carousel">
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
        </div>

        <div class="col-sm-6">
            <h3>Carousel (Autoplay on)</h3>
            <div class="owl-carousel carousel-autoplay">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                    <div class="overlay-top">
                        <div class="text">
                            <small>Project Title</small>                                            
                        </div>
                    </div>
                    <div class="overlay-bottom">
                        <div class="links">
                            <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-5 fa fa-long-arrow-right"></i></a>
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
                            <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-5 fa fa-long-arrow-right"></i></a>
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
                            <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-5 fa fa-long-arrow-right"></i></a>
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
                            <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-5 fa fa-long-arrow-right"></i></a>
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
                            <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-5 fa fa-long-arrow-right"></i></a>
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
                            <a href="portfolio-item.html" class="btn-sm-link">View Details<i class="pl-5 fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <h3>Clients</h3>
            <div class="owl-carousel clients">
                <div class="client">
                    <a href="#"><img src="{{ asset('media/images/client-1.png') }}" alt=""></a>
                </div>
                <div class="client">
                    <a href="#"><img src="{{ asset('media/images/client-2.png') }}" alt=""></a>
                </div>
                <div class="client">
                    <a href="#"><img src="{{ asset('media/images/client-3.png') }}" alt=""></a>
                </div>
                <div class="client">
                    <a href="#"><img src="{{ asset('media/images/client-4.png') }}" alt=""></a>
                </div>
                <div class="client">
                    <a href="#"><img src="{{ asset('media/images/client-5.png') }}" alt=""></a>
                </div>
                <div class="client">
                    <a href="#"><img src="{{ asset('media/images/client-6.png') }}" alt=""></a>
                </div>
                <div class="client">
                    <a href="#"><img src="{{ asset('media/images/client-7.png') }}" alt=""></a>
                </div>
                <div class="client">
                    <a href="#"><img src="{{ asset('media/images/client-8.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

@endsection