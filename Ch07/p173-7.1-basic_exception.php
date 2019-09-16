<?php

try {
    throw new Exception("A terrible error has occurred", 42);
} catch (Exception $e) {
    echo 'Exception ' . $e->getCode() . ": " . $e->getMessage() . "\n" . " in " . $e->getFile() . " on line " . $e->getLine() . "\n";
} 
?>
