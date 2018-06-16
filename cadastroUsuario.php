<?php
	include "conecta_mysql.inc";

	$nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha1 = $_POST['password1'];
  $senha2 = $_POST['password2'];

  

	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
	if ($mysqli->query($sql)==TRUE){
		header('Location: form_cadusu.php?msg=1');
	}else{
		echo $mysqli->error;
	}
	$mysqli->close();
 ?>
