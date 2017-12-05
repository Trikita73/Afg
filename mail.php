<?php

$frm_name  = "AFG";
$recepient = "2andu@mail.ru";
$sitename  = "Armata Financical Group";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$phome = trim($_POST["email"]);
$formname = trim($_POST["formname"]);

$message = "
Форма: $formname <br>
E-mail: $email <br>
Имя: $phone
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
