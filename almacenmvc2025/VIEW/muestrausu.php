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
            <li><a href="VIEW/inicioprop.php?m=muestra">Regresa</a></li>
        </ul>
    </nav>
    </header>
 
<main>
    <a href="index.php?m=nuevousu" class="btn btn-primary">Nuevo Usuario</a><br><br>
<table class="table table-hover table-bordered table-condensed">
    <tr>
        <th style="text-align: center">Identificación</th>
        <th style="text-align: center">Nombre</th>
        <th style="text-align: center">Apellido</th>
        <th style="text-align: center">Correo</th>
        <th style="text-align: center">Teléfono</th>
        <th style="text-align: center">Dirección</th>
        <th style="text-align: center">Estado</th>
        <th style="text-align: center">Tipo de usuario</th>
        <th style="text-align: center">Contraseña</th>
        <th style="text-align: center" colspan="2">Acciones</th>
    </tr>
    <tbody>
        <?php 
            foreach($data as $key =>$value)
                foreach($value as $usuari):
                    $esta = $usuari['est_usu'];
                    if ($esta == "A") {
                        $estado = "Activo";
                    }else{
                        $estado = "Inactivo";
                    }
                    $tip = $usuari['tip_usu'];
                    if ($tip == 1) {
                        $tipou = "Propietario";
                    }else{
                        if ($tip == 2) {
                            $tipou = "Administrador";
                        }else{
                            if ($tip == 3) {
                            $tipou = "Vendedor";
                            }else{
                                $tipou = "Proveedor";
                            }
                        }
                    }
                 ?> 
                <tr>
                    <td align="center"><?php echo $usuari['ide_usu'] ?></td>
                    <td><?php echo $usuari['nom_usu'] ?></td>
                    <td><?php echo $usuari['ape_usu'] ?></td>
                    <td><?php echo $usuari['correo_usu'] ?></td>
                    <td><?php echo $usuari['tel_usu'] ?></td>
                    <td><?php echo $usuari['dir_usu'] ?></td>
                    <td><?php echo $usuari['est_usu'],' - ', $estado ?></td>
                    <td><?php echo $usuari['tip_usu'],' - ', $tipou  ?></td>
                    <td><?php echo $usuari['pass_usu'] ?></td>
                    <td><a href="index.php?m=editausu&ide=<?php echo $usuari['ide_usu'] ?>" class="btn btn-success" title="Mostrar-datos">Editar</a></td>
                <td><a href="index.php?m=eliminausu&ide=<?php echo $usuari['ide_usu'] ?>" class="btn btn-danger" title="Eliminar-registro" onclick="return confirm('¿Está seguro de eliminar este registro'); false">Eliminar</a></td>
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
