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
            <li><a href="../VIEW/inicioadmi.php?m=muestra">Regresa</a></li>
        </ul>
    </nav>
    </header>
 
    <main>
        <?php 
            $enlace=mysqli_connect("localhost", "root", "", "almacen");
            $conprod=mysqli_query($enlace, "SELECT * FROM usuario WHERE tip_usu=4");
            $regprod=mysqli_fetch_array($conprod);
         ?>
    <br><br><br><br>
    <form action="index.php?m=insertaprod" method="post" class="formlog">
    <h4 class="texto1"><i class="fa fa-sign-in"></i> &nbsp; Datos del usuario nuevo 
        <center><img src="../ASSETS/IMG/produc.jpg" alt="Imagen 1" class="login"></center>
        <label for="codigo">codigo:</label>
        <input type="text" id="codigo" name="codigo" pattern="[0-9]{3,10}">  

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" pattern="[a-zA-Z]{4,30}">
        
        <label for="referencia">referencia:</label>
        <input type="text" id="referencia" name="referencia" pattern="[a-zA-Z]{4,30}">

        <label for="prove">proveedor:</label>
        <select name="prove" id="prove">
            <?php 
                do {                    
                $idepro=$regusu['ide_usu'];
                $nompro=$regusu['nom_usu'];
                $apepro=$regusu['ape_usu../'];
             ?>
             <option value=" <?php echo $idepro ?> "> <?php echo $idepro, ' - ', $nompro, ' - ', $apepro ?> </option>
             <?php 
                }while($regprod=mysqli_fetch_array($conprod))

              ?>
        </select>

        <label for="precio">precio:</label>
        <input type="text" id="precio" name="precio" pattern="[0-9]{4,30}">

        <label for="cant-pedida">Cantidad a pedir:</label>
        <input type="text" id="cant-pedida" name="cant-pedida" pattern="[0-9]{2,10}">

        <label for="cant-minima">Cantidad minima en inventario:</label>
        <input type="text" id="cant-minima" name="cant-minima" pattern="[0-9]{2,10}">

        <label for="imagen">Seleccione imagen del producto:</label>
        <input type="file" id="imagen" name="imagen" pattern="[0-9]{8,15}"><br>

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
