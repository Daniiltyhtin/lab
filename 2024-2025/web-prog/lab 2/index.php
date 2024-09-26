<?php

// Constants

echo "<h4>Константы</h4>";

define("CONST_1", "константа№1");
echo CONST_1;

const CONST_2 = "константа№2";
var_dump(CONST_2);

echo "<br>";

const NAME = "John";
echo "Hello".NAME."!";

echo "<br>";

//Boolean

echo "<h4>Булев тип</h4>";

$bool = true;
$bool2 = false;
var_dump($bool, $bool2);

echo "<br>";

//Integer 

echo "<h4>Целочисленный тип данных</h4>";

echo "<h4>КОнстанты</h4>";
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

<div> Hello Sofi </div>

HEREDOC;

echo $str4;

//

echo "<h4>Математические операции</h4>";

var_dump(1 +2);
echo 1;
echo "br";
echo 2;
var_dump(1 - 2);
echo "br";
var_dump(10*2);
echo PHP_EOL;
var_dump(10/2);
echo PHP_EOL;
// var_dump(1 + '2t');
echo PHP_EOL;
// var_dump(1 + "2");
echo PHP_EOL;
var_dump(20%8);

//Logic

echo "<h4>Логические операции</h4>";

var_dump(3 == 3);
var_dump(3 === '3');
var_dump(2 != 3);
var_dump(2 <> 3);
var_dump('3' !== 3);
var_dump(3 !== '3');

//

echo "<h4>Составные условия</h4>";





