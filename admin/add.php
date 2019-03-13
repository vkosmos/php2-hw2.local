<?php

include __DIR__ . '/../autoload.php';

if ('POST' === $_SERVER['REQUEST_METHOD']){

    $article = new \App\Models\Article();
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();

    header('Location: ' . '/admin/');
}

include __DIR__ . '/../templates/admin/add.php';
