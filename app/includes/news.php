<ul class="news__list">
    <?php
        require 'config/config.php';
            
        $categories = mysqli_query($connection, "SELECT * FROM `article_categories`");
        $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id` = $id ORDER BY `id` DESC LIMIT 4");
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

                    $date = strtotime($art['pubdate']);
                    $dateFormat = date('d.m.Y', $date);
                ?>
                <img src="./img/blog-page/<?= $art['image']; ?>" alt="<?= $art_cat['title']; ?>">
                <div class="article-preview__text">
                    
                    
                    <p class="article-preview__new"><?= $art['title']; ?></p>
                    <!-- <span class="article-preview__appeal">Знаете ли вы?</span> -->
                    <time class="article-preview__datetime" datetime="2020-05-12T09:01"><?= $dateFormat; ?></time>
                </div>
            </a>
        </li>
    <?php endwhile; ?>
</ul>