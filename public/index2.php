<?php ini_set('display_errors', 1); ?>

<h1>Esta es mi primera página web</h1>

<?php 
	$soyvariable = "Pepe Pérez";
	echo $soyvariable;
?>

<h4>Soy otra etiqueta</h4>

<?php
$yo = '';
if ($yo == 'Pepe') { ?>
	<p>Yo soy Pepe</p>
<?php } else { ?>
	<p>Yo no soy Pepe</p>
<?php } ?>

<?= "Esto se imprime porque quiero<br>" ?>

<?php

$cadena = "Soy una cadena de texto";
var_dump($cadena);
echo "<br>";
echo $cadena . "<br>";

$cadena = 4;
$numero = 7;

var_dump($cadena);

echo "<br>";

echo ($cadena + $numero) . "<br>";

$cadena = 3.75;

echo $cadena . "<br>";

$variable = false;

if ( ! $variable) {
	echo "La variable tiene valor falso";
}

echo "<br>";

$numero = 4;

if ($numero) {
	echo "Hay alumnos en clase";
} else {
	echo "No hay nadie";
}

echo "<br>";
echo "<br>";

$nombre = 'Pepe';
$cadena1 = "Mi nombre es $nombre";
$cadena2 = 'Mi nombre es $nombre';

echo $cadena1 . '<br>';
echo $cadena2 . '<br>';
echo 'Mi nombre es ' . $nombre . '<br>'

?>

Mi nombre es <?= $nombre ?> <br>

<?php
$numero = 0;
echo $numero ? "Hay alumnos en clase" : "No hay nadie";
?> 
<br>

<?php

$vector = ['Juan', 'Joaquín', 'Javier', 'Jesús'];

var_dump($vector);
?>
<br>

<?php
//$vector = [];
$vector[] = 'Jaime';
var_dump($vector);
?>
<br>

<?php
$capital['España'] = 'Madrid';
$capital['Francia'] = 'Paris';
$capital['Italia'] = 'Roma';
$capital['Inglaterra'] = 'Londres';
$capital['Grecia'] = 'Atenas';


foreach ($capital as $key => $value) {
	echo 'La capital de ' . $key . ' es ' . $value . '<br>';
}
?>

<br><br>
Capitales de Europa:
<ul>
<?php foreach ($capital as $key => $value) : ?>
	<li>La capital de <?= $key ?> es <?= $value ?></li>
<?php endforeach; ?>
</ul>












