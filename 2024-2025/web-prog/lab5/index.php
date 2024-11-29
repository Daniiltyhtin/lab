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
  $stringTest = "_Привет Мир!_";

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

  echo "<h3>Функция htmlentities</h3>" .
  "<p>Преобразует все возможные символы в HTML-сущности</p>";
  echo htmlentities($sringHtml);
  
  echo "<h3>Функция ltrim</h3>" .
  "<p>Удаляет проблелы или другие символы из начала строки</p>";
  echo ltrim($stringTest, '_');
  
  echo "<h3>Функция rtrim</h3>" .
  "<p>Удаляет проблелы или другие символы из конца строки</p>";
  echo rtrim($stringTest, '_');

  echo "<h3>Функция trim</h3>" .
  "<p>Вставляет тег разрыва строки перед каждым переводом строки</p>";
  echo trim($stringTest, '_');

  echo "<h3>Функция nl2br</h3>" .
  "<p>Удаляет проблелы или другие символы из начала и конца строки</p>";
  echo trim($stringTest, '_');



  ?>


</body>

</html>