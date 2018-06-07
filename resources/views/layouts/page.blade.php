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
    @else
        @optional('page.main')
            <?php $col = 12; ?>

            @optional('page.sidebar-right')
                <?php $col -= 4; ?>
            @endoptional

            <section class="main-container">
                <div class="container">
                    <div class="row">
                        <div class="main col-md-{{ $col }}{{ isset($main['class']) ? ' ' . $main['class'] : '' }}">
                            @yield('page.main')
                        </div>

                        @optional('page.sidebar-right')
                            <aside class="col-lg-3 ml-xl-auto">
                                <div class="sidebar">
                                    @yield('page.sidebar-right')
                                </div>
                            </aside>
                        @endoptional
                    </div>
                </div>
            </section>
        @endoptional
    @endoptional

@endsection