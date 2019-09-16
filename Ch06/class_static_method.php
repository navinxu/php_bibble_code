<?php

class Math {
    const pi = 3.14;

    static function sqaured($input) {
        return $input * $input;
    }

    static function printPI() {
        echo Math::pi;
    }
}

echo Math::sqaured(8);
echo "\n";
Math::printPI();

?>
