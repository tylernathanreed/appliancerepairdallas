<?php $bg = 'danger'; ?>

@component('components.announcements.announcement', compact('bg', 'button', 'dismissable'))
	{!! $slot !!}
@endcomponent