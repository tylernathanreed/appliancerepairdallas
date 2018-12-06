<?php $background = $background ?? (($type ?? 'default') . '-bg'); ?>

<section class="section {{ $background }} clearfix"{!! isset($style) ? ' style="' . $style . '"' : '' !!}>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action{{ isset($class) ? ' ' . $class :'' }}">
                    <div class="row">
                        <div class="col-sm-8">
                            @if(isset($header))
                                {!! $header !!}
                            @else
                                <h3 class="mt-10">{{ $slot ?? $text }}</h3>
                            @endif
                        </div>

                        @if(isset($link) || isset($button))
                            <div class="col-sm-4 text-right">
                                @if(isset($link))
                                    <a href="{{ $link }}" class="btn btn-lg radius-50 btn-dark btn-animated">{{ $action }}<i class="fa fa-arrow-right pl-20"></i></a>
                                @else
                                    {!! $button !!}
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>