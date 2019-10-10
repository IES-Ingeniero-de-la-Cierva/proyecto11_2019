<?php include 'header.php' ?>
	<h3>Resolución del ejercicio 5 de la hoja 2</h3>
	<?php

		include 'funciones.php';
		
		if (isset($_POST['anno'])) {
			$año = $_POST['anno'];

			$dia = calcularDia($año);

			if ($dia > 31) {
				echo 'El domingo de Pascua de ' . $año . ' corresponde al ' . ($dia-31) . ' de Abril';
			} else {
				echo 'El domingo de Pascua de ' . $año . ' corresponde al ' . $dia . ' de Marzo';
			}
		} else {
			echo 'El año introducido no es correcto';
		}
		
	?>
<?php include 'footer.php' ?>