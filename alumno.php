<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM alumno";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Usuarios</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body style="background-color: #ffff;">
  <section class="header">
    <h1>Base de datos de voluntarios Umayoli</h1>
    <p>agrega, edita o elimina aqui abajo</p>

  </section>
  <h1>Usuarios: </h1>
  <div class="col-md-8">
    <table class="table" id="datos">
      <thead style>
        <tr>
          <th>Numero de usuario</th>
          <th>telefono</th>
          <th>Nombre</th>
          <th>Apellido</th>

          <th></th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <th scope="row"><?php echo $row['cod_estudiante'] ?></th>
            <th><?php echo $row['dni'] ?></th>
            <th><?php echo $row['nombres'] ?></th>
            <th><?php echo $row['apellidos'] ?></th>
            <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
            <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>

  <h1> Crear nuevo usuario </h1>
  <img class="imagen" src="usuario.png">
  <div class="container mt-5">
    <div class="row">

      <div class="col-md-3">

        <form action="insertar.php" method="POST">

          <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="numero de usuario">
          <input type="text" class="form-control mb-3" name="dni" placeholder="telefono">
          <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombre">
          <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellido">

          <input type="submit" class="btn btn-primary" value="agregar">
        </form>
      </div>
      <h1>proyecto en la nube Heroku:</h1>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/aUW5GAFhu6s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/2qkdAt9PuqQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <br></br>

      <br></br>
      <br> </br>

      <footer class="site-footer">
        <div class="container">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Conceptualización de servicios en la nube-
                  Producto Integrador- desarrollado por Jessica Arambula
                </p>
              </div>
            </div>
          </div>
      </footer>


</body>

</html>
