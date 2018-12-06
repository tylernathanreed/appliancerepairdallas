@extends('pages.component-pages.layout')

@section('page.main')

    <!-- Accordions start -->
    <!-- ============================================================================== -->
    <section>
        <h2 class="mt-3">Accordion - Style 1</h2>

        <div id="accordion" class="collapse-style-1" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-bold pr-10"></i>Bootstrap Based
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h4 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fa fa-leaf pr-10"></i>Clean &amp; powerful design
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h4 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fa fa-html5 pr-10"></i>HTML5/CSS3
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-3">Accordion - Style 2</h2>

        <div id="accordion-2" class="collapse-style-2" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne-2">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
                            <i class="fa fa-bold pr-10"></i>Bootstrap Based
                        </a>
                    </h4>
                </div>
                <div id="collapseOne-2" class="collapse show" role="tabpanel" aria-labelledby="headingOne-2">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo-2">
                    <h4 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                            <i class="fa fa-leaf pr-10"></i>Clean &amp; powerful design
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo-2" class="collapse" role="tabpanel" aria-labelledby="headingTwo-2">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree-2">
                    <h4 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2">
                            <i class="fa fa-html5 pr-10"></i>HTML5/CSS3
                        </a>
                    </h4>
                </div>
                <div id="collapseThree-2" class="collapse" role="tabpanel" aria-labelledby="headingThree-2">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-3">Accordion - Style 3</h2>

        <div id="accordion-3" class="collapse-style-3" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne-3">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion-3" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
                            <i class="fa fa-bold pr-10"></i>Bootstrap Based
                        </a>
                    </h4>
                </div>
                <div id="collapseOne-3" class="collapse show" role="tabpanel" aria-labelledby="headingOne-3">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo-3">
                    <h4 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-3" href="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                            <i class="fa fa-leaf pr-10"></i>Clean &amp; powerful design
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo-3" class="collapse" role="tabpanel" aria-labelledby="headingTwo-3">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree-3">
                    <h4 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-3" href="#collapseThree-3" aria-expanded="false" aria-controls="collapseThree-3">
                            <i class="fa fa-html5 pr-10"></i>HTML5/CSS3
                        </a>
                    </h4>
                </div>
                <div id="collapseThree-3" class="collapse" role="tabpanel" aria-labelledby="headingThree-3">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-3">Accordion - Contextual Headers</h2>

        <div class="collapse-contextual" id="accordion-4" role="tablist" aria-multiselectable="true">
            <div class="card card-default">
                <div class="card-header" role="tab" id="headingOne-4">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion-4" href="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">
                            <i class="fa fa-check pr-10"></i>Default
                        </a>
                    </h4>
                </div>
                <div id="collapseOne-4" class="collapse show" role="tabpanel" aria-labelledby="headingOne-4">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card text-white bg-primary">
                <div class="card-header" role="tab" id="headingTwo-4">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion-4" href="#collapseTwo-4" class="collapsed" aria-expanded="false" aria-controls="collapseTwo-4">
                            <i class="fa fa-leaf pr-10"></i>Primary
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo-4" class="collapse" role="tabpanel" aria-labelledby="headingTwo-4">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card text-white bg-success">
                <div class="card-header" role="tab" id="headingThree-4">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion-4" href="#collapseThree-4" class="collapsed" aria-expanded="false" aria-controls="collapseThree-4">
                            <i class="fa fa-thumbs-o-up pr-10"></i>Success
                        </a>
                    </h4>
                </div>
                <div id="collapseThree-4" class="collapse" role="tabpanel" aria-labelledby="headingThree-4">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card text-white bg-info">
                <div class="card-header" role="tab" id="headingFour-4">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion-4" href="#collapseFour-4" class="collapsed" aria-expanded="false" aria-controls="collapseFour-4">
                            <i class="fa fa-info-circle pr-10"></i>Info
                        </a>
                    </h4>
                </div>
                <div id="collapseFour-4" class="collapse" role="tabpanel" aria-labelledby="headingFour-4">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card text-white bg-warning">
                <div class="card-header" role="tab" id="headingFive-4">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion-4" href="#collapseFive-4" class="collapsed" aria-expanded="false" aria-controls="collapseFive-4">
                            <i class="fa fa-warning pr-10"></i>Warning
                        </a>
                    </h4>
                </div>
                <div id="collapseFive-4" class="collapse" role="tabpanel" aria-labelledby="headingFive-4">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div class="card text-white bg-danger">
                <div class="card-header" role="tab" id="headingSix-4">
                    <h4 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion-4" href="#collapseSix-4" class="collapsed" aria-expanded="false" aria-controls="collapseSix-4">
                            <i class="fa fa-times pr-10"></i>Danger
                        </a>
                    </h4>
                </div>
                <div id="collapseSix-4" class="collapse" role="tabpanel" aria-labelledby="headingSix-4">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-3">collapsible content</h2>
        <p class="lead">Click the button below to show and hide content.</p>
        <a class="btn btn-gray collapsed btn-animated" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent">Toggle Collapse <i class="fa fa-plus"></i></a>
        <div class="collapse" id="collapseContent">
            <h3>Content</h3>
            <div class="row">
                <div class="col-md-6">
                    <img class="mb-20" src="images/section-image-3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto earum, perferendis vel maxime sequi unde fugiat aut vitae minus cupiditate. Odit et exercitationem omnis, consectetur harum sint. Fugit, ullam, libero.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque eius repudiandae libero dolore quasi at blanditiis commodi reiciendis fugit aspernatur distinctio consequatur consequuntur aliquid alias?</p>
                </div>
            </div>
        </div>
    </section>

@endsection