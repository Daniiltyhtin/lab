<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    p {
      min-height: 50px;
      background-color: red;
      border: 1px solid #235253;
      border-radius: 5px;
      color: white;
      font: 1em/25px Arial;
      min-width: 300px;
    }

    body {
      display: flex;
      justify-content: center;
    }

    div {

    }
  </style>
</head>

<body>
  <?php

  $errorsArray = [];
  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $errorsArray[] = "$key Не может быть пустым";
    }
  }

  if (empty($errorsArray)) {
    print_r($_POST);
  } else {
    $i = 1;
    echo "<div>";
    foreach ($errorsArray as $error) {
      echo "<p>" . $i . " - " . $error . "</p>";
      $i++;
    }

    echo '<a href="index.html">Вернуть к форме</a>';
    echo "</div>";
  }


  if (!empty($_FILES)) {
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    if (
      move_uploaded_file(
        $_FILES['file']['tmp_name'],
        "upload/{$_FILES['file']['name']}"
      )
    ) {
      echo 'Success';
    } else {
      echo 'Error';
    }
  }

  ?>

</body>

</html>