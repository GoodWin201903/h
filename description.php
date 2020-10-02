!doctype html>
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
        <h1 class="card-header">Книга</h1>
    		<?php
    		require_once 'db.php';
            $id=$_GET['id'];
            $stmt = $pdo->query('SELECT * FROM `book` INNER JOIN genre ON book.genre_id = genre.id WHERE book.id='.$id);
            $row = $stmt->fetch();
                echo '<div class="row">';
                	echo '<div class="col-4">
                	   <img src="'.$row['photo'].'" width="340" height="500">
                	</div>';
                    echo '<div class="col-8">';
                        echo '<div class="title">'. $row['name'] .'
                        <a href="/index.php" class="btn btn-primary" id="btn">Вернуться назад</a></div>';
                        echo '<hr><div class="des">'. $row['description'] .'</div></hr>';
                        echo '<hr><div class="gen">' . $row['genre'] . '
                        <a href="'. $row['file'] .'" class="btn btn-primary" id="btn" download>Скачать</a></div></hr>';
                        echo '<div>'. $row['date'] .'</div>';
                    echo '</div>';
                echo '</div>';
    	    ?>
    </div>
</body>
</html>
