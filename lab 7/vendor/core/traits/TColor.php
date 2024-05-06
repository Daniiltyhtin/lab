<?php

namespace traits;

trait TColor{
    public $color;
    public function getColor(){
        return $this -> color;
    }
    public function setColor($color){
        $this->color = $color;
    }
}