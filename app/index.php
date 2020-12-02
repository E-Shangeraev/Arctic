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
    <aside class="aside">
      <a href="index.php" class="logo">
        <!-- <object type="image/svg+xml" data="./img/header/logo.svg"></object> -->
        <svg width="93" height="66" viewBox="0 0 93 66" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        `<mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="93" height="66">
        <rect width="93" height="66" fill="url(#pattern0)"/>
        </mask>
        <g mask="url(#mask0)">
        <rect class="logo-color" width="93" height="66" fill="white"/>
        </g>
        <defs>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
        <use xlink:href="#image0" transform="translate(-0.00220342) scale(0.00387802 0.00546448)"/>
        </pattern>
        <image id="image0" width="259" height="183" xlink:href="data:image/png;base64,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"/>
        </defs>
        </svg>
      </a>
      <p class="aside__scroll-indicator scroll-indicator">
        <span class="scroll-indicator__number scroll-indicator__number--current">01</span>
        <span class="scroll-indicator__line">
          <span class="scroll-indicator__line--fill"></span>
        </span>
        <span class="scroll-indicator__number">08</span>
      </p>
      <p class="aside__socials socials">
        <a href="">Fb</a>
        <a href="">Vk</a>
        <a href="">Inst</a>
      </p>
      <button class="aside__burger">
        <span></span>
      </button>
    </aside>

    <nav class="nav nav-mobile black">
      <button class="nav__close">
        <span></span>
      </button>

      <ul class="nav__items">
        <li><a href="#">Норильск</a></li>
        <li><a href="#">Достопримечательности</a></li>
        <li><a href="#">Центр развития туризма</a></li>
        <li><a href="#">Туристу</a></li>
        <li><a href="#">Новости</a></li>
      </ul>

      <p class="socials">
        <a href="">Fb</a>
        <a href="">Vk</a>
        <a href="">Inst</a>
      </p>

      <ul class="nav__phone">
        <li><a href="tel:+7 999 123-45-67">+7 999 123-45-67</a></li>
      </ul>

      <div>
        <a class="eye" href="#">
          <img src="img/header/eye-black.svg" alt="Для слабовидящих" loading="lazy"/>
          <span>Для слабовидящих</span>
        </a>
        <ul class="nav__lang">
          <li><a href="#" class="active">RUS</a> /</li>
          <li><a href="#">ENG</a></li>
        </ul>
      </div>
    </nav>
    
    <header class="header scrollify" data-section="1">
      <div class="wrapper white">
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
            <p class="slide__img" style="background-image: url('img/main/main-header/1.jpg')"></p>
            <p class="slide__floating">край горячих сердец</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">край горячих сердец</h2>
            </div>
          </div>
          <div class="slide" data-index="2">
            <p class="slide__img" style="background-image: url('img/main/main-header/2.jpg')"></p>
            <p class="slide__floating">северное сияние</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">северное сияние</h2>
            </div>
          </div>
          <div class="slide" data-index="3">
            <p class="slide__img" style="background-image: url('img/main/main-header/3.jpg')"></p>
            <p class="slide__floating">сильные духом люди</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">сильные духом люди</h2>
            </div>
          </div>
          <div class="slide" data-index="4">
            <p class="slide__img" style="background-image: url('img/main/main-header/4.jpg')"></p>
            <p class="slide__floating">самый северный город</p>
            <div class="slide__title">
              <h3 class="slide__it">Норильск - это...</h3>
              <h2 class="slide__definition">самый северный город</h2>
            </div>
          </div>
          <div class="slide" data-index="5">
            <p class="slide__img" style="background-image: url('img/main/main-header/5.jpg')"></p>
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
      <section class="limit scrollify" data-section="2">
        <div class="wrapper black">
          <div class="content">
            <?php require './includes/nav-black.php' ?>

            <div class="content__container">
              <div class="limit__col">
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
              <div class="limit__col">
                <img class="limit__img" src="img/main/limit/1.jpg" alt="Фотография норильчан" loading="lazy">
                <img class="limit__img" src="img/main/limit/2.png" alt="Фотография норильчан" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="calendar scrollify" data-section="3">
        <div class="wrapper">
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

      <section class="attractions scrollify" data-section="4">
        <div class="wrapper">
          <div class="content">
            <?php require './includes/nav-black.php' ?>
            
            <div class="attractions__container black">
              <div class="row">
                <h2 class="attractions__title title">Достопримечательности</h2>
                <a href="#" class="outline-button">Смотреть все</a>
              </div>
              <div class="attractions__cards">
                <div class="attractions__card">
                  <p class="attractions__img" style="background-image: url('./img/main/attractions/1.jpg')"></p>
                  <h4 class="attractions__card-title">Плато Путорана</h4>
                  <p class="attractions__desc">Неизвестная загадочная страна. Хрустальные воды рек, мириады водопадов, падающие со склонов, “столовых” гор, яркие краски северных цветов на фоне камней и снега.</p>
                  <a href="#" class="attractions__button button">Узнать больше</a>
                </div>
                <div class="attractions__card">
                  <p class="attractions__img" style="background-image: url('./img/main/attractions/2.jpg')"></p>
                  <h4 class="attractions__card-title">Северное Сияние</h4>
                  <p class="attractions__desc">В Норильске можно увидеть фантастические сполохи северного сияния. Каждую зиму над городом возникают мерцающие полосы самых невероятных оттенков.</p>
                  <a href="#" class="attractions__button button">Узнать больше</a>
                </div>
                <div class="attractions__card">
                  <p class="attractions__img" style="background-image: url('./img/main/attractions/3.jpg')"></p>
                  <h4 class="attractions__card-title">Норильский Никель</h4>
                  <p class="attractions__desc">Норильский Никель - крупнейший в мире производитель никеля и палладия, лидер горно-металлургической промышленности России.</p>
                  <a href="#" class="attractions__button button">Узнать больше</a>
                </div>
                <div class="attractions__card">
                  <p class="attractions__img" style="background-image: url('./img/main/attractions/2.jpg')"></p>
                  <h4 class="attractions__card-title">Северное Сияние</h4>
                  <p class="attractions__desc">В Норильске можно увидеть фантастические сполохи северного сияния. Каждую зиму над городом возникают мерцающие полосы самых невероятных оттенков.</p>
                  <a href="#" class="attractions__button button">Узнать больше</a>
                </div>
                <div class="attractions__card">
                  <p class="attractions__img" style="background-image: url('./img/main/attractions/1.jpg')"></p>
                  <h4 class="attractions__card-title">Плато Путорана</h4>
                  <p class="attractions__desc">Неизвестная загадочная страна. Хрустальные воды рек, мириады водопадов, падающие со склонов, “столовых” гор, яркие краски северных цветов на фоне камней и снега.</p>
                  <a href="#" class="attractions__button button">Узнать больше</a>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="outline-button outline-button--mobile">Смотреть все</a>
        </div>
      </section>

      <section class="news scrollify" data-section="5">
        <div class="wrapper">
          <div class="content">
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
          <a href="#" class="outline-button outline-button--mobile">Смотреть все</a>
        </div> 
      </section>

      <section class="documents scrollify" data-section="6">
        <div class="wrapper white">
          <div class="documents__content content">
            <?php require './includes/nav.php' ?>

            <div class="row">
              <h2 class="documents__title title">В помощь туристам</h2>
              <a href="#" class="outline-button outline-button--white">Подробнее</a>
            </div>
            <ul class="documents__list">
              <li class="documents__item"><a href="#">Паспорт безопасности туриста</a></li>
              <li class="documents__item"><a href="#">Памятка туристу по безопасности путешествий на территории Красноярского края</a></li>
              <li class="documents__item"><a href="#">Паспорт безопасности туриста</a></li>
              <li class="documents__item"><a href="#">Памятка туристу по безопасности путешествий на территории Красноярского края</a></li>
              <li class="documents__item"><a href="#">Паспорт безопасности туриста</a></li>
              <li class="documents__item"><a href="#">Памятка туристу по безопасности путешествий на территории Красноярского края</a></li>
            </ul>
            <a class="documents__archive" href="#">Скачать одним архивом</a>
          </div>
          <a href="#" 
            class="documents__outline-button outline-button outline-button--mobile outline-button--white">
            Подробнее
          </a>
          <a class="documents__archive documents__archive--mobile" href="#">Скачать одним архивом</a>
        </div> 
      </section>

      <section class="partners scrollify" data-section="7">
        <div class="wrapper">
          <div class="partners__content content">
            <?php require './includes/nav-black.php' ?>

            <h2 class="partners__title title">Партнеры</h2>
            <div class="row">
              <p class="partners__desc">
              Мы гордимся нашими партнерами и делаем все для того, чтобы наше плодотворное сотрудничество помогло реализовать все ваши желания в наших турах!<br><br> Стать наши партнером можете и вы! Просто нажмите кнопку ниже и выполните все необходимые условия.
              </p>
              <ul class="partners__list">
                <li class="partners__item">
                  <a href="https://www.russiadiscovery.ru/" target="_blank">
                    <img src="./img/main/partners/1.png" alt="Russia Discovery" loading="lazy">
                  </a>
                </li>
                <li class="partners__item">
                  <a href="https://naito-russia.ru/">
                    <img src="./img/main/partners/2.png" alt="Некомерческое партнёрство НАИТО" loading="lazy">
                  </a>
                </li>
                <li class="partners__item">
                  <a href="https://www.tui.ru/" target="_blank">
                    <img src="./img/main/partners/5.png" alt="TUI" loading="lazy">
                  </a>
                </li>
                <li class="partners__item">
                  <a href="https://travelsterritory.com/" target="_blank">
                    <img src="./img/main/partners/3.png" alt="Travels territory" loading="lazy">
                  </a>
                </li>
                <li class="partners__item">
                  <a href="http://usadbajarptica.ru/" target="_blank">
                    <img src="./img/main/partners/4.png" alt="Усадьба Жар-Птица" loading="lazy">
                  </a>
                </li>
                <li class="partners__item">
                  <a href="https://visitsiberia.info/" target="_blank">
                    <img src="./img/main/partners/6.png" alt="Красноярский край. Туристический информационный центр" loading="lazy">
                  </a>
                </li>
                <li class="partners__item">
                  <a href="http://turizm.krskstate.ru/" target="_blank">
                    <img src="./img/main/partners/7.png" alt="Красноярский край. Агенство по туризму Красноярского края" loading="lazy">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="feedback scrollify" data-section="8">
        <div class="wrapper white">
          <div class="documents__content content">
            <?php require './includes/nav.php' ?>

            <div class="row">
              <h2 class="feedback__title title">У вас остались вопросы?</h2>
              <p class="feedback__desc">Оставьте свои контактыне данные и наш специалист свяжется с вами в ближайшее время и ответит на все интересующие вас вопросы!</p>
            </div>
            <form class="feedback__form" action="mail.php" method="POST">
              <div class="col-1">
                <span>Введите ваш вопрос здесь...</span>
                <input type="text" name="text">
              </div>
              <div class="col-2">
                <input type="name" name="name" placeholder="Имя">
                <input type="tel" name="tel" placeholder="Номер телефона">
              </div>
              <footer class="feedback__footer row">
                <button type="submit" class="feedback__button button">Отправить</button>
                <ul class="feedback__address address">
                  <li class="address__item">
                    <a href="#">turizm@norilsk-city.ru</a>
                  </li>
                  <li class="address__item">
                    <a href="#">г. Норильск, пр-т Ленинский д1, офис 523</a>
                  </li>
                </ul>
              </footer>
            </form>
          </div>
        </div>
      </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/jquery.scrollify.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    

    <script src="js/index.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/calendar.js"></script>
  </body>
</html>
