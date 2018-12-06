<div class="image-box team-member style-2 shadow-2 bordered mb-20 text-center">
	<div class="overlay-container overlay-visible">
		<img src="{{ asset($image) }}" alt="{{ $alt ?? '' }}">
		<div class="overlay-bottom">
			<p class="small margin-clear">{{ $subtitle }}</p>
		</div>
	</div>

	<div class="body">
		<h3 class="margin-clear">{{ $name }}</h3>
		<small>{{ $title }}</small>

		<div class="separator mt-10"></div>

		{!! $slot !!}
	</div>
</div>