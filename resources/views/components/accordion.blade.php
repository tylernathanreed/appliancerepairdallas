<?php $id = $id ?? ('accordion-' . microtime(true)); ?>
<?php $style = $style ?? 1; ?>
<?php $class = isset($class) ? ' ' . $class : ''; ?>

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

<div id="{{ $id }}" class="collapse-style-{{ $style }}{{ $class }}" role="tablist" aria-multiselectable="true">
	@foreach($items as $key => $item)

		<?php $key = "{$id}-{$key}"; ?>
		<?php $collapsed = !$loop->first; ?>

		<div class="card">
			<div class="card-header" role="tab" id="heading-{{ $key }}">
				<h4 class="panel-title mb-0">
					<a data-toggle="collapse" data-parent="#{{ $id }}" href="#collapse-{{ $key }}"{{ $collapsed ? ' class=collapsed' : '' }} aria-expanded="{{ $collapsed ? 'false' : 'true' }}" aria-controls="collapse-{{ $key }}">
						{!! $item['heading'] !!}
					</a>
				</h4>
			</div>

			<div id="collapse-{{ $key }}" class="{{ $collapsed ? 'collapse' : 'collapse show' }}" role="tabpanel" aria-labelledby="heading-{{ $key }}">
				<div class="card-block"{!! $style == 2 ? ' style="padding: 15px;"' : '' !!}>
					{!! $item['content'] !!}
				</div>
			</div>
		</div>
	@endforeach
</div>