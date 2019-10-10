<?php

function calcularDia($año) {
	$a = $año % 19;
	$b = $año % 4;
	$c = $año % 7;
	$d = (19 * $a + 24) % 30;
	$e = (2* $b + 4 * $c + 6 * $d + 5) % 7;

	return (22 + $d + $e);
}

