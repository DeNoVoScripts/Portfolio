<?php


$to = "denisdevofficial@gmail.com";


$from = $_POST['email'];


$name = $_POST['name'];


$subject = "Новое сообщение с сайта";


$message = "Имя: " . $name . "


Email: " . $from . "


Сообщение:


" . $_POST['message'];


$headers = "From:" . $from;


if(mail($to,$subject,$message,$headers)) {


echo "Сообщение отправлено!";


} else {


echo "Ошибка при отправке сообщения.";


}


?>


Источник: https://uchet-jkh.ru/i/kak-sdelat-otpravku-formy-na-poctu-html