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
  <body class="contacts">
    <?php 
      require_once 'includes/aside.php';
      require_once 'includes/nav.php';
      require_once 'includes/nav-mobile.php';
    ?>
    <header class="header header__contacts scrollify" data-section="1">
      <div class="wrapper wrapper--column wrapper--center white">
        <div class="row row--center h-100">
          <h1 class="title">Контакты</h1>
          <p class="header__text">Ваше незабываемое путешествие на крайний Север - наша работа</p>
        </div>
        <a class="button" href="#more">Подробнее</a>
      </div>
    </header>
    
    <main id="more">
      <section class="contacts__intro intro tabs scrollify" data-section="2">
        <div class="wrapper wrapper--column">
          <h2 class="intro__title title">Муниципальное автономное учреждение<br> «Центр развития туризма»</h2>
          <p class="contacts__intro-text intro__text">
            С каждым годом все больше людей хотят посетить Норильск и близлежащие территории. Многие узнают о том, что на территории Норильска находится множество природных памятников, а также виды от которых просто захватывает дух.
            С целью продвижения туристического потенциала Норильска был создан Центр развития туризма, сотрудники которого с удовольствием ответят на все вопросы туристов и помогут узнать больше о территории Крайнего Севера.
          </p>
          <img class="contacts__intro-image" src="./img/contacts/1.jpg" alt="Фотография туриста">
        </div>
      </section>

      <section class="projects tabs scrollify" data-section="3">
        <div class="wrapper wrapper--column black">
          <h2 class="projects__title title">Проекты, направленные на развитие туризма</h2>
          <div class="row">
            <div class="projects__col col">
              <h3 class="projects__subtitle subtitle">Проект «Красные камни»</h3>
              <a href="404.php" class="button">Читать больше</a>
            </div>
            <p class="projects__col col projects__text">
              В феврале 2020 года Правительством Красноярского края утверждены границы и определен режим особой охраны территории памятника природы краевого значения «Ландшафтный участок «Красные камни».<br><br>
              Центр развития туризма вошел в группу, обеспечивающую сохранность данной территории.
            </p>
          </div>
          <img class="projects__image" src="./img/contacts/2.jpg" alt="Фотография водопада">
        </div>
      </section>

      <section class="projects tabs scrollify" data-section="4">
        <div class="wrapper wrapper--column black">
          <h2 class="projects__title title">Проекты, направленные на развитие туризма</h2>
          <div class="row">
            <div class="projects__col col">
              <h3 class="projects__subtitle subtitle">Туристско-рекреационный кластер<br>“Арктический”</h3>
              <a href="404.php" class="button">Читать больше</a>
            </div>
            <p class="col projects__text">
              Сегодня арктический туризм становится драйвером роста северных территорий по всему миру, количество желающих посетить Северный полюс и Русскую Арктику постоянно растет.<br><br>
              Концепция развития туристской индустрии в Красноярском крае включает в себя создание и развитие кластера «Арктический», включающего в себя город Норильск, Таймырский Долгано-Ненецкий муниципальный район, а также, в перспективе, Туруханский и Эвенкийский муниципальный районы.
            </p>
          </div>
          <img class="projects__image" src="./img/contacts/3.jpg" alt="Фотография реки">
        </div>
      </section>

      <section class="crt scrollify" data-section="5">
        <div class="wrapper wrapper--column wrapper--center">
          <div class="row">
            <p class="col crt__logo">
              <img src="./img/contacts/5.png" alt="Логотип ЦРТ Норильск">
            </p>
            <div class="col">
              <h2 class="title crt__title">Контакты</h2>
              <div class="crt__description">
                <h4>Наименование учреждения</h4>
                <p>Муниципальное автономное учреждение муниципального образования город Норильск «Центр развития туризма»</p>
                <h4>Контактные телефоны, e-mail</h4>
                <p>
                  <a href="tel:(3919) 43-71-47">Тел./факс (3919) 43-71-47 (доб. 1881, 1882, 1883)</a>
                  <a href="mailto:turizm@norilsk-city.ru">turizm@norilsk-city.ru</a>
                </p>
                <h4>Почтовый адрес</h4>
                <p>663305, Красноярский край, город Норильск, Ленинский проспект д1, офис 523</p>
                <h4>Директор</h4>
                <p>Кузнецова Галина Васильевна</p>
                <p class="crt__document">
                  <img src="./img/contacts/icons/1.png" alt="Документ">
                  <a href="">Туристский информационный паспорт</a>
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="operators scrollify" data-section="6">
        <div class="wrapper wrapper--column">
          <div class="row">
            <h2 class="title">Туроператоры</h2>
          </div>
          <div class="row">
            <ul class="operators__list col">
              <li class="operators__item">Туроператор «Панарктик Стар»</li>
              <li class="operators__item">ООО ПутораныТур</li>
            </ul>
            <div class="col">
                <div class="operators__desc">
                  <h4 class="operators__name">Туроператор «Пагнарктик Стар»</h4>
                  <ul class="operators__contacts">
                    <li>
                      <a href="tel:+7 (3919) 49-32-02">тел.: +7 (3919) 49-32-02</a>
                    </li>
                    <li>
                      <a href="tel:8-800-250-32-02">тел.:  8-800-250-32-02</a>
                    </li>
                    <li>
                      <a href="tel:+7 (910) 001-04-90">тел.: +7 (910) 001-04-90</a>
                    </li>
                    <li>
                      <a href="mailto:info@panarcticstar.ru">e-mail: info@panarcticstar.ru</a>
                    </li>
                    <li>г. Норильск, ул. Комсомольская, д. 33А, офис 404</li>
                  </ul>
                  <img src="./img/contacts/logos/1.jpg" alt="Панарктик Стар">
                </div>

                <div class="operators__desc">
                  <h4 class="operators__name">ООО ПутораныТур</h4>

                  <ul class="operators__contacts">
                    <li>
                      <a href="tel:+7 913 498 33 84">тел.: +7 913 498 33 84</a>
                    </li>
                    <li>
                      <a href="tel:+7 913 530 01 77">тел.: +7 913 530 01 77</a>
                    </li>
                    <li>
                      <a href="tel:+7 913 530 01 77">тел.: +7 913 530 01 77</a>
                    </li>
                    <li>
                      <a href="mailto:contuel@mail.ru">e-mail: contuel@mail.ru</a>
                    </li>
                    <li>
                      <a href="https://taplink.cc/putoranatour">Instagram: putoranatour</a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/putoranatour/">Facebook: ПутораныТур</a>
                    </li>
                  </ul>
                  <img src="./img/contacts/logos/2.png" alt="ООО ПутораныТур">
                </div>
            </div>
          </div>
        </div>
      </section>

      <section class="emergency scrollify" data-section="7">
        <div class="wrapper wrapper--column wrapper--center">
          <div class="row">
            <p class="col crt__logo">
              <img src="./img/contacts/6.png" alt="ЭКСТРЕННЫЕ СЛУЖБЫ">
            </p>
            <div class="col">
              <h2 class="title crt__title">ЭКСТРЕННЫЕ СЛУЖБЫ</h2>
              <div class="crt__description">
                <h4>Единая дежурно-диспетчерская служба города Норильска</h4>
                <p>
                  <a href="tel:22-33-38">Тел. 22-33-38</a>
                  <a href="tel:22-33-39">Тел. 22-33-39</a>
                  <a href="tel:112">Тел. 112</a>
                </p>
                <h4>Пожарная охрана</h4>
                <p>
                  <a href="tel:(101) 01">Тел. (101) 01</a>
                </p>
                <h4>Полиция</h4>
                <p>
                  <a href="tel:(101) 02">Тел. (101) 02</a>
                </p>
                <h4>Скорая помощь</h4>
                <p>
                  <a href="tel:(101) 03">Тел. (101) 03</a>
                </p>
                <h4>Аварийно-спасательный отряд экстренного реагирования</h4>
                <p>
                  <a href="tel:112">Тел. 112</a>
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners scrollify" data-section="8">
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

      <section class="feedback scrollify" data-section="9">
        <div class="wrapper feedback__wrapper white">
          <div>
            <h2 class="title feedback__title">У вас остались вопросы?</h2>
            <p class="feedback__desc">Оставьте свои контактыне данные и наш специалист свяжется с вами в ближайшее время и ответит на все интересующие вас вопросы!</p>
          </div>
          
          <form class="feedback__form" action="mail.php" method="POST">
              <textarea class="feedback__textarea" type="text" name="text" placeholder="Введите ваш вопрос здесь..."></textarea>
              <input class="feedback__input" type="name" name="name" placeholder="Имя">
              <input class="feedback__input" type="tel" name="tel" placeholder="Номер телефона">
              <button type="submit" class="feedback__button button">Отправить</button>
          </form>

          <ul class="feedback__address address">
            <li class="address__item">
              <a href="mailto:turizm@norilsk-city.ru">turizm@norilsk-city.ru</a>
            </li>
            <li class="address__item">г. Норильск, пр-т Ленинский д1, офис 523</li>
          </ul>
      </div>
    </section>
    </main>
    
    <?php
      $footer = tpl_render('footer.php', ['dataSection' => 10]);
      print ($footer);
    ?>
  </body>
</html>