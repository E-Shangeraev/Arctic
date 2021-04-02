<ul class="useful__container">
  <?php
    require 'config/config.php';

    $categories = implode(',', $categories);
    $useful_items = mysqli_query($connection, "SELECT * FROM `useful_items`");
    $usefuls = mysqli_query($connection, "SELECT * FROM `useful` WHERE `category_id` IN ($categories)");
    while( $uf = mysqli_fetch_assoc($usefuls) ): ?>
    <li>
      <?php
        $art_id = false;
        if ($uf['id'] == 1 || $uf['id'] == 5 || $uf['id'] == 10 || $uf['id'] == 11 || $uf['id'] == 12 || $uf['id'] == 13 || $uf['id'] == 14) {
          foreach( $useful_items as $item) {
            if ( $item['category_id'] == $uf['id'] ) {
                $art_id = $item['id'];
                break;
            }
          }
        }  
      ?>
      <?php if ($art_id): ?>
        <a href="article_useful.php?id=<?= $art_id ?>" class="useful__item">
        <?php else: ?>
        <a href="category.php?id=<?= $uf["category_id"] ?>" class="useful__item">
      <?php endif; ?>
        <img src="data:image/png;base64, <?= base64_encode($uf["image"]) ?>" alt="<?= $uf["category_name"] ?>">
        <span class="useful__category"><?= $uf["category_name"] ?></span>
        <p class="useful__info">
          <span class="useful__category"><?= $uf["category_name"] ?></span>
          <span><?= $uf["info"] ?></span>
        </p>
      </a>
  <?php endwhile; ?>
</ul>