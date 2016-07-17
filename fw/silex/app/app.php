<?php
// fw/silex/app/app.php
require_once __DIR__.'/../../../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__ . '/config/parameters.php';
require_once __DIR__ . '/config/providers.php';
require_once __DIR__ . '/config/services.php';
require_once __DIR__ . '/config/routes.php';

$app['debug'] = true;

return $app;
