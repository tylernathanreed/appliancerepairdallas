@extends('layouts.main')

@section('content')

    @optional('page.content')
        <section class="main-container">

            <div class="container">
                <div class="row">
                    <div class="main col-md-12">

                    	@optional('page.heading')
    	                    <h1 class="page-title">
    	                    	@yield('page.heading')
    	                    </h1>
    	                    <div class="separator-2"></div>
                        @endoptional

                        @yield('page.content')

                    </div>
                </div>
            </div>
        </section>
    @endoptional

@endsection