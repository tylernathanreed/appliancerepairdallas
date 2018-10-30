<?php $bg = 'primary'; ?>

@component('components.announcements.announcement', compact('bg', 'button', 'dismissable'))
	{!! $slot !!}
@endcomponent