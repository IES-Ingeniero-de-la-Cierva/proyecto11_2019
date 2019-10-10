<?php include 'header.php' ?>
	<h3>Resolución del ejercicio 3 de la hoja 2</h3>
	<?php
		$a=1;
		$b=1;
		$c=1;

		$discriminante = $b * $b - 4 * $a * $c;

		if ($discriminante > 0) {
			$sol1 = (-$b + sqrt($discriminante)) / (2 * $a);
			$sol2 = (-$b - sqrt($discriminante)) / (2 * $a);
			echo 'x1 = ' . $sol1 . '<br>';
			echo 'x2 = ' . $sol2 . '<br>';
		} elseif ($discriminante == 0) {
			$sol1 = -$b / (2 * $a);
			echo 'x = ' . $sol1 . '<br>';
		} else {
			$solReal = -$b / (2 * $a);
			$solImag = sqrt(-1*$discriminante) / (2 * $a);
			echo 'x1= ' . round($solReal,2) . ' + ' . round(abs($solImag),2) . 'i<br>';
			echo 'x2= ' . round($solReal,2) . ' - ' . round(abs($solImag),2) . 'i<br>';
		}


	?>
<?php include 'footer.php' ?>