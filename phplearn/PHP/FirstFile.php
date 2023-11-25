<?php
class Calc{
    public $a,$b,$c;

function sum(){
    $this->c=$this->a+$this->b;
    return $this->c;
}

}

$c1 = new Calc();
$c1->a=10;
$c1->b=20;

echo "Sum of a and b are:". $c1->sum();
?>