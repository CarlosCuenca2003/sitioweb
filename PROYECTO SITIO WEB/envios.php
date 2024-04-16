<?php
// Recibe los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Guarda los datos en un archivo CSV
$archivo = 'datos.csv';
$datos = array($nombre, $email);
$manejador_archivo = fopen($archivo, 'a');
fputcsv($manejador_archivo, $datos);
fclose($manejador_archivo);

// Redirecciona de vuelta al formulario
header('Location: formulario.html');
exit();
?>
