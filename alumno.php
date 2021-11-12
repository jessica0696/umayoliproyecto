<?php
include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900);

h1,
p,
a{
  margin: 0;
  padding: 0;
  font-family: 'Lato';
}

h1 {
  font-size: 2.8em;
  padding: 10px 0;
  font-weight: 800;
}

p {
  font-size: 1.1em;
  font-weight: 100;
  letter-spacing: 5px;
}

.header {
  width: 100%;
  padding:60px 0;
  text-align: center;
  background: #4c5270;
  color: white;
}


.btn-bgstroke {
  font-size: 20px;
  display: inline-block;
  border: 1px solid white;
  padding: 10px 20px;
  border-radius: 10px;
  cursor: pointer;
  font-weight: 300;
  margin-top: 30px; 
}

.btn-bgstroke:hover {
  background-color: red;
  color: #4c5270;
}
#datos {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#datos tr, #datos th {
  border: 1px solid #ddd;
  padding: 8px;

    
    ul { list-style: none; }
a { text-decoration: unset; }
a:hover { text-decoration: underline; }
ul > li > a { color:#fff; }
ul > li { line-height: 1.5em; }
.footer {
    display: block;
    width: 100%;
    position: relative;
    background: #150c21;
    padding: 150px 25px 50px 25px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}
.footer-start {
    display: flex;
    position: relative;
    align-items: center;
    justify-content: space-between;
    max-width: 1280px;
    width: 90%;
    margin: auto;
    padding: 80px 100px;
    background: #705df2;
    border-radius: 15px;
}

</style>
    </head>
    <body style="background-color: #ffff;">
           <section class="header">
    <h1>Base de datos de usuarios</h1>
    <p>agrega, edita o elimina aqui abajo</p>
</section>
        <h1>Usuarios: </h1>
                        <div class="col-md-8">
                            <table class="table" id="datos" >
                                <thead style >
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
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th scope="row"><?php  echo $row['cod_estudiante']?></th>
                                                <th><?php  echo $row['dni']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
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
 <div class="container mt-5">
                    <div class="row">

                        <div  class="col-md-3">
                      
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
  
                        
                        
                        <footer>
  <ul>
      <li><a href="mailto:info@stackfindover.com"><i class="fa fa-envelope-open"></i> info@stackfindover.com</a></li>
      <li><a href="#"><i class="fa fa-twitter"></i>@stackfindover</a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
  </ul>
</footer>
                        </body>
</html>
