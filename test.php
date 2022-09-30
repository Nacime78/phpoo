<?php

class A{
    private $toto = 5;
    public static $tata = 10;
    public $titi = 20;
    protected $tutu = 30;

    public function ab(){
        echo $this->tutu;
    }
}

$a = new A();
echo A::$tata;