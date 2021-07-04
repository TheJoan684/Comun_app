<?php 
session_start();
if(isset($_SESSION['admin'])){
	echo $_SESSION['admin'];
	echo "CLeinte tiene una session activa";

}else { 
	if(isset($_SESSION['invitado'])){
		echo $_SESSION['invitado'];
		echo "CLeinte tiene una session activa";

	}else{
		header('location:login/login.php');
	}
}

?>