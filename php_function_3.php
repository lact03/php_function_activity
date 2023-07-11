<?php

function isDivXthree($number) {
    if ($number % 3 === 0) {
        return true;
    } else {
        return false;
    }
}

$number = 37;
if (isDivXthree($number)) {
    echo "The number $number is divisible by 3.";
} else {
    echo "The number $number is not divisible by 3.";
}

?>