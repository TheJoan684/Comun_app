<?php 
	include_once('../conexion.php');
	include '../nav_bar/nav_bar.php';

	//consultado la db
	$sql = 'SELECT * FROM personas';
	$sentencia = $pdo->prepare($sql);
	$sentencia->execute();
	$res = $sentencia->fetchAll();

 	// total de casas
	$sql_casas = 'SELECT COUNT(*) FROM casas';
	$sentencia_casas = $pdo->prepare($sql_casas);
	$sentencia_casas->execute();
	$res_casa = $sentencia_casas->fetchAll();
	// print_r($res_casa);

	// total de habitantes
	$sql_habitantes = 'SELECT COUNT(*) FROM personas';
	$sen_habitante = $pdo->prepare($sql_habitantes);
	$sen_habitante->execute();
	$habitantes_total = $sen_habitante->fetchAll();

	// total hombres
	$SEXO='masculino';
	$sql_hombres = 'SELECT COUNT(genero) FROM personas WHERE genero = ?';
	$sentencias_hombres = $pdo->prepare($sql_hombres);
	$sentencias_hombres->execute(array($SEXO));
	$total_hombres = $sentencias_hombres->fetch();

	// total mujeres
	$SEXO = 'femenino';
	$sql_mujeres = 'SELECT COUNT(gener) FROM personas WHERE genero = ?';
	$sent_mujeres = $pdo->prepare($sql_mujeres);
	$sent_mujeres->execute(array($SEXO));
	$mujeres_total = $sent_mujeres->fetch();
	
	?>

 

<link rel="stylesheet" type="text/css" href="estilos_inicio.css">

<section>
	


	<h2>Hola! 😇 <?php		  
 		if(isset($_SESSION['invitado'])){
 			echo $_SESSION['invitado'];
 		}else{
 			echo $_SESSION['admin'];
 		}
 	?></h2>

	<span id="fecha"></span>

	<p>Bienvenido a Comunapp Su mejor herramienta para gestionar y adminstrar la comunidad. </p>
	<hr>
	<h2>Resumen</h2>

	<div class="container__resumen">
		<div class="info__resumen titulo__casas">Total Casas</div>
		<div class="info__resumen titulo__habitantes">Total Habitantes</div>
		<div class="info__resumen titulo__hombres">Total Hombres</div>
		<div class="info__resumen titulo__mujeres">Total mujeres</div>

		<span class="info__resumen casas">
			<?php 
				if($res_casa){
			 		echo $res_casa[0][0];
					
				}else{
					echo '0';
				}

			?>
		</span>
		<span class="info__resumen habitantes">
			<?php 
				if($habitantes_total){
			 		echo $habitantes_total[0][0]; 
					
				}else{
					echo '0';
				}

			?>
		</span>
		<span class="info__resumen hombres">
			<?php 
				if($total_hombres){
					echo $total_hombres[0][0]; 
				}else{
					echo '0';
				}
			?>
		</span>
		<span class="info__resumen mujeres">
			<?php 

				if($mujeres_total){
					echo $mujeres_total[0][0]; 
				}else{
					echo '0';
				}
			?>

		</span>

	</div>

</section>



