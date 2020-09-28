<?php

$articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 0,4");
$categories = mysqli_query($connection, "SELECT * FROM `article_categories`");

if(!$articles) {
    exit(mysqli_error());
}

$articles_exist = true;
if (mysqli_num_rows($articles) <= 0) {
    echo 'Статьи не найдены';
    $articles_exist = false;
}

if (!$articles_exist) {
    echo 'Статьи не найдены';
}
