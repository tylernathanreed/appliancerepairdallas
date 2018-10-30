<?php $bg = 'light-gray'; ?>
<?php $text = 'muted'; ?>

@component('components.announcements.announcement', compact('bg', 'text', 'button', 'dismissable'))
	{!! $slot !!}
@endcomponent