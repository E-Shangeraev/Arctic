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
  <body class="flora-fauna">
    <?php 
      require_once 'includes/aside.php';
      require_once 'includes/nav.php';
      require_once 'includes/nav-mobile.php';
    ?>
    <header class="header header__flora-fauna scrollify" data-section="1">
      <div class="wrapper wrapper--column wrapper--center white">
        <div class="row row--center h-100">
          <h1 class="title">Флора и фауна</h1>
          <p class="header__text">Подробнее о природе и животных Норильска вы можете узнать в этом разделе</p>
        </div>
        <a class="button" href="#">Подробнее</a>
      </div>
    </header>
    
    <main>
      <section class="flora-fauna__nature nature tabs scrollify" data-section="2">
        <div class="wrapper wrapper--column">
          <div class="row row--center">
            <h2 class="nature__title title">Природа</h2>
            <h3 class="nature__subtitle subtitle">Зачем ехать в Норильск?</h3>
          </div>
          <div class="nature__slider">
            <div class="nature__slider-block">
              <div class="nature__slide slide">
                <div class="col nature__col-1">
                  <h4 class="nature__slide-title">Чтобы увидеть 
                    <span class="nature__slide-title--blue">сугробы</span> 5 метров в высоту</h4>
                </div>
                <p class="col nature__col-2 slide__image">
                  <img src="./img/flora-fauna/nature/1.jpg" alt="Норильские сугробы">
                </p>
              </div>

              <div class="nature__slide slide">
                <div class="col nature__col-1">
                  <h4 class="nature__slide-title">
                    Чтобы увидеть невероятное <span class="nature__slide-title--blue">северное сияние</span>
                  </h4>
                </div>
                <p class="col nature__col-2 slide__image">
                  <img src="./img/flora-fauna/nature/2.jpg" alt="Северное сияние">
                </p>
              </div>

              <div class="nature__slide slide">
                <div class="col nature__col-1">
                  <h4 class="nature__slide-title">
                    Чтобы <span class="nature__slide-title--blue">ощутить на себе</span>
                    -60 градусов
                  </h4>
                </div>
                <p class="col nature__col-2 slide__image">
                  <img src="./img/flora-fauna/nature/3.jpg" alt="Фотография туриста зимой">
                </p>
              </div>
            </div>
            <footer class="nature__footer">
              <div class="nature__arrows"></div>
              <!-- <span>1 - 3</span> -->
            </footer>
          </div>
        </div>
      </section>

      <section class="facts-1 scrollify" data-section="3">
        <div class="wrapper wrapper--column">
          <div class="facts-1__slider">
            <div class="facts-1__slider-block">
              <div class="facts-1__slide">
                <div class="col facts-1__description">
                  <h2 class="facts-1__title title">Факты о Норильске</h2>
                  <h3 class="facts-1__slide-title">Северный олень</h3>
                  <p class="facts-1__text">Северный олень в далёком прошлом дал возможность человеку освоить Север, в настоящее время остаётся важнейшим биологическим ресурсом народов Норильска. В результате приручения и одомашнивания северного оленя возникло северное оленеводство.</p>
                </div>
                <p class="col facts-1__image">
                  <img src="./img/flora-fauna/facts/1.jpg" alt="Северный олень">
                </p>
              </div>
              <div class="facts-1__slide">
                <div class="col facts-1__description">
                  <h2 class="facts-1__title title">Факты о Норильске</h2>
                  <h3 class="facts-1__slide-title">Lorem, ipsum dolor.</h3>
                  <p class="facts-1__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quia eos odio quae culpa velit saepe. Ab facere iste possimus maxime architecto pariatur, dolorem placeat aliquid fugiat veniam sint aperiam!</p>
                </div>
                <p class="col facts-1__image">
                  <img src="./img/flora-fauna/facts/1.jpg" alt="Lorem, ipsum dolor.">
                </p>
              </div>
            </div>
            <p class="facts-1__arrows"></p>
          </div>
          <footer class="facts facts-1__footer">
            <p class="fact">
              <span class="fact__top fact__top--black">
                187  
                <span class="fact__top--low">видов</span>
              </span>
              <span class="fact__bottom">птиц встречается на территории</span>
            </p>
            <p class="fact">
              <span class="fact__top fact__top--black">
                34 
                <span class="fact__top--low">вида</span>
              </span>
              <span class="fact__bottom">различных млекопитающих </span>
            </p>
            <p class="fact">
              <span class="fact__top fact__top--black">
                <span class="fact__top--low">около</span>
                40
                <span class="fact__top--low">видов</span>
              </span>
              <span class="fact__bottom">и подвидов рыб в реках, озерах и море</span>
            </p>
          </footer>
        </div>
      </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/jquery.scrollify.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/flora-fauna.js"></script>
    <script src="js/index.js"></script>
    <script src="js/nav-mobile.js"></script>
  </body>
</html>