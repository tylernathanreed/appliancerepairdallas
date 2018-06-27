<?php $id = $id ?? ('accordion-' . microtime(true)); ?>

<div id="{{ $id }}" class="collapse-style-1" role="tablist" aria-multiselectable="true">
	@foreach($items as $key => $item)

		<?php $collapsed = !$loop->first; ?>

		<div class="card">
			<div class="card-header" role="tab" id="heading-{{ $key }}">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#{{ $id }}" href="#collapse-{{ $key }}"{{ $collapsed ? ' class=collapsed' : '' }} aria-expanded="true" aria-controls="collapse-{{ $key }}">
						{!! $item['heading'] !!}
					</a>
				</h4>
			</div>

			<div id="collapse-{{ $key }}" class="{{ $collapsed ? 'collapse' : 'collapse show' }}" role="tabpanel" aria-labelledby="heading-{{ $key }}">
				<div class="card-block">
					{!! $item['content'] !!}
				</div>
			</div>
		</div>
	@endforeach
</div>