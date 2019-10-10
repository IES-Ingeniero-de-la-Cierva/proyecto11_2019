<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<p>
		<label for="name">Nombre</label>
		<input type="text" name="name" value="">
	</p>
	<p>
		<label for="email">Correo Electrónico</label>
		<input type="email" name="email">
	</p>
	<p>
		<label for="password1">Contraseña</label>
		<input type="password" name="password1">
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