<?php $layout = $layout ?? config('branding.social-links.default'); ?>
<?php $sites = config('branding.social-links.layouts.' . $layout); ?>
<?php $links = array_only(config('branding.social-links.sites'), $sites); ?>

@if($layout == 'small')
	<ul class="social-links circle small margin-clear clearfix animated-effect-1">
		@foreach($links as $name => $attributes)
			<li class="{{ $name }}">
				<a target="_blank" href="{{ $attributes['link'] }}">
					<i class="{{ $attributes['icon'] }}"></i>
				</a>
			</li>
		@endforeach
	</ul>
@else
	<ul class="social-links circle animated-effect-1">
		@foreach($links as $name => $attributes)
			<li class="{{ $name }}">
				<a target="_blank" href="{{ $attributes['link'] }}">
					<i class="{{ $attributes['icon'] }}"></i>
				</a>
			</li>
		@endforeach
	</ul>
@endif