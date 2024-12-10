<?php
error_reporting(-1);
session_start();
if (isset($_GET['do']) && $_GET['do'] == 'logout') {
  unset($_SESSION['auth']);
  $_SESSION['res'] = 'Вы вышли';
  header("Location: first.php");
  die;
}

?>

<a href="first.php">Сессии</a>
<?php
if (isset($_SESSION['res'])) {
  echo $_SESSION['res'];
  unset($_SESSION['res']);
}
?>
<?php if (!empty($_SESSION['auth'])): ?>
  <h3>Эту страницу может видеть только авторизованный пользователь</h3>
  <a href="?do=logout">Logout</a>
<?php else: ?>
  <h3>Вы не авторизованы</h3>
<?php endif; ?>