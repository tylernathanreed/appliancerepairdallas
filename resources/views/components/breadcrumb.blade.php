<?php $url = request()->url(); ?>
<?php $link = $link ?? $url; ?>

<li class="breadcrumb-item{{ $url == $link ? ' active' : '' }}">
	<a href="{{ $link }}">
		{{ $slot }}
	</a>
</li>