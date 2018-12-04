@extends('layouts.page', [
    'main' => [
        'class' => 'space-bottom'
    ]
])

@push('breadcrumbs')

    @component('components.breadcrumb')
        Contact
    @endcomponent

@endpush

@section('banner')

    <div id="collapseMap" class="banner collapse">
        <div id="map-canvas"></div>
    </div>

@endsection

@section('page.main')

    <h1 class="page-title">Contact Us</h1>
    <div class="separator-2"></div>
    <p>It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
    <div class="contact-form">
        @include('pages.forms.contact-style-2')
    </div>

@endsection

@section('page.sidebar-right')

<div class="sidebar">
    <div class="block clearfix">
        <h3 class="title">Find Us</h3>

        <div class="separator-2"></div>

        <ul class="list">
            <li><i class="fa fa-home pr-10"></i>{{ address('primary')->toLine1() }}<br><span class="pl-24">{{ address('primary')->toLine2() }}</span></li>
            <li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> {{ phone('primary') }}</li>
            <li><i class="fa fa-mobile pr-10 pl-1"></i><abbr title="Phone">M:</abbr> {{ phone('secondary') }}</li>
            <li><i class="fa fa-envelope pr-10"></i><a href="mailto:{{ email('primary') }}">{{ email('primary') }}</a></li>
        </ul>

        <a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">
            Show Map <i class="fa fa-plus"></i>
        </a>
    </div>
</div>

<div class="sidebar">
    <div class="block clearfix">
        <h2 class="title">Follow Us</h2>
        <div class="separator-2"></div>
        @include('partials.social-links')
    </div>
</div>

@endsection