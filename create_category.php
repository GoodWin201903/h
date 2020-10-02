<!doctype html>
<html lang="ru" dir="ltr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
 <div class="container">
    <div class="card mt-4">
            <h1 class="card-header">Категория товара</h1>
        <form action="/second_category.php" class="card-body" method="post">
            <input class="form-group form-control" type="text" name="name" placeholder="Добавить категории">
            </select>
            <input class="btn btn-primary" type="submit" value="Добавить категорию">
        </form>
        <a href="/create_prod.php" class="btn btn-info">Вернуться к форме</a>
    </div>
</div>
