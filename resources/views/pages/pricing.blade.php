@extends('layouts.page')

@section('page.heading')
    Pricing
@endsection

@section('page.content')

    @include('models.pricing-tables.partials.index', ['style' => 'style-1'])
    @include('models.pricing-tables.partials.index', ['style' => 'style-2'])
    @include('models.pricing-tables.partials.index', ['style' => 'style-3'])

@endsection