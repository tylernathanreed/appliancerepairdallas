<div class="owl-carousel carousel-autoplay">

    @if(isset($slot))
        {{ $slot }}
    @endif

    @if(isset($items))

        @foreach($items as $item)
            <div class="overlay-container">
                <img src="{{ $item['image'] }}" alt="{{ $item['alt'] ?? '' }}">

                <div class="overlay-top">
                    <div class="text">
                        <small>{!! $item['title'] !!}</small>                                            
                    </div>
                </div>

                <div class="overlay-bottom">
                    <div class="links">
                        <a href="{{ $item['link'] }}" class="btn-sm-link">View Details<i class="pl-5 fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach

    @endif

</div>