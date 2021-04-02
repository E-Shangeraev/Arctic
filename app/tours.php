<?php
header("Content-type:text/html; charset=UTF-8");
require 'config/config.php';
require 'functions.php'; 
error_reporting(0);

if ($_POST['param']) {
    $param = json_decode($_POST['param']);
    $array = get_more($param->offset, $param->limit);
    echo json_encode($array);
    exit();
}

if ($_POST['events']) {
    $events = json_decode($_POST['events']);
    $events_arr = get_events($events->month, $events->year);
    echo json_encode($events_arr);
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Арктика</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/style.min.css" />
  </head>
  <body>
    <?php 
      require_once 'includes/aside.php';
      require_once 'includes/nav.php';
      require_once 'includes/nav-mobile.php';
    ?>
    <header class="header header__tours scrollify" data-section="1">
      <div class="wrapper wrapper--column wrapper--center white">
        <div class="row row--center h-100">
          <h1 class="title">Туры</h1>
          <p class="header__text">В этом разделе вы можете познакомиться с турами и экскурсионными програмами, которые сделают ваше прибывание в г. Норильск интересным, разнообразным и богатым на эмоции</p>
        </div>
        <a class="button" href="#more">Подробнее</a>
      </div>
    </header>
    
    <main id="more">
      <section class="tours scrollify" data-section="2">
        <div class="wrapper wrapper--column">
          <div class="row row--slider">
            <h2 class="title">Туры</h2>
            <p class="tours__arrows arrows"></p>
          </div>

          <?php
            $articles = tpl_render('tours.php', ['table' => 'tours']);
            print ($articles);
          ?>
        </div>
      </section>

      <section class="excursion scrollify" data-section="3">
        <div class="wrapper wrapper--column">
          <div class="row row--slider">
            <h2 class="title">Экскурсии</h2>
            <p class="excursion__arrows arrows"></p>
          </div>

          <?php
            $articles = tpl_render('tours.php', ['table' => 'excursion']);
            print ($articles);
          ?>
        </div>
      </section>

      <section class="cluster scrollify" data-section="4">
        <div class="wrapper wrapper--column">
          <div class="row">
            <h2 class="title">Туристско-рекреационный кластер «Арктический»</h2>
          </div>
          <div class="cluster__container">
            <div class="col">
              <img src="./img/tours/cluster/1.png" alt="Туристско-рекреационный кластер «Арктический»">
            </div>
            <div class="col">
              <p class="cluster__text">
                Туристско-рекреационный кластер «Арктический» – это новый центр притяжения Арктического туризма, включающий культурно-познавательный, экологический, промышленный, этнический, круизный туризм. Это сильная команда, готовая оказывать качественные туристические услуги на Крайнем Севере, показывать самые интересные локации, дарить невероятно яркие впечатления и самый комфортный отдых не только российским, но и зарубежным туристам.
              </p>
              <button class="more">Узнать больше</button>
            </div>
          </div>
          <a href="#" class="button">Перейти на платформу</a>
        </div>
      </section>
    </main>

    <?php
      $footer = tpl_render('footer.php', ['dataSection' => 5]);
      print ($footer);
    ?>
  </body>
</html>