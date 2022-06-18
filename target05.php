<?php

function reverseString(): void
{
    $string = readline('Digite uma string: ');
    $length = strlen($string);
    $i = $length - 1;

    for ($i; $i >= 0; $i--)
    {
      echo $string[$i];
    }
}

reverseString();