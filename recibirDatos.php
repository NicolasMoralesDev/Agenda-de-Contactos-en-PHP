<!-- recibimos los datos de los imputs del formulario -->

<?php

include './Agenda.php';

$contacto = new Agenda();
$contactoNuevo = array($_POST['dni'], $_POST['nombre'], $_POST['apellido'], $_POST['direccion'], $_POST['telefono']);
$estado = $contacto->agregarContacto($contactoNuevo);
$contacto->guardarContactos();

/* Verificamos que los contactos no se repitan */

if ($estado == "¡Guardado, con exito!") {
    header("Location: index.php?estado=true&mensaje=¡Guardado, con exito!!");
    exit();

   

} else {
    header("Location: index.php?estado=false&mensaje=Error!");
    exit();

}


?>