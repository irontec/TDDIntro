<?php
// fw/silex/app/config/services.php
$app['book.gateway'] = function () use ($app) {
    return $app['orm.em']->getRepository('\TDDIntro\Domain\Entity\Book');
};

$app['book.repository'] = function () use ($app) {
    return new \TDDIntro\Persistence\Doctrine\Repository\BookRepository(
        $app['book.gateway']
    );
};

$app['book.controller'] = function () use ($app) {
    return new \TDDIntro\App\Controller\BookController($app['twig'], $app['book.repository']);
};
