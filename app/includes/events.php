<div class="events__slider">
    <?php
        require 'config/config.php';
        $limit = 100;
        $articles = mysqli_query($connection, "SELECT * FROM `events` ORDER BY `id` DESC LIMIT $limit");
        while( $art = mysqli_fetch_assoc($articles) ): ?>
            <a href="article_event.php?id=<?= $art['id']; ?>">
                <figure class="events__preview">
                    <img src="./img/events/<?= $art['image']; ?>" alt="<?= $art['name']; ?>">
                    
                    <figcaption>
                        <p class="events__time"><?= $art['time']; ?></p>
                        <h4 class="events__name"><?= $art['name']; ?></h4>
                        <p class="events__text"><?= $art['preview_text']; ?></p>
                    </figcaption>
                </figure>
            </a>
        <?php endwhile; ?>
</div>