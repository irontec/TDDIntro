<?php

require_once __DIR__ . '/services.php';

$app['book.repository'] = function () {
    return new \Tests\TDDIntro\Repository\FakeBookRepository();
};
