<div class="feature-box{{ isset($class) ? ' ' . $class : '' }} object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
	@if(isset($icon))
		<span class="icon without-bg text-center">{!! $icon !!}</span>
	@endif

	@if(isset($title))
		<h3>{!! $title !!}</h3>
	@endif

	@if(isset($body))
		<p>{!! $body !!}</p>
	@endif

	@if(isset($slot))
		{!! $slot !!}
	@endif
</div>