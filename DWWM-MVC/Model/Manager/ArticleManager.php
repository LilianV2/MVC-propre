<?php

namespace App\Model\Manager;

use App\Model\DB;
use App\Model\Entity\Article;
use App\Model\Entity\User;

class ArticleManager
{
    public function getAll(): array
    {
        $articles = [];
        $sql = "SELECT * FROM article";
        $request = DB::getInstance()->query($sql);
        if($request) {
            $data = $request->fetchAll();
            foreach ($data as $articleData) {
                $author = (new UserManager())->getUserById($articleData['author']);
                $articles[] = (new Article())
                    ->setId($articleData['id'])
                    ->setContent($articleData['content'])
                    ->setTitle($articleData['title'])
                    ->setAuthor($author)
                ;
            }
        }

        return $articles;
    }
}
