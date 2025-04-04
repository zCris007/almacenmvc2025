<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ASSETS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="ASSETS/CSS/estilos.css">
    <title>ALMACENMVC 2025</title>
</head>
<body>
    <header id="inicio" class="sup">
        <img src="ASSETS/IMG/logosus.jpg">
        <br><br>   
    
    <nav class="vnav">
        <ul>
            <li><a href="VIEW/inicioprop.php?m=muestra">Regresa</a></li>
        </ul>
    </nav>
    </header>
 
    <main>
    <br><br><br><br>
    <form action="index.php?m=actualizausu" method="post" class="formlog">
    <h4 class="texto1"><i class="fa fa-sign-in"></i> &nbsp; Datos del usuario a modificar 
        <center><img src="ASSETS/IMG/usuario.jpg" alt="Imagen 1" class="login"></center>

        <?php 
         foreach($data as $usuari ):
               ?>

        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" value="<?php echo $usuari['ide_usu'] ?>" readonly>  

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" pattern="[a-zA-Z]{4,30}" value=" <?php echo $usuari['nom_usu'] ?>">
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" pattern="[a-zA-Z]{4,30}" value=" <?php echo $usuari['ape_usu'] ?>">

        <label for="correo">Correo:</label>
        <input type="text" id="correo" name="correo" pattern="([a-z0-9_\.-]{4,20}+)@([\da-z\.-]+)\.([a-z\.]{2,6})" value=" <?php echo $usuari['correo_usu'] ?>">

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" pattern="[0-9]{8,15}"value=" <?php echo $usuari['tel_usu'] ?>">

        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion" pattern="[a-z0-9_-]{6,18}" value=" <?php echo $usuari['dir_usu'] ?>">

         <label for="tipousu">Tipo de usuario:</label>
        <select name="tipousu"  <?php echo $usuari['tip_usu'] ?>>
        <option value="1">Propietario</option>
        <option value="2">Administrador</option>
        <option value="3">Vendedor</option>
        <option value="4">Proveedor</option>
        </select>

         <label for="tipousu">Tipo de usuario:</label>
        <select name="tipousu"  <?php echo $usuari['est_usu'] ?>>
        <option value="1">Activo</option>
        <option value="2">Inactivo</option>
        </select>


        <label for="contraseña">Contraseña:</label>
        <input type="text" id="contraseña" name="contraseña" pattern="[a-z0-9_-]{6,18}"  value="<?php echo $usuari['pass_usu'] ?>">
      
        <br><br>
        <input type="submit" name="actualiza" value="Enviar" class="btn btn-primary">

        <?php 
        endforeach;
     ?>
    </form>
     
    </main>
    <br><br><br><br>    

    <footer class="fventas">
        <p> SOFTORE &copy; 2023 Derechos reservados</p>
    </footer>
</body>
</html>
