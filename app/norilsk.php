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
    <header class="header header__norilsk scrollify" data-section="1">
      <div class="wrapper wrapper--column wrapper--center white">
        <div class="row row--header">
          <h1 class="title">Норильск</h1>
        </div>
        <div class="facts">
          <p class="fact">
            <span class="fact__top">183 252</span>
            <span class="fact__bottom">жителей города</span>
          </p>
          <p class="fact">
            <span class="fact__top">4 500 
              <span class="fact__top--low">км <sup>2</sup></span>
            </span>
            <span class="fact__bottom">площадь города</span>
          </p>
          <p class="fact">
            <span class="fact__top">69°20´50´</span>
            <span class="fact__bottom">географическое положение</span></p>
          <p class="fact">
            <span class="fact__top">1953</span>
            <span class="fact__bottom">год основания</span>
          </p>
          <p class="fact">
            <span class="fact__top">UTC +7</span>
            <span class="fact__bottom">часовой пояс</span>
          </p>
          <p class="fact">
            <span class="fact__top">
              <span class="fact__top--low">с</span>
              30.11
              <span class="fact__top--low">по</span>
              13.01
            </span>
            <span class="fact__bottom">полярная ночь</span>
          </p>
        </div>
      </div>
    </header>
    
    <main>
      <section class="norilsk-intro intro tabs scrollify" data-section="2">
        <div class="wrapper black">
          <div class="intro__col col">
            <h2 class="intro__title title">
              <span>Предлагаем Вам стать настоящим</span>
              <span>первопроходцем и прочувствовать</span>
              <span>всю мощь северной природы</span>
            </h2>
            <p class="intro__text">
              Норильск – это ворота на Север, а Север умеет благодарить величественными каньонами, великолепными как зимой, так и летом, утесами и речными долинами, уникальной флорой и фауной, чарующим северным сиянием.<br><br>
              Вы можете стать одним из тех первооткрывателей, которые отправлялись в мир приключений неизведанных территорий, геологических исследований, необыкновенных природных, исторических и культурных объектов.
            </p>
            <span class="norilsk-intro__ready">Готовы?</span>
          </div>
          <div class="intro__col col">
            <img class="norilsk-intro__img intro__img" src="img/norilsk/1.jpg" alt="Фотография Норильска">
            <img class="norilsk-intro__img--text" src="./img/norilsk/1.1.svg" alt="Норильск">
            <span class="norilsk-intro__gates">ВОРОТА<br> НА СЕВЕР</span>
          </div>
        </div>
      </section>

      <section class="adventure scrollify" data-section="3">
        <div class="wrapper wrapper--column black">
          <h2 class="adventure__title title">Путешествие на крайний север</h2>
          <div class="adventure__slider">
            <div class="adventure__slide">
              <div class="col">
                <img class="adventure__slide-image" src="./img/norilsk/norilsk-slider/1.jpg" alt="Фотография Норильска">
              </div>
              <div class="col">
                <h2 class="subtitle">НОРИЛЬСК – ВОРОТА НА СЕВЕР</h2>
                <p class="adventure__slide-description">
                  Гул снижающегося самолета, известит Вас о приближении к уникальной северной территории. Территории первопроходцев, и точки развития мощнейшего промышленного гиганта России.<br><br>
                  Ваше северное путешествие начнется с посадки самолёта в аэропорте «Норильск (Алыкель)». Равнинно-холмистый ландшафт территории проглядывается в любое время года. Зимой – это бескрайние заснеженные просторы с застывшими озерами и реками. Коротким полярным летом – это поля иван-чая, ягод и других дикоросов в контрасте с позеленевшей тундрой.<br><br>
                  На территории представлен целый спектр природных зон: северная тайга, лесотундра, субарктическая тундра. Такого разнообразия нет ни на одной северной территории.
                </p>
              </div>
            </div>
            <div class="adventure__slide">
              <div class="col">
                <img class="adventure__slide-image" src="./img/norilsk/norilsk-slider/2.jpg" alt="Фотография Норильска">
              </div>
              <div class="col">
                <h2 class="subtitle">РАЙОНЫ</h2>
                <p class="adventure__slide-description">
                  По дороге в один из самых северных городов мира, численностью >100 тыс. человек Вы будете проезжать территории города-порта Дудинка, района Кайеркан, Надеждинского металлургического завода.
                </p>
              </div>
            </div>
            <div class="adventure__slide">
              <div class="col">
                <img class="adventure__slide-image" src="./img/norilsk/norilsk-slider/3.jpg" alt="Фотография Норильска">
              </div>
              <div class="col">
                <h2 class="subtitle">РАЙОНЫ</h2>
                <p class="adventure__slide-description">
                  Вторым после аэропорта напоминанием о присутствии человека в бескрайней тундре является заброшенный поселок Алыкель.<br>
                  До перестройки в поселке жили военные летчики. Кроме жилых домов, здесь были Дом офицеров, штаб с казармой и комендатурой, ангары для техники, клуб, котельная, баня. Сейчас, это одно из любимых мест многих любителей промышленного туризма.
                </p>
              </div>
            </div>
            <div class="adventure__slide">
              <div class="col">
                <img class="adventure__slide-image" src="./img/norilsk/norilsk-slider/4.jpg" alt="Фотография Норильска">
              </div>
              <div class="col">
                <h2 class="subtitle">ВДОЛЬ ДОРОГИ</h2>
                <p class="adventure__slide-description">
                  Мемориальный комплекс «Первостроителям Норильска» расположен параллельно полотну дороги слева в районе железнодорожного моста через реку Амбарная.<br><br>
                  Сам мост возведен еще в 1936 году. Установленный паровоз – это памятник строительства 114-километройовой узколейки от Норильска до Дудинки.<br><br>
                  В полотно укладывали торф, валежник, хворост. Шпалы изготавливали из сухой лиственницы. Зимой на реках не строили мосты, а намораживали дамбы, которые с приходом тепла «плыли».
                </p>
              </div>
            </div>
            <div class="adventure__slide">
              <div class="col">
                <img class="adventure__slide-image" src="./img/norilsk/norilsk-slider/5.jpg" alt="Фотография Норильска">
              </div>
              <div class="col">
                <h2 class="subtitle">ПОСМОТРИТЕ НАПРАВО</h2>
                <p class="adventure__slide-description">
                  По правую сторону, на горизонте по пути следования, Вы увидите Зуб-гору, свое название она получила из-за формы, напоминающую зуб мамонта.
                </p>
              </div>
            </div>
            <div class="adventure__slide">
              <div class="col">
                <img class="adventure__slide-image" src="./img/norilsk/norilsk-slider/6.jpg" alt="Фотография Норильска">
              </div>
              <div class="col">
                <h2 class="subtitle">НОРИЛЬСК-ПРОМЫШЛЕННЫЙ</h2>
                <p class="adventure__slide-description">
                  Проехав район Кайеркан, Вы обязательно заметите гигантские корпуса Надеждинского металлургического завода.<br>
                  Каждая десятая тонна никеля в мире выпущена на «Надежде».
                </p>
              </div>
            </div>
            <div class="adventure__slide">
              <div class="col">
                <img class="adventure__slide-image" src="./img/norilsk/norilsk-slider/7.jpg" alt="Фотография Норильска">
              </div>
              <div class="col">
                <h2 class="subtitle">НОРИЛЬСК-ПРОМЫШЛЕННЫЙ</h2>
                <p class="adventure__slide-description">
                  Поклонный двенадцатиметровый крест встречает путников в районе реки Купец. Обычай ставить поклонные кресты были принесены в Сибирь первопроходцами.
                </p>
                <p class="adventure__slide-end">
                  Здесь, хочется поприветствовать путешественника. Вы въезжаете в город, где начиналась великая история освоения Севера.
                </p>
              </div>
            </div>
          </div>
          <footer class="adventure__footer row">
            <div class="col">
              <div class="adventure__slider-line"></div>
            </div>
            <div class="col">

            </div>
          </footer>
        </div>
      </section>

      <section class="monuments scrollify" data-section="4">
        <div class="wrapper wrapper--column">
          <div class="row">
            <h2 class="title">Памятники и экскурсии</h2>
            <nav class="monuments__nav">
              <div class="monuments__nav-list">
                  <li class="title monuments__rubric active-rubric" data-value="inside">В черте города</li>
                  <li class="title monuments__rubric" data-value="outside">В окрестностях</li>
              </div>
            </nav>
          </div>
          <div class="tabs__container">
            <div class="monuments__inside tab tab--inside active-tab">
              <?php
                $articles = tpl_render('articles.php', ['id' => 2]);
                print ($articles);
              ?>
            </div>
            <div class="monuments__outside tab tab--outside">
              <?php
                $articles = tpl_render('articles.php', ['id' => 1]);
                print ($articles);
              ?>
            </div>
          </div>  
        </div>
      </section>

      <section class="facts-1 scrollify" data-section="5">
        <div class="wrapper">
          <h2 class="title">Факты о Норильске</h2>
          <div class="facts-1__slider">
            <div class="facts-1__slide">
              <div class="col">
                <h3 class="facts-1__slide-title">Первый дом Норильска</h3>
                <p class="facts-1__slide-description">Первый дом Норильска был построен в 1921 году. После обнаружения в Норильском районе богатых  угольных пластов и сульфидных руд власти приняли решение построить в этих местах зимовку и далее начинать строительство города.</p>
              </div>
              <div class="col">
                <p class="facts-1__slide-image">
                  <img src="./img/norilsk/facts-1-slider/1.jpg" alt="Первый дом Норильска">
                </p>
              </div>
            </div>
            <div class="facts-1__slide">
              <div class="col">
                <h3 class="facts-1__slide-title">Lorem, ipsum dolor.</h3>
                <p class="facts-1__slide-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quia eos odio quae culpa velit saepe. Ab facere iste possimus maxime architecto pariatur, dolorem placeat aliquid fugiat veniam sint aperiam!</p>
              </div>
              <div class="col">
                <p class="facts-1__slide-image">
                  <img src="./img/norilsk/facts-1-slider/1.jpg" alt="Lorem, ipsum dolor.">
                </p>
              </div>
            </div>
          </div>
          <footer class="facts-1__footer">
            <p class="fact">
              <span class="fact__top">145 000 туристов</span>
              <span class="fact__bottom">ежегодно посещают Норильск</span>
            </p>
            <p class="fact">
              <span class="fact__top">98 экскурсии</span>
              <span class="fact__bottom">ежедневно проводится по городу</span>
            </p>
            <p class="fact">
              <span class="fact__top">130 рекордов</span>
              <span class="fact__bottom">у Норильска в книге рекордов Гиннеса</span>
            </p>
          </footer>
        </div>
      </section>

      <section class="facts-2 scrollify" data-section="6">
        <div class="wrapper wrapper--column">
          <h2 class="title">Факты о Норильске</h2>
          <div class="row">
            <div class="col">
              <p>Как Норильск спас планету от ядерного взрыва</p>
            </div>
            <div class="col">
              <p>Норильск - это город, о котором существует множество легенд, одна из которых повествует о том, как Норильск предотвратил ядерный взрыв во времена Советского Союза.</p>
              <a href="#">Подробнее</a>
            </div>
          </div>
          <img src="./img/norilsk/2.png" alt="Фотография ядерного взрыва">
        </div>
      </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/jquery.scrollify.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/index.js"></script>
    <script src="js/nav-mobile.js"></script>
    <script src="js/norilsk-slider.js"></script>
    <!-- <script type="module" src="js/Tabs.js"></script>
    <script type="module" src="js/news-rubrics.js"></script> -->
  </body>
</html>