<?php

function getStatusPercentual(): void
{
    $sp = 67836.43;
    $rj = 36678.66;
    $mg = 29229.88;
    $es = 27165.48;
    $outros = 19849.53;

    $total = $sp + $rj + $mg + $es + $outros;

    $spPercentual = ($sp * 100) / $total;
    $rjPercentual = ($rj * 100) / $total;
    $mgPercentual = ($mg * 100) / $total;
    $esPercentual = ($es * 100) / $total;
    $outrosPercentual = ($outros * 100) / $total;

    echo "Percentual de Faturamento de Todos os Estados:" . "\n";
    echo "SP: " . $spPercentual . "%\n";
    echo "RJ: " . $rjPercentual . "%\n";
    echo "MG: " . $mgPercentual . "%\n";
    echo "ES: " . $esPercentual . "%\n";
    echo "Outros: " . $outrosPercentual . "%\n";
}

getStatusPercentual();
