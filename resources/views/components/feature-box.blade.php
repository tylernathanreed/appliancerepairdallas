<?php $style = $style ?? 1; ?>
<?php $styleClass = $style == 1 ? '' : '-2'; ?>
<?php $iconStyle = $iconStyle ?? 'without-bg text-center'; ?>
<?php $iconColor = isset($iconColor) ? $iconColor . ' ' : null; ?>

<div class="feature-box{{ $styleClass }}{{ isset($class) ? ' ' . $class : '' }} object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
	@if(isset($iconClass))
		<?php $icon = '<i class="' . $iconColor . $iconClass . '"></i>'; ?>
	@endif

	@if(isset($icon))
		<span class="icon {{ $iconStyle }}">{!! $icon !!}</span>
	@endif

	@if(isset($body))
		<div class="body">
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

	@if(isset($body))
		</div>
	@endif
</div>