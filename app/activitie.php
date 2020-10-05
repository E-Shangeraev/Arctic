<?php require_once 'includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Арктика</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
</head>
<body>
    <main class="article-page">
        <article class="article">
            <div class="article__wrapper wrapper">
                <div class="article__container">
                    <div class="article__column-1">
                        <a href="./activities-page.php" class="article__link-back article__link-back--activitie">
                            <svg class="article__link-back-arrow" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.6016 0.549737C6.67727 0.625211 6.7373 0.714872 6.77826 0.813582C6.81922 0.912293 6.84031 1.01812 6.84031 1.12499C6.84031 1.23186 6.81922 1.33768 6.77826 1.43639C6.7373 1.5351 6.67727 1.62476 6.6016 1.70024L2.30023 5.99999L6.6016 10.2997C6.67715 10.3753 6.73707 10.465 6.77796 10.5637C6.81884 10.6624 6.83988 10.7682 6.83988 10.875C6.83988 10.9818 6.81884 11.0876 6.77796 11.1863C6.73707 11.285 6.67715 11.3747 6.6016 11.4502C6.52606 11.5258 6.43638 11.5857 6.33768 11.6266C6.23898 11.6675 6.13319 11.6885 6.02635 11.6885C5.91952 11.6885 5.81373 11.6675 5.71503 11.6266C5.61633 11.5857 5.52665 11.5258 5.4511 11.4502L0.576105 6.57524C0.500439 6.49976 0.440407 6.4101 0.399447 6.31139C0.358486 6.21268 0.337402 6.10686 0.337402 5.99999C0.337402 5.89312 0.358486 5.78729 0.399447 5.68858C0.440407 5.58987 0.500439 5.50021 0.576105 5.42474L5.4511 0.549737C5.52658 0.474072 5.61624 0.414039 5.71495 0.373079C5.81366 0.332119 5.91948 0.311035 6.02635 0.311035C6.13323 0.311035 6.23905 0.332119 6.33776 0.373079C6.43647 0.414039 6.52613 0.474072 6.6016 0.549737Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.0625 6C1.0625 5.78451 1.1481 5.57785 1.30048 5.42548C1.45285 5.2731 1.65951 5.1875 1.875 5.1875L18.9375 5.1875C19.153 5.1875 19.3597 5.2731 19.512 5.42548C19.6644 5.57785 19.75 5.78451 19.75 6C19.75 6.21549 19.6644 6.42215 19.512 6.57452C19.3597 6.7269 19.153 6.8125 18.9375 6.8125L1.875 6.8125C1.65951 6.8125 1.45285 6.7269 1.30048 6.57452C1.1481 6.42215 1.0625 6.21549 1.0625 6Z" fill="black"/>
                            </svg>
                            <span class="link-back__text link-back__text">Назад</span>
                        </a>
                        <h3>Другие активности</h3>
                        <p class="activities__info">Вы можете добавить в свой тур больше активностей, для этого сообщите туроператору, что именно Вы хотите посетить</p>
                        <ul class="activities-page__list">
                            <?php
                                require 'includes/config.php';

                                $categories = mysqli_query($connection, "SELECT * FROM `activities_categories`");
                                $activities = mysqli_query($connection, "SELECT * FROM `activities` WHERE `categorie_id` = 1 ORDER BY `id` LIMIT 3");

                                while( $act = mysqli_fetch_assoc($activities) ): ?>
                                <li class="activities-page__item" style="padding: 40px 0;">
                                    <div class="activities-page__item-description">
                                        <h3><?= $act['title']; ?></h3>
                                        <p><?= $act['preview_text']; ?></p>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="article__column-2">
                        <?php
                            $activities = mysqli_query($connection, "SELECT * FROM `activities` WHERE `id` = " . (int) $_GET['id']);
                            $categories = mysqli_query($connection, "SELECT * FROM `activities_categories`");
                            if ( mysqli_num_rows($activities) <= 0): 
                        ?>
                        <h2 class="article__title">Ошибка</h2>
                        <p class="article__text">Статья не найдена</p>

                        <?php else: 
                            $act = mysqli_fetch_assoc($activities);
                            // mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = " . (int) $art['id']);
                            $act_cat = false;
                            foreach( $categories as $cat) {
                                if ( $cat['id'] == $act['categorie_id'] ) {
                                    $act_cat = $cat;
                                    break;
                                }
                            }
                        ?>
                        <p class="bread-crumbs">
                            <a href="activities-page.php">Активности / <?= $act_cat['title']; ?></a> / <?= $act['title']; ?>
                        </p>
                        <h2 class="article__title"><?= $act['title']; ?></h2>
                        <span style="margin-bottom: 20px; display: block;">Ознакомиться с описанием активности вы можете ниже</span>
                        <div class="article__image" style="background: urL(./img/activities-page/<?= $act['image']; ?>) center center no-repeat; background-size: cover;"></div>
                        <p class="article__text"><?= $act['text']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>