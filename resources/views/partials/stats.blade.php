<?php $stats = config('branding.stats'); ?>
<?php $style = $style ?? 1; ?>

<div class="row">
	@foreach($stats as $stat)
		<div class="col-md-3 col-xs-6 text-center">
			@include('components.feature-box.style-' . $style, [
				'icon' => $stat['icon'],
				'title' => $stat['label'],
				'slot' => '<span class="counter" data-to="' . $stat['count'] . '" data-speed="5000">0</span>'
			])
		</div>
	@endforeach
</div>