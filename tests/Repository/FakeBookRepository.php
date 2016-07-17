<?php

namespace Tests\TDDIntro\Repository;

use TDDIntro\Domain\Repository\BookRepositoryInterface;

class FakeBookRepository implements BookRepositoryInterface
{

    public function findAll()
    {
        return (new BookFixtures())->getBooks();
    }

    public function findBy(array $criteria = array(), array $orderBy = null, $limit = null, $offset = null)
    {
        // TODO: Implement findBy() method.
    }
}
