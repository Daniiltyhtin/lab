<?php
class Car {

  public static $countCar = 0;
  public $color;
  public $wheels;
  public $speed;
  public $brand;

  public  function __construct($color, $wheels = 4, $speed, $brand) {
  
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;
    $this->brand = $brand;
    self::$countCar++;
  
  }
  
  public static function getCount() {
    return self::$countCar;
  }
}