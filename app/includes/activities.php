<nav class="activities-page__nav">
    <ul class="activities-page__nav-list">
        <?php
            require 'includes/config.php';

            $categories = mysqli_query($connection, "SELECT * FROM `activities_categories`");
            $activities = mysqli_query($connection, "SELECT * FROM `activities` WHERE `categorie_id` = $id ORDER BY `id`");
            
            while( $act = mysqli_fetch_assoc($activities) ): ?>
            <li class="activities-page__nav-item">
                <?php
                    $act_cat = false;
                    foreach( $categories as $cat) {
                    if ( $cat['id'] == $art['categorie_id'] ) {
                        $act_cat = $cat;
                        break;
                    }
                    }
                ?>
                <a href="/activitie.php?id=<?= $act['id']; ?>&activities_cat=<?= $act_cat['id']; ?>"><?= $act['title']; ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
</nav>
<div class="natural__tabs">
    <ul class="activities-page__list">
        <?php
            require 'includes/config.php';

            $categories = mysqli_query($connection, "SELECT * FROM `activities_categories`");
            $activities = mysqli_query($connection, "SELECT * FROM `activities` WHERE `categorie_id` = $id ORDER BY `id` LIMIT 3");

            while( $act = mysqli_fetch_assoc($activities) ): ?>
            <li class="activities-page__item">
            <div class="activities-page__item-description">
                <h3><?= $act['title']; ?></h3>
                <p><?= $act['preview_text']; ?></p>
                <?php
                    $act_cat = false;
                    foreach( $categories as $cat) {
                    if ( $cat['id'] == $act['categorie_id'] ) {
                        $act_cat = $cat;
                        break;
                    }
                    }
                ?>
                <a href="/activitie.php?id=<?= $act['id']; ?>&activities_cat=<?= $act_cat['id']; ?>"  class="activities-page__item-button">
                    <?php if ($act_cat['id'] == 1): ?>
                    <span>Посмотреть активность</span>
                    <?php endif; ?>
                    <?php if ($act_cat['id'] == 2): ?>
                    <span>Посмотреть животное</span>
                    <?php endif; ?>
                    <?php if ($act_cat['id'] == 3): ?>
                    <span>Посмотреть памятник</span>
                    <?php endif; ?>
                    <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.7056 56.5464C53.6008 56.4419 53.5177 56.3178 53.461 56.1811C53.4043 56.0444 53.3751 55.8979 53.3751 55.7499C53.3751 55.602 53.4043 55.4554 53.461 55.3188C53.5177 55.1821 53.6008 55.0579 53.7056 54.9534L59.6613 48.9999L53.7056 43.0464C53.601 42.9418 53.518 42.8177 53.4614 42.681C53.4048 42.5443 53.3757 42.3979 53.3757 42.2499C53.3757 42.102 53.4048 41.9555 53.4614 41.8189C53.518 41.6822 53.601 41.558 53.7056 41.4534C53.8102 41.3488 53.9344 41.2659 54.071 41.2093C54.2077 41.1527 54.3542 41.1235 54.5021 41.1235C54.65 41.1235 54.7965 41.1527 54.9331 41.2093C55.0698 41.2659 55.194 41.3488 55.2986 41.4534L62.0486 48.2034C62.1533 48.3079 62.2365 48.4321 62.2932 48.5688C62.3499 48.7054 62.3791 48.852 62.3791 48.9999C62.3791 49.1479 62.3499 49.2944 62.2932 49.4311C62.2365 49.5678 62.1533 49.6919 62.0486 49.7964L55.2986 56.5464C55.1941 56.6512 55.0699 56.7343 54.9333 56.791C54.7966 56.8478 54.6501 56.877 54.5021 56.877C54.3541 56.877 54.2076 56.8478 54.0709 56.791C53.9342 56.7343 53.8101 56.6512 53.7056 56.5464Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M61.375 49C61.375 49.2984 61.2565 49.5845 61.0455 49.7955C60.8345 50.0065 60.5484 50.125 60.25 50.125L36.625 50.125C36.3266 50.125 36.0405 50.0065 35.8295 49.7955C35.6185 49.5845 35.5 49.2984 35.5 49C35.5 48.7016 35.6185 48.4155 35.8295 48.2045C36.0405 47.9935 36.3266 47.875 36.625 47.875L60.25 47.875C60.5484 47.875 60.8345 47.9935 61.0455 48.2045C61.2565 48.4155 61.375 48.7016 61.375 49Z" fill="black"/>
                    </svg>
                </a>
            </div>
            <img class="activities-page__item-image" src="./img/activities-page/<?= $act['image']; ?>" alt="<?= $act['title']; ?>">
            </li>
        <?php endwhile; ?>
    </ul>
    <button class="show-more-button">Показать еще</button>
</div>