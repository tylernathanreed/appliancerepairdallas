<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="{{ $url }}">Home</a></li>

			@if(isset($breadcrumbs))
				@foreach($breadcrumbs as $name => $href)
					<li{{ $href == $link ? ' class=active' : '' }}><a href="{{ $href }}">{{ $name }}</a></li>
				@endforeach
			@endif

			@yield('breadcrumbs')
		</ol>
	</div>
</div>
<!-- breadcrumb end -->