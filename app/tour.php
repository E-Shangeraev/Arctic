<?php require_once 'includes/config.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Арктика</title>
    <link rel="stylesheet" href="/css/style.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <main class="tour-page">
        <article class="article">
            <div class="article__wrapper wrapper">
                <div class="article__container">
                    <div class="article__column-1">
                        <a href="/tours-page.php" class="article__link-back article__link-back--activitie">
                            <svg class="article__link-back-arrow" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.6016 0.549737C6.67727 0.625211 6.7373 0.714872 6.77826 0.813582C6.81922 0.912293 6.84031 1.01812 6.84031 1.12499C6.84031 1.23186 6.81922 1.33768 6.77826 1.43639C6.7373 1.5351 6.67727 1.62476 6.6016 1.70024L2.30023 5.99999L6.6016 10.2997C6.67715 10.3753 6.73707 10.465 6.77796 10.5637C6.81884 10.6624 6.83988 10.7682 6.83988 10.875C6.83988 10.9818 6.81884 11.0876 6.77796 11.1863C6.73707 11.285 6.67715 11.3747 6.6016 11.4502C6.52606 11.5258 6.43638 11.5857 6.33768 11.6266C6.23898 11.6675 6.13319 11.6885 6.02635 11.6885C5.91952 11.6885 5.81373 11.6675 5.71503 11.6266C5.61633 11.5857 5.52665 11.5258 5.4511 11.4502L0.576105 6.57524C0.500439 6.49976 0.440407 6.4101 0.399447 6.31139C0.358486 6.21268 0.337402 6.10686 0.337402 5.99999C0.337402 5.89312 0.358486 5.78729 0.399447 5.68858C0.440407 5.58987 0.500439 5.50021 0.576105 5.42474L5.4511 0.549737C5.52658 0.474072 5.61624 0.414039 5.71495 0.373079C5.81366 0.332119 5.91948 0.311035 6.02635 0.311035C6.13323 0.311035 6.23905 0.332119 6.33776 0.373079C6.43647 0.414039 6.52613 0.474072 6.6016 0.549737Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.0625 6C1.0625 5.78451 1.1481 5.57785 1.30048 5.42548C1.45285 5.2731 1.65951 5.1875 1.875 5.1875L18.9375 5.1875C19.153 5.1875 19.3597 5.2731 19.512 5.42548C19.6644 5.57785 19.75 5.78451 19.75 6C19.75 6.21549 19.6644 6.42215 19.512 6.57452C19.3597 6.7269 19.153 6.8125 18.9375 6.8125L1.875 6.8125C1.65951 6.8125 1.45285 6.7269 1.30048 6.57452C1.1481 6.42215 1.0625 6.21549 1.0625 6Z" fill="black"/>
                            </svg>
                            <span class="link-back__text link-back__text">Назад</span>
                        </a>
                        <h3>Дополнительно к турам</h3>
                        <p class="activities__info">Некоторые опции, которые вы можете добавить в свой тур</p>
                        <ul class="activities-page__list">
                            <li class="activities-page__item" style="padding: 40px 0;">
                                <div class="activities-page__item-description">
                                    <h3>Вертолет</h3>
                                    <p>Исследуйте красоты северной природы с высоты птичьего полета. Рассмотритре все уголки нетронутой природы с вертолета.</p>
                                </div>
                            </li>
                            <li class="activities-page__item" style="padding: 40px 0;">
                                <div class="activities-page__item-description">
                                    <h3>Катер</h3>
                                    <p>Любуйтесь природой с воды. На катере вы сможете подобраться к тем местам, куда не пройти ногами.
                                    Добавьте его в свой тур!</p>
                                </div>
                            </li>
                            <li class="activities-page__item" style="padding: 40px 0;">
                                <div class="activities-page__item-description">
                                    <h3>Внедорожник</h3>
                                    <p>Прокатитесь по удивительным местам на джипе, это комфортный способ добраться до любой точки тура, получив при этом массу эмоций.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="article__column-2">
                        <?php
                            $tours = mysqli_query($connection, "SELECT * FROM `tours` WHERE `id` = " . (int) $_GET['id']);
                            $tour = mysqli_fetch_assoc($tours);
                            if ( mysqli_num_rows($tours) <= 0): 
                        ?>
                        <h2 class="article__title">Ошибка</h2>
                        <p class="article__text">Статья не найдена</p>

                        <?php else: ?>
                          <p class="bread-crumbs">
                            <a href="/tours-page.php">Туры</a> / <?= $tour['title']; ?>
                        </p>
                        <h2 class="article__title"><?= $tour['title']; ?></h2>
                        <span style="margin-bottom: 20px; display: block;">Ознакомиться с описанием тура вы можете ниже</span>
                        <div class="article__image" style="background: urL(/img/tours-page/tours/<?= $tour['image']; ?>) center center no-repeat; background-size: cover;"></div>
                        <p class="article__text"><?= $tour['text']; ?></p>
                        <?php endif; ?>

                        <?php if ($tour['id'] == 1): ?>
                        <h3>В рамках этого тура возможно посещение таких мест как:</h3>
                        <ul class="tour__list">
                          <li class="tour__item">
                            <img src="/img/tours-page/tours/tour-1/1.jpg" alt="Плато Путорана">
                            <h4>Плато Путорана</h4>
                          </li>
                          <li class="tour__item">
                            <img src="/img/tours-page/tours/tour-1/2.jpg" alt="Горный водопад реки Нералах-юрях">
                            <h4>Горный водопад реки Нералах-юрях</h4>
                          </li>
                          <li class="tour__item">
                            <img src="/img/tours-page/tours/tour-1/3.jpg" alt="Красные камни">
                            <h4>Красные камни</h4>
                          </li>
                        </ul>
                        <p>Также в Норильске можно увидеть фантастические сполохи северного сияния. Каждую зиму над городом возникают мерцающие полосы самых невероятных оттенков. Те, кому посчастливилось увидеть это чудо, часто приезжают на Крайний Север вновь ради фантастических кадров.</p>
                        <b>*Места для посещения в рамках тура согласовываются индивидуально с туроператором</b>
                        <?php endif; ?>

                        <?php if ($tour['id'] == 2): ?>
                        <h3>В рамках этого тура возможно посещение таких мест как:</h3>
                        <ul class="tour__list">
                          <li class="tour__item">
                            <img src="/img/tours-page/tours/tour-2/1.jpg" alt="Озеро «Собачье»">
                            <h4>Озеро «Собачье»</h4>
                          </li>
                          <li class="tour__item">
                            <img src="/img/tours-page/tours/tour-2/2.jpg" alt="Река «Витаминка»">
                            <h4>Река «Витаминка»</h4>
                          </li>
                          <li class="tour__item">
                            <img src="/img/tours-page/tours/tour-2/3.jpg" alt="Озеро «Лама»">
                            <h4>Озеро «Лама»</h4>
                          </li>
                        </ul>
                        <b>*Места для посещения в рамках тура согласовываются индивидуально с туроператором</b>
                        <?php endif; ?>

                    </div>
                </div>
                
            </div>
        </article>
        <section class="tour-feedback">
            <div class="feedback__wrapper wrapper">
                <div class="feedback__container">
                    <div class="feedback__column-1">
                        <h1 class="feedback__title title">Оставьте заявку<br>на тур</h1>
                    </div>
                    <div class="feedback__column-2">
                        <p class="feedback__text">
                            Оставьте свои контактыне данные и наш менеджер свяжется с вами в ближайшее время 
                            и ответит на все интересующие вас вопросы!
                        </p>
                    </div>
                </div>
                <form class="feedback__form" action="mail.php" method="POST">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="tel" name="tel" placeholder="Номер телефона">
                    <input type="text" name="text" placeholder="Ваш комментарий">
                    <button class="feedback__button">
                        <span>Отправить</span>
                        <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M53.7056 56.5464C53.6008 56.4419 53.5177 56.3178 53.461 56.1811C53.4043 56.0444 53.3751 55.8979 53.3751 55.7499C53.3751 55.602 53.4043 55.4554 53.461 55.3188C53.5177 55.1821 53.6008 55.0579 53.7056 54.9534L59.6613 48.9999L53.7056 43.0464C53.601 42.9418 53.518 42.8177 53.4614 42.681C53.4048 42.5443 53.3757 42.3979 53.3757 42.2499C53.3757 42.102 53.4048 41.9555 53.4614 41.8189C53.518 41.6822 53.601 41.558 53.7056 41.4534C53.8102 41.3488 53.9344 41.2659 54.071 41.2093C54.2077 41.1527 54.3542 41.1235 54.5021 41.1235C54.65 41.1235 54.7965 41.1527 54.9331 41.2093C55.0698 41.2659 55.194 41.3488 55.2986 41.4534L62.0486 48.2034C62.1533 48.3079 62.2365 48.4321 62.2932 48.5688C62.3499 48.7054 62.3791 48.852 62.3791 48.9999C62.3791 49.1479 62.3499 49.2944 62.2932 49.4311C62.2365 49.5678 62.1533 49.6919 62.0486 49.7964L55.2986 56.5464C55.1941 56.6512 55.0699 56.7343 54.9333 56.791C54.7966 56.8478 54.6501 56.877 54.5021 56.877C54.3541 56.877 54.2076 56.8478 54.0709 56.791C53.9342 56.7343 53.8101 56.6512 53.7056 56.5464Z" fill="black"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M61.375 49C61.375 49.2984 61.2565 49.5845 61.0455 49.7955C60.8345 50.0065 60.5484 50.125 60.25 50.125L36.625 50.125C36.3266 50.125 36.0405 50.0065 35.8295 49.7955C35.6185 49.5845 35.5 49.2984 35.5 49C35.5 48.7016 35.6185 48.4155 35.8295 48.2045C36.0405 47.9935 36.3266 47.875 36.625 47.875L60.25 47.875C60.5484 47.875 60.8345 47.9935 61.0455 48.2045C61.2565 48.4155 61.375 48.7016 61.375 49Z" fill="black"/>
                        </svg>
                    </button>
                </form>
            </div>
        </section>


    </main>

    <?php require_once 'includes/footer.php'; ?>

    <script src="js/mail.js"></script>
</body>
</html>