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
    <main class="article-page">
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
    </main>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>