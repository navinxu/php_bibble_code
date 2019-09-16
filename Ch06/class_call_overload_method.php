<?php

class A {
    public function displayObject($obj) {
        echo "Obj";
    }

    public function displayArray($arr) {
        echo "Array";
    }

    public function displayScalar($scalar_var) {
        echo "Scalar";
    }

    public function __call($method, $p) {
        if ($method == 'display') {
            if (is_object($p[0])) {
                $this->displayObject($p[0]);
            } else if (is_array($p[0])) {
                $this->displayArray($p[0]);
            } else {
                $this->displayScalar($p[0]);
            }
        }
    }
}

$a = new A();

$arr = array();
$a->display($arr);
echo "\n";
$a->display($a);
echo "\n";
$a->display("str");

?>
