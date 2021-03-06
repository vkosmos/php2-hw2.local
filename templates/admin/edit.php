<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/templates/css/style.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование новости</title>
</head>
<body>

<h1>Админка. Редактирование новости</h1>

<p><a class="button" href="/admin/">На главную админки</a></p>

<form class="form" action="/admin/edit.php" method="post">
    <input name="id" type="hidden" value="<?=$article->id?>">
    <p>
        <label>
            Название новости<br>
            <input class="form__input" type="text" name="title" placeholder="Название" value="<?=$article->title?>">
        </label>
    </p>
    <p>
        <label>
            Текст новости<br>
            <textarea class="form__textarea" name="content" cols="40" rows="5" placeholder="Текст"><?=$article->content?></textarea>
        </label>
    </p>

    <button class="button" type="submit">Изменить</button>

</form>

</body>
</html>