<?php

class MYClass
{

    public $x, $y, $z;

    public function __construct($a, $b)
    {
        $this->x = $a;
        $this->y = $b;
    }

    public function sumNum()
    {
        $this->z = $this->x + $this->y;
        return $this->z;
    }
}

$obj = new MYClass(45, 562);


echo $obj->sumNum();
