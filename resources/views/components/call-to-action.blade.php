<section class="section {{ $type ?? 'default' }}-bg clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="mt-10 text-muted">{{ $slot ?? $text }}</h3>
                        </div>

                        @if(isset($link))
                            <div class="col-sm-4 text-right">
                                <a href="{{ $link }}" class="btn btn-lg radius-50 btn-dark btn-animated">{{ $action }}<i class="fa fa-arrow-right pl-20"></i></a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>