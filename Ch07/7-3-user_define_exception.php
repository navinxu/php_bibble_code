<?php

class myException extends Exception {
    function __toString() {
        return "Exception: " . $this->getCode()
            . ": " . $this->getMessage() . "\n"
            . ' in ' . $this->getFile() . ' on line ' .$this->getLine() . "\n";
    }
}

try {
    throw new myException('A terrible error has occurred', 42);
} catch (myException $e) {
    echo $e;
}

?>
