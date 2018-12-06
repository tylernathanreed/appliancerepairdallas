<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer id="footer" class="clearfix dark light">

	<!-- .footer start -->
	<!-- ================ -->
	<div class="footer">
		<div class="container">
			<div class="footer-inner">
				<div class="row">
					<div class="col-lg-3">
						@include('partials.footer.about')
					</div>

					<div class="col-lg-3">
						@include('partials.footer.latest')
					</div>

					<div class="col-lg-3">
						@include('partials.footer.quick-info')
					</div>

					<div class="col-lg-3">
						@include('partials.footer.contact')
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .footer end -->

	@include('partials.copyright')

</footer>
<!-- footer end -->