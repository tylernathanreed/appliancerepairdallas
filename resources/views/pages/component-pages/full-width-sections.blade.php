@extends('pages.component-pages.layout', [
    'main-container' => [
        'class' => 'padding-bottom-clear'
    ]
])

@section('page.main-bottom')

    <section>
        <div class="container">
            <h2 class="my-3 py-3">Dark Background</h2>
        </div>

        <section class="full-width-section">
            <div class="full-image-container dark-bg border-bottom-clear">
                <img class="to-right-block" src="{{ asset('media/images/section-image-4.jpg') }}" alt="">
                <div class="full-image-overlay text-right">
                    <h3>Services</h3>
                    <ul class="list-icons">
                        <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                        <li>Elegant Design <i class="fa fa-check-square-o"></i></li>
                        <li>ipsam asperiores fugiat quo <i class="fa fa-check-square-o"></i></li>
                        <li>Animi veniam veritatis sint <i class="fa fa-check-square-o"></i></li>
                        <li>Voluptatum officia suscipit <i class="fa fa-check-square-o"></i></li>
                        <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                    </ul>
                </div>
            </div>

            <div class="full-text-container dark-bg border-bottom-clear">
                <h2 class="mt-4">Let's Work Together</h2>
                <div class="separator-2 hidden-lg-down"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
                <div class="separator-3 hidden-lg-down"></div>
                <a href="mailto:youremail@domain.com" class="btn btn-gray-transparent btn-animated">Contact Us <i class="fa fa-envelope-o"></i></a>
            </div>
        </section>

        <section class="full-width-section">
            <div class="full-text-container left dark-bg border-bottom-clear text-right">
                <h2 class="mt-4">Let's Work Together</h2>
                <div class="separator-3 hidden-lg-down"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
                <div class="separator-2 hidden-lg-down"></div>
                <a href="mailto:youremail@domain.com" class="btn btn-gray-transparent btn-animated">Contact Us <i class="fa fa-envelope-o"></i></a>
            </div>

            <div class="full-image-container dark-bg border-bottom-clear">
                <img src="{{ asset('media/images/section-image-4.jpg') }}" alt="">
                <div class="full-image-overlay">
                    <h3>Services</h3>
                    <ul class="list-icons">
                        <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                        <li>Elegant Design <i class="fa fa-check-square-o"></i></li>
                        <li>ipsam asperiores fugiat quo <i class="fa fa-check-square-o"></i></li>
                        <li>Animi veniam veritatis sint <i class="fa fa-check-square-o"></i></li>
                        <li>Voluptatum officia suscipit <i class="fa fa-check-square-o"></i></li>
                        <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <section>
        <div class="container">
            <h2 class="my-3 py-3">Light Gray Background</h2>
        </div>

        <section class="full-width-section">
            <div class="full-image-container light-gray-bg">
                <img class="to-right-block" src="{{ asset('media/images/section-image-1.jpg') }}" alt="">
                <div class="full-image-overlay text-right">
                    <h3>Core Features</h3>
                    <ul class="list-icons">
                        <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                        <li>Elegant Design <i class="fa fa-check-square-o"></i></li>
                        <li>ipsam asperiores fugiat quo <i class="fa fa-check-square-o"></i></li>
                        <li>Animi veniam veritatis sint <i class="fa fa-check-square-o"></i></li>
                        <li>Voluptatum officia suscipit <i class="fa fa-check-square-o"></i></li>
                        <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                    </ul>
                </div>
            </div>

            <div class="full-text-container light-gray-bg border-bottom-clear">
                <h2 class="mt-4">Featured Product</h2>
                <div class="separator-2 hidden-lg-down"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
                <div class="separator-3 hidden-lg-down"></div>
                <a href="mailto:youremail@domain.com" class="btn btn-default-transparent btn-animation btn-animation--slide-to-left">Order Now <i class="pl-1 fa fa-shopping-basket"></i></a>
            </div>
        </section>

        <section class="full-width-section">
            <div class="full-text-container left light-gray-bg border-bottom-clear text-right">
                <h2 class="mt-4">Featured Product</h2>
                <div class="separator-3 hidden-lg-down"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
                <div class="separator-2 hidden-lg-down"></div>
                <a href="mailto:youremail@domain.com" class="btn btn-default-transparent btn-animation btn-animation--slide-to-right">Order Now <i class="pl-1 fa fa-shopping-basket"></i></a>
            </div>

            <div class="full-image-container light-gray-bg">
                <img src="{{ asset('media/images/section-image-2.jpg') }}" alt="">
                <div class="full-image-overlay">
                    <h3>Core Features</h3>
                    <ul class="list-icons">
                        <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                        <li>Elegant Design <i class="fa fa-check-square-o"></i></li>
                        <li>ipsam asperiores fugiat quo <i class="fa fa-check-square-o"></i></li>
                        <li>Animi veniam veritatis sint <i class="fa fa-check-square-o"></i></li>
                        <li>Voluptatum officia suscipit <i class="fa fa-check-square-o"></i></li>
                        <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <section>
        <div class="container">
            <h2 class="my-3 py-3">Default Background (Depends on current color scheme)</h2>
        </div>

        <section class="full-width-section">
            <div class="full-image-container default-bg border-bottom-clear">
                <img class="to-right-block" src="{{ asset('media/images/section-image-4.jpg') }}" alt="">
                <div class="full-image-overlay text-right">
                    <h3>Services</h3>
                    <ul class="list-icons">
                        <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                        <li>Elegant Design <i class="fa fa-check-square-o"></i></li>
                        <li>ipsam asperiores fugiat quo <i class="fa fa-check-square-o"></i></li>
                        <li>Animi veniam veritatis sint <i class="fa fa-check-square-o"></i></li>
                        <li>Voluptatum officia suscipit <i class="fa fa-check-square-o"></i></li>
                        <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                    </ul>
                </div>
            </div>

            <div class="full-text-container default-bg border-bottom-clear">
                <h2 class="mt-4">Let's Work Together</h2>
                <div class="separator-2 hidden-lg-down"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
                <div class="separator-3 hidden-lg-down"></div>
                <a href="mailto:youremail@domain.com" class="btn btn-default">Contact Us <i class="pl-10 fa fa-envelope-o"></i></a>
            </div>
        </section>

        <section class="full-width-section">
            <div class="full-text-container left default-bg border-bottom-clear text-right">
                <h2 class="mt-4">Let's Work Together</h2>
                <div class="separator-3 hidden-lg-down"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
                <div class="separator-2 hidden-lg-down"></div>
                <a href="mailto:youremail@domain.com" class="btn btn-default">Contact Us <i class="pl-10 fa fa-envelope-o"></i></a>
            </div>

            <div class="full-image-container default-bg">
                <img src="{{ asset('media/images/section-image-4.jpg') }}" alt="">
                <div class="full-image-overlay">
                    <h3>Services</h3>
                    <ul class="list-icons">
                        <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                        <li>Elegant Design <i class="fa fa-check-square-o"></i></li>
                        <li>ipsam asperiores fugiat quo <i class="fa fa-check-square-o"></i></li>
                        <li>Animi veniam veritatis sint <i class="fa fa-check-square-o"></i></li>
                        <li>Voluptatum officia suscipit <i class="fa fa-check-square-o"></i></li>
                        <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>


@endsection