<!-- OJO👻️ ESTE SCRIPT SE LLAMA AGREGAR, PERO EN REALIDAD ES UN SCRIPT PARA VALIDAR LOS DATOS ENVIADOS POR LOS IMPUTS QUE VIENEN DE FORMULARIO_AGREGAR_HABITANTES.php UNA VEZ VALIDADO PROCEDEMOS A HACER LAS CONSULTAS A LA BASE DE DATOS, ESTE SCRIPT SE LLAMA AGREGAR PERO POR QUE ME DIO FLOJERA CAMBIARLO ENCERIO, TENIA MUCHA FLOJERA CAMBIAR EL NOMBRE, ademas tenia miedo que se me rompiera todo el codigo :D -->

<?php 
	
	if(!isset($_GET['ci'])) {
	
	
	}else {
		$cedula = $_GET['ci'];
		$casa =	$_GET['casa'];

		// Aqui empezamos a hacer una humilde validacion a lo cutre jaajja de la cedula y la casa
		$leng_cedula = strlen($cedula);
		$leng_casa = strlen($casa);
		// echo $leng_casa .' '.$leng_cedula;



		// OJO👻️ si longitud de la cedula es mayor que 8 digitos entonces mandar en mensaje de error en la cedula, la cedula tiene un caracter extraño
		if($leng_cedula > 8 || $leng_cedula < 7 ){
			//Aqui enviamos por la url la variable tipo de mensaje, cedula incorrecta
			header('location:formulario_agregar_habitante.php?tipo_mensaje=cedula_incorrecta');
			
		}
		if($leng_casa > 3){
			header('location:formulario_agregar_habitante.php?tipo_mensaje=casa_incorrecta');
			
			

		}
		
		echo 'TODO ESTA OK, PASAMOS AL VERDADERO FORMULARIO PARA
			TOMAR TODOS LOS DATOS PERSONALES DEL CIUDADANO Y ECHO ESOO LO MANDAMOS AHORA SI, A LA DB TABLA PERSONAS Y LA TABLA CASAS
		';


	}


?>


