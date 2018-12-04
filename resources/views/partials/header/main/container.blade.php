<div class="header-container">

	@include('partials.announcements')

	<div class="header-top dark">
		<div class="container">
			<div class="row">
				<div class="col-3 col-sm-6 col-md-8">
					<div class="header-top-first clearfix">
						<ul class="list-inline hidden-sm hidden-xs">
							<li class="list-inline-item">
								<i class="fa fa-map-marker pr-1 pl-10"></i>PO Box 1234 Dallas, TX 75252
							</li>

							<li class="list-inline-item">
								<i class="fa fa-phone pr-1 pl-10"></i>{{ config('branding.contacts.phones.primary') }} or {{ config('branding.contacts.phones.secondary') }}
							</li>

							<li class="list-inline-item">
								<i class="fa fa-envelope-o pr-1 pl-10"></i>{{ config('branding.contacts.emails.primary') }}
							</li>
						</ul>
					</div>
				</div>

				<div class="col-9 col-sm-6 col-md-4">
					<div id="header-top-second"  class="clearfix">
						<div class="header-top-dropdown text-right">
							<div class="btn-group dropdown">
								<a href="{{ route('pages.contact.style-1') }}" class="btn btn-default btn-sm"><i class="fa fa-fw fa-truck"></i> Submit a Service Request</a>
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