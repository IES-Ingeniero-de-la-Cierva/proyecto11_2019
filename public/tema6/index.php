<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios Amigables</title>
</head>
<body>
	<h1>Formularios Usables</h1>
	<?php if ( ! $_POST ) { 
		include 'formulario.php';
	} else {
		if ( ! isset($_POST['name'])) {
			echo 'No he recibido el nombre';
		} elseif (strlen($_POST['name']) < 3){
			echo 'El nombre es demasiado corto';
		} elseif ( ! isset($_POST['email'])) {
			echo 'No he recibido el email';
		} elseif (strlen($_POST['email']) < 6) {
			echo 'El correo electrónico no es válido';
		} elseif ( ! isset($_POST['password1']) || ! isset($_POST['password2'])) {
			echo 'No he recibido ambas contraseñas';
		} elseif ( strlen($_POST['password1']) < 6) {
			echo 'La contraseña debe tener al menos 6 caracteres';
		} elseif ($_POST['password1'] != $_POST['password2']) {
			echo 'Ambas contraseñas deben ser iguales';
		} else {
			echo 'Todo bien, pasamos a registrar ese usuario';
		}

	} ?>
</body>
</html>