<?php 
	require_once("config.php");
	require_once("CONTROLLER/index.php");
	if (isset($_GET['m'])){
		if (method_exists("modeloController", $_GET['m'])):
			modeloController::{$_GET['m']}();
		endif;
	}else
		modeloController::vista();
 ?>