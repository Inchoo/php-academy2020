<?php

namespace App\Controller;

class HomeController
{
    public function indexAction()
    {
        return '<h1>Home</h1>';
    }

    public function aboutAction()
    {
        return '<h1>About</h1>';
    }
}
