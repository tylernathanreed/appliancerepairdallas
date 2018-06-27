<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
	@if(isset($icon))
		<span class="icon without-bg">{!! $icon !!}</span>
	@endif

	<div class="body">
		@if(isset($title))
			<h4 class="title">{!! $title !!}</h4>
		@endif

		@if(isset($body))
			<p>{!! $body !!}</p>
		@endif

		@if(isset($slot))
			{!! $slot !!}
		@endif

		@if(isset($href))
			<a href="{{ $href }}">Read More<i class="pl-1 fa fa-angle-double-right"></i></a>
		@endif
	</div>
</div>