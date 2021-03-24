<?php 
  $url = explode('?', $_SERVER['REQUEST_URI']);
  $url = $url[0];
  if ($url === '/' || $url === '/index.php') {
    $sectionCount = '08';
  }
  if ($url === '/news.php') {
    $sectionCount = '03';
  }
  if ($url === '/norilsk.php') {
    $sectionCount = '07';
  }
  if ($url === '/center.php') {
    $sectionCount = '06';
  }
  if ($url === '/flora&fauna.php') {
    $sectionCount = '03';
  }
  if ($url === '/tourist.php') {
    $sectionCount = '04';
  }
  if ($url === '/404.php') {
    $sectionCount = '01';
  }
  if ($url === '/article.php') {
    $sectionCount = '01';
  }
  if ($url === '/article_event.php') {
    $sectionCount = '01';
  }
  if ($url === '/events.php') {
    $sectionCount = '03';
  }
?>

<aside class="aside">
  <a href="index.php" class="logo">
    <img src="./img/header/logo.png" alt="ЦРТ">
  </a>
  <p class="aside__scroll-indicator scroll-indicator">
    <span class="scroll-indicator__number scroll-indicator__number--current">01</span>
    <span class="scroll-indicator__line">
      <span class="scroll-indicator__line--fill"></span>
    </span>
    <span class="scroll-indicator__number scroll-indicator__number--total"><?= $sectionCount ?></span>
  </p>
  <p class="aside__socials socials">
    <a href="https://www.facebook.com/groups/visitnorilsk" target="_blank">Fb</a>
    <a href="https://vk.com/visit_norilsk" target="_blank">Vk</a>
    <a href="https://www.instagram.com/crt_norilsk/" target="_blank">Inst</a>
  </p>
  <button class="aside__burger">
    <span></span>
  </button>
</aside>