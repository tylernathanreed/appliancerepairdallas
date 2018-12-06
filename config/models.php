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
	],

	'testimonials' => [
		'records' => [
			[
	            'title' => 'They came out fast!',
	            'name' => 'Jonathan',
	            'info2' => 'Farmers Branch',
	            'body' => 'When my dryer went out, I called E&M Home Service. They came out fast, fixed it, and it\'s still working. They did a great job, I was very happy with them. If you have any problems with your appliances, call them!',
	            'image' => 'media/images/testimonial-1.jpg',
	            'video' => 'https://www.youtube.com/watch?v=kwiEVbDZ6kU'
			],
			[
	            'title' => 'They\'re very reasonable!',
	            'name' => 'Randall',
	            'info2' => 'Farmers Branch',
	            'body' => 'I\'ve used E&M Home Service three times at my home. They\'ve installed a garbage disposal and a dishwasher, and they\'ve worked on my washing machine. Their rates are very reasonable, and I appreciate all they\'ve done. If you need help, give them a call!',
	            'image' => 'media/images/testimonial-2.jpg',
	            'video' => 'https://www.youtube.com/watch?v=6Fim0tTFaB8'
			],
			[
	            'title' => 'They do a great job!',
	            'name' => 'Edna',
	            'info2' => 'Farmers Branch',
	            'body' => 'I appreciate E&M Home Service for coming out and fixing our washer. They did a real good job!',
	            'image' => 'media/images/testimonial-3.jpg',
	            'video' => 'https://www.youtube.com/watch?v=WA2HoyMJqcc'
			],
			[
	            'title' => 'They knew the problem right away!',
	            // 'name' => 'Unknown',
	            // 'info2' => 'Farmers Branch',
	            'body' => 'Thanks for coming out! They did a very good job with my refrigerator. They knew right away what was wrong. They fixed it, and gave me a six month warranty!',
	            'image' => 'media/images/testimonial-4.jpg',
	            'video' => 'https://www.youtube.com/watch?v=o8Kg6Ikdbds'
			],
			[
	            'title' => 'We\'re always satisfied!',
	            // 'name' => 'Unknown',
	            // 'info2' => 'Farmers Branch',
	            'body' => 'They\'ve been out here several times, and every time we\'re well satisfied.',
	            'image' => 'media/images/testimonial-5.jpg',
	            'video' => 'https://www.youtube.com/watch?v=eIkh92uml5I'
			]
		]
	]

];
