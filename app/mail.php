<?php
  $to = 'gepards-98@mail.ru';
  $subject = 'Обратная связь с сайта';
  $message = 'Имя: ' . $_POST["name"] . ', Телефон: ' . $_POST["tel"] . ', Комментарий: ' . $_POST["text"];

  echo var_dump($_POST);

  mail("$to", "$subject", "$message");
?>
