<?php
function isValidIP(string $str): bool
{
  $a = explode(".", $str);
  if (count($a) <> 4) {
    return false;
  }
  foreach ($a as $item)  {
    if (($item > 255 && $item < 0) || (is_numeric($item))) {
      return false;
    }
  }
  return true;
}


?>