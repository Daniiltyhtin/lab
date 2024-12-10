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
    "<p>Преобразует перевод коретки в Html код первода строки</p>";
  echo nl2br("Вот тут перевод строки-/n Вот");

  echo "<h3>Функция str_split</h3>" .
    "<p>Разбивает всю строку по байтам</p>";
  print_r(mb_str_split("Вот тут перевод строки-/n Вот"));

  echo "<h3>Функция substr</h3>" .
    "<p>Берет подстроку из строки</p>";
  var_dump(mb_substr("Вот тут перевод строки-/n Вот", 4, 3));

  echo "<h2>Самостоятельное задание</h2>";

  echo "<h3>Функция sub_count</h3>";
  echo "Количество букв 'a' в слове 'always' = " . sub_count("always", "a");

  echo "<h3>Функция no_space</h3>";
  echo "Вот строка без пробелов = " . no_space("Вот строка без пробелов");

  echo max_number(123456789);

  ?>


</body>

</html>