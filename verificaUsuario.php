
<?php

	include "conecta_mysql.inc";

  //$operacao = $_POST['operacao'];


	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$resultado = $mysqli->query("SELECT * FROM usuario where email = '$email' and senha = '$senha'");
	$linhas = $resultado->num_rows;
	$registro  = $resultado->fetch_row();

	session_start();
  $_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	$_SESSION['TIPOUSUARIO'] = $registro[3];



if($_SESSION['TIPOUSUARIO'] == 1){

  header('location: painelMaster.html');

}
if($_SESSION['TIPOUSUARIO'] == 2){

  include 'painelTreinador.html';

}
if($_SESSION['TIPOUSUARIO'] == 3){

  include 'painelUsuario.html';

}

$mysqli->close();
?>
