<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<p>
		<label for="name">Nombre</label>
		<input type="text" name="name" value="<?= showField('name') ?>"> <?php showErrorsField('name', $errors) ?>
	</p>
	<p>
		<label for="email">Correo Electrónico</label>
		<input type="email" name="email" value="<?= showField('email') ?>"> <?php showErrorsField('email', $errors) ?>
	</p>
	<p>
		<label for="password1">Contraseña</label>
		<input type="password" name="password1"> <?php showErrorsField('password', $errors) ?>
	</p>
	<p>
		<label for="password2">Repite la contraseña</label>
		<input type="password" name="password2">
	</p>
	<p>
		<label>
			<input type="submit" value="Enviar">
		</label>
	</p>
</form>