<?php

declare(strict_types=1);

namespace App\Model\User;

use App\Core\Db;

class UserResource
{

    public function insertUser($data)
    {
        $db = Db::getInstance();
        $statement = $db->prepare(
            'INSERT into user (firstname, lastname, email, pass) values (:firstname, :lastname, :email, :pass)'
        );
        $statement->bindValue('firstname', $data['firstname']);
        $statement->bindValue('lastname', $data['lastname']);
        $statement->bindValue('email', $data['email']);
        $statement->bindValue('pass', password_hash($data['pass'], PASSWORD_DEFAULT));

        $result = $statement->execute();
        return $result;
    }
}
