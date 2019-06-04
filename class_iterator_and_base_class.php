<?php

class ObjectIterator implements Iterator {

    private $obj;
    private $count;
    private $currentIndex;

    public function __construct($obj) {
        $this->obj = $obj;
        $this->count = count($this->obj->data);
    }

    public function rewind() {
        $this->currentIndex = 0;
    }

    public function valid() {
        return $this->currentIndex < $this->count;
    }

    public function key() {
        return $this->currentIndex;
    }

    public function current() {
        return $this->obj->data[$this->currentIndex];
    }

    public function next() {
        $this->currentIndex ++;
    }
}

class DataObject implements IteratorAggregate {

    public $data = array();

    public function __construct($in) {
        $this->data = $in;
    }

    public function getIterator() {
        return new ObjectIterator($this);
    }

}

$myObject = new DataObject(array(2, 4, 6, 8, 10));

$myIterator = $myObject->getIterator();

for ($myIterator->rewind(); $myIterator->valid(); $myIterator->next()) {
    $key = $myIterator->key();
    $value = $myIterator->current();
    echo $key . " => " . $value . "<br/>";
}
?>
