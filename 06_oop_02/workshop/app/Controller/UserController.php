<?php

namespace App\Controller;

use App\Model\User;

class UserController
{
    public function viewAction()
    {
        $userId = $_GET['id'] ?? null;

        if ($userId === null) {
            return '';
        }

        $users = $this->getUsers();

        if ($user = $users[$userId] ?? null) {
            return "User {$user->name} is {$user->age} years old.";
        }
    }

    public function listAction()
    {
        $response = '';

        foreach ($this->getUsers() as $user) {
            $response .= "<li>User {$user->name} is {$user->age} years old.</li>";
        }

        if ($response) {
            $response = "<ul>{$response}</ul>";
        }

        return $response;
    }

    protected function getUsers(): array
    {
        return [
            1 => new User(['name' => 'Pero', 'age' => 25]),
            2 => new User(['name' => 'Ivo', 'age' => 30]),
            8 => new User(['name' => 'Marko', 'age' => 35]),
            12 => new User(['name' => 'Janko', 'age' => 40])
        ];
    }
}
