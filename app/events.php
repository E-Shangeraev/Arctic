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
    <header class="header header__events scrollify" data-section="1">
      <div class="wrapper wrapper--column wrapper--center white">
        <div class="row row--center h-100">
          <h1 class="title">События</h1>
          <p class="header__text">В этом разделе Вы сможете найти все актуальные события, которые сделают ваше времяприпровождения в г. Норильск еще увлекательнее</p>
        </div>
        <a class="button" href="#more">Подробнее</a>
      </div>
    </header>
      
    <main id="more"> 
      <section class="events scrollify" data-section="2">
        <div class="wrapper wrapper--column">
          <div class="row">
            <h2 class="title">Ближайшие события</h2>
            <p class="events__arrows"></p>
          </div>
            <?php
              $events = tpl_render('events.php', ['id' => 2]);
              print ($events);
            ?>
        </div> 
      </section>
    </main>

    <?php
      $footer = tpl_render('footer.php', ['dataSection' => 3]);
      print ($footer);
    ?>
  </body>
</html>