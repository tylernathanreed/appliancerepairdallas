<!-- header start -->
<!-- classes:  -->
<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
<!-- "full-width": mandatory class for the full-width menu layout -->
<!-- "centered": mandatory class for the centered logo layout -->
<!-- ================ --> 
<header class="header fixed clearfix">
	
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<!-- header-left start -->
				<!-- ================ -->
				<div class="header-left clearfix">

					<!-- logo -->
					<div id="logo" class="logo">
						<a href="{{ config('app.url') }}"><img id="logo_img" src="{{ config('app.url') }}/media/images/logo.jpg" alt="E and M" style="max-height: 60px"></a>
					</div>
					
				</div>
				<!-- header-left end -->

			</div>
			<div class="col-md-9">
	
				<!-- header-right start -->
				<!-- ================ -->
				<div class="header-right clearfix">
					
				<!-- main-navigation start -->
				<!-- classes: -->
				<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
				<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
				<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
				<!-- ================ -->
				<div class="main-navigation  animated with-dropdown-buttons">

					<!-- navbar start -->
					<!-- ================ -->
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">

							<!-- Toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="navbar-collapse-1">
								@include('partials.nav')
								
								<!-- header dropdown buttons -->
								<div class="header-dropdown-buttons hidden-xs">
									@include('partials.header.search')
								</div>
								<!-- header dropdown buttons end-->
								
							</div>

						</div>
					</nav>
					<!-- navbar end -->

				</div>
				<!-- main-navigation end -->	
				</div>
				<!-- header-right end -->
	
			</div>
		</div>
	</div>
	
</header>
<!-- header end -->