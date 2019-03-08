<?php

function baskara($a, $b, $c){
	$delta = ($b * $b) - 4 * $a * $c;
	return $delta;
}
function calcularX($delta) {
	$xPositivo = (-$b + sqrt($delta)) / (2 *a);
	$xNegativo = (-$b - sqrt($delta)) / (2 *a);
	
	echo $xPositivo;
	echo $xNegativo;
}

    function primos_0a100 () {
    for($i = 1; $i <= 100; $i++)
{
    $divisores = 0;
    for($j = $i; $j >= 1; $j--){
        if (($i % $j) == 0) {
            $divisores++;
                         } 
    }
    if ($divisores == 2){
        echo $i . ', ';
    }
}
    }
?>



