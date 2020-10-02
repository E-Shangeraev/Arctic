<?php
header("Content-type:text/html; charset=UTF-8");
require 'includes/config.php';
require 'functions.php'; 
error_reporting(0);

if ($_POST['param']) {
    $param = json_decode($_POST['param']);
    $array = get_more($param->offset, $param->limit);
    echo json_encode($array);
    exit();
}

// if ($_POST['oninput']) {
//     $oninput = json_decode($_POST['oninput']);
//     // $arr = get_more($oninput->day, $oninput->month, $oninput->year);
//     // echo json_encode($arr);
//     echo $oninput;
//     exit();
// }

if ($_POST['events']) {
    $events = json_decode($_POST['events']);
    $events_arr = get_events($events->month, $events->year);
    echo json_encode($events_arr);
    exit();
}


// $events = mysqli_query($connection, "SELECT * FROM `events` ORDER BY `id` DESC");

// while($evt = mysqli_fetch_assoc($events)) {
//     $events_arr[] = json_encode($evt);
// }

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
            <?php require_once 'includes/header-nav.php'; ?>
            
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

                <?php     
                            // require 'includes/config.php';
                        // $date = $year . '-' . $month . '-' . '18';
                            // $date = '2020-10-18';
                        // $date = strval($date);
                            // $year = 2020;
                            // $month = 10;
                            // $result = mysqli_query($connection, "SELECT * FROM `events` WHERE `year` = $year AND `month` = $month");
                            // $result = mysqli_query($connection, "SELECT * FROM `events` WHERE `date` = '{$date}'");
                            // print_r(mysqli_fetch_assoc($result));
                            // die();
                            // $result = mysqli_query($connection, "SELECT * FROM `events` WHERE (`year` = '{$year}' AND `month` = '{$month}')");
                            ?>


                <section class="tabs blog__top">
                    <div class="tab tab--calendar active ">
                        <div class="blog__container">
                            <div class="blog__column-1">
                                <div class="blog__calendar">
                                    <img src="./img/blog-page/1.jpg" alt="Календарь событий">
                                    <div class="blog__calendar-description">
                                        <h2 class="blog__calendar-title">Календарь событий</h2>
                                        <p class="blog__calendar-appeal">Посмотрите календарь событий на предстоящий месяц и найдите событие, которое будет Вам по душе!</p> 
                                        <span class="blog__timetable"></span>
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
                                                <!-- <li class="calendar__events-item">
                                                    <a href="./article-page.html">Фестиваль подледной рыблки на Енисее</a> 
                                                </li>
                                                <li class="calendar__events-item">
                                                    <a href="./article-page.html">Поездка на плато Путорана на снегоходах</a> 
                                                </li>
                                                <li class="calendar__events-item">
                                                    <a href="./article-page.html">Поездка на плато Путорана на снегоходах</a> 
                                                </li> -->
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
                                    <a href="article.php?id=<?= $art['id']; ?>" class="blog__popular article-preview">
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
                                        <p class="article-preview__new"><?= $art['title']; ?></p>
                                        <span class="article-preview__appeal">Знаете ли вы?</span>
                                        <time class="article-preview__datetime" datetime="<?= $art['pubdate']; ?>"><?= $art['pubdate']; ?></time>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab tab--news">
                        <h2 class="articles-section__title blog__articles-title">Новости Норильска</h2>
                        <?php
                            $articles = tpl_render('articles.php', ['id' => 1]);
                            print ($articles);
                        ?>
                    </div>

                    <div class="tab tab--tourist">
                        <h2 class="articles-section__title blog__articles-title">Туристу</h2>
                        <?php
                            $articles = tpl_render('articles.php', ['id' => 2]);
                            print ($articles);
                        ?>
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
                                    <p class="article-preview__new"><?= $art['title']; ?></p>
                                    <span class="article-preview__appeal">Знаете ли вы?</span>
                                    <time class="article-preview__datetime" datetime="2020-05-12T09:01"><?= $art['pubdate']; ?></time>
                                </div>
                            </a>
                        </li>
                        <!-- <div id="articles-more"></div> -->
                    <?php endwhile; ?>
                    </ul>
                    <button class="show-more-button" name="more">Показать еще</button>
                </section>
            </div>
        </section>
        
    </main>

    <?php require_once 'includes/footer.php'; ?>

    <?php 
        $total_count_q =  mysqli_query($connection, "SELECT COUNT(id) AS `total_count` FROM `articles`");
        $total_count = mysqli_fetch_assoc($total_count_q);
        $total_count = $total_count['total_count'];
    ?>
    <script>
        const limit = "<?php echo $total_count ?>";
    </script>

    <script type="module" src="./js/Tabs.js"></script>
    <script type="module" src="./js/blog-rubrics.js"></script>
    <script src="./js/calendar.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/show-more-button.js"></script>
</body>
</html>