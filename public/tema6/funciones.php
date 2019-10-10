<?php	
	function showErrors($errors) {
		echo '<ul>';
		foreach ($errors as $error) {
			echo '<li>' . $error . '</li>';
		}
		echo '</ul><br>';
	}

	function showField($field) {
		return isset($_POST[$field]) ? $_POST[$field] : '';
	}

	function showErrorsField($field, $errors) {
		if (isset($errors[$field])) {
			echo '<span>' . $errors[$field] . '</span>';
		}
	}