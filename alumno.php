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
            .table{
  width: 100%;
  height: 400px;
  background-image: url('tabla.png');
  background-repeat: no-repeat;
  background-size: contain;
 
}
            
            .imagen{
  width: 100%;
  height: 400px;
  background-image: url('usuario.png');
  background-repeat: no-repeat;
  background-size: contain;
 
}

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
  background: #4c5270
  color: white;
    
}



#datos {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#datos tr, #datos th {
  border: 1px solid #ddd;
  padding: 8px;

    
    .site-footer
{
  background-color:#4c5270;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0;
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373;
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d;
}
.copyright-text
{
  margin:0;
    color: #000000;
    
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px;

  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0;
  }
  .site-footer .copyright-text,.site-footer 
  {
    text-align:center;
  }
}

  

@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600;
  }
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
<img class="imagen" src="usuario.png" >
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
