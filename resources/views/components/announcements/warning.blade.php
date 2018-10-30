<?php $bg = 'warning'; ?>
<?php $text = 'dark'; ?>

@component('components.announcements.announcement', compact('bg', 'text', 'button', 'dismissable'))
	{!! $slot !!}
@endcomponent