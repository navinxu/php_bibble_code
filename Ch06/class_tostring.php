<?php

class Printable {
    public $testone;
    public $testtwo;
    public function __construct() {
        $this->testone = 123;
        $this->testtwo = "Hello";
    }

    public function changeOne() {
        $this->testone = 345;
    }
    public function __toString() {
        return var_export($this, TRUE);
    }
}

$p = new Printable;
echo $p;
$p->changeOne();
echo '<br/>';
echo $p;

?>
