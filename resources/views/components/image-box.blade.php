<div class="image-box style-2 mb-20">
	<div class="overlay-container overlay-visible">
		<img src="{{ $image }}" alt="{{ $alt ?? '' }}">

		<a href="#" class="overlay-link">
			<i class="fa fa-link"></i>
		</a>

		@if(isset($bottom))
			<div class="overlay-bottom hidden-sm-down">
				{!! $bottom !!}
			</div>
		@endif
	</div>

	@if(isset($body))
		<div class="body padding-horizontal-clear">
			{!! $body !!}
		</div>
	@endif
</div>