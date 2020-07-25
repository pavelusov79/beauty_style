<?php

$recepient = 'usov.p@mail.ru';
$sitename = "beaty style";

$name = trim($_POST['name']);
$tel = trim($_POST['tel']);
$service = trim($_POST['service'].value);
$date = $_POST['date'];
$time = $_POST['time'];

$message = "Имя: $name \nтел: $tel \nуслуга: $service \nдата: $date \nвремя: $time";

$pagetitle = "новая заявка с сайта '$sitename'";

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset ='utf-8'; \nFrom: $recepient");
