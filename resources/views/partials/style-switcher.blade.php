<div class="style-switcher closed" style="left: -225px;">
	<div class="header">
		<a class="trigger" href="#"><i class="fa fa-cog"></i></a>
		<h2>Style Switcher</h2>
	</div>

	<div class="clearfix body">
		<h3>Primary Color</h3>
		<ul class="styleChange">
			<?php $selected = config('styles.primary-colors.selected'); ?>

			@foreach(config('styles.primary-colors.colors') as $name => $color)
				<li class="{{ $color['class'] . ($name == $selected ? ' selected' : '') }}" data-style="{{ $color['style'] }}" title="{{ $color['title'] }}"></li>
			@endforeach
		</ul>

		<small class="styleName text-muted">{{ config("styles.primary-colors.colors.{$selected}.title") }}</small>

		<hr>

		<h3>Layout Mode</h3>
		<ul class="layoutChange">
			<li class="wide" data-style="wide" title="wide"><i class="fa fa-arrow-left pr-10"></i>Wide<i class="fa fa-arrow-right pl-10"></i></li>
			<li class="boxed selected" data-style="boxed" title="boxed"><i class="fa fa-arrow-right pr-1"></i>Boxed<i class="fa fa-arrow-left pl-1"></i></li>
		</ul>

		<h3>Patterns</h3>
		<ul class="patternChange">
			<li class="pattern-0" data-style="pattern-0" title="white background"></li>
			<li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
			<li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
			<li class="pattern-3 selected" data-style="pattern-3" title="pattern-3"></li>
			<li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
			<li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
			<li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
			<li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
			<li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
			<li class="pattern-9" data-style="pattern-9" title="pattern-9"></li>
		</ul>
	</div>
</div>