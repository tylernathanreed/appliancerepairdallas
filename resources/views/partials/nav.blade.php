<ul class="navbar-nav ml-xl-auto">
	<li class="nav-item mega-menu mega-menu--wide{{ url() == config('app.url') ? ' active' : '' }}">
		<a href="{{ config('app.url') }}" class="nav-link">Home</a>
	</li>

	<li class="nav-item mega-menu mega-menu--wide{{ url() == (config('app.url') . '/about') ? ' active' : '' }}">
		<a href="{{ config('app.url') }}/about" class="nav-link">About Us</a>
	</li>

	<li class="nav-item mega-menu mega-menu--wide">
		<a href="{{ route('pages.pricing') }}" class="nav-link">Pricing</a>
	</li>

	<li class="nav-item dropdown mega-menu mega-menu--wide">
		<a id="first-dropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
		<ul class="dropdown-menu" aria-labelledby="first-dropdown">
			<li><a href="#">E&amp;M Services</a></li>
			<li><a href="{{ route('pages.resources.content-sliders') }}">Content Sliders</a></li>
			<li><a href="#">Rake leaves</a></li>
		</ul>
	</li>

	<li class="nav-item mega-menu mega-menu--wide">
		<a href="{{ config('app.url') }}/news" class="nav-link">News</a>
	</li>

	<li class="nav-item mega-menu mega-menu--wide">
		<a href="{{ config('app.url') }}/contact" class="nav-link">Contact Us</a>
	</li>
</ul>