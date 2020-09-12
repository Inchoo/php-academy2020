<?php

namespace App\Controller;

use App\Core\View;
use App\Model\Post;

class HomeController
{
    public function indexAction()
    {
        $view = new View();
        $posts = Post::all();

        $view->render('index', [
            "posts" => $posts
        ]);
    }
}
