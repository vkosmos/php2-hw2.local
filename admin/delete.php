<?php

include __DIR__ . '/../autoload.php';

if (isset($_GET['id'])){
    $article = \App\Models\Article::findById($_GET['id']);
    $article->delete();
    header('Location: /admin/');
}
