<?php 
function reverse_word($word) {
    if (strlen($word) > 1) 
        reverse_word(substr($word, 1));
    echo substr($word, 0, 1);
    return;
}

$word = "Hello";
reverse_word($word);
?>
