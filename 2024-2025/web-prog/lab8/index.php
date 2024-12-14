<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .error,
    .success {
      margin-bottom: 20px;
      padding: 10px;
      border-radius: 4px;
      color: #fff;
    }

    .error {
      background-color: #dc3545;
    }

    .success {
      background-color: #28a745;
    }
  </style>
</head>

<body>


  <?php
  error_reporting(-1);
  session_start();
  require_once __DIR__ . '/db.php';
  require_once __DIR__ . '/funcs.php';


  if (isset($_POST['register'])) {
    unset($_SESSION['success']);
    unset($_SESSION['errors']);
    registration();
    header("Location: index.php");
    die;
  }
  if (isset($_POST['auth'])) {
    unset($_SESSION['success']);
    unset($_SESSION['errors']);
    login();
    header("Location: index.php");
    die;
  }
  if (isset($_GET['do']) && $_GET['do'] == 'exit') {
    if (!empty($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
    header("Location: index.php");
    die;
  }

  if (isset($_SESSION['success'])) {
    echo "<p class='success'>" . $_SESSION['success'] . "</p>";

  }
  if (isset($_SESSION['errors'])) {
    echo "<p class='error'>" . $_SESSION['errors'] . "</p>";

  }
  ?>

</body>

</html>