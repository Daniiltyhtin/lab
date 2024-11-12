<?php

function test()
{
  echo "<h2>Hello, world!</h2>";
}

test();

echo "<h3>Функция с статической переменной</h3><br>"; 

function test2()
{
  static $a = 1;
  echo $a . "<br>";
  $a++;
}

test2();
test2();
test2();

echo "<h3>Функция подсчета суммы аргументов</h3><br>"; 
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

echo "<h3>Таблица 5 на 8 </h3><br>"; 

table(5, 8);

echo "<h3>Подключение файлов</h3><br>"; 

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

echo "<p>Функция count</p>";

echo count($products, 1);

echo "<p>Функция array_count_values</p>";

foreach ($products as $product) {
  print_r(array_count_values($product));
  echo "<br>";
}

echo "<p>Функция array_ckey_exists</p>";

var_dump(array_key_exists(1, $products));

echo "<p>Функция in_array</p>";


foreach ($products as $product) {
  var_dump(in_array("3070", $product));
  echo "<br>";
}

echo "<p>Функция array_search</p>";

var_dump(array_search(3, $products));

echo "<p>Функция array_keys</p>";

print_r(array_keys($products));

echo "<p>Функция array_values</p>";

print_r(array_values($products));

echo "<p>Функция array_unique</p>";

foreach ($products as $product) {
  print_r(array_unique($product));
  echo "<br>";
}

?>

<h2>Самостоятельное задание</h2>

<h3>Функции подсчета</h3>
<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function user_count($arr)
{
  $count = 0;
  foreach ($arr as $k) {
    $count++;
  }
  return $count;
}

echo "<p>Своя функция: " . user_count($nums) . "</p>";

echo "<p>Встроенная функция: " . count($nums). "</p>";

echo "<h3>Функции подсчета суммы элементов</h3>";

function sumArrayUser($arr)
{
  $sum = 0;
  foreach ($arr as $item) {
    $sum += $item;
  }
  return $sum;
}

function sumArray($arr)
{
  return array_sum($arr);
}

echo "<p>Функция с использваонием foreach: " . sumArray($nums) . "</p>";


echo "<p>Функция с использваонием встроенного метода: " . sumArray($nums) . "</p>";


echo "<p>Массив созданный с помощью range()</p>";
var_dump(range(1, 100));
echo "<br>";

echo "<p>Массив созданный с for</p>";
$array = [];
for ($i = 1; $i <= 100; $i++) {
  $array[] = $i;
}
var_dump($array);


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

// 