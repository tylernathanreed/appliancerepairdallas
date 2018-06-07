<?php $url = request()->url(); ?>

<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home pr-10"></i><a class="link-dark" href="{{ $url }}">Home</a></li>
			@stack('breadcrumbs')
		</ol>
	</div>
</div>