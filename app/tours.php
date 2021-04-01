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
            $articles = tpl_render('tours.php', []);
            print ($articles);
          ?>
        </div>
      </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/jquery.scrollify.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/index.js"></script>
    <script src="js/nav-mobile.js"></script>
    <!-- <script src="js/faq-animation.js"></script> -->
    <script src="js/tours-slider.js"></script>
  </body>
</html>