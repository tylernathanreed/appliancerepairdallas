<ul class="navbar-nav">
	<li class="nav-item">
		<a href="{{ config('app.url') }}" class="nav-link">Home</a>
	</li>

	@component('components.dropdown', ['tag' => 'li', 'class' => 'nav-item', 'button' => ['tag' => 'a', 'class' => 'nav-link'], 'menu' => ['tag' => 'ul']])

		@slot('button.text')
			About
		@endslot

		<li><a href="{{ route('pages.about.style-1') }}">Style 1</a></li>
		<li><a href="{{ route('pages.about.style-2') }}">Style 2</a></li>
		<li><a href="{{ route('pages.about.style-3') }}">Style 3</a></li>
		<li><a href="{{ route('pages.about.style-4') }}">Style 4</a></li>

	@endcomponent

	<li class="nav-item dropdown">
		<a id="second-dropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
		<ul class="dropdown-menu" aria-labelledby="second-dropdown">
			<li><a href="{{ route('pages.services.style-1') }}">Style 1</a></li>
			<li><a href="{{ route('pages.services.style-2') }}">Style 2</a></li>
			<li><a href="{{ route('pages.services.style-3') }}">Style 3</a></li>
		</ul>
	</li>

	<li class="nav-item dropdown">
		<a id="third-dropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
		<ul class="dropdown-menu" aria-labelledby="third-dropdown">
			<li><a href="{{ route('pages.resources.appliances') }}">Appliances</a></li>
			<li><a href="{{ route('pages.resources.testimonials') }}">Testimonials</a></li>
			<li><a href="{{ route('pages.resources.manufacturer-numbers') }}">Manufacturer Numbers</a></li>
			<li><a href="{{ route('pages.resources.coverage') }}">Coverage</a></li>
			<li><a href="{{ route('pages.resources.content-sliders') }}">Content Sliders</a></li>
		</ul>
	</li>

	<li class="nav-item dropdown mega-menu mega-menu--narrow">
	  	<a id="components-dropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Components</a>
		<ul class="dropdown-menu" aria-labelledby="components-dropdown">
			<li>
				<div class="row">
					<div class="col-md-12">
						<h4 class="title"><i class="fa fa-magic pr-2"></i> Components</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="divider"></div>
								<ul class="menu">
									<li><a href="{{ url('components/social-icons') }}"><i class="fa fa-share-alt pr-2"></i>Social Icons</a></li>
									<li><a href="{{ url('components/buttons') }}"><i class="fa fa-flask pr-2"></i>Buttons</a></li>
									<li><a href="{{ url('components/forms') }}"><i class="fa fa-align-justify pr-2"></i>Forms</a></li>
									<li><a href="{{ url('components/tabs-and-pills') }}"><i class=" fa fa-list-ul pr-2"></i>Tabs &amp; Pills</a></li>
									<li><a href="{{ url('components/accordions') }}"><i class="fa fa-bars pr-2"></i>Accordions</a></li>
									<li><a href="{{ url('components/progress-bars') }}"><i class="fa fa-line-chart pr-2"></i>Progress Bars</a></li>
									<li><a href="{{ url('components/call-to-action') }}"><i class="fa fa-comments-o pr-2"></i>Call to Action Blocks</a></li>
									<li><a href="{{ url('components/alerts-and-callouts') }}"><i class="fa fa-info-circle pr-2"></i>Alerts &amp; Callouts</a></li>
									<li><a href="{{ url('components/content-sliders') }}"><i class="fa fa-star pr-2"></i>Content Sliders</a></li>
									<li><a href="{{ url('components/charts') }}"><i class="fa fa-pie-chart pr-2"></i>Charts</a></li>
									<li><a href="{{ url('components/icon-boxes') }}"><i class="fa fa-picture-o pr-2"></i>Icon Boxes</a></li>
								</ul>
							</div>

							<div class="col-lg-6">
								<div class="divider"></div>
								<ul class="menu">
									<li><a href="{{ url('components/image-boxes') }}"><i class="fa fa-camera pr-2"></i>Image Boxes</a></li>
									<li><a href="{{ url('components/fullwidth-sections') }}"><i class="fa fa-code pr-2"></i>Full Width Sections</a></li>
									<li><a href="{{ url('components/animations') }}"><i class="fa fa-heart pr-2"></i>Animations</a></li>
									<li><a href="{{ url('components/lightbox') }}"><i class="fa fa-plus pr-2"></i>Lightbox</a></li>
									<li><a href="{{ url('components/counters') }}"><i class="fa fa-sort-numeric-desc pr-2"></i>Counters</a></li>
									<li><a href="{{ url('components/modals') }}"><i class="fa fa-arrows-alt pr-2"></i>Modals</a></li>
									<li><a href="{{ url('components/tables') }}"><i class="fa fa-table pr-2"></i>Tables</a></li>
									<li><a href="{{ url('components/text-rotators') }}"><i class="fa fa-rotate-left pr-2"></i>Text Rotators</a></li>
									<li><a href="{{ url('components/announcement-default') }}"><i class="fa fa-bullhorn pr-2"></i>Announcements</a></li>
									<li><a href="{{ url('components/separators') }}"><i class="fa fa-star pr-2"></i>Separators</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</li>

	<li class="nav-item dropdown">
		<a id="fourth-dropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tips &amp; Tricks</a>
		<ul class="dropdown-menu" aria-labelledby="fourth-dropdown">
			<li><a href="{{ route('pages.repair-tips') }}">Repair Tips</a></li>
			<li><a href="{{ route('pages.faq') }}">FAQ</a></li>
		</ul>
	</li>

	<li class="nav-item dropdown">
		<a id="fifth-dropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
		<ul class="dropdown-menu" aria-labelledby="fifth-dropdown">
			<li><a href="{{ route('pages.contact.style-1') }}">Style 1</a></li>
			<li><a href="{{ route('pages.contact.style-2') }}">Style 2</a></li>
			<li><a href="{{ route('pages.contact.style-3') }}">Style 3</a></li>
		</ul>
	</li>
</ul>