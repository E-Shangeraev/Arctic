<?php 
  $url = $_SERVER['REQUEST_URI'];
  if ($url === '/') {
    $sectionCount = 8;
  }
  if ($url === '/news.php') {
    $sectionCount = 3;
  }
?>

<aside class="aside">
  <a href="index.php" class="logo">
    <img src="./img/header/logo.jpg" alt="ЦРТ">
  </a>
  <p class="aside__scroll-indicator scroll-indicator">
    <span class="scroll-indicator__number scroll-indicator__number--current">01</span>
    <span class="scroll-indicator__line">
      <span class="scroll-indicator__line--fill"></span>
    </span>
    <span class="scroll-indicator__number scroll-indicator__number--total"><?= '0' . $sectionCount ?></span>
  </p>
  <p class="aside__socials socials">
    <a href="">Fb</a>
    <a href="">Vk</a>
    <a href="">Inst</a>
  </p>
  <button class="aside__burger">
    <span></span>
  </button>
</aside>