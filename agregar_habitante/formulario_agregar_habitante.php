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
<!-- End formulario form__agregar_habitante -->

<!-- Strat formulario Casa desconocida -->

<form class="casa_desconocida hidden" method="GET">

		<!-- Este es el boton de quit -->
		<div class="flex__container__btn_quit">
			<div class="quit_btn" id="quit_btn">
				<div class="bar"></div>
				<div class="bar"></div>
			</div>
		</div>
	
		<!-- Este es el boton de quit -->
	<p class="description">
		Para saber cual es el numero de casa del ciudadano, busque a un familiar
		que habite en el mismo hogar, Si el ciudadano vive solo, debera hacer un registro de casa desde cero.
	</p>

	
	<label class="lbl-ci_habitante">Por favor Digite el numero de cedula de algun familiar o persona que habite en la misma casa que el ciudadano</label>
	<input type="text" name="ci_habitante">
	<button>Buscar Numero de casa</button>
</form>
<!-- OK esta es la rutina para buscar el numero de casa en caso del que habitante no sepa cual es su numero de hogar para ello consultaremos los datos de la cedula que nos den -->
<?php 
	$ci = $_GET['ci_habitante'];
	echo $ci;
	$sql_leer = 'SELECT ci nombre_completo id_casa1 FROM personas inner join casas on personas.id_casa1=casas.id_casa where ci = ?';
	$sent = $pdo->prepare($sql_leer);
	$sent->execute(array($ci));
	$sql_result = $sent->fetch();

	var_dump($sql_result);
	if(!$sql_result){
		echo "No se ha encontrado nada en la base de datos, si la cedula esta bien escrita por favor realize un nuevo registro de hogar";
	}else{


	}
?>


<script src="mostrar_form.js"></script>
