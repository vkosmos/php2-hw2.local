<?php

use App\Models\Article;

require __DIR__ . '/autoload.php';
require __DIR__ . '/lib.php';

$article = new Article();
$article->id = 12;
$article->title = 'Измененная Тестовая статьЯ';
$article->content = 'Измененный Текст самой лучшей Тестовая статьЯ';

//$article->delete();
$article->update();
//$article->insert();