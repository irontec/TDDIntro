<?php
// fw/silex/app/config/services.php
$app['book.controller'] = function () use ($app) {
    return new \TDDIntro\App\Controller\BookController($app['twig']);
};
