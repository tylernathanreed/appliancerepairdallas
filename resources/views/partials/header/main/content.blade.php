<header class="header fixed clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="header-left clearfix">
					<div id="logo" class="logo">
						<a href="{{ config('app.url') }}"><img id="logo_img" src="{{ config('app.url') }}/media/images/logo.jpg" alt="E and M" style="max-height: 60px"></a>
					</div>
					
				</div>
			</div>

			<div class="col-md-9">
				<div class="header-right clearfix">
					<div class="main-navigation animated with-dropdown-buttons">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									
								</div>

								<div class="collapse navbar-collapse" id="navbar-collapse-1">
									@include('partials.nav')
								</div>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</header>