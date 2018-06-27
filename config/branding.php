<?php

return [

	'contacts' => [

		'addresses' => [

			'primary' => [
				'line_1' => 'PO Box 1234',
				'line_2' => null,
				'city' => 'Dallas',
				'state' => 'TX',
				'zip' => '75252'
			]

		],

		'emails' => [
			'primary' => 'service@eandmhomeservice.com'
		],

		'phones' => [

			'primary' => '(972) 489-0427',
			'secondary' => '(817) 566-4844',
			'tertiary' => '(214) 221-3931'

		]

	],

	'social-links' => [

		'default' => 'small',

		'layouts' => [

			'small' => [
				'facebook',
				'skype',
				'twitter',
				'googleplus',
				'youtube',
				'linkedin',
				'xing'
			],

			'large' => [
				'facebook',
				'twitter',
				'googleplus',
				'youtube',
				'linkedin'
			]

		],

		'sites' => [

			'facebook' => [
				'link' => 'http://www.facebook.com',
				'icon' => 'fa fa-facebook'
			],

			'skype' => [
				'link' => 'https://www.skype.com',
				'icon' => 'fa fa-skype'
			],

			'twitter' => [
				'link' => 'http://www.twitter.com',
				'icon' => 'fa fa-twitter'
			],

			'googleplus' => [
				'link' => 'http://plus.google.com',
				'icon' => 'fa fa-google-plus'
			],

			'youtube' => [
				'link' => 'http://youtube.com',
				'icon' => 'fa fa-youtube-play'
			],

			'linkedin' => [
				'link' => 'http://www.linkedin.com',
				'icon' => 'fa fa-linkedin'
			],

			'xing' => [
				'link' => 'http://www.xing.com',
				'icon' => 'fa fa-xing'
			],

			'flickr' => [
				'link' => 'https://www.flickr.com/',
				'icon' => 'fa fa-flickr'
			]

		]

	],

	'stats' => [

		0 => [
			'label' => 'Repairs',
			'count' => 1525,
			'icon' => '<i class="text-default fa fa-wrench"></i>'
		],

		1 => [
			'label' => 'Installations',
			'count' => 1225,
			'icon' => '<i class="text-default fa fa-plus"></i>'
		],

		2 => [
			'label' => 'Service Calls',
			'count' => 6532,
			'icon' => '<i class="text-default fa fa-phone"></i>'
		],

		3 => [
			'label' => 'Customers',
			'count' => 15002,
			'icon' => '<i class="text-default fa fa-users"></i>'
		]

	]

];