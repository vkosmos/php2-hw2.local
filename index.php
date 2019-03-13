<?php

use App\Models\Article;

require __DIR__ . '/autoload.php';
require __DIR__ . '/lib.php';

$article = new Article();

$article->title = 'Супер новая Тестовая статьЯ';
$article->content = 'Супер новый Текст самой лучшей Тестовая статьЯ';

$article->id = 10;
$article->save();

//$article->delete();
//$article->update();
//$article->insert();