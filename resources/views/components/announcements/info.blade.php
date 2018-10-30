<?php $bg = 'info'; ?>

@component('components.announcements.announcement', compact('bg', 'button', 'dismissable'))
	{!! $slot !!}
@endcomponent