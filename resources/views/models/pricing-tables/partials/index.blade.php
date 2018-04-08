<?php $style = $style ?? 'style-3'; ?>

@component('components.pricing-tables.' . $style)

    <?php $width = floor(12 / count($pricingTables)); ?>

    @foreach($pricingTables as $pricingTable)

        @include('components.pricing-table.' . $style, [
            'heading' => $pricingTable->heading,
            'price' => $pricingTable->price,
            'best' => $pricingTable->best,
            'width' => $width,
            'items' => $pricingTable->items,
            'action' => $pricingTable->action
        ])

    @endforeach

@endcomponent