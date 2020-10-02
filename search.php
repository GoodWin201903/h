<!doctype html>
<html lang="ru" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="card-header"><a href="/index.php">Products</a></h1>
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Фото</th>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Категория</th>
            <th></th>
            <th></th>
        </tr>

<?php
require_once 'db.php';
$stmt = $pdo->prepare("SELECT * FROM `products` WHERE `name` LIKE :name");
$stmt->execute(array(
    'name' => '%'.$_GET['search'].'%'
));
while ($row = $stmt->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td><img src="'.$row['photo'].'" width="200" height="300">';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['description'] . '</td>';
    echo '<td>' . $row['price'] . '</td>';
    echo '<td>' . $row['category_id'] . '</td>';
    echo "<td><a href='?del_id={$row['id']}'>Удалить</a></td>";
    echo '<td><a class="btn btn-danger" href="/edit.php">Редактировать</a></td>';
    echo '</tr>';
}
?>
        <form action="/search.php" method="get">
            <p>Поиск товара:
                <input type="text" name="search">
                <input type="submit" value="Поиск">
            </p>
            <hr>
        </form>
        </thead>
    </table>
    <a href="create_prod.php" type="button" id="btn">create Prod</a>
</div>
</body>
</html>
