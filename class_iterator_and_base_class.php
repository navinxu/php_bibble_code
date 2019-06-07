<?php

class ObjectIterator implements Iterator {

    private $obj;
    private $count;
    private $currentIndex;

    public function __construct($obj) {
        // 初始化数据项和数据项数
        $this->obj = $obj;
        $this->count = count($this->obj->data);
    }

    /**
     * 设/重置内部数据指针
     * 这里是将当前数据的索引设为 0
     */
    public function rewind() {
        $this->currentIndex = 0;
    }

    /**
     * 判断当前指针下是否还能继续迭代
     * 这里是判断当前数据项的索引是否超过项数     *
     */
    public function valid() {
        return $this->currentIndex < $this->count;
    }

    /**
     * 获取当前的数据指针值（位置）
     * 这里是返回当前数据索引/位置
     */
    public function key() {
        return $this->currentIndex;
    }

    /**
     * 获取保存在当前数据指针的值
     * 这里是返回当前数据项的值
     */
    public function current() {
        return $this->obj->data[$this->currentIndex];
    }

    /**
     * 移动当前数据指针
     * 这里是将当前数据位置增1
     */
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
    echo $key . " => " . $value . "\n";
}
?>
