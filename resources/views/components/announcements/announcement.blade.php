<?php $class = 'announcement'; ?>
<?php $bg = $bg ?? 'default'; ?>
<?php $text = $text ?? 'white'; ?>
<?php $dismissable = isset($dismissable) ? $dismissable : true; ?>

@if(in_array($bg, ['default', 'light-gray']))
	<?php $class .= " {$bg}-bg"; ?>
@else
	<?php $class .= " bg-{$bg}"; ?>
@endif

<?php $class .= " text-{$text}"; ?>

<div class="{{ $class }}">
	<div class="container">
		<div class="margin-clear alert alert-dismissible flex items-center" role="alert">

			@if($dismissable)
				<button type="button" class="close order-3 m-0 position-initial" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			@endif

			<div class="flex-1 order-1">
				{!! $slot !!}
			</div>

			@if(isset($button))
				<div class="text-center order-2 mx-3">
					{!! $button !!}
				</div>
			@endif
		</div>
	</div>
</div>