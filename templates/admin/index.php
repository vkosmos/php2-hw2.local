<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/templates/css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>HW2. Список новостей.</title>
</head>
<body>
<h1>Админка. Список новостей</h1>

<p><a class="button" href="/">Выйти из админки</a></p>

<p><a class="button" href="/admin/add.php">Добавить новость</a></p>

<ul class="news-list">

    <?php foreach($data as $item): ?>
        <li class="news-list__item">
            <p class="news-list__text">
                <b><?=$item->title;?></b>
            </p>
            <p class="news-list__text">
                <?=$item->content;?>
            </p>
            <p class="news-list__links">
                <a class="button" href="/admin/edit.php?id=<?=$item->id?>">Редактировать</a>
                <a class="button" href="/admin/delete.php?id=<?=$item->id?>">Удалить</a>
            </p>
        </li>
    <?php endforeach; ?>

</ul>
</body>
</html>