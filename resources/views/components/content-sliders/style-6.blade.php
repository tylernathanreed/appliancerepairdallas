<div class="owl-carousel carousel">

    @if(isset($slot))
        {{ $slot }}
    @endif

    @if(isset($items))

        @foreach($items as $item)
            <div class="image-box text-center">
                <div class="overlay-container">
                    <img src="{{ $item['image'] }}" alt="{{ $item['alt'] ?? '' }}">

                    <div class="overlay-to-top">
                        <a href="{{ $item['link'] }}" class="small">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach

    @endif

</div>