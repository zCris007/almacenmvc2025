<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ASSETS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="ASSETS/CSS/estilos1.css">
    <title>ALMACENMVC 2025</title>
</head>
<body>
    <header id="inicio" class="sup">
        <img src="ASSETS/IMG/Alimentar.png">
        <br><br>   
    
    <nav class="vnav">
        <ul>
            <li><a href="VIEW/inicioadmi.php?m=muestra">Regresa</a></li>
        </ul>
    </nav>
    </header>
 
<main>
    <a href="index.php?m=nuevoprod" class="btn btn-primary">Nuevo Producto</a><br><br>
<table class="table table-hover table-bordered table-condensed">
    <tr>
        <th style="text-align: center">Código</th>
        <th style="text-align: center">Nombre</th>
        <th style="text-align: center">Referencia</th>
        <th style="text-align: center">Proveedor</th>
        <th style="text-align: center">Precio</th>
        <th style="text-align: center">Cant-Pedidad</th>
        <th style="text-align: center">Cant-Minima</th>
        <th style="text-align: center">Inventario</th>
        <th style="text-align: center">Imagen</th>
        <th style="text-align: center">Estado</th>
        </tr>
    <tbody>
        <?php 
            foreach($data as $key =>$value)
                foreach($value as $prod):
        ?>    
        <center>
                <tr>
                    <td style="text-align: center;"><?php echo $prod['cod_prod'] ?></td>
                    <td style="text-align: center;"><?php echo $prod['nom_prod'] ?></td>
                    <td style="text-align: center;"><?php echo $prod['ref_prod'] ?></td>
                    <td style="text-align: center;"><?php echo $prod['ide_usu'], ' - ',$prod['nom_usu'], ' - ', $prod['ape_usu'] ?></td>
                    <td style="text-align: center;"><?php echo $prod['precio_prod'] ?></td>
                    <td style="text-align: center;"><?php echo $prod['cant_pedida'] ?></td>
                    <td style="text-align: center;"><?php echo $prod['cant_minima'] ?></td>
                    <td style="text-align: center;"><?php echo $prod['cant_stok'] ?></td>
                    <?php 
                        $img= $prod['img_prod'];
                     ?> 
                    <td><img src="ASSETS/IMG/imagenprod/<?=$img?>" alt=""></td>
                    <td style="text-align: center;"><?php echo $prod['est_prod'] ?></td>
                    <td><a href="index.php?m=editaprod&cod=<?php echo $prod['cod_prod'] ?>" class="btn btn-success" title="Mostrar-datos">Editar</a></td>
                <td><a href="index.php?m=eliminaprod&cod=<?php echo $prod['cod_prod'] ?>" class="btn btn-danger" title="Eliminar-registro" onclick="return confirm('¿Está seguro de eliminar este registro'); false">Eliminar</a></td>
                </tr>

            <?php endforeach; ?>
    </tbody>
</table>
</main>
    
<br><br><br><br>       
<footer class="fventas">
        <p> SOFTORE &copy; 2023 Derechos reservados</p>
    </footer>
</body>
</html>
<!-- onclick="return confirm('¿Está seguro de eliminar este registro'); false" -->
