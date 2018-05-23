<?php
	$email = $_POST['email'];

	$senha = $_POST['senha'];



	if(($email=='locador@gmail.com')&&($senha == 'locador')){

		echo("Aguarde, redirecionando...");
		echo('<meta http-equiv="refresh" content="2;url=perfilLocador.php">');

	}elseif(($email=='locatario@gmail.com')&&($senha == 'locatario')){

		echo("Aguarde, redirecionando...");
		echo('<meta http-equiv="refresh" content="2;url=perfilLocatario.php">');

	}else{

		echo("Aguarde, redirecionando...");
		echo('<meta http-equiv="refresh" content="3;url=perfilLocador.html">');		

	}

?>