<?php

namespace Tests\TDDIntro\Repository;


class BookFixtures
{
    public function getBooks()
    {
        return [
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'datePublished' => new \DateTime(),
                'category' => 'Programming'
            ],
            [
                'title' => 'The Geology of Central Europe: Mesozioc and cenozoic',
                'author' => 'Jorge McCann',
                'datePublished' => new \DateTime(),
                'category' => 'Geology'
            ],
        ];
    }
}
