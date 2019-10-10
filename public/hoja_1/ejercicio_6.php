<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 6</title>
</head>
<body>
	<h3>Resolución del ejercicio 6 de la hoja 1</h3>
	<?php
		$cantidad = 2345.67;

		$cantidadParcial = $cantidad;

		$b500 = (int) ($cantidadParcial / 500);
		$cantidadParcial = $cantidadParcial - $b500 * 500;

		$b200 = (int) ($cantidadParcial / 200);
		$cantidadParcial = $cantidadParcial - $b200 * 200;

		$b100 = (int) ($cantidadParcial / 100);
		$cantidadParcial = $cantidadParcial - $b100 * 100;

		$b050 = (int) ($cantidadParcial / 50);
		$cantidadParcial = $cantidadParcial - $b050 * 50;

		$b020 = (int) ($cantidadParcial / 20);
		$cantidadParcial = $cantidadParcial - $b020 * 20;

		$b010 = (int) ($cantidadParcial / 10);
		$cantidadParcial = $cantidadParcial - $b010 * 10;

		$b005 = (int) ($cantidadParcial / 5);
		$cantidadParcial = $cantidadParcial - $b005 * 5;

		$m200 = (int) ($cantidadParcial / 2);
	    $cantidadParcial = $cantidadParcial - $m200 * 2;

	    $m100 = (int) ($cantidadParcial / 1);
	    $cantidadParcial = $cantidadParcial - $m100 * 1;

	    $m050 = (int) ($cantidadParcial / 0.50);
	    $cantidadParcial = $cantidadParcial - $m050 * 0.5;

	    $m020 = (int) ($cantidadParcial / 0.20);
	    $cantidadParcial = $cantidadParcial - $m020 * 0.2;

	    $m010 = (int) ($cantidadParcial / 0.10);
	    $cantidadParcial = $cantidadParcial - $m010 * 0.1;

	    $m005 = (int) ($cantidadParcial / 0.05);
	    $cantidadParcial = $cantidadParcial - $m005 * 0.05;

	    $m002 = (int) ($cantidadParcial / 0.02);
	    $cantidadParcial = $cantidadParcial - $m002 * 0.02;

	    $m001 = (int) ($cantidadParcial / 0.01);
	    $cantidadParcial = $cantidadParcial - $m001 * 0.01;

	    echo 'Para devolver ' . $cantidad . ' necesitamos:<br>';
		echo $b500 . ' billetes de 500<br>';
		echo $b200 . ' billetes de 200<br>';
		echo $b100 . ' billetes de 100<br>';
		echo $b050 . ' billetes de  50<br>';
		echo $b020 . ' billetes de  20<br>';
		echo $b010 . ' billetes de  10<br>';
		echo $b005 . ' billetes de   5<br>';
		echo $m200 . ' monedas de 2<br>';
		echo $m100 . ' monedas de 1<br>';
		echo $m050 . ' monedas de 0.50<br>';
		echo $m020 . ' monedas de 0.20<br>';
		echo $m010 . ' monedas de 0.10<br>';
		echo $m005 . ' monedas de 0.05<br>';
		echo $m002 . ' monedas de 0.02<br>';
		echo $m001 . ' monedas de 0.01<br>';


	?>
	<br>
	<a href="../index.php">Volver</a>
</body>
</html>