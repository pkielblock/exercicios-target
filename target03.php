<?php

$data = file_get_contents('dados.json');
$dataDecoded = json_decode($data, true);

function getAverage(array $array): float
{
    $media = 0.0;
    $diasComFaturamento = 0;

    foreach ($array as $key => $value) {
        if ($value['valor'] != 0) {
            $media += $value['valor'];
            $diasComFaturamento++;
        }
    }
    return $media / $diasComFaturamento;
}

function daysAboveAverage(array $array): int
{
    $daysAboveAverage = 0;
    foreach ($array as $key => $value) {
        if ($value['valor'] > getAverage($array)) {
            $daysAboveAverage++;
        }
    }
    return $daysAboveAverage;
}

function getLowestValue(array $array): float
{
    $lowest = $array[0]['valor'];
    foreach ($array as $key => $value) {
        if ($value['valor'] != 0) {
            if ($value['valor'] < $lowest) {
                $lowest = $value['valor'];
            }
        }
    }
    return $lowest;
}

function getHighestValue(array $array): float
{
    $biggest = $array[0]['valor'];
    foreach ($array as $key => $value) {
        if ($value['valor'] > $biggest) {
            $biggest = $value['valor'];
        }
    }
    return $biggest;
}

echo "Total de dias em que o faturamento superou a média: " . daysAboveAverage($dataDecoded) . " dias" . "\n";
echo "Menor Faturamento: R$ " . getLowestValue($dataDecoded) . "\n";
echo "Maior Faturamento: R$ " . getHighestValue($dataDecoded) . "\n";