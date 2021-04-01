<div class="tours__list">
    <?php
      require 'config/config.php';
          
      $articles = mysqli_query($connection, "SELECT * FROM $table ORDER BY `id` DESC");
      while( $art = mysqli_fetch_assoc($articles) ): ?>
      <div>
        <figure class="attractions__card" id="places-card-1">
          <img class="attractions__img" src="data:image/png;base64, <?= base64_encode($art["image"]) ?>" alt="<?= $art["title"] ?>">
          <figcaption>
            <h4 class="attractions__card-title"><?= $art["title"] ?></h4>
          </figcaption>
          <a href="article_tours.php?id=<?= $art['id']; ?>&table=<?= $table ?>" class="tours__button button">Подробнее о туре</a>
        </figure>
      </div>
    <?php endwhile; ?>
</div>