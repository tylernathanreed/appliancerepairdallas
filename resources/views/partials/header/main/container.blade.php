<div class="header-container">
	<div class="header-top dark ">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-6 col-md-8">
					<div class="header-top-first clearfix">
						<ul class="list-inline hidden-sm hidden-xs">
							<li><i class="fa fa-map-marker pr-5 pl-10"></i>PO Box 1234 Dallas, TX 75252</li>
							<li><i class="fa fa-phone pr-5 pl-10"></i>{{ config('branding.contacts.phones.primary') }} or {{ config('branding.contacts.phones.secondary') }}</li>
							<li><i class="fa fa-envelope-o pr-5 pl-10"></i>{{ config('branding.contacts.emails.primary') }}</li>
						</ul>
					</div>
				</div>

				<div class="col-xs-9 col-sm-6 col-md-4">
					<div id="header-top-second"  class="clearfix">
						<div class="header-top-dropdown text-right">
							<div class="btn-group">
								<a href="{{ config('app.url') }}/register" class="btn btn-default btn-sm"><i class="fa fa-fw fa-newspaper-o"></i> Blog</a>
							</div>

							<div class="btn-group dropdown">
								<a href="{{ config('app.url') }}/register" class="btn btn-default btn-sm"><i class="fa fa-fw fa-truck"></i> Submit a Service Request</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@include('partials.header.main.content')
</div>

@yield('header')