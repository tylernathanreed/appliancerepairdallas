<!-- header-container start -->
<div class="header-container">
	
	<!-- header-top start -->
	<!-- classes:  -->
	<!-- "dark": dark version of header top e.g. class="header-top dark" -->
	<!-- "colored": colored version of header top e.g. class="header-top colored" -->
	<!-- ================ -->
	<div class="header-top dark ">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-6 col-md-9">
					<!-- header-top-first start -->
					<!-- ================ -->
					<div class="header-top-first clearfix">
						<ul class="list-inline hidden-sm hidden-xs">
							<li><i class="fa fa-map-marker pr-5 pl-10"></i>PO Box 1234 Dallas, TX 75252</li>
							<li><i class="fa fa-phone pr-5 pl-10"></i>+1-800-555-1234</li>
							<li><i class="fa fa-envelope-o pr-5 pl-10"></i> info@example.com</li>
						</ul>
					</div>
					<!-- header-top-first end -->
				</div>
				<div class="col-xs-9 col-sm-6 col-md-3">

					<!-- header-top-second start -->
					<!-- ================ -->
					<div id="header-top-second"  class="clearfix">

						<!-- header top dropdowns start -->
						<!-- ================ -->
						<div class="header-top-dropdown text-right">
							@if(isset($user))
								<div style="margin-top: 9px; margin-bottom: 8px">
									<i class="fa fa-user pr-10"></i>
									<span>Hello, {{ $user }}</span>
								</div>
							@else
								<div class="btn-group">
									<a href="{{ config('app.url') }}/register" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
								</div>

								<div class="btn-group dropdown">
									<button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login</button>
									<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
										<li>
											<form class="login-form margin-clear">
												<div class="form-group has-feedback">
													<label class="control-label">Username</label>
													<input type="text" class="form-control" placeholder="">
													<i class="fa fa-user form-control-feedback"></i>
												</div>
												<div class="form-group has-feedback">
													<label class="control-label">Password</label>
													<input type="password" class="form-control" placeholder="">
													<i class="fa fa-lock form-control-feedback"></i>
												</div>
												<a class="btn btn-gray btn-sm" href="{{ config('app.url') }}">Log In</a>
												<span class="pl-5 pr-5">or</span>
												<a class="btn btn-default btn-sm" href="{{ config('app.url') }}/register">Sign Up</a>
												<ul>
													<li><a href="#">Forgot your password?</a></li>
												</ul>
											</form>
										</li>
									</ul>
								</div>
							@endif
						</div>
						<!--  header top dropdowns end -->
					</div>
					<!-- header-top-second end -->
				</div>
			</div>
		</div>
	</div>
	<!-- header-top end -->
	
	@include('partials.header.main.content')
</div>
<!-- header-container end -->

@yield('header')