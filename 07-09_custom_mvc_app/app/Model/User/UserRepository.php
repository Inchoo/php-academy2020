<?php

declare(strict_types=1);

namespace App\Model\User;

use App\Core\DataObjectRepositoryInterface;
use App\Core\Db;

class UserRepository implements DataObjectRepositoryInterface
{

    public function getList()
    {
        $list = [];
        $db = Db::getInstance();
        $statement = $db->prepare("select id, firstname, lastname, email from user");
        $statement->execute();
        foreach ($statement->fetchAll() as $user) {
            $list[] = new User([
                'id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'email' => $user->email
            ]);
        }
        return $list;
    }

    public function userEmailExists($email)
    {
        $db = Db::getInstance();
        $statement = $db->prepare('select id from user where email = (?)', [$email]);
        // If there are more parameters execute will take them in order in array
        $statement->execute([
            $email
        ]);
        $fetched = $statement->rowCount();
        return (bool)$fetched;
    }

    /**
     * Fetch user from database based on email
     *
     * @param $email
     * @return User|false
     */
    public function getUserByEmail($email)
    {
        $user = false;
        $db = Db::getInstance();
        $statement = $db->prepare('select * from user where email = (?)', [$email]);
        // If there are more parameters execute will take them in order in array
        $statement->execute([
            $email
        ]);
        foreach ($statement->fetchAll() as $user) {
            $user = new User([
                'id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'email' => $user->email,
                'pass' => $user->pass
            ]);
        }
        return $user;
    }
}
