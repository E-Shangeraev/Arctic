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
    
    <header class="header scrollify" data-section="1">
      <div class="wrapper white">
        <footer class="slider__footer">
          <label class="button" for="more">Подробнее</label>
          <input type="checkbox" id="more" style="display: none">
          <p class="slider__count">
            <span class="slider__count--current">01</span>
            <span>/</span>
            <span>07</span>
          </p>
          <p class="slider__arrows"></p>
        </footer>
      </div>

    <section class="slider white">
      <div class="slider__block">
        <div class="slide" data-index="1">
          <p class="slide__img" style="background-image: url('img/main/main-header/1.jpg')"></p>
          <p class="slide__floating">индустриальный остров в Арктике</p>
          <div class="slide__title">
            <h3 class="slide__it">Норильск - это...</h3>
            <h2 class="slide__definition">индустриальный остров <br>в Арктике</h2>
            <p class="slide__description">Нужно побывать в Норильске, чтобы увидеть, как добывается руда в подземелье Арктики! Глубоко под слоем вечной мерзлоты находятся огромные рудники. Попадая сюда, дух захватывает!

Заполярный филиал – ключевая ресурсная база промышленного гиганта «Норникеля». Здесь разрабатываются крупнейшие в мире месторождения руды, из которой производят медь, никель, кобальт, серебро и другие металлы. Увидеть и оценить эту мощь можно только в Норильске!</p>
          </div>
        </div>
        <div class="slide" data-index="2">
          <p class="slide__img" style="background-image: url('img/main/main-header/2.jpg')"></p>
          <p class="slide__floating">культурный шок на Крайнем Севере</p>
          <div class="slide__title">
            <h3 class="slide__it">Норильск - это...</h3>
            <h2 class="slide__definition">культурный шок <br>на Крайнем Севере</h2>
            <p class="slide__description">В самом северном городе Земли всё удивительно: северная экзотика, история города и достопримечательности, без которых Норильск – не Норильск! 

Любители культурного отдыха оценят прогулку по Ленинскому проспекту, солнечные часы, Заполярный театр драмы имени В. Маяковского, музеи, художественную галерею, Норильскую Голгофу, впечатляющие памятники  и скульптурные композиции. Любителей развлечений ждут ночные клубы, развлекательные центры и самый северный аквапарк в мире «Тропикана». В городе проходят праздники, когда прямо по улицам можно вдоволь кататься на оленьей упряжке и угощаться в чуме северными деликатесами. А в окрестностях множество баз отдыха и живописных мест!</p>
          </div>
        </div>
        <div class="slide" data-index="3">
          <p class="slide__img" style="background-image: url('img/main/main-header/3.jpg')"></p>
          <p class="slide__floating">мир сказочной тундры и северного сияния</p>
          <div class="slide__title">
            <h3 class="slide__it">Норильск - это...</h3>
            <h2 class="slide__definition">мир сказочной тундры <br>и северного сияния</h2>
            <p class="slide__description">Вокруг Норильска – величавая бесконечность тундры. Её безмолвие на самом деле полно звуков и запахов, которые шепчут путнику: «Посмотри, какая величавая ширь просторов до самого горизонта». Здесь от восторга захватывает дух! 

Приезжайте в Норильск и порадуйтесь струящемуся пушисто-искристому снегу, удивитесь полярной ночи или летним белым ночам, восхититесь сочными красками осенней тундры. Настоящие романтики обязательно оценят эту северную красоту и сделают тысячи уникальных фотографий. И уж точно никого не оставят равнодушным волшебные переливы северного сияния. Познакомьтесь с магией севера в Норильске!</p>
          </div>
        </div>
        <div class="slide" data-index="4">
          <p class="slide__img" style="background-image: url('img/main/main-header/4.jpg')"></p>
          <p class="slide__floating">город «горячих» сердец</p>
          <div class="slide__title">
            <h3 class="slide__it">Норильск - это...</h3>
            <h2 class="slide__definition">город «горячих» сердец</h2>
            <p class="slide__description">В Норильске живут более 180 тысячи человек. Это особенные, удивительные люди, которых не пугают суровые морозы и черная пурга. Они дорожат друзьями и знают, что такое взаимовыручка. Они настоящие романтики, большие оптимисты и измеряют расстояния «авиачасами», добираясь до других городов страны на самолетах. 

Здесь живут сильные люди, которые добывают руду и плавят металл. Здесь много творческих талантов и интеллигентных людей. А еще норильчане очень гостеприимны. Они готовы делиться своим опытом арктической жизни, рассказывать о любимом городе и радушно встречать туристов.
</p>
          </div>
        </div>
        <div class="slide" data-index="5">
          <p class="slide__img" style="background-image: url('img/main/main-header/5.jpg')"></p>
          <p class="slide__floating">мечта для любителей зимних развлечений</p>
          <div class="slide__title">
            <h3 class="slide__it">Норильск - это...</h3>
            <h2 class="slide__definition">мечта для любителей <br>зимних развлечений</h2>
            <p class="slide__description">Если вы любите активный отдых, зимние виды спорта и нескучные идеи, Норильск для вас! Весной или даже в начале лета только здесь вы сможете ощутить драйв от спуска по горнолыжной трассе и покататься на снегоходе. А какой рыбак откажется познать все тонкости рыбалки на Крайнем Севере! 
⠀
Интересно и с пользой можно отдохнуть на горнолыжном комплексе «Гора Отдельная», лыжной базе Оль-Гуль или выбрать любую из турбаз и баз отдыха, которых вокруг Норильска множество! Они объединили в себе комфортное проживание и экзотику севера. Спортсмены, экстремалы и семьи с детьми найдут занятие по душе!</p>
          </div>
        </div>
        <div class="slide" data-index="6">
          <p class="slide__img" style="background-image: url('img/main/main-header/6.jpg')"></p>
          <p class="slide__floating">начало пути в заповедные места</p>
          <div class="slide__title">
            <h3 class="slide__it">Норильск - это...</h3>
            <h2 class="slide__definition">начало пути в заповедные места плато Путорана и озера Лама</h2>
            <p class="slide__description">Всего в 120 км от Норильска находится фантастическое творение природы – озеро Лама. Прозрачная вода, зрелищные водопады, каньоны и атмосфера загадочности притягивает сюда туристов. Озеро Лама называют местом великой силы и говорят, что здесь можно ощутить неповторимую бесконечность тишины и нереальность окружения.

Озеро расположено в северо-западной части Плато Путорана. Дальше путь в заповедный мир древнего горного массива гораздо менее доступен. Отправляются туда самые отчаянные путешественники и любители приключений, покоренные девственной красотой Путоран. Это край горных рек и озер, огромных водопадов, вершин и дикой первозданной природы. </p>
          </div>
        </div>
        <div class="slide" data-index="7">
          <p class="slide__img" style="background-image: url('img/main/main-header/7.jpg')"></p>
          <p class="slide__floating">место, откуда легко попасть к этностойбищу</p>
          <div class="slide__title">
            <h3 class="slide__it">Норильск - это...</h3>
            <h2 class="slide__definition">место, откуда легко попасть <br>к этностойбищу</h2>
            <p class="slide__description">Если вы увлечены этническим туризмом, из Норильска легко попадете в соседний Таймырский Долгано-Ненецкий муниципальный район. Здесь живут и бережно хранят традиции пять коренных северных этносов: долганы, ненцы, нганасаны, энцы и эвенки. Дорога в Дудинку на автомобиле займет около двух часов или чуть больше, если ехать на рейсовом автобусе.

В Таймырском Доме народного творчества можно познакомиться с культурой северных народов, увидеть танец шамана, послушать горловое пение, звучание баргана и пройти посвящение в таймырцы. На открытой площадке этностойбища «Таймырская Ойкумена» можно посетить чумы, пройти обряд имянаречения и посмотреть обряд кормления огня. Летом из Дудинки на теплоходе организован круиз выходного дня к этностойбищу «Легенды тундры». Северные национальные игры, рыбалка, знакомство с бытом коренных этносов Таймыра, северные угощения и незабываемые впечатления обеспечены!</p>
          </div>
        </div>
      </div>
    </section>
  </header>
  <main>
  
      <section class="limit scrollify" data-section="2">
        <div class="wrapper black">
          <div class="limit__col">
            <h2 class="limit__title title">
              <span>Путешествие</span>
              <span>по таинственной<br> территории</span>
              <span>крайнего Севера</span>
            </h2>
            <p class="limit__text">
              С турами в Норильск для Вас открывается уникальная возможность испытать себя и познакомиться с людьми, которые по-настоящему сильны духом.<br><br>
              Они живут в условиях крайнего Севера десятилетиями и смогут показать Вам места от красоты которых захватывает дух.<br><br>
              Уникальная, живописная и нетронутая природа. Современный и гостеприимный моногород Норильск. Все это, и многое другое ждет Вас.
            </p>
            <a href="norilsk.php" class="button">О Норильске</a>
          </div>
          <div class="limit__col">
            <img class="limit__img" src="img/main/limit/1.jpg" alt="Фотография норильчан">
            <img class="limit__img" src="img/main/limit/2.png" alt="Фотография норильчан">
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

      <section class="attractions scrollify" data-section="4">
        <div class="wrapper wrapper--column black">
          <div class="row row--center">
            <h2 class="attractions__title title">Места без которых Норильск не Норильск</h2>
            <a href="404.php" class="outline-button">Смотреть все</a>
          </div>
          <div class="attractions__cards">
            <div class="attractions__card" id="card-1">
              <p class="attractions__img" style="background-image: url('./img/main/attractions/1/1.jpg')"></p>
              <h4 class="attractions__card-title">Норильский горно-металлургический комбинат имени А.П.Завенягина</h4>
              <p class="attractions__desc">Судьба Норильска неразрывно связана с градообразующим предприятием. Это –героическая летопись освоения богатейшей по своим природным запасам территории.</p>
              <button class="attractions__button button">Узнать больше</button>
            </div>
            <div class="attractions__card" id="card-2">
              <p class="attractions__img" style="background-image: url('./img/main/attractions/1/2.jpg')"></p>
              <h4 class="attractions__card-title">Ленинский проспект</h4>
              <p class="attractions__desc">Если хотите почувствовать атмосферу Норильска и прикоснуться к его удивительной истории, совершите прогулку по Ленинскому проспекту! Восхититесь красивым центром города – миниатюрной копией Питерского Невского.</p>
              <button class="attractions__button button">Узнать больше</button>
            </div>
            <div class="attractions__card">
              <p class="attractions__img" style="background-image: url('./img/main/attractions/1/3.jpg')"></p>
              <h4 class="attractions__card-title">Норильский Заполярный театр драмы имени Владимира Маяковского</h4>
              <p class="attractions__desc">Норильский театр драмы, самый северный в мире, в силу своей истории призван дарить надежду и веру в лучшее. У его истоков стояла целая плеяда репрессированных артистов и деятелей искусства. Сегодня в память о них тема жизни и борьбы с разными проявлениями несвободы в театре звучит ярко и страстно.</p>
              <button class="attractions__button button">Узнать больше</button>
            </div>
            <div class="attractions__card">
              <p class="attractions__img" style="background-image: url('./img/main/attractions/1/4.jpg')"></p>
              <h4 class="attractions__card-title">Мемориальный комплекс «Норильская Голгофа»</h4>
              <p class="attractions__desc">Место памяти и скорби Норильская Голгофа находится в черте Старого города у подножия горы Шмидта. Здесь в 1935-1956 годах массово хоронили заключенных Норильлага. Спустя десятилетия сюда возвращаются норильчане, и приходят туристы, чтобы почтить память тысяч безвинно пострадавших в годы репрессий людей.</p>
              <button class="attractions__button button">Узнать больше</button>
            </div>
          </div>
          <a href="404.php" class="outline-button outline-button--mobile">Смотреть все</a>
        </div>
      </section>

      <section class="news scrollify" data-section="5">
        <div class="wrapper wrapper--column">
            <div class="row row--center">
              <h2 class="news__title title">Новости</h2>
              <a href="news.php" class="outline-button">Смотреть все</a>
            </div>
              <?php
                $articles = tpl_render('articles.php', ['id' => 1]);
                print ($articles);
              ?>
          <a href="news.php" class="outline-button outline-button--mobile">Смотреть все</a>
        </div> 
      </section>

      <section class="documents scrollify" data-section="6">
        <div class="wrapper wrapper--column white">
            <div class="row row--center">
              <h2 class="documents__title title">В помощь туристам</h2>
              <a href="tourist.php" class="outline-button outline-button--white">Подробнее</a>
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
              <!-- <li class="documents__item">
                <a href="documents/Документы.zip"
                  target="_blank">
                  <img src="./img/main/documents/2.svg" 
                      alt="Скачать одним архивом">
                  <span>Скачать одним архивом</span>
                </a>
              </li> -->
            </ul>
            <a class="documents__archive" href="documents/Документы.zip">Скачать одним архивом</a>
          <a href="tourist.php" 
            class="documents__outline-button outline-button outline-button--mobile outline-button--white">
            Подробнее
          </a>
          <!-- <a class="documents__archive documents__archive--mobile" href="#">Скачать одним архивом</a> -->
        </div> 
      </section>

      <section class="partners scrollify" data-section="7">
        <div class="wrapper wrapper--column">
          <div class="row">
            <h2 class="title">Партнеры</h2>
          </div>
          <div class="row">
            <p class="partners__desc">
            Мы гордимся нашими партнерами и делаем все для того, чтобы наше плодотворное сотрудничество помогло реализовать все ваши желания в наших турах!<br><br> Стать наши партнером можете и вы! Просто нажмите кнопку ниже и выполните все необходимые условия.
            </p>
            <ul class="partners__list">
              <li class="partners__item">
                <a href="https://www.russiadiscovery.ru/" target="_blank">
                  <img src="./img/main/partners/1.png" alt="Russia Discovery">
                </a>
              </li>
              <li class="partners__item">
                <a href="https://naito-russia.ru/">
                  <img src="./img/main/partners/2.png" alt="Некомерческое партнёрство НАИТО">
                </a>
              </li>
              <li class="partners__item">
                <a href="https://www.tui.ru/" target="_blank">
                  <img src="./img/main/partners/5.png" alt="TUI">
                </a>
              </li>
              <li class="partners__item">
                <a href="https://travelsterritory.com/" target="_blank">
                  <img src="./img/main/partners/3.png" alt="Travels territory">
                </a>
              </li>
              <li class="partners__item">
                <a href="http://usadbajarptica.ru/" target="_blank">
                  <img src="./img/main/partners/4.png" alt="Усадьба Жар-Птица">
                </a>
              </li>
              <li class="partners__item">
                <a href="https://visitsiberia.info/" target="_blank">
                  <img src="./img/main/partners/6.png" alt="Красноярский край. Туристический информационный центр">
                </a>
              </li>
              <li class="partners__item">
                <a href="http://turizm.krskstate.ru/" target="_blank">
                  <img src="./img/main/partners/7.png" alt="Красноярский край. Агенство по туризму Красноярского края">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="feedback scrollify" data-section="8">
        <div class="wrapper wrapper--column white">
            <div class="row">
              <h2 class="title">У вас остались вопросы?</h2>
            </div>
            <form class="feedback__form" action="mail.php" method="POST">
              <div class="col-1">
                <p class="feedback__desc">Оставьте свои контактыне данные и наш специалист свяжется с вами в ближайшее время и ответит на все интересующие вас вопросы!</p>
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
      </section>
    </main>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/jquery.scrollify.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/index.js"></script>
    <script src="js/nav-mobile.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/calendar.js"></script>
    <script src="js/attractions.js"></script>
  </body>
</html>
