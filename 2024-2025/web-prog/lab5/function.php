<?php

function sub_count($str, $substr)
{
  $count = 0;
  $len = strlen($substr);
  for ($i = 0; $i <= strlen($str); $i++) {
    if (substr($str, $i, $len) == $substr) {
      $count += 1;
    }
  }
  return $count;
}

function no_space($str)
{
  $result = "";
  foreach (str_split($str) as $char) {
    if ($char != " ") {
      $result .= $char;
    }
  }
  return $result;
}

function max_number($num)
{
  $data = str_split($num);
  $count_elements = count($data);
  $iterations = $count_elements - 1;

  for ($i = 0; $i < $count_elements; $i++) {
    $changes = false;
    for ($j = 0; $j < $iterations; $j++) {
      if ($data[$j] < $data[($j + 1)]) {
        $changes = true;
        list($data[$j], $data[($j + 1)]) = array($data[($j + 1)], $data[$j]);
      }
    }
    $iterations--;
    if (!$changes) {
      break;
    }
  }
  return implode($data);
}
