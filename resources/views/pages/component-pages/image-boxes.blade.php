@extends('pages.component-pages.layout')

@section('page.main')

    <section>
        <h2>Style 1</h2>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="image-box shadow text-center mb-20">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box shadow text-center mb-20">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box shadow text-center mb-20">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                        <div class="overlay-top">
                            <div class="text">
                                <h3><a href="portfolio-item.html">Project Title</a></h3>
                                <p class="small">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="overlay-bottom">
                            <div class="links">
                                <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="image-box shadow text-center mb-20">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                        <div class="overlay-bottom hidden-xs">
                            <div class="text">
                                <p class="lead margin-clear">Image caption lorem ipsum</p>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box shadow text-center mb-20">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                        <div class="overlay-bottom hidden-xs">
                            <div class="text">
                                <p class="lead margin-clear">Image caption lorem ipsum</p>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box shadow text-center mb-20">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                        <div class="overlay-bottom hidden-xs">
                            <div class="text">
                                <p class="lead margin-clear">Image caption lorem ipsum</p>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-3">Style 2</h2>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                        <div class="overlay-to-top">
                            <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                        </div>
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>                       
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                        <div class="overlay-to-top">
                            <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                        </div>
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>                       
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                        <div class="overlay-to-top">
                            <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                        </div>
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>                       
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                        <div class="overlay-to-top">
                            <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                        </div>
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                        <div class="overlay-to-top">
                            <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                        </div>
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg text-center">
                    <div class="overlay-container">
                        <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
                        <div class="overlay-to-top">
                            <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                        </div>
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered light-gray-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                        <div class="overlay-bottom text-left">
                            <p class="lead margin-clear">The Project Title</p>
                        </div>
                    </div>
                    <div class="body">
                        <p class="small mb-10 text-muted"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm rgin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered light-gray-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                        <div class="overlay-bottom text-left">
                            <p class="lead margin-clear">The Project Title</p>
                        </div>
                    </div>
                    <div class="body">
                        <p class="small mb-10 text-muted"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm rgin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered light-gray-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                        <div class="overlay-bottom text-left">
                            <p class="lead margin-clear">The Project Title</p>
                        </div>
                    </div>
                    <div class="body">
                        <p class="small mb-10 text-muted"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm rgin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered light-gray-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>                   
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator-2"></div>
                        <p class="small mb-10 text-muted"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm rgin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered light-gray-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>                   
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator-2"></div>
                        <p class="small mb-10 text-muted"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm rgin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered light-gray-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>                   
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator-2"></div>
                        <p class="small mb-10 text-muted"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-default btn-sm rgin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                        <div class="overlay-bottom text-left">
                            <p class="lead margin-clear">The Project Title</p>
                        </div>
                    </div>
                    <div class="body">
                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                        <div class="overlay-bottom text-left">
                            <p class="lead margin-clear">The Project Title</p>
                        </div>
                    </div>
                    <div class="body">
                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                        <div class="overlay-bottom text-left">
                            <p class="lead margin-clear">The Project Title</p>
                        </div>
                    </div>
                    <div class="body">
                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>                   
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator-2"></div>
                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>                   
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator-2"></div>
                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image-box style-2 mb-20 bordered dark-bg">
                    <div class="overlay-container overlay-visible">
                        <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
                        <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>                   
                    </div>
                    <div class="body">
                        <h3>Project Title</h3>
                        <div class="separator-2"></div>
                        <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                        <a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2>Style 3</h2>

        <div class="mb-3">
            <div class="image-box style-3 mb-20 shadow bordered light-gray-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-box style-3 mb-20 shadow bordered light-gray-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-box style-3 mb-20 shadow bordered light-gray-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="image-box style-3 mb-20 dark-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-gray-transparent btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-box style-3 mb-20 dark-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-gray-transparent btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-box style-3 mb-20 dark-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-gray-transparent btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="image-box style-3-b">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="body">
                            <h3 class="title">Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-box style-3-b">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="body">
                            <h3 class="title">Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-box style-3-b">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="body">
                            <h3 class="title">Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2>Style 4</h2>

        <div class="mb-3">
            <div class="image-box style-4 light-gray-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-box style-4 light-gray-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6 order-lg-2">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-2.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="body text-right">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-3"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-box style-4 light-gray-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-3.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-default btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="image-box style-4 dark-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-4.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-gray-transparent btn-sm btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-box style-4 dark-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6 order-lg-2">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-5.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="body text-right">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-3"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-gray-transparent btn-sm btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-box style-4 dark-bg">
                <div class="row grid-space-0">
                    <div class="col-lg-6">
                        <div class="overlay-container">
                            <img src="{{ asset('media/images/portfolio-6.jpg') }}" alt="">
                            <div class="overlay-to-top">
                                <p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="body">
                            <div class="pv-30 hidden-lg-down"></div>
                            <h3>Project Title</h3>
                            <p class="small mb-10"><i class="fa fa-calendar-o pr-1"></i> Dec, 2017 <i class="pl-10 pr-1 fa fa-tag"></i> Web Design</p>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
                            <br>
                            <a href="#" class="btn btn-gray-transparent btn-sm btn-animated margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection