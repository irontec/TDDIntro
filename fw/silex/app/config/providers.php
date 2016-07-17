<?php

$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), $config['twig']);
$app->register(new Silex\Provider\DoctrineServiceProvider(), $config['doctrine']['dbal']);

// 3rd party Providers.
$app->register(new \Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider(), $config['doctrine']['orm']);
$app->register(new \Knp\Provider\ConsoleServiceProvider(), $config['console']);
