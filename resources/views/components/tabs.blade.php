<?php

    /*
    |--------------------------------------------------------------------------
    | Tabs
    |--------------------------------------------------------------------------
    |
    | The tabs component is for displaying layered content where each layer
    | can be selected by the user, such that only one layer is displayed
    | at a time. This can be useful for complex but similar content.
    |
    | Parameters:
    |  - id              (string)   The element id for the tab list and content wrapper (Defaults to "tabs-{{ microtime }}").
    |  - type            (string)   The type of tabs to use (Defaults to "tabs").
    |  - style           (integer)  The styling class to use (Defaults to 1).
    |  - items           (array)    The tab list and content instructions (can be built using slots).
    |  - tabs-container  (array)    Additional options for the tabs container element.
    |
    | Supported Types: "tabs", "pills"
    | Supported Styles: 1, 2
    | Supported Tab Container Options: "class"
    |
    | Example Usage (All Slots):
    |
    |    @component('...')
    |
    |      @slot('items.0.heading')
    |        Item 1
    |      @endslot
    |
    |      @slot('items.0.content')
    |        Lorem ipsum
    |      @endslot
    |
    |    @endcomponent
    |
    | Example Usage (Content Slots):
    |
    |    @component('...', [
    |      'items.0.heading' => 'Item 1',
    |      'items.1.heading' => 'Item 2'
    |    ])
    |
    |      @slot('items.0.content')
    |        Lorem ipsum
    |      @endslot
    |
    |      @slot('items.1.content')
    |        Lorem ipsum
    |      @endslot
    |
    |    @endcomponent
    */

?>

<?php $id = $id ?? ('tabs-' . microtime(true)); ?>
<?php $type = $type ?? 'tabs'; ?>
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

<?php $tabContainerClass = isset($__data['tabs-container']['class'])
	? 'tabs-container ' . $__data['tabs-container']['class']
	: 'tabs-container';
?>

<div id="{{ $id }}" class="{{ $tabContainerClass }}">
	<ul class="nav nav-{{ $type }} style-{{ $style }}" role="tablist">
		@foreach($items as $key => $item)

			<?php $key = "{$id}-{$key}"; ?>
			<?php $active = $loop->first; ?>

			<li class="nav-item">
				<a class="nav-link{{ $active ? ' active' : '' }}" href="#{{ $key }}" role="tab" data-toggle="tab" title="{{ strip_tags($item['heading']) }}">
					{!! $item['heading'] !!}
				</a>
			</li>

		@endforeach
	</ul>

	<?php $tabContentClass = isset($__data['tab-content']['class'])
		? 'tab-content ' . $__data['tab-content']['class']
		: 'tab-content';
	?>

	<div class="{{ $tabContentClass }}">
		@foreach($items as $key => $item)

			<?php $key = "{$id}-{$key}"; ?>
			<?php $active = $loop->first; ?>

			<div class="tab-pane fade{{ $active ? ' show active' : '' }}" id="{{ $key }}">
				{!! $item['content'] !!}
			</div>

		@endforeach
	</div>
</div>