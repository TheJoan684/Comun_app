<?php 
	include_once ('../nav_bar/nav_bar.php');
	include_once ('../conexion.php');

	$sql_leer = 'SELECT * FROM personas';
	$sent = $pdo->prepare($sql_leer);
	$sent->execute();
	$sql_result = $sent->fetchAll();

	//var_dump($sql_result);

?>
<link rel="stylesheet" type="text/css" href="consultar.css">




<div class="container__table">
	<div class="barra__busqueda">
		<label for="buscar">BUSCAR POR</label>
		<select>
			<option>CEDULA</option>
			<option>Nombre Completo</option>
		</select>
		<input type="text" name="buscar" placeholder="termino a buscar">
		<input type="submit" name="btn__buscar_por" class="btn__buscar_por" value="Buscar">
	</div>
	<table class="tabla__lista_general">
		<tr class="tabla__encabezado">
			<td>N°-. Cedula</td>
			<td>Nombre Completo</td>
			<td>Edad</td>
			<td>Fecha de nacimiento</td>
			<td>Genero</td>
			<td>Jefe de familia</td>
			<td>Padre/Padre</td>
			<td>Cantidad de hijos</td>
			<td>Estado de lactancia</td>
			<td>Posee beca o ayuda</td>
			<td>Embarazo</td>
			<td>Discapacidad</td>
			<td>Tipo de discapacidad</td>
			<td>N°-. Hogar</td>
		</tr>


		<?php foreach ($sql_result as $dato):?>

			<tr class="row 
			<?php
			//este script php lo que hace es detectar que la variable filas__x__paginas sea par o impar. si el valor de filas__x__paginas es impar pues imprime con el echo el estring "IMPAR" dentro del atributo class del tr, dejando al tr con 2 clase Ejemplo <tr class="row imar"> y si es par pues imprim un tr con las clases row y par

			 if($filas__x__paginas%2){echo 'impar';}else{echo 'par';} 
			 ?>
			">


				<?php
				 for ($i = 0; $i < 14 ; $i++){
						echo '<td class="row__items">'.$dato[$i].'</td>';
					} 
				?>
			</tr>
			<?php 
				//Filas por pagina
				static $filas__x__paginas = 0; 
				$filas__x__paginas++;
				// echo $filas__x__paginas;
				//condicional que controla cuantos registros se van a mostrar
				if($filas__x__paginas == 10 ){
					die();
				}

			?>
		
		<?php endforeach ?>

	</table>
</div>

<?php include_once '../footer/footer.php'; ?>
