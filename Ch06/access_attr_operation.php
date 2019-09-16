<?php 
class Acls {
    public $attribute;

    function operation($param) {
        $this->attribute = $param;
        echo $this->attribute. "\n";
     }

    function get_attribute() {
        echo $this->attribute;
    }
}
$obj = new Acls();
$obj->operation(123);
$obj->attribute = 456;
$obj->get_attribute();
?>
