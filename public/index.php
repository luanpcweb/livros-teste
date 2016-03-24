<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

include __DIR__ . '/../app/providers.php';
include __DIR__ . '/../app/routes.php';

$app->run();