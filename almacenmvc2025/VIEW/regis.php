<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ASSETS/CSS/estilos.css">
    <title>Login a Almacendecimo</title>
</head>
<body>
    <header id="inicio" class="sup">
        <img src="../ASSETS/IMG/logosus.jpg">
        <br><br>   
    
    <nav class="vnav">
        <ul>
           
            <li><a href="indexV.php">Inicio</a></li>
             <li><a href="MenuP.php">Menú</a></li>
        </ul>
    </nav>
    </header>

    <main>
    <br><br><br><br>
        
    <form action="MODEL/validarusuario.php" method="post" class="formlog"> 
        <center><img src="../ASSETS/IMG/login.png" alt="Imagen 1" class="login"></center>
        <label for="nombre">Usuario:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Contraseña:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mensaje">Tipo de usuario:</label>
        <select class="opt" name="tipousu">
            <option value="1">Administrador</option>
            <option value="2">Vendedor</option>
            <option value="3">Cliente</option>
        </select>
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
