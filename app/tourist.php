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
    <header class="header header__tourist scrollify" data-section="1">
      <div class="wrapper wrapper--column wrapper--center white">
        <div class="row row--center h-100">
          <h1 class="title">Туристу</h1>
          <p class="header__text">Природа Норильска весьма разнообразна, здесь можно увидеть как заснеженные склоны так и яркие севрные цветы</p>
        </div>
        <a class="button" href="#more">Подробнее</a>
      </div>
    </header>
    
    <main id="more">
        <section class="useful scrollify" data-section="2">
          <div class="wrapper wrapper--column">
            <h2 class="useful__title title">Полезное</h2>
            <p class="useful__description">
            В этом разделе можно найти всю необходимую информацию для туриста
            </p>
            <?php
              $usefuls = tpl_render('useful.php', ['categories' => [1, 2, 3, 4, 5]]);
              print ($usefuls);
            ?>
          </div>
        </section>

      <section class="documents scrollify" data-section="3">
        <div class="wrapper wrapper--column white">
            <div class="row row--center">
              <h2 class="documents__title title">В помощь туристам</h2>
            </div>
            <ul class="documents__list">
              <li class="documents__item">
                <a href="documents/Безопасность туриста.docx"
                  target="_blank">
                  <img src="./img/main/documents/2.svg" alt="Безопасность туриста">
                  <span>Безопасность туриста</span>
                </a>
              </li>
              <li class="documents__item">
                <a href="documents/Памятка о правах потребителей экскурсионных услуг.docx"
                  target="_blank">
                  <img src="./img/main/documents/2.svg" 
                      alt="Памятка о правах потребителей экскурсионных услуг">
                  <span>Памятка о правах потребителей экскурсионных услуг</span>
                </a>
              </li>
              <li class="documents__item">
                <a href="documents/Памятка туристу по безопасности путешествий на территории Красноярского края.pdf"
                  target="_blank">
                  <img src="./img/main/documents/2.svg" 
                      alt="Памятка туристу по безопасности путешествий на территории Красноярского края">
                  <span>Памятка туристу по безопасности путешествий на территории Красноярского края</span>
                </a>
              </li>
              <li class="documents__item">
                <a href="documents/Порядок оформления разрешения на въезд.docx"
                  target="_blank">
                  <img src="./img/main/documents/2.svg" 
                      alt="Порядок оформления разрешения на въезд">
                  <span>Порядок оформления разрешения на въезд</span>
                </a>
              </li>
            </ul>
            <a class="documents__archive" href="documents/Документы.zip">Скачать одним архивом</a>
          <a href="#" 
            class="documents__outline-button outline-button outline-button--mobile outline-button--white">
            Подробнее
          </a>
        </div> 
      </section>

      <section class="route scrollify" data-section="4">
        <div class="wrapper wrapper--column">
          <div class="row">
            <h2 class="title">Карта города</h2>
          </div>
          <p class="route__text">
            Норильск - город с развитой инфраструктурой. Отправляясь в путешествие в Норильск, Вы можете быть уверены, что найдете здесь все необходимое, чтобы Ваш тур прошел комфортно и Вам было о чем вспомнить в будущем.
          </p>
          <iframe class="route__map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A505ba0646d603551f706003ad1da2785f12e57b6545b622dae307e9b6d4c1035&amp;source=constructor" width="500" height="600" frameborder="0"></iframe>
          
        </div>
      </section>
    </main>

    <?php
      $footer = tpl_render('footer.php', ['dataSection' => 5]);
      print ($footer);
    ?>
  </body>
</html>