<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';
require __DIR__ . '/../lib.php';

$data = Article::findAll();
include __DIR__ . '/../templates/admin/index.php';