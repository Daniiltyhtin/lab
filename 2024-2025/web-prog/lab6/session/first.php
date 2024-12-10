<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .wrapper {
      display: flex;
      flex-direction: column;
    }

    body {
      display: flex;
      justify-content: center;
    }

    .container {
      width: 100%;
      border: 2px solid blue;
      border-radius: 10px;
      padding: 10px;
    }

    .form {
      display: flex;
      flex-direction: column;
      line-height: 1.5;
    }
    .form button{
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid blue;
      height: 25px;
      font: 1em/1.5 Arial;
    }
    .form input{
      height: 20px;
      border-radius: 5px;
      border: 1px solid blue;
    }
  </style>
</head>

<body>
  <div class="wrapper">

    <?php

    session_start();
    echo "<h3>Эту страницу может видеть любой пользователь</h3>" .
      "<p>Количество посещений {$_SESSION['count']}</p>";

    $_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;

    $login = 'admin';
    $password = '1234567890';

    if (!empty($_POST)) {
      if ($_POST['login'] == $login && $_POST['password'] == $password) {
        $_SESSION['auth'] = 1;
        $_SESSION['res'] = 'Success';
        header("Location:secret.php");
        die;
      } else {
        $_SESSION['res'] = 'Error';
        header("Location:first.php");
        exit;
      }
    }

    ?>

    <ol>
      <li><a href="secret.php">Secret page</a></li>
      <li><a href="second.php">На стр.2</a></li>
      <li><a href="../index.html">На главную</a></li>
    </ol>

    <?php

    if (isset($_SESSION['res'])) {
      echo $_SESSION['res'];
      unset($_SESSION['res']);
    }
    ?>
    <div class="container">
      <form class="form" method="post">
        <label for="login">Login:</label>
        <input id="login" type="text" name="login">
        <label for="password">Login:</label>
        <input id="password" type="password" name="password">
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
</body>

</html>