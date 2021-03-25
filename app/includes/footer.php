<?php $url = $_SERVER['REQUEST_URI']; ?>

<footer class="footer scrollify" data-section="<?= $dataSection ?>">
  <div class="wrapper footer__wrapper">
    <nav class="footer__nav">
      <ul class="footer__list">
        <li>
          <a class="footer__pagename" href="#">Норильск</a>
          <ul>
            <li><a href="#">Путешествие по северу</a></li>
            <li><a href="#">Памятники и экскурсии</a></li>
            <li><a href="#">Жизнь города</a></li>
            <li><a href="#">Факты</a></li>
          </ul>
        </li>
        <li>
          <a class="footer__pagename" href="#">Достопримечательности</a>
          <ul>
            <li><a href="#">Природа</a></li>
            <li><a href="#">Памятники</a></li>
            <li><a href="#">Флора и фауна</a></li>
          </ul>
        </li>
        <li>
          <a class="footer__pagename" href="#">Центр развития туризма</a>
          <ul>
            <li><a href="#">О центре</a></li>
            <li><a href="#">Проекты</a></li>
          </ul>
        </li>
        <li>
          <a class="footer__pagename" href="#">Туристу</a>
          <ul>
            <li><a href="#">В помощь туристу</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Маршрут</a></li>
          </ul>
        </li>
        <li>
          <a class="footer__pagename" href="#">Новости</a>
          <ul>
            <li><a href="#">Туристам и профессионалам</a></li>
            <li><a href="#">Календарь событий</a></li>
          </ul>
        </li>
        <li>
          <a class="footer__pagename" href="#">Контакты</a>
          <ul>
            <li>г. Норильск, пр-т Ленинский д1, офис 523</li>
            <li><a href="mailto:turizm@norilsk-city.ru">turizm@norilsk-city.ru</a></li>
            <li><a href="tel:(3919) 43-71-47"></a>(3919) 43-71-47</li>
          </ul>
        </li>
      </ul>
    </nav>

    <ul class="footer__policy">
      <li><a href="#">Политика конфиденциальности</a></li>
      <li>Все права защищены.</li>
      <li>© ООО «Арктический Кластер», 2010—2021</li>
    </ul>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="./js/jquery.scrollify.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/index.js"></script>
<script src="js/nav-mobile.js"></script>

<?php if ($url === '/index.php' || $url === '/'): ?>
  <script src="js/events-slider.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/attractions.js"></script>
<?php endif; ?>

<?php if ($url === '/tourist.php'): ?>
  <script src="js/calendar.js"></script>
<?php endif; ?>

<?php if ($url === '/events.php'): ?>
  <script src="js/events-slider.js"></script>
<?php endif; ?>

<?php if ($url === '/contacts.php'): ?>
  <script src="js/operators.js"></script>
<?php endif; ?>