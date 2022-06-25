<?php
include './Agenda.php';

$contactosNuevos = new Agenda(); 

$contactosNuevos->guardarContactos();

                foreach ( $contactosNuevos->listaDeContactos() as $unContacto)
                {
                    $tablaDatos=list($apellido , $nombre , $dni , $telefono , $direccion)  = explode(":", $unContacto->ToString());
              
            }; 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="./css/agenda.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/directorio-telefonico.png" type="image/x-icon">
    <!-- Estilos Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Agenda</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bold" href="#">
                <img class="mr-2" src="" />
                Agenda de Contactos
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Agregar Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <table class="table table-dark table-striped container">
            <thead>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>DNI</td>
                <td>Telefono</td>
                <td>Direccion</td>
            </thead>
      <tbody>
          <tr>
          <?php 
              foreach ($tablaDatos as $tablaDato)
               {
                 echo '<td>'. $tablaDato . "</td>";
               }
          ?>
            </tr>
          </tbody>         
        </table>
    </main>
    <footer class="container-fluid container-footer d-flex flex-column align-items-center">

        <p>Alumno: Juan Nicolas Morales</p>

    </footer>
</body>

</html>