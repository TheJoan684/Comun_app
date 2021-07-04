<?php  
$enlace = 'mysql:host=localhost;dbname=consejo_comunal';
$user = 'root';
$pass = '';


try {
	
	$pdo = new PDO($enlace,$user,$pass);


} catch (PDOException $e) {
	print 'ERROR';
	echo "EROOR!";

}

?>