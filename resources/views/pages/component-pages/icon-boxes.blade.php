@extends('pages.component-pages.layout', [
    'main-container' => [
        'class' => 'padding-bottom-clear'
    ]
])

@section('page.main')

    <section>
        <div class="container">
            <h2 class="mt-4">Style 1</h2>
        </div>

        <section class="light-gray-bg clearfix">
            <div class="container">
                <h3 class="mt-3 mb-3">Light Background</h3>

                <h4 class="mt-3">Boxed</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Default</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Dark</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="clearfix">
            <div class="container">
                <h3 class="mt-3 mb-3">No Background</h3>

                <h4 class="mt-3">Boxed</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box light-gray-bg bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box light-gray-bg bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box light-gray-bg bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Default</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p class="text-muted">Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p class="text-muted">Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Dark</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box light-gray-bg text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p class="text-muted">Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box light-gray-bg text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-30 ph-20 feature-box light-gray-bg text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark-bg clearfix">
            <div class="container pt-3">
                <h3 class="mb-5">Dark Background</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="default-bg clearfix">
            <div class="container pt-3 ">
                <h3 class="mb-5">Default Background</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>

        <section class="fixed-bg dark-translucent-bg background-img-1">
            <div class="container pt-3">
                <h3 class="mb-5">Dark Image Background</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fixed-bg light-translucent-bg slight background-img-1">
            <div class="container pt-3">
                <h3 class="mb-5">Light Image Background</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fixed-bg default-translucent-bg background-img-1">
            <div class="container pt-3">
                <h3 class="mb-5">Default Image Background</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg circle"><i class="fa fa-diamond"></i></span>
                            <h3>Great &amp; elegant</h3>
                            <div class="separator clearfix"></div>
                            <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg circle"><i class="fa fa-connectdevelop"></i></span>
                            <h3>Porro ullam volu</h3>
                            <div class="separator clearfix"></div>
                            <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg circle"><i class="fa fa-snowflake-o"></i></span>
                            <h3>Latest Technologies</h3>
                            <div class="separator clearfix"></div>
                            <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection

@section('page.main-bottom')

    <section>
        <div class="container">
            <h2 class="mt-4">Style 2</h2>
        </div>

        <section class="light-gray-bg clearfix">
            <div class="container">
                <h3 class="mt-3 mb-3">Light Background</h3>

                <h4 class="mt-3">Boxed</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Default</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-default fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title text-default">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-default fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title text-default">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-default fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title text-default">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Dark</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 white-bg feature-box-2 boxed object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 white-bg feature-box-2 boxed object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 white-bg feature-box-2 boxed object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="clearfix">
            <div class="container">
                <h3 class="mt-3 mb-3">No Background</h3>

                <h4 class="mt-3">Boxed</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Default</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-default fa-heart-o"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p class="text-muted">Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-default fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p class="text-muted">Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-default fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p class="text-muted">Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Dark</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 light-gray-bg feature-box-2 boxed object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 light-gray-bg feature-box-2 boxed object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pv-20 ph-20 light-gray-bg feature-box-2 boxed object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark-bg clearfix">
            <div class="container pt-3">
                <h3 class="mb-5">Dark Background</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-muted fa-heart-o"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p class="text-muted">Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-muted fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p class="text-muted">Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa text-muted fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p class="text-muted">Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="default-bg clearfix">
            <div class="container pt-3">
                <h3 class="mb-5">Default Background</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small circle"><i class="fa fa-heart-o"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small circle"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small circle"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fixed-bg dark-translucent-bg background-img-2">
            <div class="container pt-3">
                <h3 class="mb-5">Dark Image Background</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-heart-o"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fixed-bg light-translucent-bg slight background-img-2">
            <div class="container pt-3">
                <h3 class="mb-5">Light Image Background</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small"><i class="fa fa-heart-o"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fixed-bg default-translucent-bg background-img-2">
            <div class="container pt-3">
                <h3 class="mb-5">Default Image Background</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small circle"><i class="fa fa-heart-o"></i></span>
                            <div class="body">
                                <h4 class="title">Great &amp; elegant</h4>
                                <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small circle"><i class="fa fa-connectdevelop"></i></span>
                            <div class="body">
                                <h4 class="title">Porro ullam volu</h4>
                                <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small circle"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                                <a href="page-services.html" class="link-dark">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section>
        <div class="container">
            <h2 class="mt-4">Style 3</h2>
        </div>

        <section class="light-gray-bg clearfix">
            <div class="container">
                <h3 class="mt-3 mb-3">Light Background</h3>

                <h4 class="mt-3">Boxed</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-support text-muted"></i></span>
                            <div class="body text-muted">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Adipisci blanditiis placeat suscipit itaque obcaecati explicabo minus ex voluptatum aper.</p>
                                <div class="separator-3"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-2"></div>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-diamond text-muted"></i></span>
                            <div class="body text-muted">
                                <h4 class="title">Crystal Clean Design</h4>
                                <p>Eum voluptatem explicabo cumque inventore et itaque quisquam sunteas. Elegant layouts.</p>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-3"></div>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Default</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-arrows"></i></span>
                            <div class="body">
                                <h4 class="title">Responsive Design</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-bullhorn"></i></span>
                            <div class="body">
                                <h4 class="title">Inve et ita</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-umbrella"></i></span>
                            <div class="body">
                                <h4 class="title">Labore et dolore magna aliqua</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class=" fa fa-cogs"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-star-o"></i></span>
                            <div class="body">
                                <h4 class="title">Quis harum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <h4 class="mt-3">Dark</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box-2 white-bg object-non-visible right boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="text-default fa fa-arrows"></i></span>
                            <div class="body">
                                <h4 class="title">Responsive Design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                            </div>
                        </div>
                        <div class="feature-box-2 white-bg object-non-visible right boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="text-default fa fa-bullhorn"></i></span>
                            <div class="body">
                                <h4 class="title">Inve et ita</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                            </div>
                        </div>
                        <div class="feature-box-2 white-bg object-non-visible right boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="text-default fa fa-umbrella"></i></span>
                            <div class="body">
                                <h4 class="title">Labore et dolore magna aliqua</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2 white-bg object-non-visible boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-snowflake-o text-default"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                            </div>
                        </div>
                        <div class="feature-box-2 white-bg object-non-visible boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-cogs text-default"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                            </div>
                        </div>
                        <div class="feature-box-2 white-bg object-non-visible boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-star-o text-default"></i></span>
                            <div class="body">
                                <h4 class="title">Quis harum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="clearfix">
            <div class="container">
                <h3 class="mt-3 mb-3">No Background</h3>

                <h4 class="mt-3">Boxed</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-support text-muted"></i></span>
                            <div class="body text-muted">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Adipisci blanditiis placeat suscipit itaque obcaecati explicabo minus ex voluptatum aper.</p>
                                <div class="separator-3"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-2"></div>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-diamond text-muted"></i></span>
                            <div class="body text-muted">
                                <h4 class="title">Crystal Clean Design</h4>
                                <p>Eum voluptatem explicabo cumque inventore et itaque quisquam sunteas. Elegant layouts.</p>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-3"></div>
                                <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Default &amp; Dark</h4>
                <div class="separator-2 mb-5"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-arrows"></i></span>
                            <div class="body">
                                <h4 class="title">Responsive Design</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small"><i class="fa fa-bullhorn"></i></span>
                            <div class="body">
                                <h4 class="title">Inve et ita</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small circle"><i class="fa fa-umbrella"></i></span>
                            <div class="body">
                                <h4 class="title">Labore et dolore magna aliqua</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small"><i class=" fa fa-cogs"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small circle"><i class="fa fa-star-o"></i></span>
                            <div class="body">
                                <h4 class="title">Quis harum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="dark-bg clearfix">
            <div class="container pt-3">
                <h3 class="mt-3 mb-3">Dark Background</h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small"><i class="fa fa-support text-muted"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Adipisci blanditiis placeat suscipit itaque obcaecati explicabo minus ex voluptatum aper.</p>
                                <div class="separator-3"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-2"></div>
                                <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <br>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-arrows"></i></span>
                            <div class="body">
                                <h4 class="title">Responsive Design</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-bullhorn"></i></span>
                            <div class="body">
                                <h4 class="title">Inve et ita</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small circle"><i class="fa fa-umbrella"></i></span>
                            <div class="body">
                                <h4 class="title">Labore et dolore magna aliqua</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small"><i class="text-muted fa fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title">Crystal Clean Design</h4>
                                <p>Eum voluptatem explicabo cumque inventore et itaque quisquam sunteas. Elegant layouts.</p>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-3"></div>
                                <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <br>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class=" fa fa-cogs"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon default-bg small circle"><i class="fa fa-star-o"></i></span>
                            <div class="body">
                                <h4 class="title">Quis harum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <section class="default-bg clearfix">
            <div class="container pt-3">
                <h3 class="mt-3 mb-3">Default Background</h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-support"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Adipisci blanditiis placeat suscipit itaque obcaecati explicabo minus ex voluptatum aper.</p>
                                <div class="separator-3"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-2"></div>
                                <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <br>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small"><i class="fa fa-arrows"></i></span>
                            <div class="body">
                                <h4 class="title">Responsive Design</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-bullhorn"></i></span>
                            <div class="body">
                                <h4 class="title">Inve et ita</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small circle"><i class="fa fa-umbrella"></i></span>
                            <div class="body">
                                <h4 class="title">Labore et dolore magna aliqua</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various desktop, tablet, and mobile devices. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title">Crystal Clean Design</h4>
                                <p>Eum voluptatem explicabo cumque inventore et itaque quisquam sunteas. Elegant layouts.</p>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-3"></div>
                                <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <br>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class=" fa fa-cogs"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small circle"><i class="fa fa-star-o"></i></span>
                            <div class="body">
                                <h4 class="title">Quis harum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua. <a href="page-services.html" class="link-light">Read More<i class="pl-1 fa fa-angle-double-right"></i></a></p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <section class="two-col-translucent-bg background-img-1">
            <div class="container pt-3">
                <h3 class="mt-3 mb-3">Light &amp; Dark Image Background</h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-support"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Adipisci blanditiis placeat suscipit itaque obcaecati explicabo minus ex voluptatum aper.</p>
                                <div class="separator-3"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <br>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small"><i class="fa fa-arrows"></i></span>
                            <div class="body">
                                <h4 class="title">Responsive Design</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various devices.</p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-bullhorn"></i></span>
                            <div class="body">
                                <h4 class="title">Inve et ita</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various devices.</p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small circle"><i class="fa fa-umbrella"></i></span>
                            <div class="body">
                                <h4 class="title">Labore et dolore magna aliqua</h4>
                                <p>Our design is with responsive in mind. Our themes are compatible with various devices.</p>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class="fa fa-diamond"></i></span>
                            <div class="body">
                                <h4 class="title">Crystal Clean Design</h4>
                                <p>Eum voluptatem explicabo cumque inventore et itaque quisquam sunteas. Elegant layouts.</p>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li>Duis aute irure dolor <i class="fa fa-check-square-o"></i></li>
                                    <li>Dolore eu fugiat nulla <i class="fa fa-check-square-o"></i></li>
                                    <li>Labore et dolore magna aliqua <i class="fa fa-check-square-o"></i></li>
                                    <li>Unt in culpa qui deserunt <i class="fa fa-check-square-o"></i></li>
                                </ul>
                                <div class="separator-3"></div>
                            </div>
                        </div>
                        <br>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon light-bg small"><i class="fa fa-snowflake-o"></i></span>
                            <div class="body">
                                <h4 class="title">Latest Technologies</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon without-bg"><i class=" fa fa-cogs"></i></span>
                            <div class="body">
                                <h4 class="title">Unt in culpa qui</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                            <span class="icon dark-bg small circle"><i class="fa fa-star-o"></i></span>
                            <div class="body">
                                <h4 class="title">Quis harum</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore magna aliqua.</p>
                                <div class="separator-2"></div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection