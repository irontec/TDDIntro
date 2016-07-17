<?php
// tests/Persistence/Doctrine/CategoryRepositoryTest.php
namespace Tests\TDDIntro\Persistence\Doctrine;

use Doctrine\ORM\EntityRepository;
use TDDIntro\Persistence\Doctrine\Repository\BookRepository;

class BookRepositoryTest extends \PHPUnit_Framework_TestCase
{
    protected function getMockBook()
    {
        $mockBook = $this->createMock('TDDIntro\Domain\Entity\Book');

        $mockBook
            ->expects($this->atLeastOnce())
            ->method('getTitle')
            ->willReturn('Clean Code');

        $mockBook
            ->expects($this->atLeastOnce())
            ->method('getAuthor')
            ->willReturn('Robert C. Martin');

        return $mockBook;
    }

    public function testFindAll()
    {
        $books = [$this->getMockBook()];

        $er = $this->prophesize(EntityRepository::class);
        $er->findAll()->willReturn($books);

        $repository = new BookRepository($er->reveal());
        $fakeBooks = $repository->findAll();

        $this->assertTrue($books[0]->getTitle() === $fakeBooks[0]->getTitle());
        $this->assertTrue($books[0]->getAuthor() === $fakeBooks[0]->getAuthor());
    }
}
