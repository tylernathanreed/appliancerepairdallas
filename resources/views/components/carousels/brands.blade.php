<div class="slick-carousel brands">

    @if(isset($slot))
        {{ $slot }}
    @endif

    @if(isset($items))

        @foreach($items as $item)
            <div class="brand">
                <a href="{{ $item['link'] ?? '#' }}">
                    <img src="{{ $item['image'] }}" alt="{{ $item['alt'] ?? '' }}">
                </a>
            </div>
        @endforeach

    @endif

</div>