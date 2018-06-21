
<?php

	include "conecta_mysql.inc";

  //$operacao = $_POST['operacao'];

	session_start();

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$resultado = $mysqli->query("SELECT * FROM usuario where email = '$email' and senha = '$senha'");
		$linhas = $resultado->num_rows;
		$registro  = $resultado->fetch_row();

<<<<<<< HEAD
	session_start();

  $_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	$_SESSION['TIPOUSUARIO'] = $registro[6];
	$_SESSION['idUsuario'] = $registro[0];
	$_SESSION['nome'] = $registro[1];
                                 
=======
		if ($linhas > 0) {
			//echo "logado";
			$_SESSION['email'] = $registro[4];
			$_SESSION['senha'] = $registro[5];
			$_SESSION['TIPOUSUARIO'] = $registro[10];
			$_SESSION['idUsuario'] = $registro[0];
			header('location: index.html');
		}else{
			$_SESSION['erroLogin'] = "Email ou senha incorretos";
			header('location: login.php');
		}
>>>>>>> a96fbf5e71b9463f61aa5ac8662b1a60e7c5372d

if ($linhas > 0) {
	if ((isset($_GET['action']) && $_GET['action'] == "meuspedidos")) {
		header('location: meuspedidos.php');
	}else{

<<<<<<< HEAD
if($_SESSION['TIPOUSUARIO'] == 2){

  header('location:  painelTreinador.php');

}else if($_SESSION['TIPOUSUARIO'] == 1){

  header('location: painelUsuario.php');

}else{

	header('location: login.html');

=======

	if($_SESSION['TIPOUSUARIO'] == 1){

	  //header('location: painelMaster.html');

	}
	if($_SESSION['TIPOUSUARIO'] == 2){

	  include 'painelTreinador.html';

	}
	if($_SESSION['TIPOUSUARIO'] == 3){

	  include 'painelUsuario.php';
}
	}
>>>>>>> a96fbf5e71b9463f61aa5ac8662b1a60e7c5372d

}

$mysqli->close();
?>
