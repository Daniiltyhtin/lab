<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      box-sizing: border-box;
    }
    .error {
      min-height: 50px;
      background-color: red;
      border: 1px solid #235253;
      border-radius: 5px;
      color: white;
      font: 1em/25px Arial;
      min-width: 300px;
      padding: 10px;
    }
    .data {
      min-height: 50px;
      background-color: darkblue;
      border: 1px solid blue;
      border-radius: 5px;
      color: white;
      font: 1em/25px Arial;
      min-width: 300px;
      padding: 10px;
    }

    body {

    }
    div {
      margin: 50px auto;
      max-width: 300px;
    }
  </style>
</head>

<body>
  <?php

  $errorsArray = [];
  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      if ($key != 'send_form') {
        $errorsArray[] = "$key Не может быть пустым";
      }
    }
  }

  if (empty($errorsArray)) {
    echo "<div><p class='data'>Name :" . $_POST['name'] . "</p>" .
      "<p class='data'>Email :" . $_POST['email'] . "</p>" .
      "<p class='data'>Message :" . $_POST['message'] . "</p>";
    if (isset($_POST['vars'][0])) {
      echo "<p class='data'>Options :" . $_POST['vars'][0] . "</p>";
    }
    if (isset($_POST['vars'][1])) {
      echo "<p class='data'>Options :" . $_POST['vars'][1] . "</p>";
      if (isset($_POST['vars'][2])) {
        echo "<p class='data'>Options :" . $_POST['vars'][2] . "</p>";
      }
    }
    echo '<a href="index.html">Вернуть к форме</a>';
    echo "</div>";
  } else {
    $i = 1;
    echo "<div>";
    foreach ($errorsArray as $error) {
      echo "<p class='error'>" . $i . " - " . $error . "</p>";
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