<ul class="tours__slider-block slider-block">
  <?php
    require 'includes/config.php';

    $events = mysqli_query($connection, "SELECT * FROM `events` ORDER BY `id` DESC LIMIT 5");
    
    while( $evt = mysqli_fetch_assoc($events) ): ?>
    <li class="tours__slide slide slide--active">
      <a href="/event.php?id=<?= $evt['id']; ?>" style="color: #000;">
        <figure>
            <p><img class="slide__image" src="./img/tours-page/events/<?= $evt['image']; ?>" alt="<?= $evt['text']; ?>"></p>
            <figcaption class="slide__description">
                <div>
                    <span><?= $evt['day'].'.'.$evt['month'] ?></span><br>
                    <b class="slide__name"><?= $evt['text']; ?></b>
                </div>
            </figcaption>
        </figure>
      </a>
  </li> 
  <?php endwhile; ?>
</ul>