<?php
$id = $_GET['id'];


require_once 'db.php';
$stmt = $pdo->query("DELETE FROM `author_book` WHERE `author_book`.`book_id` =".$id);
$stmt = $pdo->query("DELETE FROM `book` WHERE `id` = ".$id);

header('Location: index.php');