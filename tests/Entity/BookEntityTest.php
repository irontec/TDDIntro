<?php
// tests/Entity/BookEntityTest.php
namespace Tests\TDDIntro\Entity;

use TDDIntro\Domain\Entity\Book;

class BookEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testBookEntity()
    {
        $mockCategory = $this->createMock('TDDIntro\Domain\Entity\Category');

        $mockCategory
            ->expects($this->atLeastOnce())
            ->method('getName')
            ->willReturn('programming');

        $book = new Book('Clean code', 'Martin Fowler', new \DateTime(), $mockCategory);

        $this->assertEquals('Clean code', $book->getTitle());
        $this->assertEquals('Martin Fowler', $book->getAuthor());
        $this->asserttrue($book->getDatePublished() instanceof \DateTime);

        $this->assertEquals('programming', $book->getCategory()->getName());
    }
}

