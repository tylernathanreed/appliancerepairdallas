<?php $best = $best ?? false; ?>

<div class="col-sm-{{ $width }}">
	<div class="plan shadow light-gray-bg bordered{{ $best ? ' best-value' : '' }}">
		<div class="header {{ $best ? 'default' : 'dark' }}-bg">
        <h3>{{ $heading }}</h3>
        @if(isset($price))
            <div class="price"><span>{!! $price !!}</span></div>
        @endif
		</div>

	    @if(isset($slot))
	        {{ $slot }}
	    @endif

	    @if(isset($items))
			<ul>
	            @foreach($items as $item)
	                <li>{!! $item !!}</li>
	            @endforeach

	            @if(isset($action))
	                <li>
	                    <a href="#" class="btn btn-{{ $best ? 'default' : 'dark' }} radius-50 btn-animated-left btn-lg">
	                        @if(is_array($action))
	                            @if(isset($action['icon']))
	                                <i class="{{ $action['icon'] }}"></i>&nbsp;
	                            @endif
	                            {{ $action['text'] }}
	                        @else
	                            {!! $action !!}
	                        @endif
	                    </a>
	                </li>
	            @endif
			</ul>
		@endif
	</div>
</div>