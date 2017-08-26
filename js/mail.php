<?php
$admin_mail = "racer3229@gmail.com";
$title = "Письмо с сайта объявлений";

$name = trim($_POST["fio"]);
$tel = trim($_POST["tel"]);
$msg = trim($_POST["desc"]);
$message = "Ф.И.О: $name \nТелефон: $tel \nДополнение: $msg";

mail($admin_mail, $title, $message);