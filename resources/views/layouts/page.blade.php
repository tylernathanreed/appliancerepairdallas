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
            <?php $col = [
                'md' => 12,
                'lg' => 12,
                'xl' => 12
            ]; ?>

            @optional('page.sidebar-right')
                <?php $col['lg'] -= 4; ?>
                <?php $col['xl'] -= 3; ?>
            @endoptional

            <section class="main-container">
                <div class="container">
                    <div class="row">
                        <div class="main col-md-{{ $col['md'] }} col-lg-{{ $col['lg'] }} col-xl-{{ $col['xl'] }}{{ isset($main['class']) ? ' ' . $main['class'] : '' }}">
                            @yield('page.main')
                        </div>

                        @optional('page.sidebar-right')
                            <aside class="col-lg-4 col-xl-3 ml-xl-auto">
                                @yield('page.sidebar-right')
                            </aside>
                        @endoptional
                    </div>
                </div>
            </section>
        @endoptional
    @endoptional

    @yield('page.bottom')

@endsection