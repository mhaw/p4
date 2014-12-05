<?php

return array(
	'table' => 'oauth_identities',
	'providers' => array(
		'facebook' => array(
			'id' => '657678604345149',
			'secret' => '66e23d77397be405a95bbd8ff67d9d20',
			'redirect' => URL::to('facebook/login'),
			'scope' => array(),
		),
		'google' => array(
			'id' => '12345678',
			'secret' => 'y0ur53cr374ppk3y',
			'redirect' => URL::to('your/google/redirect'),
			'scope' => array(),
		),
		'github' => array(
			'id' => '12345678',
			'secret' => 'y0ur53cr374ppk3y',
			'redirect' => URL::to('your/github/redirect'),
			'scope' => array(),
		),
		'linkedin' => array(
			'id' => '12345678',
			'secret' => 'y0ur53cr374ppk3y',
			'redirect' => URL::to('your/linkedin/redirect'),
			'scope' => array(),
		),
		'instagram' => array(
			'id' => '12345678',
			'secret' => 'y0ur53cr374ppk3y',
			'redirect' => URL::to('your/instagram/redirect'),
			'scope' => array(),
		),
	)
);
