<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ASSETS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ASSETS/CSS/estilos.css">
    <title>ALMACENMVC 2025</title>
</head>
<body>
    <header id="inicio" class="sup">
        <img src="../ASSETS/IMG/logosus.jpg">
        <br><br>   
    
    <nav class="vnav">
        <ul>
            <li><a href="VIEW/inicioprop.php?m=muestra">Regresa</a></li>
        </ul>
    </nav>
    </header>
 
    <main>
    <br><br><br><br>
    <form action="index.php?m=insertausu" method="post" class="formlog">
    <h4 class="texto1"><i class="fa fa-sign-in"></i> &nbsp; Datos del usuario nuevo 
        <center><img src="../ASSETS/IMG/usuario.jpg" alt="Imagen 1" class="login"></center>
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" pattern="[0-9]{8,15}">  

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" pattern="[a-zA-Z]{4,30}">
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" pattern="[a-zA-Z]{4,30}">

        <label for="correo">Correo:</label>
        <input type="text" id="correo" name="correo" pattern="([a-z0-9_\.-]{4,20}+)@([\da-z\.-]+)\.([a-z\.]{2,6})">

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" pattern="[0-9]{8,15}">

        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion" pattern="[a-z0-9_-]{6,18}">

        <label for="contraseña">Contraseña:</label>
        <input type="text" id="contraseña" name="contraseña" pattern="[a-z0-9_-]{6,18}">

        <label for="tipousu">Tipo de usuario:</label>
        <select name="tipousu">
        <option value="1">Propietario</option>
        <option value="2">Administrador</option>
        <option value="3">Vendedor</option>
        <option value="4">Proveedor</option>
        </select>      
        <br><br>
        <input type="submit" name="ingresa" value="Enviar" class="btn btn-primary">
    </form>
     
    </main>
    <br><br><br><br>    

    <footer class="fventas">
        <p> SOFTORE &copy; 2023 Derechos reservados</p>
    </footer>
</body>
</html>
