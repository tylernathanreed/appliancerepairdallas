@extends('pages.component-pages.layout')

@section('page.main')

    <!-- Charts start -->
    <!-- ============================================================================== -->
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        For more info about charts please visit <a target="_blank" class="alert-link" href="http://www.chartjs.org/">http://www.chartjs.org/</a>.
    </div>

    <div class="row">
        <div class="col-sm-6">
            <h2 class="mt-3">Line Chart</h2>
            <canvas class="graph line" id="lines-graph" height="210" width="270"></canvas>                
        </div>
        <div class="col-sm-6">
            <h2 class="mt-3">Bar Chart</h2>
            <canvas class="graph bar" id="bars-graph" height="210" width="270"></canvas>
        </div>
    </div>

    <h2 class="mt-5">Pie &amp; Doughnut Charts</h2>
    <div class="row">
        <div class="col-sm-6">
            <canvas class="graph pie" id="pie-graph" height="300"></canvas>
        </div>
        <div class="col-sm-6">
            <canvas class="graph doughnut" id="doughnut-graph" height="230"></canvas>
        </div>
    </div>

@endsection