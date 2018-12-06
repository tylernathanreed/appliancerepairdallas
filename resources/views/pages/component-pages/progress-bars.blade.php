@extends('pages.component-pages.layout', [
    'main-container' => [
        'class' => 'padding-bottom-clear'
    ]
])

@section('page.main')

    <!-- Progress Bars start -->
    <!-- ============================================================================== -->
    <section>
        <h2>Progress Bars - Style 1</h2>

        <div>
            <h3 class="mt-3">Animated Progress Bars</h3>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-success" role="progressbar" data-animate-width="50%">
                    <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Success - 50%</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-info" role="progressbar" data-animate-width="60%">
                    <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Info - 60%</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-warning" role="progressbar" data-animate-width="70%">
                    <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Warning - 70%</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-danger" data-animate-width="80%">
                    <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Danger - 80%</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-default" data-animate-width="90%">
                    <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Default - 90%</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-gray" data-animate-width="100%">
                    <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Gray - 100%</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-dark" data-animate-width="90%">
                    <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Dark - 90%</span>
                </div>
            </div>
            <div class="progress style-1 dark">
                <span class="text"></span>
                <div class="progress-bar progress-bar-white" data-animate-width="80%">
                    <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">White - 80%</span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="mt-3">Basic</h3>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="label">Success - 40%</span>
                    <span class="sr-only">40% Complete - Success</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    <span class="label">Info - 50%</span>
                    <span class="sr-only">50% Complete - Info</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="label">Warning - 60%</span>
                    <span class="sr-only">60% Complete - Warning</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="label">Danger - 70%</span>
                    <span class="sr-only">70% Complete - Danger</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="label">Default - 80%</span>
                    <span class="sr-only">80% Complete - Default</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-gray" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="label">Gray - 70%</span>
                    <span class="sr-only">70% Complete - Gray</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="label">Dark - 60%</span>
                    <span class="sr-only">60% Complete - Dark</span>
                </div>
            </div>
            <div class="progress dark style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                    <span class="label">White - 55%</span>
                    <span class="sr-only">20% Complete - White</span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="mt-3">Stripped</h3>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="label">Success - 40%</span>
                    <span class="sr-only">40% Complete - Success</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="label">Info - 20%</span>
                    <span class="sr-only">20% Complete - Info</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="label">Warning - 60%</span>
                    <span class="sr-only">60% Complete - Warning</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="label">Danger - 80%</span>
                    <span class="sr-only">80% Complete - Danger</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-default progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="label">Default - 40%</span>
                    <span class="sr-only">40% Complete - Default</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-gray progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="label">Gray - 20%</span>
                    <span class="sr-only">20% Complete - Gray</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-dark progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="label">Dark - 60%</span>
                    <span class="sr-only">60% Complete - Dark</span>
                </div>
            </div>
            <div class="progress style-1 dark">
                <span class="text"></span>
                <div class="progress-bar progress-bar-white progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="label">White - 70%</span>
                    <span class="sr-only">70% Complete - White</span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="mt-3">Stripped Animated</h3>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="label">Success - 40%</span>
                    <span class="sr-only">40% Complete - Success</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="label">Info - 20%</span>
                    <span class="sr-only">20% Complete - Info</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="label">Warning - 60%</span>
                    <span class="sr-only">60% Complete - Warning</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="label">Danger - 80%</span>
                    <span class="sr-only">80% Complete - Danger</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-default progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="label">Default - 40%</span>
                    <span class="sr-only">40% Complete - Default</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-gray progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="label">Gray - 20%</span>
                    <span class="sr-only">20% Complete - Gray</span>
                </div>
            </div>
            <div class="progress style-1">
                <span class="text"></span>
                <div class="progress-bar progress-bar-dark progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="label">Dark - 60%</span>
                    <span class="sr-only">60% Complete - Dark</span>
                </div>
            </div>
            <div class="progress style-1 dark">
                <span class="text"></span>
                <div class="progress-bar progress-bar-white progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="label">White - 70%</span>
                    <span class="sr-only">70% Complete - White</span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="mt-4">Progress Bars - Style 2</h2>

        <div>
            <h3 class="mt-3">Basic</h3>
            <div class="progress style-2">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span>40% Complete - Success</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    <span>50% Complete - Info</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span>60% Complete - Warning</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span>70% Complete - Danger</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span>80% Complete - Default</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-gray" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <span>90% Complete - Gray</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span>100% Complete - Dark</span>
                </div>
            </div>
            <div class="progress style-2 dark">
                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <span>90% Complete - White</span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="mt-3">Stripped</h3>
            <div class="progress style-2">
                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span>40% Complete - Success</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span>20% Complete - Info</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span>60% Complete - Warning</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span>80% Complete - Danger</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-default progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span>40% Complete - Default</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-gray progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span>20% Complete - Gray</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-dark progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span>60% Complete - Dark</span>
                </div>
            </div>
            <div class="progress style-2 dark">
                <div class="progress-bar progress-bar-white progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <span>90% Complete - White</span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="mt-3">Stripped Animated</h3>
            <div class="progress style-2">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span>40% Complete - Success</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span>20% Complete - Info</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span>60% Complete - Warning</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span>80% Complete - Danger</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-default progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span>40% Complete - Default</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-gray progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span>20% Complete - Gray</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-dark progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span>60% Complete - Dark</span>
                </div>
            </div>
            <div class="progress style-2 dark">
                <div class="progress-bar progress-bar-white progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <span>90% Complete - White</span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="mt-3">Animated Progress Bars</h3>
            <div class="progress style-2">
                <div class="progress-bar bg-success" role="progressbar" data-animate-width="60%">
                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="600">60% Complete - Success</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-info" role="progressbar" data-animate-width="70%">
                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="600">70% Complete - Info</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-warning" role="progressbar" data-animate-width="80%">
                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="600">80% Complete - Warning</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar bg-danger" data-animate-width="90%">
                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="600">90% Complete - Danger</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-default" data-animate-width="100%">
                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="600">100% Complete - Default</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-gray" data-animate-width="90%">
                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="600">90% Complete - Gray</span>
                </div>
            </div>
            <div class="progress style-2">
                <div class="progress-bar progress-bar-dark" data-animate-width="80%">
                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="600">80% Complete - Dark</span>
                </div>
            </div>
            <div class="progress style-2 dark">
                <div class="progress-bar progress-bar-white" data-animate-width="70%">
                    <span class="object-non-visible" data-animation-effect="fadeInLeftBig" data-effect-delay="600">70% Complete - White</span>
                </div>
            </div>
        </div>
    </section>

@endsection