<?php 
	include_once '../conexion.php';
	include_once '../nav_bar/nav_bar.php';
	// switch para mandar mensajes de salida o output en formato de alert() javascrip
	if(isset($_GET['tipo_mensaje'])){
		$tipo_mensaje = $_GET['tipo_mensaje'];

			switch ($tipo_mensaje) {
				case 'cedula_incorrecta':
					// code...
					echo "
						<script type=\"text/javascript\">
							alert('EL NUMERO DE CEDULA ESTA MAL ESCRITO O TIENE UN SIMBOLO ESTRAÑO ❌️ RECUERDA INTRODUCIR SOLO NUMEROS');
						</script>";
			

					break;

				case 'casa_incorrecta':	
						// mostrando el mensaje de numero de casa erroneo
						echo "
						<script type=\"text/javascript\">
							alert('ESE NUMERO DE CASA NO PUEDE EXISTIR DENTRO DE LOS REGISTROS❌️ ES UN NUMERO INVALIDO');
						</script>";

					break;

				default:
					// code...
				echo '<h1>EPAAA MENORRR deja de tirartela de haker, deja de modificar las variables de la url, no eres haker nada, eres pato, deja de jurungar la webona ajajajaj</h1>';
					break;
			}
		
		}else {
			// echo 'NO hay nada en el get';
		}
?>
<link rel="stylesheet" type="text/css" href="formulario_agregar.css">

<form class="form__agregar_habitante" method="GET" action="agregar.php">
		<h4 class="title__form">Datos del ciudadano 🇻🇪️</h4>
		<p class="description">
			Ingrese la cedula de identidad junto al numero de hogar 
			al que el ciudadano desea registrarse.
		</p>
			
			<label for="ci" class="lbl">
				Numero de Cedula
			</label>
			<input class="input__text" type="text" name="ci" required placeholder="V-27939124 👤️">

			<label for="casa" class="lbl">
				Ingrese el numero de hogar al que se desea afiliar
			</label>
			<input class="input__text" type="number" name="casa" required placeholder="Ejemplo: 99 🏠️ ">

			<input type="submit" name="btn_enviar" class="btn_enviar" value="Enviar">

			<label class="lbl" for="casa_desconocida">
				En caso de no saber cual es el N° de hogar en que se desea afiliar click aquí
				<input type="checkbox" id="casa_desconocida">
			</label>	
		
</form>