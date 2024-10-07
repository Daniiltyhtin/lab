<?php

// Constants

echo "<h4>Константы</h4>";

define("CONST_1", "константа№1");
echo CONST_1;

echo "<br>";

const CONST_2 = "константа№2";
var_dump(CONST_2);

echo "<br>";

const NAME = "John";
echo "Hello" . NAME . "!";

echo "<br>";

//Boolean

echo "<h4>Булев тип</h4>";

$bool = true;
$bool2 = false;
var_dump($bool, $bool2);

echo "<br>";

//Integer 

echo "<h4>Целочисленный тип данных</h4>";

$int1 = 0;
$int2 = 1;
var_dump($int1, $int2);

echo "<br>";

//Float

echo "<h4>Вещественный тип</h4>";

$float = 1_234.5678;
var_dump($float);

echo "<br>";

//String

echo "<h4>Строки</h4>";

$str1 = '<p>Hello 1</p>';
$str2 = '<p>Hello 2</p>';

echo $str1, PHP_EOL, $str2;

//HEREDOC

echo "<h4>Инструкция HEREDOC</h4>";

$str4 = <<<"HEREDOC"

<div> Hello M.D</div>

HEREDOC;

echo $str4;

//

echo "<h4>Математические операции</h4>";

var_dump(1 + 2);
echo "<br>";
echo 1;
echo "<br>";
echo 2;
echo "<br>";
var_dump(1 - 2);
echo "<br>";
var_dump(10 * 2);
echo "<br>";
var_dump(10 / 2);
echo "<br>";
// var_dump(1 + '2t');
// var_dump(1 + "2");
var_dump(20 % 8);

//Logic

echo "<h4>Логические операции</h4>";

var_dump(3 == 3);
echo "<br>";
var_dump(3 === '3');
echo "<br>";
var_dump(2 != 3);
echo "<br>";
var_dump(2 <> 3);
echo "<br>";
var_dump('3' !== 3);
echo "<br>";
var_dump(3 !== '3');

//

echo "<h4>Составные условия</h4>";

$a = (3 == 3) && (3 < 2);
var_dump($a);

echo "<br>";
$a = (3 == 3) and (3 < 2);
var_dump($a);

echo "<br>";
$a = (2 == 3) || (3 > 2);
var_dump($a);

echo "<br>";
$a = (2 == 3) or (3 > 2);
var_dump($a);

echo "<h4>Самостоятельное задание, пункт 1</h4>";

// Скрипт для вывода количетсва секунд в часе, сутках и неделе

$min = 60;
$hour = 60 * $min;
$day  = 24 * $hour;
$week = 7 * $day;

echo "<p>Количество секунд в часе = $hour </p>";
echo "<p>Количество секунд в дне = $day </p>";
echo "<p>Количество секунд в неделе = $week </p>";

echo "<h4>Самостоятельное задание, пункт 2</h4>";
// Тот же скрипт с использованием одной переменной

$min = 60;

echo "<p>Количество секунд в часе = " . ($min *= 60) . "</p>";
echo "<p>Количество секунд в дне = " . ($min *= 24) . "</p>";
echo "<p>Количество секунд в неделе = " . ($min *= 7) . "</p>";

echo "<h4>Условный оператор</h4>";

$arr = array('Желтый', 'Зеленый', 'Красный');

shuffle($arr);

if ($arr[0] == "Зеленый") {
  echo "Можно идти";
} elseif ($arr[0] == "Желтый") {
  echo "Приготовиться";
} else {
  echo "Ждать";
};

echo "<h4>Тернарный оператор</h4>";

echo $arr[0] == "Зеленый" ? "Можно идти" : ($arr[0] == "Желтый" ? "Приготовиться" : "Ждать");

echo "<br><br><br>";
