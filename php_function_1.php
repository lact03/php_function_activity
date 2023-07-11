<?php

function checkCharacter($char) {
    $char = strtolower($char);

    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        return 'vowel';
    } elseif (ctype_alpha($char)) {
        return 'consonant';
    } else {
        return 'invalid';
    }
}

$character = '*';
$result = checkCharacter($character);
echo "The character ''$character'' is $result.";

?>
