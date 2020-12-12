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
    <header class="header header__news scrollify" data-section="1">
      <div class="wrapper wrapper--column wrapper--center white">
        <div class="row row--header">
          <h1 class="title">Новости</h1>
          <p class="header__text">В этот раздел попадают материалы, которые могут быть полезны либо интресны вам как туристу.</p>
        </div>
        <a class="button" href="#">Подробнее</a>
      </div>
    </header>
    
    <main>
      <section class="news tabs scrollify" data-section="2">
        <div class="wrapper wrapper--column">
          <nav class="news__nav">
            <div class="news__nav-list">
                <li class="title news__rubric active-rubric" data-value="tourist">Туристам</li>
                <li class="title news__rubric" data-value="prof">Профессионалам</li>
            </div>
            <div class="news__arrows"></div>
          </nav>

          <div class="tabs__container">
            <div class="news__tourist tab tab--tourist active-tab">
              <div class="news__slider--tourist">
                <?php
                  $articles = tpl_render('articles.php', ['id' => 2]);
                  print ($articles);
                ?>
              </div>
              
              <a href="#" class="outline-button outline-button--mobile">Смотреть все</a>
            </div>

            <div class="news__prof tab tab--prof">
              <div class="news__slider--prof">
                <?php
                  $articles = tpl_render('articles.php', ['id' => 1]);
                  print ($articles);
                ?>
              </div>
              <a href="#" class="outline-button outline-button--mobile">Смотреть все</a>
            </div>
          </div>  
        </div> 
      </section>

      <section class="calendar scrollify" data-section="3">
        <div class="wrapper wrapper--column">
          <div class="row">
            <h2 class="title">Календарь событий</h2>
          </div>
          <div class="calendar__container">
            <div class="calendar__column-1">
                <p class="calendar__date">
                  <span class="calendar__day"></span>
                  <span class="calendar__month"></span>
                  <span class="calendar__year"></span>
                </p>
                <h2 class="calendar__events-title">События в этот день</h2>
                <ul class="calendar__events-list"></ul>
            </div>
            <div class="calendar__column-2">
                <ul class="calendar__top-list">
                  <li class="calendar__top-item calendar__top-item--prev">
                    <span class="calendar__top-month"></span>
                    <span class="calendar__top-year"></span>
                  </li>
                  <li class="calendar__top-item calendar__top-item--active">
                    <span class="calendar__top-month"></span>
                    <span class="calendar__top-year"></span>
                  </li>
                  <li class="calendar__top-item calendar__top-item--next">
                    <span class="calendar__top-month"></span>
                    <span class="calendar__top-year"></span>
                  </li>
                </ul>
                <p class="calendar__main">
                  <span id="Mon">Пн</span>
                  <span id="Tue">Вт</span>
                  <span id="Wed">Ср</span>
                  <span id="Thu">Чт</span>
                  <span id="Fri">Пт</span>
                  <span id="Sat">Сб</span>
                  <span id="Sun">Вс</span>
                </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/jquery.scrollify.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/index.js"></script>
    <script src="js/calendar.js"></script>
    <script src="js/nav-mobile.js"></script>
    <script src="js/news-slider.js"></script>
    <script type="module" src="js/Tabs.js"></script>
    <script type="module" src="js/news-rubrics.js"></script>
  </body>
</html>