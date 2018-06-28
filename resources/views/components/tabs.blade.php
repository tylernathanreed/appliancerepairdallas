<?php $id = $id ?? ('tabs-' . microtime(true)); ?>
<?php $style = $style ?? 1; ?>

<?php $slots = array_filter(array_keys($__data), function($name) {
	return preg_match("/items\.[^\.]+\.(?:heading|content)/", $name);
}); ?>

@if(count($slots) > 0)

	<?php $items = []; ?>

	@foreach($slots as $name)

		<?php $key = substr($name, 6, -8); ?>
		<?php $attribute = substr($name, -7); ?>
		<?php $value = $__data[$name]; ?>

		<?php $items[$key][$attribute] = $value; ?>

	@endforeach

@endif

<div class="tabs-container">
	<ul class="nav nav-tabs style-{{ $style }}" role="tablist">
		@foreach($items as $key => $item)

			<?php $key = "{$id}-{$key}"; ?>
			<?php $active = $loop->first; ?>

			<li class="nav-item">
				<a class="nav-link{{ $active ? ' active' : '' }}" href="#{{ $key }}" role="tab" data-toggle="tab">
					{!! $item['heading'] !!}
				</a>
			</li>

		@endforeach
	</ul>

	<div class="tab-content">
		@foreach($items as $key => $item)

			<?php $key = "{$id}-{$key}"; ?>
			<?php $active = $loop->first; ?>

			<div class="tab-pane fade{{ $active ? ' show active' : '' }}" id="{{ $key }}">
				{!! $item['content'] !!}
			</div>

		@endforeach
	</div>
</div>