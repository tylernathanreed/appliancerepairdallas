@extends('pages.component-pages.layout')

@section('page.main')

    <!-- Tabs and Pills start -->
    <!-- ============================================================================== -->

    <section>
        <h2 class="mt-4">Horizontal Tabs - Style 1</h2>

        <ul class="nav nav-tabs style-1" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#htab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-2"></i>Very Flexible</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#htab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-2"></i>Unt lorem culpa quilor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#htab3" role="tab" data-toggle="tab"><i class="fa fa-envelope pr-2"></i>Well Documented</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="htab1" role="tabpanel">
                <h3 class="mt-4">Very Flexible</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn margin-clear btn-default">Read more</a>
            </div>
            <div class="tab-pane fade" id="htab2" role="tabpanel">
                <h3 class="mt-4">Unt lorem culpa quilor</h3>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                </div>
                <a href="#" class="btn margin-clear btn-default">Read more</a>
            </div>
            <div class="tab-pane fade" id="htab3" role="tabpanel">
                <h3 class="mt-4">Well Documented</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn margin-clear btn-default">Read more</a>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Horizontal Tabs - Style 2</h2>

        <ul class="nav nav-tabs style-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#h2tab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-2"></i>Very Flexible</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-2"></i>Unt lorem culpa quilor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-envelope pr-2"></i>Well Documented</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane show active" role="tabpanel" id="h2tab1">
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn margin-clear btn-gray">Read more</a>
            </div>
            <div class="tab-pane" role="tabpanel" id="h2tab2">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                </div>
                <a href="#" class="btn margin-clear btn-gray">Read more</a>
            </div>
            <div class="tab-pane" role="tabpanel" id="h2tab3">
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn margin-clear btn-gray">Read more</a>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Horizontal Tabs - Style 3</h2>

        <ul class="nav nav-tabs style-3" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#h3tab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-2"></i>Very Flexible</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#h3tab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-2"></i>Unt lorem culpa quilor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#h3tab3" role="tab" data-toggle="tab"><i class="fa fa-envelope pr-2"></i>Well Documented</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane show active" role="tabpanel" id="h3tab1">
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn btn-default margin-clear">Read more</a>
            </div>
            <div class="tab-pane" role="tabpanel" id="h3tab2">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                </div>
                <a href="#" class="btn btn-gray margin-clear">Read more</a>
            </div>
            <div class="tab-pane" role="tabpanel" id="h3tab3">
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn btn-gray margin-clear">Read more</a>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Horizontal Tabs - Style 4</h2>

        <ul class="nav nav-tabs style-4" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#h4tab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-2"></i>Very Flexible</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#h4tab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-2"></i>Unt lorem culpa quilor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#h4tab3" role="tab" data-toggle="tab"><i class="fa fa-envelope pr-2"></i>Well Documented</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" role="tabpanel" id="h4tab1">
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn btn-gray-transparent margin-clear">Read more</a>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="h4tab2">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                </div>
                <a href="#" class="btn btn-gray margin-clear">Read more</a>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="h4tab3">
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                        <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-icons">
                            <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                            <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                            <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                            <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn btn-gray margin-clear">Read more</a>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Vertical Tabs</h2>

        <div class="vertical">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#vtab1" role="tab" data-toggle="tab"><i class="fa fa-magic pr-2"></i> Very Flexible</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#vtab2" role="tab" data-toggle="tab"><i class="fa fa-life-saver pr-2"></i> Unt lorem culpa quilor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#vtab3" role="tab" data-toggle="tab"><i class="fa fa-expand pr-2"></i> 100% Responsive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#vtab4" role="tab" data-toggle="tab"><i class="fa fa-file-o pr-2"></i> Well Documented</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="vtab1" role="tabpanel">
                    <h3 class="title">Very Flexible</h3>
                    <ul class="list-icons">
                        <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                        <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                        <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                    <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="tab-pane fade" id="vtab2" role="tabpanel">
                    <h3 class="title">Unt lorem culpa quilor</h3>
                    <ul class="list-icons">
                        <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                        <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                        <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                    <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="tab-pane fade" id="vtab3" role="tabpanel">
                    <h3 class="title">100% Responsive</h3>
                    <ul class="list-icons">
                        <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                        <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                        <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                    <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="tab-pane fade" id="vtab4" role="tabpanel">
                    <h3 class="title">Well Documented</h3>
                    <ul class="list-icons">
                        <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                        <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                        <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                    <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Vertical Tabs (Left)</h2>
        <div class="vertical left">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="v2tab1" role="tabpanel">
                    <h3 class="title">Very Flexible</h3>
                    <ul class="list-icons">
                        <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                        <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                        <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                    <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="tab-pane fade" id="v2tab2" role="tabpanel">
                    <h3 class="title">Unt lorem culpa quilor</h3>
                    <ul class="list-icons">
                        <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                        <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                        <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                    <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="tab-pane fade" id="v2tab3" role="tabpanel">
                    <h3 class="title">100% Responsive</h3>
                    <ul class="list-icons">
                        <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                        <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                        <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                    <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="tab-pane fade" id="v2tab4" role="tabpanel">
                    <h3 class="title">Well Documented</h3>
                    <ul class="list-icons">
                        <li><i class="fa fa-check pr-2"></i> Lorem ipsum dolor sit amet maiores</li>
                        <li><i class="fa fa-check pr-2"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-check pr-2"></i> Aut earum numquam hic placeat</li>
                        <li><i class="fa fa-check pr-2"></i> Fugiat rem consequatur neque</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
                    <p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#v2tab1" role="tab" data-toggle="tab"><i class="fa fa-magic pr-2"></i> Very Flexible</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#v2tab2" role="tab" data-toggle="tab"><i class="fa fa-life-saver pr-2"></i> Unt lorem culpa quilor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#v2tab3" role="tab" data-toggle="tab"><i class="fa fa-expand pr-2"></i> 100% Responsive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#v2tab4" role="tab" data-toggle="tab"><i class="fa fa-file-o pr-2"></i> Well Documented</a>
                </li>
            </ul>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Pills - Style 1</h2>

        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#pill-1" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-1"></i> Photo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pill-2" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-1"></i> Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pill-3" role="tab" data-toggle="tab" title="text"><i class="fa fa-pencil pr-1"></i> Text</a>
            </li>
        </ul>

        <div class="tab-content clear-style">
            <div class="tab-pane active" id="pill-1">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                    <a href="{{ asset('media/images/portfolio-1.jpg') }}" class="popup-img overlay-link" title="image title"><i class="fa fa-search-plus"></i></a>
                </div>
            </div>
            <div class="tab-pane" id="pill-2">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/page-about-2.jpg') }}" alt="">
                    <a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
                </div>
            </div>
            <div class="tab-pane" id="pill-3">
                <h3 class="mt-4">Lorem ipsum dolor sit amet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Pills - Style 2</h2>

        <ul class="nav nav-pills style-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#pill2-1" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-1"></i> Photo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pill2-2" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-1"></i> Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pill2-3" role="tab" data-toggle="tab" title="text"><i class="fa fa-pencil pr-1"></i> Text</a>
            </li>
        </ul>

        <div class="tab-content clear-style">
            <div class="tab-pane active" id="pill2-1">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/portfolio-1.jpg') }}" alt="">
                    <a href="{{ asset('media/images/portfolio-1.jpg') }}" class="popup-img overlay-link" title="image title"><i class="fa fa-search-plus"></i></a>
                </div>
            </div>
            <div class="tab-pane" id="pill2-2">
                <div class="overlay-container">
                    <img src="{{ asset('media/images/page-about-2.jpg') }}" alt="">
                    <a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
                </div>
            </div>
            <div class="tab-pane" id="pill2-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Pills - Process</h2>

        <div class="process">
            <!-- Nav tabs -->
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#pill-pr-1" role="tab" data-toggle="tab" title="Step 1"><i class="fa fa-dot-circle-o pr-1"></i> Step 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pill-pr-2" role="tab" data-toggle="tab" title="Step 2"><i class="fa fa-dot-circle-o pr-1"></i> Step 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pill-pr-3" role="tab" data-toggle="tab" title="Step 3"><i class="fa fa-dot-circle-o pr-1"></i> Step 3</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content clear-style">
                <div class="tab-pane active" id="pill-pr-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
                </div>
                <div class="tab-pane" id="pill-pr-2">
                    <p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                    <div class="overlay-container">
                        <img src="images/page-about-2.jpg" alt="">
                        <a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="tab-pane" id="pill-pr-3">
                    <p>Consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                    <p>Ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
                </div>
            </div>
        </div>
    </section>

@endsection