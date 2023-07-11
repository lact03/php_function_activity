<?php

function convertToWord($number) {
    $digitsToWords = array(
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine',
    );

    $word = '';
    $digits = str_split($number);
    
    foreach ($digits as $digit) {
        if (isset($digitsToWords[$digit])) {
            $word .= $digitsToWords[$digit] . ' ';
        } else {
            $word .= 'Unknown ';
        }
    }

    return trim($word);
}

$number = '10121985';
$word = convertToWord($number);
echo "The number ''$number'' in word form is ''$word''.";

?>