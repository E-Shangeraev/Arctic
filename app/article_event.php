<?php
header("Content-type:text/html; charset=UTF-8");
require 'config/config.php';
require 'functions.php'; 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Арктика</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <?php 
      require_once 'includes/aside.php';
      require_once 'includes/nav.php';
      require_once 'includes/nav-mobile.php';
    ?>

    <main class="article-page">
        <section class="article scrollify" data-section="1">
            <div class="article__wrapper wrapper">
                <div class="article__container">
                    <div class="article__column-1">
                        <a href="#" onclick="window.history.go(-1); return false;" class="article__link-back">
                            <svg class="article__link-back-arrow" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.6016 0.549737C6.67727 0.625211 6.7373 0.714872 6.77826 0.813582C6.81922 0.912293 6.84031 1.01812 6.84031 1.12499C6.84031 1.23186 6.81922 1.33768 6.77826 1.43639C6.7373 1.5351 6.67727 1.62476 6.6016 1.70024L2.30023 5.99999L6.6016 10.2997C6.67715 10.3753 6.73707 10.465 6.77796 10.5637C6.81884 10.6624 6.83988 10.7682 6.83988 10.875C6.83988 10.9818 6.81884 11.0876 6.77796 11.1863C6.73707 11.285 6.67715 11.3747 6.6016 11.4502C6.52606 11.5258 6.43638 11.5857 6.33768 11.6266C6.23898 11.6675 6.13319 11.6885 6.02635 11.6885C5.91952 11.6885 5.81373 11.6675 5.71503 11.6266C5.61633 11.5857 5.52665 11.5258 5.4511 11.4502L0.576105 6.57524C0.500439 6.49976 0.440407 6.4101 0.399447 6.31139C0.358486 6.21268 0.337402 6.10686 0.337402 5.99999C0.337402 5.89312 0.358486 5.78729 0.399447 5.68858C0.440407 5.58987 0.500439 5.50021 0.576105 5.42474L5.4511 0.549737C5.52658 0.474072 5.61624 0.414039 5.71495 0.373079C5.81366 0.332119 5.91948 0.311035 6.02635 0.311035C6.13323 0.311035 6.23905 0.332119 6.33776 0.373079C6.43647 0.414039 6.52613 0.474072 6.6016 0.549737Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.0625 6C1.0625 5.78451 1.1481 5.57785 1.30048 5.42548C1.45285 5.2731 1.65951 5.1875 1.875 5.1875L18.9375 5.1875C19.153 5.1875 19.3597 5.2731 19.512 5.42548C19.6644 5.57785 19.75 5.78451 19.75 6C19.75 6.21549 19.6644 6.42215 19.512 6.57452C19.3597 6.7269 19.153 6.8125 18.9375 6.8125L1.875 6.8125C1.65951 6.8125 1.45285 6.7269 1.30048 6.57452C1.1481 6.42215 1.0625 6.21549 1.0625 6Z" fill="black"/>
                            </svg>
                            <span class="link-back__text">Назад</span>
                        </a>
                        <?php
                            $article = mysqli_query($connection, "SELECT * FROM `events` WHERE `id` = " . (int) $_GET['id']);
                            $art = mysqli_fetch_assoc($article);
                        ?>
                        
                        <div class="article__feedback">
                            <div class="row">
                                <h3 class="article__feedback-title">Подписывайтесь на наши новости!</h3>
                            </div>
                            <p class="article__desc">Получайте интересные новости, статьи и истории о туризме на севере Красноярского Края.</p>
                            <form class="article__feedback-form" action="#" method="POST">
                                <input type="name" name="name" placeholder="Имя" required>
                                <input type="email" name="email" placeholder="Ваш e-mail" required>
                                <button type="submit" class="button button--submit">Подписаться</button>
                            </form>
                        </div>
                    </div>
                    <div class="article__column-2">
                        <article>
                            <?php if ( mysqli_num_rows($article) <= 0): ?>
                                <h2 class="article__title">Ошибка</h2>
                                <p class="article__text">Статья не найдена</p>

                                <?php else: 
                                    mysqli_query($connection, "UPDATE `events` SET `views` = `views` + 1 WHERE `id` = " . (int) $art['id']);
                                    // $art_cat = false;
                                    // foreach( $categories as $cat) {
                                    //     if ( $cat['id'] == $art['categorie_id'] ) {
                                    //         $art_cat = $cat;
                                    //         break;
                                    //     }
                                    // }
                                    // $date = $art['pubdate'];
                                    // $date = date_format(new DateTime($date),"d.m.Y H:i");
                                ?>
                                <h2 class="article__title"><?= $art['name']; ?></h2>
                                <!-- <time class="article__datetime" datetime="<?= $art['pubdate']; ?>"> -->
                                    <?= $date; ?>
                                <!-- </time> -->
                                <div class="article__image" style="background: url('./img/events/<?= $art['image']; ?>') center no-repeat"></div>
                                <p class="article__text"><?= $art['text']; ?></p>
                            <?php endif; ?>
                        </article>

                        <section class="article__feedback">
                            <h2 class="article__title">У вас остались вопросы?</h2>
                            <form class="article__feedback-form" action="mail.php" method="POST">
                                <p class="article__desc">Оставьте свои контактыне данные и наш специалист свяжется с вами в ближайшее время и ответит на все интересующие вас вопросы!</p>
                                
                                <div class="row">
                                    <input class="article__input col" type="name" name="name" placeholder="Имя">
                                    <input class="article__input col" type="tel" name="tel" placeholder="Номер телефона">
                                </div>
                                <span>Введите ваш вопрос здесь...</span>
                                <input class="article__comment" type="text" name="text">                               
                                <footer class="article__footer row">
                                    <button type="button button--submit" class="feedback__button button">Отправить</button>
                                </footer>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/jquery.scrollify.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/index.js"></script>
    <!-- <script src="js/article.js"></script> -->
</body>
</html>