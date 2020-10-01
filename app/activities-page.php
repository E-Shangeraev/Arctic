<?php 
require 'includes/config.php';
require_once 'functions.php';
error_reporting(0);

if ($_POST['param']) {
    $param = json_decode($_POST['param']);
    $array = more_activities($param->offset, $param->limit, $param->id);
    echo json_encode($array);
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Арктика</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="activities-header header">
        <div class="header__content">
            <?php require_once 'includes/header-nav.php'; ?>
            
            <div class="header__wrapper">
                <div class="header__column-1">
                    <nav class="activities-header__nav">
                        <button class="activities-header__nav-button nav-button--natural active" data-value="natural">Природа</button>
                        <button class="activities-header__nav-button nav-button--animals" data-value="animals">Животные</button>
                        <button class="activities-header__nav-button nav-button--monuments" data-value="monuments">Памятники</button>
                    </nav>

                    <div class="tabs">
                        <div class="tab tab--natural active" id="1">
                            <h1 class="header__title">Природные места</h1>
                            <p class="header__description">
                                Природа Норильска весьма разнообразна: здесь можно увидеть как заснеженные склоны, так и яркие северные цветы
                            </p>
                        </div>
                        <div class="tab tab--animals" id="2">
                            <h1 class="header__title">Животный мир</h1>
                            <p class="header__description">
                                Территории Крайнего Севера населяет множество животных. Нетронутая природа служит для них идеальным домом
                            </p>
                        </div>
                        <div class="tab tab--monuments" id="3">
                            <h1 class="header__title">Рукотворные памятники</h1>
                            <p class="header__description" style="position: absolute;">
                                В Норильске и его окрестностях расположено достаточно большое количество памятников, созданных руками человека, как архитектурных, так и исторических.
                            </p>
                        </div>
                    </div>
                    
                    
                    <p class="header__icon">
                        <svg width="21" height="33" viewBox="0 0 21 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.4743 0C5.12194 0 0.767578 4.35436 0.767578 9.70674V23.2933C0.767578 28.6456 5.12194 33 10.4743 33C15.8267 33 20.1811 28.6456 20.1811 23.2933V9.70674C20.1811 4.35436 15.8267 0 10.4743 0ZM18.2011 23.2933C18.2011 27.5537 14.7348 31.0201 10.4743 31.0201C6.21387 31.0201 2.7475 27.5537 2.7475 23.2933V9.70674C2.7475 5.44629 6.21387 1.97992 10.4743 1.97992C14.7348 1.97992 18.2011 5.44629 18.2011 9.70674V23.2933Z" fill="white"/>
                            <path class="header__icon-wheel" d="M10.4746 6.56445C9.92773 6.56445 9.48462 7.00757 9.48462 7.55441V12.1109C9.48462 12.6575 9.92773 13.1009 10.4746 13.1009C11.0212 13.1009 11.4645 12.6575 11.4645 12.1109V7.55441C11.4645 7.00757 11.0214 6.56445 10.4746 6.56445Z" fill="white"/>
                        </svg>
                        <span class="header__icon-text">Листайте вниз</span>
                    </p>
                </div>
                
                <div class="header__column-2">
                    <a href="#activities-content" class="header__button big-button">
                        <span class="button-text--activities">Подробнее о природе</span>
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

    <main class="activities-page" id="activities-content">
        <div class="activities-page__wrapper wrapper">
            <section class="natural tab tab--natural active">
                <div class="activities-page__container">
                    <?php
                        $activities = tpl_render('activities.php', ['id' => 1]);
                        print ($activities);
                    ?>
                </div>
            </section>

            <section class="animals tab tab--animals">
                <div class="activities-page__container">
                    <?php
                        $activities = tpl_render('activities.php', ['id' => 2]);
                        print ($activities);
                    ?>
                </div>
            </section>

            <section class="monuments tab tab--monuments">
                <div class="activities-page__container">
                    <?php
                        $activities = tpl_render('activities.php', ['id' => 3]);
                        print ($activities);
                    ?>
                </div>
            </section>
        </div>
    </main>

    <?php require_once 'includes/footer.php'; ?>

    <?php 
        $total_count_q =  mysqli_query($connection, "SELECT COUNT(id) AS `total_count` FROM `activities`");
        $total_count = mysqli_fetch_assoc($total_count_q);
        $total_count = $total_count['total_count'] / 3;
    ?>
    <script>
        const limit = "<?php echo $total_count ?>";
    </script>

    <script type="module" src="./js/Tabs.js"></script>
    <script type="module" src="./js/activities-page.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/smb-activities.js"></script>
</body>
</html>