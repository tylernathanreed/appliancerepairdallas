<?php $id = $id ?? ('dropdown-' . floor(microtime(true))); ?>
<?php $tag = $tag ?? 'div'; ?>
<?php $class = isset($class) ? ' ' . $class : ''; ?>

<?php $button['tag'] = $button['tag'] ?? ($__data['button.tag'] ?? null); ?>
<?php $button['class'] = $button['class'] ?? ($__data['button.class'] ?? null); ?>
<?php $button['text'] = $button['text'] ?? ($__data['button.text'] ?? null); ?>

<?php $button = [
	'tag' => $button['tag'] ?? 'a',
	'class' => isset($button['class']) ? ' ' . $button['class'] : '',
	'text' => $button['text'] ?? $title
]; ?>

<?php $menu['tag'] = $menu['tag'] ?? ($__data['menu.tag'] ?? null); ?>
<?php $menu['class'] = $menu['class'] ?? ($__data['menu.class'] ?? null); ?>

<?php $menu = [
	'tag' => $menu['tag'] ?? 'div',
	'class' => isset($menu['class']) ? ' ' . $menu['class'] : ''
]; ?>

<{!! $tag !!} class="dropdown{{ $class }}">
	<{!! $button['tag'] !!} id="{{ $id }}" class="dropdown-toggle{{ $button['class'] }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		{!! $button['text'] !!}
	</{!! $button['tag'] !!}>

	<{!! $menu['tag'] !!} class="dropdown-menu{{ $menu['class'] }}" aria-labelledby="{{ $id }}">
		{!! $slot !!}
	</{!! $menu['tag'] !!}>
</{!! $tag !!}>