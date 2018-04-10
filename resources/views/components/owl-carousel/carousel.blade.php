<?php $autoplay = $autoplay ?? false; ?>
<?php $imageBox = $imageBox ?? false; ?>

<div class="owl-carousel carousel{{ $autoplay ? '-autoplay' : '' }}">

    @if(isset($slot))
        {{ $slot }}
    @endif

    @if(isset($items))

        @foreach($items as $item)

            @if($imageBox)
                <div class="image-box text-center">
            @endif

            <div class="overlay-container">
                <img src="{{ $item['image'] }}" alt="{{ $item['alt'] ?? '' }}">

                @if(isset($item['title']))
                    <div class="overlay-top">
                        <div class="text">
                            <small>{!! $item['title'] !!}</small>                                            
                        </div>
                    </div>
                @endif

                @if(isset($item['link']))
                    <div class="{{ isset($item['title']) ? 'overlay-bottom' : 'overlay-to-top' }}">
                        <div class="links">
                            <a href="{{ $item['link'] }}" class="small">{!! $item['text'] ?? 'View Details' !!}</a>
                        </div>
                    </div>
                @endif
            </div>

            @if($imageBox)
                </div>
            @endif

        @endforeach

    @endif

</div>