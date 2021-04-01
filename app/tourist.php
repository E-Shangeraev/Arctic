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
              $usefuls = tpl_render('useful.php', []);
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
                <a href="documents/Паспорт безопасности туриста.pdf"
                  target="_blank">
                  <img src="./img/main/documents/2.svg" alt="Паспорт безопасности туриста">
                  <span>Паспорт безопасности туриста</span>
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
                <a href="documents/Унифицированный туристский паспорт муниципального образования город Норильск.pdf"
                  target="_blank">
                  <img src="./img/main/documents/2.svg" 
                      alt="Унифицированный туристский паспорт муниципального образования город Норильск">
                  <span>Унифицированный туристский паспорт муниципального образования город Норильск</span>
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
            <h2 class="title">Маршрут</h2>
          </div>
          <div class="row route__container">
            <p class="col route__text">
              Норильск -  город с развитой инфраструктурой. Отправляясь в путешествие в Норильск, Вы можете быть уверены, что найдете здесь все необходимое, чтобы Ваш тур прошел комфортно и Вам было о чем вспомнить в будущем.
            </p>
            <ul class="route__buttons">
              <li>
                <button class="wow" id="eat" data-wow-offset="500"></button>
                <label for="eat" class="tourist__label wow"><span>Поесть</span></label>
              </li>
              <li>
                <button class="wow" id="housing" data-wow-offset="500"></button>
                <label for="housing" class="tourist__label wow"><span>Жить</span></label>
              </li>
              <li>
                <button class="wow" id="health" data-wow-offset="500"></button>
                <label for="health" class="tourist__label wow"><span>Здоровье</span></label>
              </li>
              <li>
                <button class="wow" id="other" data-wow-offset="500"></button>
                <label for="other" class="tourist__label wow"><span>Прочее</span></label>
              </li>
            </ul>
          </div>
          <img class="route__map" src="./img/tourist/2.png" alt="Карта туриста">
        </div>
      </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/jquery.scrollify.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/index.js"></script>
    <script src="js/nav-mobile.js"></script>
    <script src="js/tourist.js"></script>
    <script src="js/faq-animation.js"></script>
  </body>
</html>