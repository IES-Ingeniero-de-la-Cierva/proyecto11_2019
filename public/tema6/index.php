<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios Amigables</title>
</head>
<body>
	<h1>Formularios Usables</h1>
	<?php 
	ini_set('DISPLAY_ERRORS', 1);
	$errors = [];
	include 'funciones.php';

	if ( ! $_POST ) { 
		include 'formulario.php';
	} else {
		if ( ! isset($_POST['name'])) {
			$errors['name'] = 'No he recibido el nombre';
		} elseif (strlen($_POST['name']) < 3){
			$errors['name'] = 'El nombre es demasiado corto';
		} 
		if ( ! isset($_POST['email'])) {
			$errors['email'] = 'No he recibido el email';
		} elseif (strlen($_POST['email']) < 6) {
			$errors['email'] = 'El correo electrónico no es válido';
		} 
		if ( ! isset($_POST['password1']) || ! isset($_POST['password2'])) {
			$errors['password'] = 'No he recibido ambas contraseñas';
		} else {
			if ( strlen($_POST['password1']) < 6) {
				$errors['password'] = 'La contraseña debe tener al menos 6 caracteres';
			} 
			if ($_POST['password1'] != $_POST['password2']) {
				$errors['password'] = 'Ambas contraseñas deben ser iguales';
			} 
		}
		
		if ($errors) {
			showErrors($errors);
			include 'formulario.php';
		?>
			
		<?php
		} else {
			echo 'Todo bien, pasamos a registrar ese usuario';
		}

	} ?>
</body>
</html>

