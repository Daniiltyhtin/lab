<?php
session_start();

if(!empty($_SESSION['count'])) {
  echo "Вы посетили страницу index {$_SESSION['count']} раз(а)";
}

?>

<br>

<a href="first.php">Назад</a>