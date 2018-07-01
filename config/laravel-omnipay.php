<?php

return [

	// The default gateway to use
	'default' => 'paypal',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
				'solutionType'   => '',
				'landingPage'    => '',
				'headerImageUrl' => ''
			]
		],
        'unionpay' => [
            'driver'  => 'UnionPay_Express',
            'options' => [
                'merId' => '777290058120462',
                'certPath' => '',
                'certPassword' => '000000',
                'certDir' => '/var/www/html/shop/app/storage/unionpay/certs',
                'returnUrl' => 'unionpay/result',
                'notifyUrl' => 'unionpay/notify'
            ]
        ]
	]

];