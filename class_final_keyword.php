<?php
final class A {
    public $attribute = 'default value';
    public function operation() {
        echo 'In class A'. "\n";
        echo 'Something' . "\n";
        echo 'The value of $attribute is ' . $this->attribute . "\n";
    }
}

class B extends A {
    public $attribute = 'different value';
    public function operation() {
        echo 'In class B'. "\n";
        echo 'Something else' . "\n";
        echo 'The value of $attribute is ' .$this->attribute . "\n";
    }
    public function access_A_operation() {
        echo 'In class B' . "\n";
        parent::operation();
    }
}
?>
