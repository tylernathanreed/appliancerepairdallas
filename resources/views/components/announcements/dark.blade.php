<?php $bg = 'dark'; ?>

@component('components.announcements.announcement', compact('bg', 'button', 'dismissable'))
	{!! $slot !!}
@endcomponent