<!doctype html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="card mt-4">
        <h1 class="card-header">Create PROD</h1>
        <form action="second.php" class="card-body" method="post">
            <input class="form-group form-control" type="text" name="name" placeholder="Название продукта">
            <input class="form-group form-control" type="text" name="description" placeholder="Описание">
            <input class="form-group form-control" type="text" name="photo" placeholder="Фотография">
            <input class="form-group form-control" type="text" name="price" placeholder="Цена">
            <select name="category_id">
              <?php
              require_once 'db.php';
              $stmt = $pdo->query('SELECT * FROM `category`');
              while ($row = $stmt->fetch())
              echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
              ?>
            </select>
            <a href="/create_category.php" class="btn btn-primary">Добавить категорию</a>
            <br>
            <br>
            <input class="btn btn-primary" type="submit" value="Подать заявку">
        </form>
            <a href="/index.php" class="btn btn-info">Список продуктов</a>
        </div>
        </div>
</body>
</html>
