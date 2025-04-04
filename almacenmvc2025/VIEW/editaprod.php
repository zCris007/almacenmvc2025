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
            <li><a href="VIEW/inicioadmi.php?m=muestra">Regresa</a></li>
        </ul>
    </nav>
    </header>
 
    <main>
    <br><br><br><br>
    <form action="index.php?m=actualizaprod" method="post" class="formlog">
    <h4 class="texto1"><i class="fa fa-sign-in"></i> &nbsp; Datos del prodcuto a modificar 
        <center><img src="ASSETS/IMG/produc.jpg" alt="Imagen 1" class="login"></center>

        <?php 
         foreach($data as $produc ):
               ?>

        <label for="codigo">Codigo:</label>
        <input type="text" id="codigo" name="codigo" value="<?php echo $produc['cod_prod'] ?>" readonly>  

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" pattern="[a-zA-Z]{4,30}" value=" <?php echo $produc['nom_prod'] ?>">
        
        <label for="referencia">referencia:</label>
        <input type="text" id="referencia" name="referencia" pattern="[a-zA-Z]{4,30}" value=" <?php echo $produc['ref_prod'] ?>">

        <label for="proveedor">Identificacion del proveedor:</label>
        <input type="text" id="proveedor" name="proveedor" pattern="([a-z0-9_\.-]{4,20}+)@([\da-z\.-]+)\.([a-z\.]{2,6})" value=" <?php echo $produc['ide_usu'] ?>">

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" pattern="[0-9]{3,15}"value=" <?php echo $produc['precio_prod'] ?>">

        <label for="cant-pedida">ultima cantidad pedida:</label>
        <input type="text" id="cant-pedida" name="cant-pedida" pattern="[a-z0-9_-]{2,18}" value=" <?php echo $produc['cant_pedida'] ?>">

         <label for="cant-minima">cantidad minima establecida:</label>
        <input type="text" id="cant-minima" name="cant-minima" pattern="[a-z0-9_-]{2,18}" value=" <?php echo $produc['cant_minima'] ?>">

         
        <label for="cant-stok">cantidad en inventario:</label>
        <input type="text" id="cant-stok" name="cant-stok" pattern="[a-z0-9_-]{2,18}"  value="<?php echo $produc['cant_stok'] ?>">
      

        <label for="imagen">Imagen</label>
        <input type="fila" id="imagen" name="imagen" pattern="[a-z0-9_-]{6,18}"  value="<?php echo $produc['img_prod'] ?>">
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
