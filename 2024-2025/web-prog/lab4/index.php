<?php

function test()
{
  echo "<p>Hello, world!</p>";
}

test();

function test2()
{
  static $a = 1;
  echo $a . "<br>";
  $a++;
}

test2();
test2();
test2();

function sum($arg1, $arg2, $arg3)
{
  return ($arg1 + $arg2) * $arg3;
}

echo sum(arg1: 1, arg2: 6, arg3: 5);

echo "<br>";

function get_count($arr)
{
  return count($arr);
}

echo get_count([1, 2, 3, 4, 5, 6, 7, 8]);

function table($a, $b)
{
  echo '<table border="1" width="100%">';
  for ($tr = 1; $tr <= $b; $tr++) {
    echo "<tr>";
    for ($td = 1; $td <= $a; $td++) {
      echo "<td>" . $td . " * " . $tr . " = " . $td * $tr . "</td>";
    }
    echo "</tr>";
  }

  echo "</table>";
}

table(5, 8);

$data = require_once('../lab1/index.php');

echo $data;

$data = include('../lab1/index.php');

?>


<h2>Альтернативный синтаксис</h2>

<?php
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($nums as $num):
  echo $num;
endforeach;

?>

<?php foreach ($nums as $num): ?>
  <?= "<p>$num</p>"; ?>

<?php endforeach; ?>

<h2>Функции для работы с массивами</h2>

<?php

$products = [
  ["cpu" => "Ryzen 5 5600", "screen" => "15 OLED", "gpu" => "5050", "ssd" => "256 gb", "producer" => "Asus"],
  ["cpu" => "Ryzen 5 7500", "screen" => "17 OLED", "gpu" => "3060", "ssd" => "512 gb", "producer" => "Msi"],
  ["cpu" => "Ryzen 7 5700x ", "screen" => "15 IPS", "gpu" => "3070", "ssd" => "1024 gb", "producer" => "Acer"],
  ["cpu" => "Ryzen 7", "screen" => "15 VA", "gpu" => "3050", "ssd" => "512 gb", "producer" => "Honor"],
  ["cpu" => "Ryzen 3 7320U", "screen" => "13 OLED", "gpu" => "4050", "ssd" => "256 gb", "producer" => "Huawei"]
];



echo count($products, 1);

echo "<br>";

foreach ($products as $product) {
  print_r(array_count_values($product));
  echo "<br>";
}


var_dump(array_key_exists(1, $products));

echo "<br><br>";


foreach ($products as $product) {
  var_dump(in_array("3070", $product));
  echo "<br>";
}

echo "<br>";

var_dump(array_search(3, $products));

echo "<br>";

print_r(array_keys($products));

echo "<br>";

print_r(array_values($products));

echo "<br>";

foreach ($products as $product) {
  print_r(array_unique($product));
  echo "<br>";
}

?>

<h2>Самостоятельное задание</h2>

<?php

function user_count($arr)
{
  $k = 0;
  foreach ($arr as $k) {
    $k++;
  }
  return $k;
}

echo user_count($nums);

function sumArray($arr) {

}
  ?>


<?php
function isValidIP(string $str): bool
{
  $a = explode(".", $str);
  if (count($a) <> 4) {
    return false;
  }
  foreach ($a as $item) {
    if (($item > 255 && $item < 0) || (is_numeric($item))) {
      return false;
    }
  }
  return true;
}


//Создать многомерный массив имитирующий работу интернет магазина:
// Первое измерение - наименование товаров(5 штук), а внутренний массив(второе измерение) характеристики продукта - 5 параметров
// Вывести этот массив через цикл

$products = [
  "Asus G-prime" => ["cpu" => "Ryzen 5 5600", "screen" => "15 OLED", "gpu" => "5050", "ssd" => "256 gb", "producer" => "Asus"],
  "Msi modern" => ["cpu" => "Ryzen 5 7500", "screen" => "17 OLED", "gpu" => "3060", "ssd" => "512 gb", "producer" => "Msi"],
  "Acer" => ["cpu" => "Ryzen 7 5700x ", "screen" => "15 IPS", "gpu" => "3070", "ssd" => "1024 gb", "producer" => "Acer"],
  "Honor magicbook" => ["cpu" => "Ryzen 7", "screen" => "15 VA", "gpu" => "3050", "ssd" => "512 gb", "producer" => "Honor"],
  "Huawei matebook" => ["cpu" => "Ryzen 3 7320U", "screen" => "13 OLED", "gpu" => "4050", "ssd" => "256 gb", "producer" => "Huawei"]
];


echo "<ol>";
foreach ($products as $key => $value) {
  echo "<li>Наименование устройства:" . $key . "</li><ul>";
  echo "<li>Процессор:" . $value['cpu'] . "</li>";
  echo "<li>Экран:" . $value['screen'] . "</li>";
  echo "<li>Видеокарта:" . $value['gpu'] . "</li>";
  echo "<li>Объем накопителя:" . $value['ssd'] . "</li>";
  echo "<li>Производитель:" . $value['producer'] . "</li></ul>";
}

echo "</ol>";