<?php

class A {
    private function operation1() {
        echo "operation1 called\n";
    }
    protected function operation2() {
        echo "operation2 called\n";
    }
    public function operation3() {
        echo "operation3 called\n";
    }
}

class B extends A {
    public function __construct() {
        //$this->operation1();
        $this->operation2();
        $this->operation3();
    }
}

$b = new B;
//$b->operation1();

?>
