@extends('layouts.page')

@section('page.main')

    <h1 class="title">About Us</h1>
    <div class="separator-2"></div>
    <div class="row">
        <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus illo vero cupiditate, sed enim voluptatibus provident consectetur. Quo dolor sunt nostrum, eligendi illo accusamus odit, ipsam excepturi voluptatem nulla minus.</p>
            <p>Blanditiis aspernatur, non quasi, maxime corporis officiis quia. Cupiditate, voluptatibus ducimus, natus, labore mollitia dolorem incidunt voluptatum, delectus eius fugit porro placeat animi voluptatem autem hic eligendi sint. Amet pariatur odit repudiandae sunt. Rem ipsum dolor sit amet, consectetur adipisicing elit. Sunt asperiores a.</p>
            <ul class="list-icons">
                <li><i class="fa fa-check-square-o"></i> Unt in culpa qui deserunt</li>
                <li><i class="fa fa-check-square-o"></i> Elegant Design</li>
                <li><i class="fa fa-check-square-o"></i> Labore et dolore magna aliqua</li>
                <li><i class="fa fa-check-square-o"></i> ipsam asperiores fugiat quo</li>
            </ul>
        </div>

        <div class="col-lg-6">
            <div class="overlay-container overlay-visible">
                <img src="{{ asset('media/images/page-about-2.jpg') }}" alt="">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">We Love To Help</h3>
                    </div>
                </div>
                <a href="{{ asset('media/images/page-about-2.jpg') }}" class="popup-img overlay-link" title="image title">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>

@endsection