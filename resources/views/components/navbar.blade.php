<?php $attributeSlots = array_filter(array_keys($__data), function($name) {
	return preg_match("/^items\.[^\.]+\.(?:heading|content)$/", $name);
}); ?>

@if(count($attributeSlots) > 0)

	<?php $items = $items ?? []; ?>

	@foreach($attributeSlots as $name)

		<?php $key = substr($name, 6, -8); ?>
		<?php $attribute = substr($name, -7); ?>
		<?php $value = $__data[$name]; ?>

		@if(!is_array($items[$key]))
			<?php $items[$key] = (array) $items[$key]; ?>
		@endif

		<?php $items[$key][$attribute] = $value; ?>

	@endforeach

@endif

<?php $itemSlots = array_filter(array_keys($__data), function($name) {
	return preg_match("/^items\.[^\.]+$/", $name);
}); ?>

@if(count($itemSlots) > 0)

	<?php $items = $items ?? []; ?>

	@foreach($itemSlots as $name)

		<?php $key = substr($name, 6); ?>
		<?php $value = $__data[$name]; ?>

		<?php $items[$key] = $value; ?>

	@endforeach

@endif

<ul class="navbar-nav">
	@foreach($items as $key => $item)

		@if(is_array($item))

			@component('components.dropdown', [
				'tag' => 'li',
				'class' => 'nav-item',
				'button' => [
					'class' => 'nav-link',
					'text' => $key
				],
				'menu' => [
					'tag' => 'ul'
				]
			])

				@foreach($item as $key2 => $item2)
					<li><a href="{{ $item2 }}">{{ $key2 }}</a></li>
				@endforeach

			@endcomponent

		@elseif(is_object($item) && $item instanceof \Illuminate\Support\HtmlString)
			{!! $item !!}
		@else

			<li class="nav-item">
				<a href="{{ $item }}" class="nav-link">{{ $key }}</a>
			</li>

		@endif

	@endforeach
</div>