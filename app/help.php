<?php
  error_reporting(0);
  // if ($_POST['help']) {
    $help = json_decode($_POST['help']);
    // echo $help;
    // echo json_encode($help);
  
  $to = 'gepards-98@mail.ru';
  $subject = 'Обратная связь с сайта';
  // $message = 
  // '<table style="border-collapse: collapse;>
  //   <tr">
  //     <td style="border: 1px solid #cccccc;"><b>Цель тура: </b></td>
  //     <td style="border: 1px solid #cccccc;">' . $help .'</td>
  //   </tr> 
  //   <tr>
  //     <td style="border: 1px solid #cccccc;"><b>Цена: </b></td>
  //     <td style="border: 1px solid #cccccc;">' . $help . '</td>
  //   </tr>
  //   <tr>
  //     <td style="border: 1px solid #cccccc;"><b>Эмоции: </b></td>
  //     <td style="border: 1px solid #cccccc;">' . $help . '</td>
  //   </tr>
  //   <tr>
  //     <td style="border: 1px solid #cccccc;"><b>Контактные данные: </b></td>
  //     <td style="border: 1px solid #cccccc;">' . $help->id . '</td>
  //   </tr>
  // </table>';
  $message = $help[0][1];

  $header = "From: ivan@example.com\r\n" ."Content-type: text/html; charset=utf-8\r\n" ."X-Mailer: PHP mail script";
  mail("$to", "$subject", "$message", "$header");
  
  
?>
