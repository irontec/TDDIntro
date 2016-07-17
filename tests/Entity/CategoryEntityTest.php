<?php

namespace Tests\TDDIntro\Entity;

use TDDIntro\Domain\Entity\Category;

class CategoryEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testCategoryEntity()
    {
        $category = new Category(1, 'programming');

        $this->assertEquals(1, $category->getId());
        $this->assertEquals('programming', $category->getName());
    }
}
