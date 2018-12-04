@extends('pages.component-pages.layout')

@push('announcements')

	@component('components.announcements.default')

		@slot('button')
			<a href="#" class="btn btn-dark">Click me</a>
		@endslot

		<h4>This announcement needs your attention</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam laboriosam nemo, reprehenderit!</p>

	@endcomponent

	@component('components.announcements.danger')

		<h4>This announcement needs your attention</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam laboriosam nemo, reprehenderit!</p>

	@endcomponent

	@component('components.announcements.dark')

		@slot('button')
			<a href="#" class="btn btn-white text-dark">Click me</a>
		@endslot

		<h4>This announcement needs your attention</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam laboriosam nemo, reprehenderit!</p>

	@endcomponent

	@component('components.announcements.info')

		@slot('button')
			<a href="#" class="btn btn-dark">Click me</a>
		@endslot

		<h4>This announcement needs your attention</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam laboriosam nemo, reprehenderit!</p>

	@endcomponent

	@component('components.announcements.light', ['dismissable' => false])

		@slot('button')
			<a href="#" class="btn btn-dark">Click me</a>
		@endslot

		<h4>This announcement needs your attention</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam laboriosam nemo, reprehenderit!</p>

	@endcomponent

	@component('components.announcements.primary')

		@slot('button')
			<a href="#" class="btn btn-dark">Click me</a>
		@endslot

		<h4>This announcement needs your attention</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam laboriosam nemo, reprehenderit!</p>

	@endcomponent

	@component('components.announcements.warning')

		@slot('button')
			<a href="#" class="btn btn-dark">Click me</a>
		@endslot

		<h4>This announcement needs your attention</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam laboriosam nemo, reprehenderit!</p>

	@endcomponent


	@component('components.announcements.success', ['dismissable' => false])

		<h4>This announcement needs your attention</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam laboriosam nemo, reprehenderit!</p>

	@endcomponent

@endpush