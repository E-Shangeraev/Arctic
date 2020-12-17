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
  <body class="center">
    <?php 
      require_once 'includes/aside.php';
      require_once 'includes/nav.php';
      require_once 'includes/nav-mobile.php';
    ?>
    <header class="header header__center scrollify" data-section="1">
      <div class="wrapper wrapper--column wrapper--center white">
        <div class="row row--center h-100">
          <h1 class="title">Центр развития<br>туризма Норильска</h1>
          <p class="header__text">Ваше незабываемое путешествие на крайний Север - наша работа</p>
        </div>
        <a class="button" href="#">Подробнее</a>
      </div>
    </header>
    
    <main>
      <section class="center__intro intro tabs scrollify" data-section="2">
        <div class="wrapper wrapper--column">
          <h2 class="intro__title title">Муниципальное автономное учреждение<br> «Центр развития туризма»</h2>
          <p class="center__intro-text intro__text">
            С каждым годом все больше людей хотят посетить Норильск и близлежащие территории. Многие узнают о том, что на территории Норильска находится множество природных памятников, а также виды от которых просто захватывает дух.
            С целью продвижения туристического потенциала Норильска был создан Центр развития туризма, сотрудники которого с удовольствием ответят на все вопросы туристов и помогут узнать больше о территории Крайнего Севера.
          </p>
          <img class="center__intro-image" src="./img/center/1.jpg" alt="Фотография туриста">
        </div>
      </section>

      <section class="projects tabs scrollify" data-section="3">
        <div class="wrapper wrapper--column black">
          <h2 class="projects__title title">Проекты, направленные на развитие туризма</h2>
          <div class="row">
            <div class="projects__col col">
              <h3 class="projects__subtitle subtitle">Проект «Красные камни»</h3>
              <a href="#" class="button">Читать больше</a>
            </div>
            <p class="projects__col col projects__text">
              В феврале 2020 года Правительством Красноярского края утверждены границы и определен режим особой охраны территории памятника природы краевого значения «Ландшафтный участок «Красные камни».<br><br>
              Центр развития туризма вошел в группу, обеспечивающую сохранность данной территории.
            </p>
          </div>
          <img class="projects__image" src="./img/center/2.jpg" alt="Фотография водопада">
        </div>
      </section>

      <section class="projects tabs scrollify" data-section="4">
        <div class="wrapper wrapper--column black">
          <h2 class="projects__title title">Проекты, направленные на развитие туризма</h2>
          <div class="row">
            <div class="projects__col col">
              <h3 class="projects__subtitle subtitle">Туристско-рекреационный кластер<br>“Арктический”</h3>
              <a href="#" class="button">Читать больше</a>
            </div>
            <p class="col projects__text">
              Сегодня арктический туризм становится драйвером роста северных территорий по всему миру, количество желающих посетить Северный полюс и Русскую Арктику постоянно растет.<br><br>
              Концепция развития туристской индустрии в Красноярском крае включает в себя создание и развитие кластера «Арктический», включающего в себя город Норильск, Таймырский Долгано-Ненецкий муниципальный район, а также, в перспективе, Туруханский и Эвенкийский муниципальный районы.
            </p>
          </div>
          <img class="projects__image" src="./img/center/3.jpg" alt="Фотография реки">
        </div>
      </section>

      <section class="projects tabs scrollify" data-section="5">
        <div class="wrapper wrapper--column black">
          <h2 class="projects__title title">Проекты, направленные на развитие туризма</h2>
          <div class="row">
            <div class="projects__col col">
              <h3 class="projects__subtitle subtitle">Международная выставка<br>”Интурмаркет”</h3>
              <a href="#" class="button">Читать больше</a>
            </div>
            <p class="col projects__text">
              Одним из важных событий, направленных на продвижение туристического потенциала Норильска, стало участие представителей города (Администрации города Норильска, МАУ «Центр развития туризма», АНО «Агентство развития Норильска» и представителей туристического сообщества) в составе делегации Красноярского края в Международной туристической выставке ИНТУРМАРКЕТ-2020, которая прошла в Москве 12-14 марта 2020 года.
            </p>
          </div>
          <img class="projects__image" src="./img/center/4.jpg" alt="Фотография народных музыкантов. Фотография полярного медведя">
        </div>
      </section>

      <section class="director tabs scrollify" data-section="6">
        <div class="wrapper wrapper--column">
          <div class="row">
            <p class="col">
              <img src="./img/center/5.jpg" alt="Фотография директора">
            </p>
            <div class="col">
              <blockquote class="director__cite">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et metus nulla consectetur lacus, diam dictumst elementum. Ac senectus varius arcu ultrices. Ut urna, id parturient mi eget massa quam. Habitant a ullamcorper donec tellus, in ullamcorper scelerisque. Ut sed quis massa sed.
              </blockquote>
              <p class="director__name">
                <b>Иванова Ольга Ивановна</b>
                <span>Lorem ipsum dolor sit amet</span>
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
    <script src="js/nav-mobile.js"></script>
  </body>
</html>