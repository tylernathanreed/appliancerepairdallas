<?php

return [

	'pricing-tables' => [
		'records' => [
			[
	            'heading' => 'Service Call',
	            'price' => '<span>$59.90</span>/visit',
	            'width' => 4,
	            'items' => [
	                'Only applied if appliance is not repaired',
	                'Additional $10 for dishwashers and freezers',
	                '15 minute reminder call',
	                popover('More things to talk about', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'right'),
	                'Senior citizen discount',
	            ],
	            'action' => [
	                'icon' => 'fa fa-phone',
	                'text' => 'Call now'
	            ]
			],
			[
	            'heading' => 'Standard',
	            'best' => true,
	            'price' => '<span>$79.90</span>/repair',
	            'width' => 4,
	            'items' => [
	                'No service call fee',
	                'Most common diagnostic',
	                popover('60 day guarantee', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'right'),
	                'Flat rate, not hourly rate',
	                'Senior citizen discount'
	            ],
	            'action' => [
	                'icon' => 'fa fa-phone',
	                'text' => 'Call now'
	            ]
			],
			[
	            'heading' => 'Premium',
	            'price' => '<span>$90.90</span>/repair',
	            'width' => 4,
	            'items' => [
	                'No service call fee',
	                'Occasional diagnostic',
	                popover('60 day guarantee', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'right'),
	                'Flat rate, not hourly rate',
	                'Senior citizen discount'
	            ],
	            'action' => [
	                'icon' => 'fa fa-phone',
	                'text' => 'Call now'
	            ]
			]
		]
	]

];