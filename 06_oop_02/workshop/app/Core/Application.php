<?php

namespace App\Core;

class Application
{
    protected $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function run(): string
    {
        return $this->router->match($_SERVER['PATH_INFO'] ?? '/');
    }
}
