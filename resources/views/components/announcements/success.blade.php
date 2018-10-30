<?php $bg = 'success'; ?>

@component('components.announcements.announcement', compact('bg', 'button', 'dismissable'))
	{!! $slot !!}
@endcomponent