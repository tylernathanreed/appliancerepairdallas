<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<i class="fa fa-home pr-10"></i>
				<a class="link-dark" href="{{ route('pages.home') }}">Home</a>
			</li>

			@stack('breadcrumbs')
		</ol>
	</div>
</div>