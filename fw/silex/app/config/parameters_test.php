<?php
// fw/silex/app/config/parameters_test.php
require_once __DIR__ . '/parameters.php';

$config['doctrine']['dbal']['db.options'] = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../../../../tests/app.db',
];
