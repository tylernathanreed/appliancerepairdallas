<!-- main-menu -->
<ul class="nav navbar-nav">
												
	<li {{ url() == config('app.url') ? 'class=active' : '' }}>
		<a href="{{ config('app.url') }}">Home</a>
	</li>

	<li {{ url() == (config('app.url') . '/about') ? 'class=active' : '' }}>
		<a href="{{ config('app.url') }}/about">About Us</a>
	</li>

	<li class="dropdown{{ url() == (config('app.url') . '/loan') ? ' active' : '' }}">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
		<ul class="dropdown-menu">
			<li><a href="{{ config('app.url') }}/loan">E&amp;M Services</a></li>
			<li><a href="#">Rake leaves</a></li>
		</ul>
	</li>

	<li>
		<a href="{{ config('app.url') }}/news">News</a>
	</li>

	<li>
		<a href="{{ config('app.url') }}/contact">Contact Us</a>
	</li>

	<li>
		<a href="#">Messages</a><span class="badge">1</span>
	</li>
</ul>
<!-- main-menu end -->