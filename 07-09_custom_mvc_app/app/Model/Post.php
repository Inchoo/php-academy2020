<?php

namespace App\Model;

use App\Core\DataObject;
use App\Core\Db;

class Post extends DataObject
{

    public static function all()
    {
        $list = [];
        $db = Db::getInstance();
        $statement = $db->prepare("select * from post");
        $statement->execute();
        foreach ($statement->fetchAll() as $post) {
            $list[] = new Post([
                'id' => $post->id,
                'content' => $post->content
            ]);
        }
        return $list;
    }


    public static function find($id)
    {
        $id = intval($id);
        $db = Db::connect();
        $statement = $db->prepare("select * from post where id = :id");
        $statement->bindValue('id', $id);
        $statement->execute();
        $post = $statement->fetch();
        return new Post($post->id, $post->content);
    }
}