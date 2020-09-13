<?php

namespace App\Controller;

use App\Core\View;
use App\Model\Post;

class HomeController
{

    /**
     * @var Post\PostRepository
     */
    private $postRepository;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->postRepository = new Post\PostRepository();
    }

    public function indexAction()
    {
        $view = new View();
        $posts = $this->postRepository->getList();

        $view->render('index', [
            "posts" => $posts
        ]);
    }
}
