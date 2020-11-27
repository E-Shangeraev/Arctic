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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="wrapper white">
        <?php require './includes/aside.php' ?>

        <div class="header__content content">
          <?php require './includes/nav.php' ?>

          <footer class="slider__footer">
            <a class="button" href="#">Подробнее</a>
            <p class="slider__count">
              <span class="slider__count--current">01</span>
              <span>05</span>
            </p>
            <p class="slider__arrows"></p>
          </footer>
        </div>
      </div>

      <section class="slider white">
        <div class="slider__block">
          <div class="slide" data-index="1">
            <img src="img/main/main-header/1.jpg" alt="" class="slide__img" />
            <p class="slide__floating">край горячих сердец</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">край горячих сердец</h2>
            </div>
          </div>
          <div class="slide" data-index="2">
            <img src="img/main/main-header/2.jpg" alt="" class="slide__img" />
            <p class="slide__floating">северное сияние</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">северное сияние</h2>
            </div>
          </div>
          <div class="slide" data-index="3">
            <img src="img/main/main-header/3.jpg" alt="" class="slide__img" />
            <p class="slide__floating">сильные духом люди</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">сильные духом люди</h2>
            </div>
          </div>
          <div class="slide" data-index="4">
            <img src="img/main/main-header/4.jpg" alt="" class="slide__img" />
            <p class="slide__floating">самый северный город</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">самый северный город</h2>
            </div>
          </div>
          <div class="slide" data-index="5">
            <img src="img/main/main-header/5.jpg" alt="" class="slide__img" />
            <p class="slide__floating">культурный шок</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">культурный шок</h2>
            </div>
          </div>
        </div>
      </section>
    </header>

    <main>
      <section class="limit">
        <div class="wrapper black">
          <?php require './includes/aside-black.php' ?>

          <div class="content">
            <?php require './includes/nav-black.php' ?>

            <div class="content__container">
              <div class="limit__col col-1">
                <h2 class="limit__title title">
                  <span>Норильск- это </span>
                  <span>возможность проверить</span>
                  <span>свои пределы</span>
                </h2>
                <p class="limit__text">
                  Далеко не каждый сможет легко перенести суровый арктический климат, который царит в этих краях зимой.<br><br>
                  Поэтому с турами в Норильск для Вас открывается уникальная возможность испытать себя и познакомиться с людьми, которые по-настоящему сильны духом.<br><br>
                  Они живут в этих условиях десятилетиями и смогут показать Вам места от красоты которых захватывает дух.
                </p>
                <a href="#" class="button">О Норильске</a>
              </div>
              <div class="limit__col col-2">
                <img class="limit__img" src="img/main/limit/1.jpg" alt="Фотография норильчан">
                <img class="limit__img" src="img/main/limit/2.png" alt="Фотография норильчан">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="calendar">
        <div class="wrapper">
          <?php require './includes/aside-black.php' ?>

          <div class="content">
            <?php require './includes/nav-black.php' ?>
            
            <h2 class="calendar__title title">Календарь событий</h2>
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
        </div>
      </section>

      <section class="attractions">
        <div class="wrapper">
          <?php require './includes/aside-black.php' ?>

          <div class="content">
            <?php require './includes/nav-black.php' ?>
            
            <div class="attractions__container black">
              <div class="row">
                <h2 class="attractions__title title">Достопримечательности</h2>
                <a href="#" class="outline-button">Смотреть все</a>
              </div>
              <div class="attractions__cards">
                <div class="attractions__card">
                  <img class="attractions__img" src="./img/main/attractions/1.jpg" alt="Плато Путорана">
                  <h4 class="attractions__card-title">Плато Путорана</h4>
                  <p class="attractions__desc">Неизвестная загадочная страна. Хрустальные воды рек, мириады водопадов, падающие со склонов, “столовых” гор, яркие краски северных цветов на фоне камней и снега.</p>
                  <a href="#" class="attractions__button button">Узнать больше</a>
                </div>
                <div class="attractions__card">
                  <img class="attractions__img" src="./img/main/attractions/2.jpg" alt="Северное Сияние">
                  <h4 class="attractions__card-title">Северное Сияние</h4>
                  <p class="attractions__desc">В Норильске можно увидеть фантастические сполохи северного сияния. Каждую зиму над городом возникают мерцающие полосы самых невероятных оттенков.</p>
                  <a href="#" class="attractions__button button">Узнать больше</a>
                </div>
                <div class="attractions__card">
                  <img class="attractions__img" src="./img/main/attractions/3.jpg" alt="Норильский Никель">
                  <h4 class="attractions__card-title">Норильский Никель</h4>
                  <p class="attractions__desc">Норильский Никель - крупнейший в мире производитель никеля и палладия, лидер горно-металлургической промышленности России.</p>
                  <a href="#" class="attractions__button button">Узнать больше</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="news">
        <div class="wrapper">
          <?php require './includes/aside-black.php' ?>

          <div class="news__content content">
            <?php require './includes/nav-black.php' ?>

            <div class="row">
              <h2 class="news__title title">Новости</h2>
              <a href="#" class="outline-button">Смотреть все</a>
            </div>
              <?php
                $articles = tpl_render('articles.php', ['id' => 1]);
                print ($articles);
              ?>
          </div>
        </div> 
      </section>
    </main>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/calendar.js"></script>
  </body>
</html>
