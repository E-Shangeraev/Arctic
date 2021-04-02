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
  <body class="norilsk">
    <?php 
      require_once 'includes/aside.php';
      require_once 'includes/nav.php';
      require_once 'includes/nav-mobile.php';
    ?>
    <header class="header scrollify" data-section="1">
      <div class="wrapper white">
        <footer class="slider__footer">
          <label class="button slider__button" for="more">Подробнее</label>
          <input type="checkbox" id="more" style="display: none">
          <p class="slider__count">
            <span class="slider__count--current">01</span>
            <span>/</span>
            <span>05</span>
          </p>
          <p class="slider__arrows"></p>
        </footer>
      </div>

      <section class="slider white">
        <div class="slider__block">
          <div class="slide" data-index="1">
            <p class="slide__img" style="background-image: url('img/norilsk/1.jpg')"></p>
            <div class="slide__title">
              <h3 class="slide__it">Основные вехи истории Норильска</h3>
              <ul class="slide__description">
                <li>1884 г. – появление станка Норильский на картах</li>
                <li>1921 г. – члены экспедиции Н. Урванцева остались на зимовку в первом доме Норильска</li>
                <li>1935 г. – начато строительство Норильского горно-металлургического комбината</li>
                <li>1942 г. – в Норильске получен первый никель</li>
                <li>1953 г. – поселок Норильск получает статус города</li>
                <li>1956 г. – начало «Комсомольской стройки» в Норильске</li>
              </ul>
            </div>
          </div>
          <div class="slide" data-index="2">
            <p class="slide__img" style="background-image: url('img/norilsk/2.jpg')"></p>
            <div class="slide__title" style="display: block">
              <h3 class="slide__it">Норильск сегодня</h3>
              <div class="facts">
                <p class="fact">
                  <span class="fact__top">4 500 
                    <span class="fact__top--low">км <sup>2</sup></span>
                  </span>
                  <span class="fact__bottom">площадь города</span>
                </p>
                <p class="fact">
                  <span class="fact__top">
                    <span class="fact__top--low">январь: </span>
                    -27 °C
                  </span>
                  <span class="fact__bottom">среднемесячная t° воздуха</span>
                </p>
                <p class="fact">
                  <span class="fact__top">
                    <span class="fact__top--low">июль: </span>
                    14,2 °C
                  </span>
                  <span class="fact__bottom">среднемесячная t° воздуха</span>
                </p>
                <p class="fact">
                  <span class="fact__top">
                    9
                    <span class="fact__top--low">месяцев</span>
                  </span>
                  <span class="fact__bottom">климатической зимы</span>
                </p>
                <p class="fact">
                  <span class="fact__top">280
                    <span class="fact__top--low">дней</span>
                  </span>
                  <span class="fact__bottom">морозов</span>
                </p>
                <p class="fact">
                  <span class="fact__top">
                    130
                    <span class="fact__top--low">дней</span>
                  </span>
                  <span class="fact__bottom">метели</span>
                </p>
              </div>
            </div>
          </div>
          <div class="slide" data-index="3">
            <p class="slide__img" style="background-image: url('img/norilsk/3.jpg')"></p>
            <div class="slide__title">
              <h3 class="slide__it">Районы Норильска</h3>
              <div class="slide__description">
                <h4>Талнах</h4>
                <ul>
                  <li>Расположение — 69°34´ с.ш.</li>
                  <li>Население — 60 000 чел.</li>
                  <li>25 км до Норильска</li>
                </ul>
                <h4>Кайеркан</h4>
                <ul>
                  <li>Расположение — 69°23´ с.ш.</li>
                  <li>Население — ≈ 25 000 чел.</li>
                  <li>20 км до Норильска</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="slide" data-index="4">
            <p class="slide__img" style="background-image: url('img/norilsk/4.jpg')"></p>
            <div class="slide__title">
              <h3 class="slide__it">Климат</h3>
              <ul class="slide__description">
                  <li>Субарктический</li>
                  <li>Зима длится около 9 месяцев и морозы достигают -56 °С</li>
                  <li>Остальные 3 месяца приходятся на весну, лето и осень</li>
                  <li>Лето +7…+15 °С</li>
                  <li>Осень -20…+4 °С</li>
                  <li>Весна -21… -4 °С</li>
                  <li>Скорость ветра достигает 34-36 м/с</li>
                  <li>Вкупе со снегом такой ветер превращается «Черную пургу», когда видимость минимальная</li>
                  <li>В среднем на каждого жителя приходится около 10 тонн снега в год</li>
              </ul>
            </div>
          </div>
          <div class="slide" data-index="5">
            <p class="slide__img" style="background-image: url('img/norilsk/5.jpg')"></p>
            <div class="slide__title">
              <h3 class="slide__it">Солнечный календарь</h3>
              <div class="slide__description">
                <img src="./img/norilsk/6.png" alt="Солнечный календарь">
                <p>Период Северного сияния длится с 21 сентября по 21 марта</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    
    <main>
      <section class="useful scrollify" data-section="2">
        <div class="wrapper wrapper--column">
          <h2 class="useful__title title">Достопримечательности</h2>
          <p class="useful__description">
          Норильск — круговорот впечатлений
          </p>
          <?php
            $usefuls = tpl_render('useful.php', ['categories' => [6, 7, 8, 9]]);
            print ($usefuls);
          ?>
        </div>
      </section>

      <section class="useful scrollify" data-section="3">
        <div class="wrapper wrapper--column">
          <h2 class="useful__title title">Места отдыха и развлечений</h2>
          <p class="useful__description">
          Развлечения и досуг за Полярным кругом
          </p>
          <?php
            $usefuls = tpl_render('useful.php', ['categories' => [10, 11, 12, 13]]);
            print ($usefuls);
          ?>
        </div>
      </section>
    </main>

    <?php
      $footer = tpl_render('footer.php', ['dataSection' => 4]);
      print ($footer);
    ?>
  </body>
</html>