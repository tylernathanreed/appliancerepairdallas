<div class="owl-carousel content-slider-with-controls">

    @if(isset($slot))
        {{ $slot }}
    @endif

    @if(isset($items))

        @foreach($items as $item)
            <div class="overlay-container overlay-visible">
                <img src="{{ $item['image'] }}" alt="{{ $item['alt'] ?? '' }}">
                <div class="overlay-bottom hidden-xs">
                    <div class="text">
                        <h3 class="title">{{ $item['title'] }}</h3>
                        <p>{!! $item['text'] !!}</p>
                    </div>
                </div>
                <a href="{{ $item['image'] }}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
            </div>
        @endforeach

    @endif

</div>