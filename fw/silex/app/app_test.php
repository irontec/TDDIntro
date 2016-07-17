<?php
// fw/silex/app/app_test.php
require_once __DIR__.'/../../../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__ . '/config/parameters_test.php';
require_once __DIR__ . '/config/providers.php';
require_once __DIR__ . '/config/services_test.php';
require_once __DIR__ . '/config/routes.php';

$app['debug'] = true;

return $app;
