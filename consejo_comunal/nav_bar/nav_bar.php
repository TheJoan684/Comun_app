<?php 
	session_start();

	if (! isset($_SESSION['admin'])) {
		if(isset($_SESSION['invitado'])){
				
		}else{
			
			header('location:../login/login.php');
			die();
		}
		
	}


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf‐8">
	<link rel="stylesheet" type="text/css" href="../nav_bar/estilos.css">
	<script type="text/javascript" src="../nav_bar/mostrar_menu.js"></script>

</head>
<body>
	<!-- menu de navegacion  -->
	<header class="Desktop">
		<ul>
			<input type="checkbox" id="check">
			<label class="btn_menu" for="check" onclick="mostrar('hola')">
				<div class="bar_menu"></div>
				<div class="bar_menu"></div>
				<div class="bar_menu"></div>

			</label>
		

			<span class="title" class="ocultar" >COMUN <b>APP</b></span>

			<div class="info__user">
				<div class="btn_profile"></div>
				<div class="name_profile"> 
						<?php if(isset($_SESSION['admin'])){
							echo 'Usuario: '. $_SESSION['admin'];
						}else{
							echo 'Usuario: ' . $_SESSION['invitado'];
						} ?>
					</div>
			</div>
		

		</ul>
		<nav class="ocultar" class="nav_opciones" id="slider">
			<ul>
				<li> <a href="../inicio/inicio.php" class="btn__opc">Inicio</a></li>
				<li> <a href="../agregar_habitante/formulario_agregar_habitante.php" class="btn__opc">Agregar habitantes</a></li>
				<li> <a href="#" class="btn__opc">Buscar Habitantes</a> </li>
				<li> <a href="#" class="btn__opc">Agregar Casa</a></li>
				<li> <a href="#" class="btn__opc">Aceca de</a> </li>
				<li> <a href="../salir.php" class="btn__opc">Salir</a></li>
			</ul>
			
				
				
			

				
				
		</nav>
	
	</header>
	<div class="spaciadorFlexible"></div>

	<!-- END menu de navegacion  -->
