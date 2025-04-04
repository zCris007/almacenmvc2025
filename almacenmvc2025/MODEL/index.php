|<?php 
	class Modelo{
		private $Modelo;
		private $db;
		Private $datos;

		//Método constructor y asignación de información a las propedades 
		public function __construct(){
			$this->Modelo = array();
			$this->datos = array();
			$this->db = new PDO('mysql:host=localhost;dbname=almacen', "root", "");
		}

		//Método para validar tabla en BD con datos entregados por controlador
		public function validar($tabla, $condicion){
			$consulta = "SELECT * FROM ".$tabla. " WHERE ".$condicion;
			//var_dump($consulta);
			$resultado = $this->db->query($consulta);
			while ($filas = $resultado->FETCHAll(PDO::FETCH_ASSOC)) {
				$this->datos[]=$filas;
			}
			return $this->datos;
		}

		//Método para mostrar la tabla de la BD indicada desde controlador. 
		public function mostrar($tabla){
			//$data= "est_usu='A'";	
			$consulta="SELECT * FROM ".$tabla."";
			$resultado=$this->db->query($consulta);
			while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
				$this->datos[]=$filas;
			}
			return $this->datos;
		}	

		//Método para mostrar la tabla de la BD indicada desde controlador. 
		public function mostrarprod($tabla){
			$consulta="SELECT * FROM producto
					   INNER JOIN usuario
					   ON producto.ide_usu = 
						  usuario.ide_usu
					   AND est_prod= 'A'";
			$resultado=$this->db->query($consulta);
			while ($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
				$this->datos[]=$filas;
			}
			return $this->datos;
		}

		//metodo para realizar el inser into en la tabla de la BD
		public function insertar($tabla, $data, $ide){
			$consul="SELECT * FROM ".$tabla." WHERE ".$ide.";";
			$resul=$this->db->query($consul);
			if ($filas = $resul->FETCH(PDO::FETCH_ASSOC)) {
				echo "<script>alert ('ESTE REGISTRO YA EXISTE')</script> ";
				echo "<script>location. href='VIEW/inicioprop.php'</script>";
			}else{
				$consulta="INSERT INTO ".$tabla." VALUES (".$data.")";
				$resultado=$this->db->query($consulta);
				
				if ($resultado) {
					return true;
				}else{
					return false;
				}
			}
		}

		//metodo para mostrar informacion del usuario seleccionado
		public function mostrarregis($tabla, $condicion){
			$consulta="SELECT * FROM ".$tabla. " WHERE ".$condicion;
			$resultado=$this->db->query($consulta);
			if ($filas = $resultado->FETCH(PDO::FETCH_ASSOC)) {
				$this->datos[]=$filas;
			}
			return $this->datos;
		}	

		//metodo para actualizar registro seleccionado
		public function actualizar($tabla, $data, $condicion){
			$consul="UPDATE ".$tabla." SET ".$data." WHERE ".$condicion;
			$resul=$this->db->query($consul);
			if ($resul) {
				return true;
			}else{
				return false;
			}
		}

		//metodo para eliminar registro seleccionado
		public function eliminar($tabla, $condicion){
			$data = "est_usu='I'";
			$consul="UPDATE ".$tabla." SET ".$data." WHERE ".$condicion.";";
			$resul=$this->db->query($consul);
			if ($resul) {
				return true;
			}else{
				return false;
			}
		}

		public function eliminarprod($tabla, $condicion){
			$data = "est_prod='I'";
			$consul="UPDATE ".$tabla." SET ".$data." WHERE ".$condicion.";";
			$resul=$this->db->query($consul);
			if ($resul) {
				return true;
			}else{
				return false;
			}
		}

		
	}
 ?>