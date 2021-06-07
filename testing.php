<?php
//$var = 1;
//echo $var;
//
//$adding = $var++;
//echo $adding;

class MyClass
{
    public $var1;
    public $var2;
    public $var3;
    public $array = [];

    public function __construct($var1, $var2, $var3)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
        $this->var3 = $var3;

        $this->array = [$var1, $var2, $var3];
    }
    public function get()
    {
        return $this->array;

    }
}

$class = new MyClass('4','5','6');


var_dump($class->get());
