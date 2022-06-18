<?php
function whatIsTheResult(): int
{
    $i = 13;
    $soma = 0;
    $k = 0;

    while  ($k < $i) {
        $k += 1;
        $soma += $k;
    }

    return $soma;
}

echo "Soma: " . whatIsTheResult() . "\n";