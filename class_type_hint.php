<?php
class A {}
class B extends A {}
function check_hint(B $object) {}
$a = new A;
check_hint($a);

?>
