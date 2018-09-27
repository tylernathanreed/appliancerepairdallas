<ul class="navbar-nav ml-xl-auto">
	<li class="nav-item mega-menu mega-menu--wide{{ url() == config('app.url') ? ' active' : '' }}">
		<a href="{{ config('app.url') }}" class="nav-link">Home</a>
	</li>

	<li class="nav-item dropdown">
		<a id="first-dropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
		<ul class="dropdown-menu" aria-labelledby="first-dropdown">
			<li><a href="{{ route('pages.about.style-1') }}">Style 1</a></li>
			<li><a href="{{ route('pages.about.style-2') }}">Style 2</a></li>
			<li><a href="{{ route('pages.about.style-3') }}">Style 3</a></li>
			<li><a href="{{ route('pages.about.style-4') }}">Style 4</a></li>
		</ul>
	</li>

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