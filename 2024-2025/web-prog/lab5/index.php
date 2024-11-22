<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  require_once('function.php');
  $title = "Лабоартораня 5";
  echo "<title>$title</title>";
  ?>
</head>

<body>
  <h2>Функции для работы со строками</h2>
  <?php
  $stringTest = "Привет Мир!";

  echo "<p>Тестовая строка = $stringTest</p>";

  echo "<h3>Функция <b>strlen</b></h3>" .
    "<p>Длина строки 'Привет' = " . strlen("Привет") . "</p>";

  echo "<h3>Функция explode</h3>" .
    "<p>Разбивает строку на массив элементов с выбранным разделителем</p>";
  var_dump(explode(" ", $stringTest));

  echo "<h3>Функция implode</h3>" .
    "<p>Обратная explode функция</p>";
  echo (implode(explode(" ", $stringTest)));

  echo "<h3>Функция htmlspecialchars</h3>" .
    "<p>Преобразует специальные символы в HTML-сущности</p>";
  $sringHtml = '<p class="exaple">Hello word<p>';
  echo htmlspecialchars($sringHtml);
  echo htmlentities($sringHtml);

  ?>


</body>

</html>