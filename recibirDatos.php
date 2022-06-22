
<!-- recibimos los datos de los imputs del formulario -->

<?php 

include './Agenda.php';

    $contacto = new Agenda();
    $contactoNuevo = array(  $_POST['dni'], $_POST['nombre'], $_POST['apellido'], $_POST['direccion'], $_POST['telefono']);
    $contacto->agregarContacto($contactoNuevo);
    $contacto->guardarContactos();

header("Location: index.php");

?>