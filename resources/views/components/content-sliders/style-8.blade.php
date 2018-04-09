<div class="owl-carousel clients">

    @if(isset($slot))
        {{ $slot }}
    @endif

    @if(isset($items))

        @foreach($items as $item)
            <div class="client">
                <a href="{{ $item['link'] ?? '#' }}">
                    <img src="{{ $item['image'] }}" alt="{{ $item['alt'] ?? '' }}">
                </a>
            </div>
        @endforeach

    @endif

</div>