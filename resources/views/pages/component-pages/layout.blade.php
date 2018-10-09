@extends('layouts.page')

<?php $title = \Illuminate\Support\Str::title(str_replace('-', ' ', basename(request()->url()))); ?>

@push('breadcrumbs')

    @component('components.breadcrumb')
        {{ $title }}
    @endcomponent

@endpush

@section('page.heading')
    {{ $title }}
@endsection

@section('page.sidebar-right')

    <div class="sidebar">
        <div class="block clearfix">
            <h3 class="title">Components</h3>
            <div class="separator-2"></div>
            <nav>
                <ul class="nav flex-column list-style-icons">
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/social-icons') }}"><i class="fa fa-share-alt"></i> Social Icons</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/buttons') }}"><i class="fa fa-flask"></i> Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/forms') }}"><i class="fa fa-align-justify"></i> Forms</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/tabs-and-pills') }}"><i class=" fa fa-list-ul"></i> Tabs &amp; Pills</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/accordions') }}"><i class="fa fa-bars"></i> Accordions</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/progress-bars') }}"><i class="fa fa-line-chart"></i> Progress Bars</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/call-to-action') }}"><i class="fa fa-comments-o"></i> Call to Action Blocks</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/alerts-and-callouts') }}"><i class="fa fa-info-circle"></i> Alerts &amp; Callouts</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/content-sliders') }}"><i class="fa fa-star"></i> Content Sliders</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/charts') }}"><i class="fa fa-pie-chart"></i> Charts</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/page-loaders') }}"><i class="fa fa-rotate-right"></i> Page Loaders</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/icon-boxes') }}"><i class="fa fa-picture-o"></i> Icon Boxes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/image-boxes') }}"><i class="fa fa-camera"></i> Image Boxes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/fullwidth-sections') }}"><i class="fa fa-code"></i> Full Width Sections</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/animations') }}"><i class="fa fa-heart"></i> Animations</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/video-and-audio') }}"><i class="fa fa-play"></i> Video</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/lightbox') }}"><i class="fa fa-search-plus"></i> Lightbox</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/counters') }}"><i class="fa fa-sort-numeric-desc"></i> Counters</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/modals') }}"><i class="fa fa-arrows-alt"></i> Modals</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/tables') }}"><i class="fa fa-table"></i> Tables</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/text-rotators') }}"><i class="fa fa-rotate-left"></i> Text Rotators</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/announcement-default') }}"><i class="fa fa-bullhorn"></i> Announcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('components/separators') }}"><i class="fa fa-star"></i> Separators</a></li>
                </ul>
            </nav>
        </div>
    </div>

@endsection