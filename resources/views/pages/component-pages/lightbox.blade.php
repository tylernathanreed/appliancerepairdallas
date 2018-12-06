@extends('pages.component-pages.layout')

@section('page.main')

    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        For more info about magnific popup please visit <a target="_blank" class="alert-link" href="https://github.com/dimsemenov/Magnific-Popup">https://github.com/dimsemenov/Magnific-Popup</a>.
    </div>
    <br>
    <h2 class="mt-4">Lightbox Gallery</h2>
    <div class="shadow bordered">
        <div class="overlay-container">
            <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
            <a href="{{ asset('media/images/portfolio-2.jpg') }}" class="overlay-link popup-img" title="First image title">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <div class="space-bottom"></div>
    <div class="row grid-space-20">
        <div class="col-3">
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                <a href="{{ asset('media/images/portfolio-1.jpg') }}" class="overlay-link small popup-img" title="Second image title">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                <a href="{{ asset('media/images/portfolio-3.jpg') }}" class="overlay-link small popup-img" title="Third image title">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                <a href="{{ asset('media/images/portfolio-4.jpg') }}" class="overlay-link small popup-img" title="Fourth image title">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="overlay-container">
                <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                <a href="{{ asset('media/images/portfolio-5.jpg') }}" class="overlay-link small popup-img" title="Fifth image title">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="space-bottom"></div>
    <h2 class="mt-4">Single image lightbox</h2>
    <div class="overlay-container">
        <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
        <a href="{{ asset('media/images/portfolio-6.jpg') }}" class="overlay-link popup-img-single" title="First image title">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <div class="space-bottom"></div>
    <h2 class="mt-4">Popup with video</h2>
    <a class="popup-iframe btn btn-default-transparent btn-animated" href="https://www.youtube-nocookie.com/embed/0O2aH4XLbto?rel=0">Open YouTube video<i class="fa fa-youtube-play pl-10"></i></a>
    <a class="popup-iframe btn btn-default-transparent btn-animated" href="https://vimeo.com/45830194">Open Vimeo video <i class="fa fa-vimeo-square pl-10"></i></a>

@endsection