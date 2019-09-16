<?php 

class ACls {
    public $public_attr;
    protected $protected_attr;
    private $private_attr;
    private $attribute;

    function __get($name) {
        return $this->$name;
    }
    
    function __set($name, $value) {
        //$this->$name = $value + 10;
        switch ($name) {
        case "attribute":
            if ($value >= 1 && $value <= 100)
                $this->$name = $value;
            break;
        default:
            $this->$name = $value;
        }
    }
}

$obj = new ACls;
$obj->public_attr = 100;
echo $obj->public_attr;
echo "\n";
$obj->protected_attr = 200;
echo $obj->protected_attr;
echo "\n";
$obj->private_attr = 300;
echo $obj->private_attr;
echo "\n";
$obj->attribute = 500; // 并没有赋值
echo $obj->attribute; // 没有任何错误提示
echo "\n";
$obj->attribute = 88;
echo $obj->attribute; 
?>
