<?php

namespace App\Controller;

use App\Core\Session;
use App\Core\View;
use App\Model\Post;

class HomeController
{

    /**
     * @var Post\PostRepository
     */
    private $postRepository;

    /**
     * @var Session
     */
    private $session;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->postRepository = new Post\PostRepository();
        $this->session = Session::getInstance();
    }

    public function indexAction()
    {
        $view = new View();
        $posts = $this->postRepository->getList();

        $data = [
            'posts' => $posts,
        ];

        $user = $this->session->getUser();
        if ($user && $user->getFirstname()) {
            $data['firstname'] = $user->getFirstname();
        }
        $view->render('index', $data);
    }
}
