<?php

abstract class A {
    abstract function func1();
    public function func2() {
        echo __CLASS__;
    }
}

class B extends A{

    public function func1() {

    }

    public function func2($a) {}
}
?>
