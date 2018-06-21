
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
	$_SESSION['TIPOUSUARIO'] = $registro[6];
	$_SESSION['idUsuario'] = $registro[0];
	$_SESSION['nome'] = $registro[1];
                                 


if($_SESSION['TIPOUSUARIO'] == 2){

  header('location:  painelTreinador.php');

}else if($_SESSION['TIPOUSUARIO'] == 1){

  header('location: painelUsuario.php');

}else{

	header('location: login.html');


}

$mysqli->close();
?>
