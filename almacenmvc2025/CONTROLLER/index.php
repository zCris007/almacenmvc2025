<?php 
	require_once("MODEL/index.php");
	
	class modeloController{
		//definir propiedades

		
		//Método constructor
		public function __construct(){


		}

		//Método para invocar index de VIEW (primera interfaz del aplicativo)
		public static function vista(){
			require_once("VIEW/index.php");
		}

		//Método para inicio de propietario desde VIEW
		public static function inicio(){
			require_once("VIEW/iniciopro.php");
		}

		//Método para validar datos entregados por VIEW del formulario inicio propietario
		public static function validaprop(){
			$cedula = $_POST['cedula'];
			$contra = $_POST['contraseña'];
			$tipous = $_POST['tipousu'];
			if ($cedula=='' OR $contra=='' OR $tipous=='') {
				echo "<script>alert ('POR FAVOR INGRESAR TODOS LOS DATOS')</script> ";
				echo "<script>location. href='VIEW/inicioprop.php'</script>";
			}else{
				$usu = "ide_usu='".$cedula."' AND tip_usu='".$tipous."' AND pass_usu='".$contra."'";
				//var_dump($data);
				$usuario = new Modelo();
				$dato=$usuario->validar("usuario", $usu);
				if ($dato) {
					$produc = new Modelo();
					$data = $produc->mostrar("usuario");
					require_once("VIEW/muestrausu.php");
				}else{
					echo "<script>alert ('DATOS ERRADOS, NO REGISTRADOS O NO CORRESPONDEN AL USUARIO')</script> ";
					echo "<script>location. href='VIEW/inicioprop.php'</script>";
				}
			}
		}

		//Método para validar datos entregados por VIEW del formulario inicio administrador
		public static function validadmi(){
			$cedula = $_POST['cedula'];
			$contra = $_POST['contraseña'];
			$tipous = $_POST['tipousu'];
			if ($cedula=='' OR $contra=='' OR $tipous=='') {
				echo "<script>alert ('POR FAVOR INGRESAR TODOS LOS DATOS')</script> ";
				echo "<script>location. href='VIEW/inicioadmi.php'</script>";
			}else{
				$usu = "ide_usu='".$cedula."' AND tip_usu='".$tipous."' AND pass_usu='".$contra."'";
				//var_dump($data);
				$usuario = new Modelo();
				$dato=$usuario->validar("usuario", $usu);
				if ($dato) {
					$produc = new Modelo();
					$data = $produc->mostrarprod("usuario");
					require_once("VIEW/muestraprod.php");
				}else{
					echo "<script>alert ('DATOS ERRADOS, NO REGISTRADOS O NO CORRESPONDEN AL USUARIO')</script> ";
					echo "<script>location. href='VIEW/inicioadmi.php'</script>";
				}
			}
		}

		//Método para invocar formulario para usuario nuevo desde VIEW.
		public static function nuevousu(){
			require_once("VIEW/registrousu1.php"); 
		}

		//Método para invocar formulario para producto nuevo desde VIEW.
		public static function nuevoprod(){
			require_once("VIEW/registrorpod.php"); 
		}
		
		//Método para mostrar la tabla "usuario" 
		public static function muestra(){
			$usuario = new Modelo(); //Hace referencia a la tabla usuario de la BD
			$dato = $usuario->mostrar("usuario"); //Llamado al metodo mostrar definido en la carpeta modelo
			require_once("VIEW/muestrausu.php"); //requiere el visor (carpeta vista archivo index)
		}

		public static function muestraprod(){
			$producto = new Modelo(); //Hace referencia a la tabla usuario de la BD
			$dato = $producto->mostrarprod("producto"); //Llamado al metodo mostrar definido en la carpeta modelo
			require_once("VIEW/muestraprod.php"); //requiere el visor (carpeta vista archivo index)
		}


		//Método para validar datos entregados por VIEW del formulario usuario nuevo
		public static function insertausu(){
			$identi=$_POST['cedula'];
			$nombre=$_POST['nombre'];
			$apelli=$_POST['apellido'];
			$correo=$_POST['correo'];
			$telefo=$_POST['telefono'];
			$direci=$_POST['direccion'];
			$contra=$_POST['contraseña'];
			$tipo=$_POST['tipousu'];
			if ($identi=='' OR $nombre=='' OR $apelli=='' OR  $correo=='' OR $telefo=='' OR $direci=='' OR $contra=='' OR $tipo=='') {
				echo "<script>alert ('POR FAVOR INGRESAR TODOS LOS DATOS')</script> ";
				echo "<script>location. href='VIEW/registrorpod1.php'</script>";
			}else{
				$esta="A";
				$iden="ide_usu='".$identi."'";
	  			$data = "'".$identi."','".$nombre."','".$apelli."','".$correo."','".$telefo."','".$direci."','".$esta."','".$tipo."','".$contra."'";
  				//var_dump($data);
  				//exit;
  				$usuario = new Modelo();
  				$usuario-> insertar("usuario", $data, $iden);
  					echo "<script>alert ('OPERACION REALIZADA CON EXITO')</script> ";
					echo "<script>location. href='index.php?m=muestra'</script>";
				
			}
		}

		public static function insertaprod(){
			$codigo=$_POST['codigo'];
			$nombre=$_POST['nombre'];
			$refere=$_POST['referencia'];
			$provee=$_POST['prove'];
			$precio=$_POST['precio'];
			$cantpe=$_POST['cant-pedida'];
			$cantmi=$_POST['cant-minima'];
			$imagen=$_POST['imagen'];
			$est_prod= 'A';
			if ($codigo=='' OR $nombre=='' OR $refere=='' OR  $provee=='' OR $precio=='' OR $cantpe=='' OR $cantmi=='' OR $imagen=='') {
				echo "<script>alert ('POR FAVOR INGRESAR TODOS LOS DATOS')</script> ";
				echo "<script>location. href='VIEW/registrorprod1.php'</script>";
			}else{
				
				$codi="cod_prod='".$codigo."'";
	  			$data = "'".$codigo."','".$nombre."','".$refere."','".$provee."','".$precio."','".$cantpe."','".$cantmi."','".$cantpe."','".$imagen."','".$est_prod."'";
  				//var_dump($data);
  				//exit;
  				$produc = new Modelo();
  				$produc-> insertar("producto", $data, $codi);
  					echo "<script>alert ('OPERACION REALIZADA CON EXITO')</script> ";
					echo "<script>location. href='VIEW/inicioadmi.php'</script>";
				
			}
		}

		//metodo para editar registro de usuario seleccionado

		public static function editausu(){
			$iden = $_GET['ide'];
			$usuario = new Modelo();
			$data = $usuario->mostrarregis("usuario", "ide_usu=" .$iden);
			require_once("VIEW/editausu.php");	
		}

		public static function editaprod(){
			$prod = $_GET['cod'];
			$produc = new Modelo();
			$data = $produc->mostrarregis("producto", "cod_prod=".$prod);
			require_once("VIEW/editaprod.php");	
		}

		public static function actualizausu(){
			$identi=$_POST['cedula'];
			$nombre=$_POST['nombre'];
			$apelli=$_POST['apellido'];
			$correo=$_POST['correo'];
			$telefo=$_POST['telefono'];
			$direci=$_POST['direccion'];
			$estusu=$_POST['contraseña'];
			$tipo=$_POST['tipousu'];
			$contra=$_POST['contraseña'];

			$iden="ide_usu='".$identi."'";
	  		$data = 
	  		"nom_usu='".$nombre."',
	  		ape_usu='".$apelli."',
	  		correo_usu='".$correo."',
	  		tel_usu='".$telefo."',
	  		dir_usu='".$direci."',
	  		est_usu='".$estusu."',
	  		tip_usu='".$tipo."',
	  		pass_usu='".$contra."'";
  			//var_dump($data);
  			//exit;
  			$usuario = new Modelo();
  			$usuario -> actualizar("usuario", $data, $iden);

  				echo "<script>alert ('OPERACION REALIZADA CON EXITO')</script> ";
				echo "<script>location. href='VIEW/inicioprop.php'</script>";			
		}


		public static function actualizaprod(){
			$codigo=$_POST['codigo'];
			$nombre=$_POST['nombre'];
			$refere=$_POST['referencia'];
			$precio=$_POST['precio'];
			$provee=$_POST['proveedor'];
			$cantpe=$_POST['cant-pedida'];
			$cantmi=$_POST['cant-minima'];
			$cantin=$_POST['cant-stok'];
			$imagen=$_POST['imagen'];
			if ($cantpe != $cantin) {
				echo "<script>alert ('cantidad pedida diferente a la de inventario')</script> ";
				echo "<script>location. href='VIEW/inicioadmi.php'</script>";
			}
			
			$cod="cod_prod='".$codigo."'";
	  		$data = 
	  		"nom_prod='".$nombre."',
	  		ref_prod='".$refere."',
	  		precio_prod='".$precio."',
	  		ide_usu='".$provee."',
	  		cant_pedida='".$cantpe."',
	  		cant_minima='".$cantmi."',
	  		cant_stok='".$cantin."',
	  		img_prod='".$imagen."'";
  			//var_dump($data);
  			//exit;
  			$produc = new Modelo();
  			$produc -> actualizar("producto", $data, $cod);

  				echo "<script>alert ('OPERACION REALIZADA CON EXITO')</script>";
				echo "<script>location. href='VIEW/inicioadmi.php'</script>";			
		}

		//metodo para eliminar el registro seleccionado
		public function eliminausu(){
			$iden = $_GET['ide'];
			$usuario = new Modelo();
			$data = $usuario->eliminar("usuario", "ide_usu=" .$iden);
			echo "<script>alert ('OPERACION REALIZADA CON EXITO')</script>";
			echo "<script>location. href='VIEW/inicioprop.php'</script>";			
		}

		public function eliminaprod(){
			$prod = $_GET['cod'];
			$producto = new Modelo();
			$data = $producto->eliminarprod("producto", "cod_prod=" .$prod);
			echo "<script>alert ('OPERACION REALIZADA CON EXITO')</script>";
			echo "<script>location. href='VIEW/inicioadmi.php'</script>";			
		}


		

  }

 ?>