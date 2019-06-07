<?PHP

class Cls {
    static public function __callstatic($method, $p) {
        echo $method;
    }
}
Cls::test();
?>
