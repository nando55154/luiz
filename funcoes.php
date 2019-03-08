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
?>



