@extends('pages.component-pages.layout')

@section('page.main')

    <br>
    <div class="row">
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In Left</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="0">
                <i class="fa fa-arrows-alt"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In Right</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeInRight" data-effect-delay="200">
                <i class="fa fa-home"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In Up</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeInUp" data-effect-delay="400">
                <i class="fa fa-camera"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In Down</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeInDown" data-effect-delay="600">
                <i class="fa fa-leaf"></i>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Swing</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="swing" data-effect-delay="800">
                <i class="fa fa-laptop"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Pulse</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="pulse" data-effect-delay="1000">
                <i class="fa fa-sitemap"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="1200">
                <i class="fa fa-rocket"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Zoom In</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="zoomIn" data-effect-delay="1400">
                <i class="fa fa-file"></i>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Bounce</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="bounce" data-effect-delay="400">
                <i class="fa fa-heart"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In Dowm</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeInDown" data-effect-delay="600">
                <i class="fa fa-graduation-cap"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In Left</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="800">
                <i class="fa fa-instagram"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In Right</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeInRight" data-effect-delay="1000">
                <i class="fa fa-puzzle-piece"></i>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Fade In Up</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="fadeInUp" data-effect-delay="400">
                <i class="fa fa-shield"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Rotate In</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="rotateIn" data-effect-delay="600">
                <i class="fa fa-space-shuttle"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Zoom In Down</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="zoomInDown" data-effect-delay="800">
                <i class="fa fa-thumbs-o-up"></i>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-20">
            <h4 class="text-center">Wobble</h4>
            <div class="icon default-bg circle large gray-bg object-non-visible" data-animation-effect="wobble" data-effect-delay="1000">
                <i class="fa fa-support"></i>
            </div>
        </div>
    </div>
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        Check all available Animations at <a  target="_blank" href="https://github.com/daneden/animate.css" class="alert-link">https://github.com/daneden/animate.css</a>
    </div>

@endsection