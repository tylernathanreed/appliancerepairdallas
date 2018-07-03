<?php $class = isset($class) ? ' ' . $class : ' text-center'; ?>
<?php $info1 = $info1 ?? (isset($name) ? '- ' . $name : null); ?>
<?php $info2 = $info2 ?? (isset($organization) ? 'By ' . $organization : null); ?>
<?php $name = $name ?? null; ?>

<div class="testimonial text-center padding-ver-clear">

	@if(isset($image))
		<div class="testimonial-image">
			<img src="{{ asset('media/images/testimonial-1.jpg') }}" alt="{{ $name }}" title="{{ $name }}" class="rounded-circle">
		</div>
	@endif

	<h3>{{ $title }}</h3>
	<div class="separator"></div>

	<div class="testimonial-body">
		<blockquote>
			@if(isset($body))
				<p>{{ $body }}</p>
			@endif

			@if(isset($slot))
				{!! $slot !!}
			@endif
		</blockquote>

		@if(isset($info1))
			<div class="testimonial-info-1">{{ $info1 }}</div>
		@endif

		@if(isset($info2))
			<div class="testimonial-info-2">{{ $info2 }}</div>
		@endif
	</div>
</div>