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
                        <a href="./blog-page.html" class="article__link-back">
                            <svg class="article__link-back-arrow" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.6016 0.549737C6.67727 0.625211 6.7373 0.714872 6.77826 0.813582C6.81922 0.912293 6.84031 1.01812 6.84031 1.12499C6.84031 1.23186 6.81922 1.33768 6.77826 1.43639C6.7373 1.5351 6.67727 1.62476 6.6016 1.70024L2.30023 5.99999L6.6016 10.2997C6.67715 10.3753 6.73707 10.465 6.77796 10.5637C6.81884 10.6624 6.83988 10.7682 6.83988 10.875C6.83988 10.9818 6.81884 11.0876 6.77796 11.1863C6.73707 11.285 6.67715 11.3747 6.6016 11.4502C6.52606 11.5258 6.43638 11.5857 6.33768 11.6266C6.23898 11.6675 6.13319 11.6885 6.02635 11.6885C5.91952 11.6885 5.81373 11.6675 5.71503 11.6266C5.61633 11.5857 5.52665 11.5258 5.4511 11.4502L0.576105 6.57524C0.500439 6.49976 0.440407 6.4101 0.399447 6.31139C0.358486 6.21268 0.337402 6.10686 0.337402 5.99999C0.337402 5.89312 0.358486 5.78729 0.399447 5.68858C0.440407 5.58987 0.500439 5.50021 0.576105 5.42474L5.4511 0.549737C5.52658 0.474072 5.61624 0.414039 5.71495 0.373079C5.81366 0.332119 5.91948 0.311035 6.02635 0.311035C6.13323 0.311035 6.23905 0.332119 6.33776 0.373079C6.43647 0.414039 6.52613 0.474072 6.6016 0.549737Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.0625 6C1.0625 5.78451 1.1481 5.57785 1.30048 5.42548C1.45285 5.2731 1.65951 5.1875 1.875 5.1875L18.9375 5.1875C19.153 5.1875 19.3597 5.2731 19.512 5.42548C19.6644 5.57785 19.75 5.78451 19.75 6C19.75 6.21549 19.6644 6.42215 19.512 6.57452C19.3597 6.7269 19.153 6.8125 18.9375 6.8125L1.875 6.8125C1.65951 6.8125 1.45285 6.7269 1.30048 6.57452C1.1481 6.42215 1.0625 6.21549 1.0625 6Z" fill="black"/>
                            </svg>
                            <span class="link-back__text">Назад</span>
                        </a>
                        <address class="article__author">
                            <span>Автор статьи</span>
                            <p class="article__author-name">
                                <img src="./img/article-page/3.jpg" alt="Сергей Иванов, 24 года" class="article__author-photo">
                                <span>Сергей Иванов, 24 года</span> 
                            </p>
                            <cite>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris amet amet massa quis eu, auctor potenti bibendum.</cite>
                        </address>
                        
                        <div class="article__feedback">
                            <h3 class="article__feedback-title">Подписывайтесь на наши новости!</h3>
                            <p class="article__feedback-description">Получайте интересные новости, статьи и истории о туризме на севере Красноярского Края.</p>
                            <form class="article__feedback-form" action="#" method="POST">
                                <input type="name" name="name" placeholder="Имя" required>
                                <input type="email" name="email" placeholder="Ваш e-mail" required>
                                <button class="article__feedback-button">
                                    <span>Подписаться</span>
                                    <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.7056 56.5464C53.6008 56.4419 53.5177 56.3178 53.461 56.1811C53.4043 56.0444 53.3751 55.8979 53.3751 55.7499C53.3751 55.602 53.4043 55.4554 53.461 55.3188C53.5177 55.1821 53.6008 55.0579 53.7056 54.9534L59.6613 48.9999L53.7056 43.0464C53.601 42.9418 53.518 42.8177 53.4614 42.681C53.4048 42.5443 53.3757 42.3979 53.3757 42.2499C53.3757 42.102 53.4048 41.9555 53.4614 41.8189C53.518 41.6822 53.601 41.558 53.7056 41.4534C53.8102 41.3488 53.9344 41.2659 54.071 41.2093C54.2077 41.1527 54.3542 41.1235 54.5021 41.1235C54.65 41.1235 54.7965 41.1527 54.9331 41.2093C55.0698 41.2659 55.194 41.3488 55.2986 41.4534L62.0486 48.2034C62.1533 48.3079 62.2365 48.4321 62.2932 48.5688C62.3499 48.7054 62.3791 48.852 62.3791 48.9999C62.3791 49.1479 62.3499 49.2944 62.2932 49.4311C62.2365 49.5678 62.1533 49.6919 62.0486 49.7964L55.2986 56.5464C55.1941 56.6512 55.0699 56.7343 54.9333 56.791C54.7966 56.8478 54.6501 56.877 54.5021 56.877C54.3541 56.877 54.2076 56.8478 54.0709 56.791C53.9342 56.7343 53.8101 56.6512 53.7056 56.5464Z" fill="black"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M61.375 49C61.375 49.2984 61.2565 49.5845 61.0455 49.7955C60.8345 50.0065 60.5484 50.125 60.25 50.125L36.625 50.125C36.3266 50.125 36.0405 50.0065 35.8295 49.7955C35.6185 49.5845 35.5 49.2984 35.5 49C35.5 48.7016 35.6185 48.4155 35.8295 48.2045C36.0405 47.9935 36.3266 47.875 36.625 47.875L60.25 47.875C60.5484 47.875 60.8345 47.9935 61.0455 48.2045C61.2565 48.4155 61.375 48.7016 61.375 49Z" fill="black"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="article__column-2">
                        <?php
                            $article = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = " . (int) $_GET['id']);
                            $categories = mysqli_query($connection, "SELECT * FROM `article_categories`");
                            if ( mysqli_num_rows($article) <= 0): 
                        ?>
                        <h2 class="article__title">Ошибка</h2>
                        <p class="article__text">Статья не найдена</p>

                        <?php else: 
                            $art = mysqli_fetch_assoc($article);
                            mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = " . (int) $art['id']);
                            $art_cat = false;
                            foreach( $categories as $cat) {
                                if ( $cat['id'] == $art['categorie_id'] ) {
                                    $art_cat = $cat;
                                    break;
                                }
                            }
                        ?>
                        <p class="bread-crumbs">
                            <a href="blog-page.php">Блог</a> / <?= $art_cat['title']; ?>
                        </p>
                        <h2 class="article__title"><?= $art['title']; ?></h2>
                        <time class="article__datetime" datetime="<?= $art['pubdate']; ?>"><?= $art['pubdate']; ?></time>
                        <div class="article__image" style="background: urL(./img/blog-page/<?= $art['image']; ?>) center center no-repeat;"></div>
                        <p class="article__text"><?= $art['text']; ?></p>

                        <div class="article__panel">
                            <div class="article__share">
                                <span>Поделиться:</span>
                                <p class="article__share-vk">
                                    <button>
                                        <svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.579 0.855011C19.719 0.390011 19.579 0.0490112 18.917 0.0490112H16.724C16.166 0.0490112 15.911 0.344012 15.771 0.668012C15.771 0.668012 14.656 3.38701 13.076 5.15001C12.566 5.66301 12.333 5.82501 12.055 5.82501C11.916 5.82501 11.714 5.66301 11.714 5.19801V0.855011C11.714 0.297011 11.553 0.0490112 11.088 0.0490112H7.642C7.294 0.0490112 7.084 0.307011 7.084 0.553011C7.084 1.08101 7.874 1.20301 7.955 2.69101V5.91901C7.955 6.62601 7.828 6.75501 7.548 6.75501C6.805 6.75501 4.997 4.02601 3.924 0.902011C3.715 0.295011 3.504 0.0500116 2.944 0.0500116H0.752C0.125 0.0500116 0 0.345012 0 0.669012C0 1.25101 0.743 4.13101 3.461 7.94001C5.273 10.541 7.824 11.951 10.148 11.951C11.541 11.951 11.713 11.638 11.713 11.098V9.13201C11.713 8.50601 11.846 8.38001 12.287 8.38001C12.611 8.38001 13.169 8.54401 14.47 9.79701C15.956 11.283 16.202 11.95 17.037 11.95H19.229C19.855 11.95 20.168 11.637 19.988 11.019C19.791 10.404 19.081 9.50901 18.139 8.45001C17.627 7.84601 16.862 7.19601 16.629 6.87101C16.304 6.45201 16.398 6.26701 16.629 5.89501C16.63 5.89601 19.301 2.13401 19.579 0.855011Z" fill="black"/>
                                        </svg>
                                    </button>
                                </p>
                                <p class="article__share-facebook">
                                    <button>
                                        <svg width="19" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.73891 0C1.22167 0 0 1.22167 0 2.73891V12.2611C0 13.7783 1.22167 15 2.73891 15H7.89985V9.13595H6.34923V7.02469H7.89985V5.22094C7.89985 3.80382 8.81604 2.50266 10.9266 2.50266C11.7811 2.50266 12.413 2.5847 12.413 2.5847L12.3633 4.55627C12.3633 4.55627 11.7188 4.55018 11.0156 4.55018C10.2545 4.55018 10.1325 4.90085 10.1325 5.483V7.02471H12.4237L12.3239 9.13596H10.1325V15H12.2611C13.7783 15 15 13.7784 15 12.2611V2.73893C15 1.22169 13.7783 1.5e-05 12.2611 1.5e-05H2.73889L2.73891 0Z" fill="black"/>
                                        </svg>
                                    </button>
                                </p>
                                <p class="article__share-twitter">
                                    <button>
                                        <svg width="19" height="15" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.999 1.42144C14.5813 2.03333 14.0689 2.55494 13.4617 2.98627C13.4676 3.10195 13.4706 3.2327 13.4706 3.37852C13.4706 4.1887 13.3507 4.99986 13.1108 5.81201C12.871 6.62416 12.5045 7.40153 12.0116 8.14412C11.5186 8.88672 10.9314 9.54459 10.25 10.1177C9.56855 10.6909 8.74943 11.1479 7.79262 11.4887C6.83581 11.8296 5.81037 12 4.7163 12C3.00881 12 1.43639 11.546 -0.000976562 10.6381C0.254139 10.6661 0.498816 10.68 0.733055 10.68C2.15952 10.68 3.43358 10.2473 4.55524 9.38191C3.89014 9.3699 3.2945 9.16827 2.7683 8.777C2.24211 8.38575 1.88 7.8858 1.68196 7.27715C1.87771 7.31387 2.0709 7.33223 2.26154 7.33223C2.53596 7.33223 2.80598 7.29698 3.07161 7.22648C2.36182 7.08648 1.773 6.73832 1.30513 6.182C0.837275 5.62569 0.603348 4.9836 0.603348 4.25573V4.21822C1.03902 4.45578 1.50373 4.58215 1.99747 4.59732C1.577 4.32126 1.24363 3.96126 0.997365 3.51733C0.75108 3.0734 0.627937 2.593 0.627937 2.07611C0.627937 1.53096 0.766644 1.02333 1.04406 0.553212C1.81593 1.48607 2.75122 2.23164 3.84993 2.78992C4.94865 3.3482 6.12736 3.65826 7.38608 3.72008C7.33239 3.49974 7.3055 3.2698 7.3054 3.03026C7.3054 2.1939 7.60593 1.47976 8.207 0.887856C8.80807 0.295952 9.53323 0 10.3825 0C11.2716 0 12.0205 0.318844 12.6292 0.956532C13.3247 0.82086 13.9759 0.575464 14.5828 0.220344C14.349 0.945064 13.8985 1.50414 13.2312 1.89756C13.8445 1.82578 14.4338 1.66708 14.999 1.42144H14.999Z" fill="black"/>
                                        </svg> 
                                    </button>
                                </p>
                            </div>
                            <div class="article__stats">
                                <p class="article__stats-likes">
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.47209 2.85161C6.56419 -1.64008 0.678711 0.806851 0.678711 5.6998C0.678711 9.37404 8.74738 15.1215 9.47209 15.8689C10.2018 15.1215 17.8692 9.37404 17.8692 5.6998C17.8692 0.843946 12.3854 -1.64008 9.47209 2.85161Z" fill="#777777"/>
                                        </svg>
                                    </button>
                                    <span>50</span>
                                </p>
                                <p class="article__stats-views">
                                    <button>
                                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2714 7.76625C20.4628 5.67463 19.0591 3.8658 17.2336 2.56331C15.4082 1.26082 13.2411 0.521769 11.0002 0.4375C8.7593 0.521769 6.59221 1.26082 4.76677 2.56331C2.94133 3.8658 1.53756 5.67463 0.728946 7.76625C0.674336 7.9173 0.674336 8.0827 0.728946 8.23375C1.53756 10.3254 2.94133 12.1342 4.76677 13.4367C6.59221 14.7392 8.7593 15.4782 11.0002 15.5625C13.2411 15.4782 15.4082 14.7392 17.2336 13.4367C19.0591 12.1342 20.4628 10.3254 21.2714 8.23375C21.3261 8.0827 21.3261 7.9173 21.2714 7.76625ZM11.0002 12.4688C10.1164 12.4688 9.25237 12.2067 8.51749 11.7156C7.78261 11.2246 7.20984 10.5267 6.87161 9.71012C6.53338 8.89356 6.44488 7.99504 6.61731 7.12819C6.78974 6.26134 7.21535 5.46508 7.84031 4.84012C8.46528 4.21515 9.26153 3.78954 10.1284 3.61712C10.9952 3.44469 11.8938 3.53318 12.7103 3.87141C13.5269 4.20964 14.2248 4.78241 14.7158 5.5173C15.2069 6.25218 15.4689 7.11616 15.4689 8C15.4671 9.18463 14.9957 10.3202 14.1581 11.1579C13.3204 11.9955 12.1848 12.4669 11.0002 12.4688Z" fill="#777777"/>
                                        </svg>
                                    </button>
                                    <span><?= $art['views']; ?></span>
                                </p>
                                <p class="article__stats-comments">
                                    <button>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.125 0H1.875C0.84082 0 0 0.84082 0 1.875V10.3125C0 11.3467 0.84082 12.1875 1.875 12.1875H4.6875V14.6484C4.6875 14.9355 5.01562 15.1025 5.24707 14.9326L8.90625 12.1875H13.125C14.1592 12.1875 15 11.3467 15 10.3125V1.875C15 0.84082 14.1592 0 13.125 0Z" fill="#777777"/>
                                        </svg>  
                                    </button>
                                    <span>25</span>
                                </p>  
                            </div>
                        </div>
                        <?php endif; ?>

                        
                        <!-- <div id="vk_comments"></div> -->
                    </div>
                </div>
            </div>
        </article>
        
                
        <section class="articles-section">
            <div class="articles-section__wrapper wrapper">
            <h2 class="articles-section__title blog__articles-title">Похожие разделы</h2>
                <ul class="articles-section__list blog__articles-list">
                    <?php 
                        $categories = mysqli_query($connection, "SELECT * FROM `article_categories`");
                        $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 4");

                        while( $art = mysqli_fetch_assoc($articles) ): ?>
                        <li>
                            <a href="/article.php?id=<?= $art['id']; ?>" class="article-preview article-preview--list">
                                <img src="./img/blog-page/<?= $art['image']; ?>" alt="<?= $art_cat['title']; ?>">
                                <div class="article-preview__text">
                                    <?php
                                        $art_cat = false;
                                        foreach( $categories as $cat) {
                                        if ( $cat['id'] == $art['categorie_id'] ) {
                                            $art_cat = $cat;
                                            break;
                                        }
                                        }
                                    ?>
                                    <span class="article-preview__class"><?= $art_cat['title'] ?></span>
                                    <span class="article-preview__appeal">Знаете ли вы?</span>
                                    <p class="article-preview__new"><?= $art['title']; ?></p>
                                    <time class="article-preview__datetime" datetime="2020-05-12T09:01"><?= $art['pubdate']; ?></time>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="main-footer__wrapper wrapper">
            <div class="main-footer__grid-container">
                <div class="main-footer__column-1">
                    <h2 class="main-footer__sections">Разделы</h2>
                    <nav class="main-footer__nav">
                        <ul class="main-footer__nav-list">
                            <li class="main-footer__nav-item"><a href="tours-page.html">Туры</a></li>
                            <li class="main-footer__nav-item"><a href="activities-page.html">Активности</a></li>
                            <li class="main-footer__nav-item"><a href="faq-page.html">FAQ</a></li>
                        </ul>
                        <ul class="main-footer__nav-list">
                            <li class="main-footer__nav-item"><a href="norilsk-page.html">Норильск</a></li>
                            <li class="main-footer__nav-item"><a href="#">Центр развития туризма Норильска</a></li>
                            <li class="main-footer__nav-item"><a href="blog-page.html">Блог</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="main-footer__column-2">
                    <h2 class="main-footer__contacts">Контакты</h2>
                    <ul class="main-footer__contacts-list">
                        <li class="main-footer__contact">+7 (999) 999-99-99</li>
                        <li class="main-footer__contact">info@arktika.ru</li>
                        <li class="main-footer__contact">Норильск, ул. Пушкина 32, оф. 506</li>
                    </ul>
                </div>
                <div class="main-footer__column-3">
                    <h2 class="main-footer__socials">Подписывайтесь</h2>
                    <ul class="main-footer__socials-list">
                        <li class="main-footer__socials-item">Facebook</li>
                        <li class="main-footer__socials-item">Instagram</li>
                        <li class="main-footer__socials-item">Youtube</li>
                    </ul>
                </div>    
            </div>

            <div class="main-footer__flex-container">
                <p class="main-footer__copyright">Арктика 2020. Все права защищены. Копирование материалов без активной ссылки на источник запрещено.</p>
                <p class="main-footer__politics">Политика конфиденциальности</p>
            </div>
        </div>
    </footer>

    <script src="./js/article.js"></script>
    <script type="text/javascript">
        VK.init({apiId: vk_comments, onlyWidgets: true});
    </script>
    <script type="text/javascript">
        VK.Widgets.Comments("vk_comments", {limit: 5, attach: "*"});
    </script>
</body>
</html>