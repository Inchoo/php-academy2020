<?php

declare(strict_types=1);

namespace App\Model\Comment;

use App\Core\DataObjectRepositoryInterface;
use App\Core\Db;

class CommentRepository implements DataObjectRepositoryInterface
{

    public function getList()
    {
        $list = [];
        $db = Db::getInstance();
        $statement = $db->prepare("select id, date, content from post");
        $statement->execute();
        foreach ($statement->fetchAll() as $post) {
            $list[] = new Comment([
                'id' => $post->id,
                'date' => $post->date,
                'content' => $post->content
            ]);
        }
        return $list;
    }
}
