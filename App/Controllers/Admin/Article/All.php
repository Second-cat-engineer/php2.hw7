<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Admin;
use \App\Models\Article;

class All extends Admin
{
    protected function action()
    {
        $articles = Article::findAll();
        $functions = [
            'id' => function(Article $model) { return $model->getId(); },
            'title' => function(Article $model) { return $model->title; },
            'content' => function(Article $model) { return $model->content; },
            'author_id' => function(Article $model) { return $model->author_id; },
        ];

        $adminDataTable = new \App\Components\AdminDataTable($articles, $functions);
        $adminDataTable->render();

        /*
        $this->view->articles = Article::findAll();
        $this->view->display(__DIR__ . '/../../../templates/admin/adminPanel.php');
         */
    }
}