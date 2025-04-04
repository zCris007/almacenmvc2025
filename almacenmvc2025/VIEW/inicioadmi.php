<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ASSETS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ASSETS/CSS/estilos1.css">
    <title>Login de administrador a Almacenmvc</title>
</head>
<body>
    <header id="inicio" class="sup">
        <img src="../ASSETS/IMG/alimentar.png">
        <br><br>   
    
    <nav class="vnav">
        <ul>
            <li><a href="../VIEW/empresa.php">Regresa</a></li>
        </ul>
    </nav>
    </header>
    <main>
    <br><br>
    <form action="../index.php?m=validadmi" method="post" class="formlog">
    <h4 class="texto1"><i class="fa fa-sign-in"></i> &nbsp; Datos de administrador para ingreso  
        <center><img src="../ASSETS/IMG/login.png" alt="Imagen 1" class="login"></center>
        <label for="cedula">Identificación:</label>
        <input type="text" id="cedula" name="cedula">
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña">
        <input type="hidden" id="tipousu" value="2" name="tipousu">
        
        <br><br>
        <input type="submit" name="ingresa" value="Ingresar" class="btn btn-primary">
    </form>
    </main>
    <br><br><br><br>    
    <footer class="fventas">
        <p> SOFTORE &copy; 2023 Derechos reservados</p>
    </footer>
</body>
</html>
