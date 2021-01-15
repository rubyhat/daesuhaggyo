<?php

$name = $_POST['first-form__name'];
$phone = $_POST['first-form__phone'];
$name2 = $_POST['feedback__name'];
$phone2 = $_POST['feedback__phone'];
$token = '1519686292:AAFQrarmP7bN7vxlejzk_lB5eF9qeixDVI8';
$chat_id = '-487531575';

if ($name !== '' && $phone !== '') {
  $arr = array(
  'Заявка из первой формы' => '',
  'Имя: ' => $name,
  'Телефон: ' => $phone
  );
} elseif (!empty($name2) && !empty($phone2)) {
  $arr = array(
  'Заявка из второй формы' => '',
  'Имя: ' => $name2,
  'Телефон: ' => $phone2
  );
}

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// if ($sendToTelegram) {
//   header('Location: https://daesuhaggyo.ru/');
//   //echo '<h1> Thank you!</h1>';
// } else {
//   echo "Error";
// }