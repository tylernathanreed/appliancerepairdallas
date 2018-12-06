<div class="footer-content">
	<h2 class="title">Find Us</h2>

	<div class="separator-2"></div>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p>

	@include('partials.social-links', [
		'layout' => 'large'
	])

	<div class="separator-2"></div>

	<ul class="list-icons">
		<li><i class="fa fa-map-marker pr-10 text-default"></i>PO Box 1234 Dallas,<br><span class="pl-26">TX 75252</span></li>
		<li><i class="fa fa-phone pr-10 text-default"></i>{{ config('branding.contacts.phones.primary') }}</li>
		<li><a href="mailto:{{ config('branding.contacts.emails.primary') }}"><i class="fa fa-envelope-o pr-10"></i>{{ config('branding.contacts.emails.primary') }}</a></li>
	</ul>
</div>