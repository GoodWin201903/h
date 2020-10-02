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
<p>Редактирование элементов:</p>
<table border='1'>
    <tr>
        <td><b>id</b></td>
        <td><b>Название элемента</b></td>

    </tr>
    <?php
    require_once 'db.php';
    $stmt = $pdo->query('SELECT * FROM `products`');
    while ($row = $stmt->fetch()) {
        echo '<tr><td>'.$row['id'].'</td>'.
            '<td>'.$row['name'].'</td>'.
            '<td><a href= "/?edit_id='.$row['id'].'">Редактировать</a></td>';
    }
    ?>
</table>
<br>
<?php
if (isset($_GET['edit_id'])) { //Если передана переменная на редактирование
    //Достаем запсись из БД
    $stmt = $pdo->query("SELECT `id`, `name` FROM `categories` WHERE `id`=".$_GET['edit_id'], $link); //запрос к БД
    $result = mysql_fetch_array($sql); //получение самой записи

    //Отрисовываем форму. Обратите внимание, что фигурную скобку условия if мы закроем только после формы.
    //Т.е. если переменная edit id не передана, то форма не отрисуется
    //И не важно, что посреди цыкла мы закрываем тег PHP , его работа продолжается, пока скобка не закроется
    ?>
    <table>
        <form action="" method="post">
            <tr>
                <td>Категория:</td>
                <td><input type="text" name="name" value="<?php echo ($result['name']); ?>"></td>
                <td><input type="text" name="name" value="<?php echo ($result['description']); ?>"></td>
                <td><input type="text" name="name" value="<?php echo ($result['price']); ?>"></td>
                <td><input type="text" name="name" value="<?php echo ($result['category_id']); ?>"></td>
                <td><input type="text" name="name" value="<?php echo ($result['photo']); ?>"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Сохранить"></td>
            </tr>
        </form>
    </table>
    <?php
}
?>
</body>
</html>