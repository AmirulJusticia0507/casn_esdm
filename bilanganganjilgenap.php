<?php
function isEven($num) {
    return $num % 2 == 0;
}

for ($number = 1; $number <= 15; $number++) {
    if (isEven($number)) {
        echo $number . " is even";
    } else {
        echo $number . " is odd";
    }
    echo "\n";
}
?>