<?php 
  $url = $_SERVER['REQUEST_URI'];
  if ($url === '/index.php') {
    $limit = 4;
  }
  if ($url === '/news.php') {
    $limit = 100;
  }
?>

<ul class="articles-section__list blog__articles-list">
    <?php
        require 'config/config.php';
            
        $categories = mysqli_query($connection, "SELECT * FROM `article_categories`");
        $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = $id ORDER BY `id` DESC LIMIT $limit");
        while( $art = mysqli_fetch_assoc($articles) ): ?>
        <li>
            <a href="article.php?id=<?= $art['id']; ?>" class="article-preview article-preview--list">
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
                    <!-- <span class="article-preview__appeal">Знаете ли вы?</span> -->
                    <time class="article-preview__datetime" datetime="2020-05-12T09:01"><?= $art['pubdate']; ?></time>
                </div>
            </a>
        </li>
    <?php endwhile; ?>
</ul>