<?php
// fw/silex/src/Controller/BookController.php
namespace TDDIntro\App\Controller;

use Symfony\Component\HttpFoundation\Response;

class BookController
{
    public function indexAction()
    {
        $books = [
            [
                'name' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'published_date' => new \DateTime(),
                'categories' => ['Programming']],
            [
                'name' => 'Pro PHP Refatoring',
                'author' => 'Iacopo Romei',
                'published_date' => new \DateTime(),
                'categories' => ['Programming']
            ],
        ];

        $content = '<section class="books">'
            . '<h2>Books</h2>';
        foreach ($books as $book) {
            $content .= '<div class="book">'
                . '<div class="name">' . $book['name'] . '</div>'
                . '<div class="author">' . $book['author'] . '</div>'
                . '<div class="published-date">' . $book['published_date']->format('Y-m-d') . '</div>'
                . '<div class"categories">';
            foreach ($book['categories'] as $category) {
                $content .= '<div class="category">' . $category . '</div>';
            }
            $content .= '</div>'
                . '</div>'
                . '<hr>';
        }
        $content .= '</section>';

        return new Response($content, 200);
    }
}
