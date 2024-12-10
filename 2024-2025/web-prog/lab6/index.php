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
  foreach ($errorsArray as $error) {
    echo $i . "-" . $error . "<br>";
    $i++;
  }
  echo '<a href="index.html">Вернуть к форме</a>';
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