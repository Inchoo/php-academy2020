<?php

declare(strict_types=1);

namespace App\Model\Comment;

use App\Core\Db;

class CommentResource
{

    public function insertComment($data)
    {
        $db = Db::getInstance();
        $statement = $db->prepare(
            'INSERT into comment (user, post, content, date) values (:user, :post, :content, :date)'
        );
        $statement->bindValue('user', $data['user']);
        $statement->bindValue('post', $data['post']);
        $statement->bindValue('content', $data['content']);
        $statement->bindValue('date', $data['date']);

        $result = $statement->execute();
        return $result;
    }
}
