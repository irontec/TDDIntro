<?php
// fw/silex/src/Controller/BookController.php
namespace TDDIntro\App\Controller;

use Symfony\Component\HttpFoundation\Response;

class BookController
{
    protected $view;

    public function __construct(\Twig_Environment $view)
    {
        $this->view = $view;
    }

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

        return new Response($this->view->render('/books/index.html.twig', ['books' => $books], Response::HTTP_OK));
    }
}
