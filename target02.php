<?php

function fibonacci(int $n): array
{
    $primeiro = 0;
    $segundo = 1;

    $fib = [$primeiro, $segundo]; // [0] = 0, [1] = 1
    for($i = 1; $i < $n; $i++){
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}

function numberIsFibonacci(int $numero): bool
{
    $fib = fibonacci(21);
    foreach ($fib as $valor) {
        if ($valor == $numero) {
            return true;
        }
    }
    return false;
}

$input = readline("Digite um numero: ");
$numberIsFibonacci = numberIsFibonacci($input);

if ($numberIsFibonacci) {
    echo "O número é fibonacci";
} else {
    echo "O número não é fibonacci";
}