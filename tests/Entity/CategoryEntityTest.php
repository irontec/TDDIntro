<?php

namespace Tests\TDDIntro\Entity;

use TDDIntro\Domain\Entity\Category;

class CategoryEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testCategoryEntity()
    {
        $book = new Category('programming');

        $this->assertEquals('programming', $book->getName());
    }
}
