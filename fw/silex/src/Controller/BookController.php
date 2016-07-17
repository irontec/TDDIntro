<?php
// fw/silex/src/Controller/BookController.php
namespace TDDIntro\App\Controller;

use Symfony\Component\HttpFoundation\Response;
use TDDIntro\Domain\Repository\BookRepositoryInterface;

class BookController
{
    protected $view;

    protected $repository;

    public function __construct(\Twig_Environment $view, BookRepositoryInterface $repository)
    {
        $this->view = $view;
        $this->repository = $repository;
    }

    public function indexAction()
    {
        $books = $this->repository->findAll();

        return new Response($this->view->render('/books/index.html.twig', ['books' => $books], Response::HTTP_OK));
    }
}
