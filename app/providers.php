<?php

$app->register(new Silex\Provider\TwigServiceProvider(), arrya(
		'twig.path' => __DIR__ . '/../views',
	));