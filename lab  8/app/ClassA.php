<?php
namespace app;
use traits\TSingleton;

class ClassA{

    use TSingleton;

    protected const TEST = "Class A";

    public function getTest(){
        var_dump(self::TEST);
    }

    public function getTest2(){
        var_dump(static::TEST);
    }
}
