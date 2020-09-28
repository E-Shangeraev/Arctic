<?php 
require 'includes/config.php';
require 'functions.php'; 
error_reporting(0);
// require 'show_more.php';

if ($_POST['param']) {
    $param = json_decode($_POST['param']);
    $array = get_more($param->offset, $param->limit);
    echo json_encode($array);
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Арктика</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
</head>
<body>
    <header class="blog-header header">
        <div class="header__content">
            <nav class="header__nav nav">
                <a href="index.html" class="nav__logo">
                    <svg width="105" height="74" viewBox="0 0 105 74" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="105" height="74" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0" transform="translate(0 -0.00127831) scale(0.003861 0.00547845)"/>
                        </pattern>
                        <image id="image0" width="259" height="183" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>   
                </a>
                <ul class="nav__items">
                    <li><a href="tours-page.html">Туры</a></li>
                    <li><a href="activities-page.html">Активности</a></li>
                    <li><a href="faq-page.html">FAQ</a></li>
                    <li><a href="norilsk-page.html">Норильск</a></li>
                    <li><a href="#">Центр развития туризма Норильска</a></li>
                    <li><a href="blog-page.html">Блог</a></li>
                    <li><a href="#">Для слабовидящих</a></li>
                </ul>
                <ul class="nav__lang">
                    <li><a href='#' class="active">RUS</a></li>
                    <li><a href='#'>ENG</a></li>
                </ul>
                <ul class="nav__phone">
                    <li><a href="tel:+7 999 123-45-67">+7 999 123-45-67</a></li>
                </ul>
            </nav>
            
            <div class="header__wrapper wrapper">
                <div class="header__column-1">
                    <h1 class="header__title">Блог</h1>
                    <p class="header__description">
                        В этот раздел попадают материалы, которые могут быть полезны либо интресны вам как туристу.
                    </p>
                    <p class="header__icon">
                        <svg width="21" height="33" viewBox="0 0 21 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.4743 0C5.12194 0 0.767578 4.35436 0.767578 9.70674V23.2933C0.767578 28.6456 5.12194 33 10.4743 33C15.8267 33 20.1811 28.6456 20.1811 23.2933V9.70674C20.1811 4.35436 15.8267 0 10.4743 0ZM18.2011 23.2933C18.2011 27.5537 14.7348 31.0201 10.4743 31.0201C6.21387 31.0201 2.7475 27.5537 2.7475 23.2933V9.70674C2.7475 5.44629 6.21387 1.97992 10.4743 1.97992C14.7348 1.97992 18.2011 5.44629 18.2011 9.70674V23.2933Z" fill="white"/>
                            <path class="header__icon-wheel" d="M10.4746 6.56445C9.92773 6.56445 9.48462 7.00757 9.48462 7.55441V12.1109C9.48462 12.6575 9.92773 13.1009 10.4746 13.1009C11.0212 13.1009 11.4645 12.6575 11.4645 12.1109V7.55441C11.4645 7.00757 11.0214 6.56445 10.4746 6.56445Z" fill="white"/>
                        </svg>
                        <span>Листайте вниз</span>
                    </p>
                </div>
                
                <div class="header__column-2">
                    <a href="#" class="header__button big-button">
                        <span>Выбрать тур</span>
                        <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="49" cy="49" r="48" stroke="white" stroke-width="2"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M53.7056 56.5464C53.6008 56.4419 53.5177 56.3178 53.461 56.1811C53.4043 56.0444 53.3751 55.8979 53.3751 55.7499C53.3751 55.602 53.4043 55.4554 53.461 55.3188C53.5177 55.1821 53.6008 55.0579 53.7056 54.9534L59.6613 48.9999L53.7056 43.0464C53.601 42.9418 53.518 42.8177 53.4614 42.681C53.4048 42.5443 53.3757 42.3979 53.3757 42.2499C53.3757 42.102 53.4048 41.9555 53.4614 41.8189C53.518 41.6822 53.601 41.558 53.7056 41.4534C53.8102 41.3488 53.9344 41.2659 54.071 41.2093C54.2077 41.1527 54.3542 41.1235 54.5021 41.1235C54.65 41.1235 54.7965 41.1527 54.9331 41.2093C55.0698 41.2659 55.194 41.3488 55.2986 41.4534L62.0486 48.2034C62.1533 48.3079 62.2365 48.4321 62.2932 48.5688C62.3499 48.7054 62.3791 48.852 62.3791 48.9999C62.3791 49.1479 62.3499 49.2944 62.2932 49.4311C62.2365 49.5678 62.1533 49.6919 62.0486 49.7964L55.2986 56.5464C55.1941 56.6512 55.0699 56.7343 54.9333 56.791C54.7966 56.8478 54.6501 56.877 54.5021 56.877C54.3541 56.877 54.2076 56.8478 54.0709 56.791C53.9342 56.7343 53.8101 56.6512 53.7056 56.5464Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M61.375 49C61.375 49.2984 61.2565 49.5845 61.0455 49.7955C60.8345 50.0065 60.5484 50.125 60.25 50.125L36.625 50.125C36.3266 50.125 36.0405 50.0065 35.8295 49.7955C35.6185 49.5845 35.5 49.2984 35.5 49C35.5 48.7016 35.6185 48.4155 35.8295 48.2045C36.0405 47.9935 36.3266 47.875 36.625 47.875L60.25 47.875C60.5484 47.875 60.8345 47.9935 61.0455 48.2045C61.2565 48.4155 61.375 48.7016 61.375 49Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="blog-page">
        <section class="blog">
            <div class="blog__wrapper wrapper">
                <nav class="blog__nav">
                    <ul class="blog__nav-list">
                        <li class="blog__nav-item active" data-value="calendar">Календарь событий</li>
                        <li class="blog__nav-item" data-value="news">Новости Норильска</li>
                        <li class="blog__nav-item" data-value="tourist">Туристу</li>
                        <li class="blog__nav-item" data-value="report">Отчеты</li>
                    </ul>
                </nav>

                <section class="tabs blog__top">
                    <div class="tab tab--calendar active ">
                        <div class="blog__container">
                            <div class="blog__column-1">
                                <div class="blog__calendar">
                                    <img src="./img/blog-page/1.jpg" alt="Календарь событий">
                                    <div class="blog__calendar-description">
                                        <h2 class="blog__calendar-title">Календарь событий</h2>
                                        <p class="blog__calendar-appeal">Посмотрите календарь событий на предстоящий месяц и найдите событие, которое будет Вам по душе!</p> 
                                        <span class="blog__timetable">Расписание на июль</span>
                                        <button class="blog__button big-button">
                                            <span>Посмотреть</span>
                                            <svg width="66.72" height="66.72" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="49" cy="49" r="48" stroke="black" stroke-width="2"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M53.7056 56.5464C53.6008 56.4419 53.5177 56.3178 53.461 56.1811C53.4043 56.0444 53.3751 55.8979 53.3751 55.7499C53.3751 55.602 53.4043 55.4554 53.461 55.3188C53.5177 55.1821 53.6008 55.0579 53.7056 54.9534L59.6613 48.9999L53.7056 43.0464C53.601 42.9418 53.518 42.8177 53.4614 42.681C53.4048 42.5443 53.3757 42.3979 53.3757 42.2499C53.3757 42.102 53.4048 41.9555 53.4614 41.8189C53.518 41.6822 53.601 41.558 53.7056 41.4534C53.8102 41.3488 53.9344 41.2659 54.071 41.2093C54.2077 41.1527 54.3542 41.1235 54.5021 41.1235C54.65 41.1235 54.7965 41.1527 54.9331 41.2093C55.0698 41.2659 55.194 41.3488 55.2986 41.4534L62.0486 48.2034C62.1533 48.3079 62.2365 48.4321 62.2932 48.5688C62.3499 48.7054 62.3791 48.852 62.3791 48.9999C62.3791 49.1479 62.3499 49.2944 62.2932 49.4311C62.2365 49.5678 62.1533 49.6919 62.0486 49.7964L55.2986 56.5464C55.1941 56.6512 55.0699 56.7343 54.9333 56.791C54.7966 56.8478 54.6501 56.877 54.5021 56.877C54.3541 56.877 54.2076 56.8478 54.0709 56.791C53.9342 56.7343 53.8101 56.6512 53.7056 56.5464Z" fill="black"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M61.375 49C61.375 49.2984 61.2565 49.5845 61.0455 49.7955C60.8345 50.0065 60.5484 50.125 60.25 50.125L36.625 50.125C36.3266 50.125 36.0405 50.0065 35.8295 49.7955C35.6185 49.5845 35.5 49.2984 35.5 49C35.5 48.7016 35.6185 48.4155 35.8295 48.2045C36.0405 47.9935 36.3266 47.875 36.625 47.875L60.25 47.875C60.5484 47.875 60.8345 47.9935 61.0455 48.2045C61.2565 48.4155 61.375 48.7016 61.375 49Z" fill="black"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
        
                                <div class="calendar visually-hidden">
                                    <div class="calendar__container">
                                        <div class="calendar__column-1">
                                            <p class="calendar__date">
                                                <span class="calendar__day"></span>
                                                <span class="calendar__month"></span>
                                                <span class="calendar__year"></span>
                                            </p>
                                            <h2 class="calendar__events-title">События в этот день</h2>
                                            <ul class="calendar__events-list">
                                                <li class="calendar__events-item">
                                                    <a href="./article-page.html">Фестиваль подледной рыблки на Енисее</a> 
                                                </li>
                                                <li class="calendar__events-item">
                                                    <a href="./article-page.html">Поездка на плато Путорна на снегоходах</a> 
                                                </li>
                                                <li class="calendar__events-item">
                                                    <a href="./article-page.html">Поездка на плато Путорна на снегоходах</a> 
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="calendar__column-2">
                                            <ul class="calendar__top-list">
                                                <li class="calendar__top-item">
                                                    <span class="calendar__top-month"></span>
                                                    <span class="calendar__top-year"></span>
                                                </li>
                                                <li class="calendar__top-item calendar__top-item--active">
                                                    <span class="calendar__top-month"></span>
                                                    <span class="calendar__top-year"></span>
                                                </li>
                                                <li class="calendar__top-item">
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
                            <div class="blog__column-2">
                                <?php
                                    $categories = mysqli_query($connection, "SELECT * FROM `article_categories`");
                                    $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 1");
                                    
                                    while( $art = mysqli_fetch_assoc($articles) ): ?>
                                    <a href="#" class="blog__popular article-preview">
                                        <?php
                                            $art_cat = false;
                                            foreach( $categories as $cat) {
                                            if ( $cat['id'] == $art['categorie_id'] ) {
                                                $art_cat = $cat;
                                                break;
                                            }
                                            }
                                        ?>
                                        <h2 class="article-preview-title">Популярные статьи</h2>
                                        <img src="./img/blog-page/<?= $art['image']; ?>" alt="<?= $art_cat['title']; ?>">
                                        <span class="article-preview__class"><?= $art_cat['title']; ?></span>
                                        <span class="article-preview__appeal">Знаете ли вы?</span>
                                        <p class="article-preview__new"><?= $art['title']; ?></p>
                                        <time class="article-preview__datetime" datetime="<?= $art['pubdate']; ?>"><?= $art['pubdate']; ?></time>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab tab--news">
                        <h2 class="articles-section__title blog__articles-title">Новости Норильска</h2>
                        <ul class="articles-section__list blog__articles-list">
                            <?php 
                                $categories = mysqli_query($connection, "SELECT * FROM `article_categories`");
                                $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = 1 ORDER BY `id` DESC LIMIT 4");

                                while( $art = mysqli_fetch_assoc($articles) ): ?>
                                <li>
                                    <a href="/article.php?id=<?= $art['id']; ?>" class="article-preview article-preview--list">
                                        <?php
                                            $art_cat = false;
                                            foreach( $categories as $cat) {
                                            if ( $cat['id'] == $art['categorie_id'] ) {
                                                $art_cat = $cat;
                                                break;
                                            }
                                            }
                                        ?>
                                        <img src="./img/blog-page/<?= $art['image']; ?>" alt="<?= $art_cat['title']; ?>">
                                        <div class="article-preview__text">
                                            
                                            <span class="article-preview__class"><?= $art_cat['title'] ?></span>
                                            <span class="article-preview__appeal">Знаете ли вы?</span>
                                            <p class="article-preview__new"><?= $art['title']; ?></p>
                                            <time class="article-preview__datetime" datetime="2020-05-12T09:01"><?= $art['pubdate']; ?></time>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>

                    <div class="tab tab--tourist">
                        <h2 class="articles-section__title blog__articles-title">Туристу</h2>
                        <ul class="articles-section__list blog__articles-list">
                            <?php 
                                $categories = mysqli_query($connection, "SELECT * FROM `article_categories`");
                                $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = 2 ORDER BY `id` DESC LIMIT 4");

                                while( $art = mysqli_fetch_assoc($articles) ): ?>
                                <li>
                                    <a href="/article.php?id=<?= $art['id']; ?>" class="article-preview article-preview--list">
                                        <img src="./img/blog-page/<?= $art['image']; ?>" alt="<?= $art_cat['title']; ?>">
                                        <div class="article-preview__text">
                                            <?php
                                                $art_cat = false;
                                                foreach( $categories as $cat) {
                                                if ( $cat['id'] == $art['categorie_id'] ) {
                                                    $art_cat = $cat;
                                                    break;
                                                }
                                                }
                                            ?>
                                            <span class="article-preview__class"><?= $art_cat['title'] ?></span>
                                            <span class="article-preview__appeal">Знаете ли вы?</span>
                                            <p class="article-preview__new"><?= $art['title']; ?></p>
                                            <time class="article-preview__datetime" datetime="2020-05-12T09:01"><?= $art['pubdate']; ?></time>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>

                    <div class="tab tab--report">
                        <h2 class="articles-section__title blog__articles-title">Отчеты</h2>
                    </div>
                </section>

                

                <section class="articles-section blog__articles">
                    <h2 class="articles-section__title blog__articles-title">Последние статьи</h2>
                    
                    <ul class="articles-section__list articles-section__list--last blog__articles-list">
                    <?php                  
                        require 'get_article.php';
                        while( $art = mysqli_fetch_assoc($articles) ): ?>
                        <li>
                            <a href="/article.php?id=<?= $art['id']; ?>" class="article-preview article-preview--list">
                                <?php
                                    $art_cat = false;
                                    foreach( $categories as $cat) {
                                    if ( $cat['id'] == $art['categorie_id'] ) {
                                        $art_cat = $cat;
                                        break;
                                    }
                                    }
                                ?>
                                <img src="./img/blog-page/<?= $art['image']; ?>" alt="<?= $art_cat['title']; ?>">
                                <div class="article-preview__text">
                                    
                                    <span class="article-preview__class"><?= $art_cat['title'] ?></span>
                                    <span class="article-preview__appeal">Знаете ли вы?</span>
                                    <p class="article-preview__new"><?= $art['title']; ?></p>
                                    <time class="article-preview__datetime" datetime="2020-05-12T09:01"><?= $art['pubdate']; ?></time>
                                </div>
                            </a>
                        </li>
                        <div id="articles-more"></div>
                    <?php endwhile; ?>
                    </ul>

                    <?php ?>
                    <button class="show-more-button" name="more">Показать еще</button>
                    <?php?>
                </section>
            </div>
        </section>
        
    </main>

    <footer class="main-footer">
        <div class="main-footer__wrapper wrapper">
            <div class="main-footer__grid-container">
                <div class="main-footer__column-1">
                    <h2 class="main-footer__sections">Разделы</h2>
                    <nav class="main-footer__nav">
                        <ul class="main-footer__nav-list">
                            <li class="main-footer__nav-item"><a href="#">Туры</a></li>
                            <li class="main-footer__nav-item"><a href="#">Активности</a></li>
                            <li class="main-footer__nav-item"><a href="#">FAQ</a></li>
                        </ul>
                        <ul class="main-footer__nav-list">
                            <li class="main-footer__nav-item"><a href="#">Норильск</a></li>
                            <li class="main-footer__nav-item"><a href="#">Центр развития туризма Норильска</a></li>
                            <li class="main-footer__nav-item"><a href="#">Блог</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="main-footer__column-2">
                    <h2 class="main-footer__contacts">Контакты</h2>
                    <ul class="main-footer__contacts-list">
                        <li class="main-footer__contact">+7 (999) 999-99-99</li>
                        <li class="main-footer__contact">info@arktika.ru</li>
                        <li class="main-footer__contact">Норильск, ул. Пушкина 32, оф. 506</li>
                    </ul>
                </div>
                <div class="main-footer__column-3">
                    <h2 class="main-footer__socials">Подписывайтесь</h2>
                    <ul class="main-footer__socials-list">
                        <li class="main-footer__socials-item">Facebook</li>
                        <li class="main-footer__socials-item">Instagram</li>
                        <li class="main-footer__socials-item">Youtube</li>
                    </ul>
                </div>    
            </div>

            <div class="main-footer__flex-container">
                <p class="main-footer__copyright">Арктика 2020. Все права защищены. Копирование материалов без активной ссылки на источник запрещено.</p>
                <p class="main-footer__politics">Политика конфиденциальности</p>
            </div>
        </div>
    </footer>

    <script type="module" src="./js/Tabs.js"></script>
    <script type="module" src="./js/blog-rubrics.js"></script>
    <script src="./js/calendar.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/show-more-button.js"></script>
</body>
</html>