<?php

namespace prime\Solution;

// BEGIN
function isPrime($n)
{
    if ($n == 2) {
        return true;
    }

    $i = 2;
    while ($i <= $n / 2) {
        if ($n % $i == 0) {
            return false;
        }
        $i++;
    }

    return true;
}
// END
