<?php 

include_once 'includes/bd.php';
include_once 'includes/queries.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cursos | Ediciones Azul</title>
    <link rel="stylesheet" href="css/media_data.css" />
    <link rel="stylesheet" href="css/data.css" />
    <link rel="stylesheet" href="css/cursos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Work+Sans&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="navMedia navText" hidden>
        <span>Clientes</span>
        <span>Ventas</span>
        <span>Cursos</span>
      </div>
      <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="links_container">
        <li class="links_item">
          <a href="" class="link"> clientes </a>
        </li>
        <li class="links_item">
          <a href="" class="link"> Ventas </a>
        </li>
        <li class="links_item">
          <a href="./cursos.html" class="link active"> Cursos </a>
        </li>
      </ul>
    </nav>
    <main>
      <div class="pestaña"></div>
      <section class="welcome">
        <p>
          <strong>¡Hola!</strong> Acá vas a poder encontrar la informacion de
          los cursos disponibles en la base de datos.
        </p>
      </section>
      <table>
        <tr class="title-cursos">
          <td>ID</td>
          <td>DESCRIPCION</td>
          <td>DURACION</td>
          <td>COSTO</td>
        </tr>
        <?php
        while ($row=mysqli_fetch_array($resultado))
        {
        ?>
        <tr class="data-cursos">
          <td><?php echo $row["idCurso"]; ?></td>
          <td><?php echo $row["descripcionDelCurso"]; ?></td>
          <td><?php echo $row["duracionDelCurso"]; ?></td>
          <td><?php echo $row["costo"]; ?></td>
        </tr>
        <?php
        };
        ?>
      </table>
    </main>
    <script src="script.js"></script>
  </body>
</html>
