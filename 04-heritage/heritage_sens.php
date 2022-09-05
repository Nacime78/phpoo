<?php

class A{

    public function test1(){
        return "J'affiche test";
    }

}

class B extends A{

    public function test2(){
        return "J'affiche test2";
    }

}

class C extends B{

    public function test3(){
        return "J'affiche test3";
    }

}

$classC = new C;

echo "<pre>";
print_r(get_class_methods($classC));
echo "</pre>";

echo $classC->test1() . '<br>';
echo $classC->test2() . '<br>';
echo $classC->test3() . '<br>';

