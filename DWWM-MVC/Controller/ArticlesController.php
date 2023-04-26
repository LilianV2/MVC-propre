<?php

namespace App\Controller;

use App\Model\Manager\ArticleManager;

class ArticlesController extends AbstractController
{
    /**
     * Permet le listing de tous les articles.
     * @return void
     */
    public function index()
    {
        $manager = new ArticleManager();
        $this->display('articles/listing', [
            'articles' => $manager->getAll()
        ]);
    }
}