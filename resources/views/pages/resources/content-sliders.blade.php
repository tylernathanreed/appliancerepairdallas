@extends('layouts.page')

@section('page.content')

    <div class="row">
        <div class="col-sm-6">
            <h3>Content Slider with Controls (Autoplay off)</h3>
            @include('components.owl-carousel.content-slider', [
                'controls' => true,
                'autoplay' => false,
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
            @include('components.owl-carousel.content-slider', [
                'controls' => 'large',
                'autoplay' => false,
                'items' => [
                    [
                        'image' => asset('media/images/section-image-1.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ],
                    [
                        'image' => asset('media/images/section-image-2.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ]
                ]
            ])
        </div>

        <div class="col-sm-6">
            <h3>Content Slider without controls (Autoplay on)</h3>
            @include('components.owl-carousel.content-slider', [
                'controls' => false,
                'autoplay' => true,
                'items' => [
                    [
                        'image' => asset('media/images/section-image-3.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ],
                    [
                        'image' => asset('media/images/section-image-2.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ],
                    [
                        'image' => asset('media/images/section-image-1.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ]
                ]
            ])
        </div>

        <div class="col-sm-6">
            <h3>Content Slider with Controls (Autoplay on)</h3>
            @include('components.owl-carousel.content-slider', [
                'controls' => true,
                'autoplay' => true,
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
            <h3>Content Slider with Controls 2 (Autoplay On)</h3>
            @include('components.owl-carousel.content-slider', [
                'controls' => 'large',
                'autoplay' => true,
                'items' => [
                    [
                        'image' => asset('media/images/section-image-1.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ],
                    [
                        'image' => asset('media/images/section-image-2.jpg'),
                        'title' => 'Caption Title',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum optio odio, recusandae qui minima eveniet cumque praesentium expedita sint accusamus itaque.'
                    ]
                ]
            ])
        </div>

        <div class="col-sm-6">
            <h3>Carousel (Autoplay off)</h3>
            @include('components.owl-carousel.carousel', [
                'imageBox' => true,
                'items' => [
                    [
                        'image' => asset('media/images/portfolio-1.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'image' => asset('media/images/portfolio-2.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'image' => asset('media/images/portfolio-3.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'image' => asset('media/images/portfolio-4.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'image' => asset('media/images/portfolio-5.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'image' => asset('media/images/portfolio-6.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                ]
            ])
        </div>

        <div class="col-sm-6">
            <h3>Carousel (Autoplay on)</h3>
            @include('components.owl-carousel.carousel', [
                'autoplay' => true,
                'items' => [
                    [
                        'title' => 'Project Title',
                        'image' => asset('media/images/portfolio-1.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'title' => 'Project Title',
                        'image' => asset('media/images/portfolio-2.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'title' => 'Project Title',
                        'image' => asset('media/images/portfolio-3.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'title' => 'Project Title',
                        'image' => asset('media/images/portfolio-4.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'title' => 'Project Title',
                        'image' => asset('media/images/portfolio-5.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                    [
                        'title' => 'Project Title',
                        'image' => asset('media/images/portfolio-6.jpg'),
                        'link' => 'portfolio-item.html',
                    ],
                ]
            ])
        </div>

        <div class="col-sm-6">
            <h3>Clients</h3>
            @include('components.owl-carousel.clients', [
                'items' => [
                    ['image' => asset('media/images/client-1.png')],
                    ['image' => asset('media/images/client-2.png')],
                    ['image' => asset('media/images/client-3.png')],
                    ['image' => asset('media/images/client-4.png')],
                    ['image' => asset('media/images/client-5.png')],
                    ['image' => asset('media/images/client-6.png')],
                    ['image' => asset('media/images/client-7.png')],
                    ['image' => asset('media/images/client-8.png')]
                ]
            ])
        </div>
    </div>

@endsection