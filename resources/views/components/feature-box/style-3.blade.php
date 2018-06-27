@include('components.feature-box.style-1', [
	'class' => 'shadow-narrow bordered pv-20 light-gray-bg',
	'icon' => $icon ?? null,
	'title' => $title ?? null,
	'body' => $body ?? null,
	'slot' => $slot ?? null
])