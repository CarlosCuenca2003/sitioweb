<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = "¡Bienvenido, $nombre! Gracias por registrarte en nuestro sitio.";

    // Enviar correo electrónico de alerta
    mail($correo, "Registro Exitoso", $mensaje);

    // Aquí puedes agregar el código para guardar los datos en una base de datos u otra acción posterior al registro
}
?>
