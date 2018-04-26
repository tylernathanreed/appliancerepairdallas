<div class="sticky-wrapper">
	<header class="header fixed clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-auto hidden-md-down pl-3">
					<div class="header-first clearfix">
						<div id="logo" class="logo">
							<a href="{{ config('app.url') }}"><img id="logo_img" src="{{ config('app.url') }}/media/images/logo.jpg" alt="E and M Home Service" style="max-height: 60px"></a>
						</div>
						
					</div>
				</div>

				<div class="col-lg-8 md-lg-auto">
					<div class="header-second clearfix">
						<div class="main-navigation main-navigation--mega-menu animated">
							<nav class="navbar navbar-expand-lg navbar-light p-0" role="navigation">

								<!-- Logo for medium or smaller devices -->
								<div class="navbar-brand clearfix hidden-lg-up">

									<!-- logo -->
									<div id="logo-mobile" class="logo">
									<a href="{{ config('app.url') }}"><img id="logo-img-mobile" src="{{ config('app.url') }}/media/images/logo.jpg" alt="E and M Home Service"></a>
									</div>

									<!-- name-and-slogan -->
									<div class="site-slogan">
										Appliance repair you can trust.
									</div>

								</div>

								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>


								<div class="collapse navbar-collapse" id="navbar-collapse-1">
									@include('partials.nav')
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</header>
</div>