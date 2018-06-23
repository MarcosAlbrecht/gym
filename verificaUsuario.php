
<?php

	include "conecta_mysql.inc";

  $operacao = $_POST['operacao'];

	session_start();

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$resultado = $mysqli->query("SELECT * FROM usuario where email = '$email' and senha = '$senha'");
		$linhas = $resultado->num_rows;
		$registro  = $resultado->fetch_row();




  /*$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	$_SESSION['TIPOUSUARIO'] = $registro[6];
	$_SESSION['idUsuario'] = $registro[0];
	$_SESSION['nome'] = $registro[1];*/


		if ($linhas > 0) {
			//echo "logado";
			$_SESSION['nome'] = $registro[1];
			$_SESSION['email'] = $registro[5];
			$_SESSION['senha'] = $registro[6];
			$_SESSION['TIPOUSUARIO'] = $registro[11];
			$_SESSION['idUsuario'] = $registro[0];
			header('location: index.php');

		}else{
			$_SESSION['erroLogin'] = "Email ou senha incorretos";
			header('location: login.php');
		}

if ((isset($_GET['action']) && $_GET['action'] == "logout")) {
	session_destroy();
	header('location: index.php');
}

if ((isset($_GET['action']) && $_GET['action'] == "minhapagina")) {
	if ($_SESSION['TIPOUSUARIO'] == 1) {
		header('location: painelTreinador.php');
	}
}

if ((isset($_GET['action']) && $_GET['action'] == "admloja")) {
	if ($_SESSION['TIPOUSUARIO'] == 1) {
		header('location: paginaAdmLoja.php');
	}
}



if ($linhas > 0) {
	if ((isset($_GET['action']) && $_GET['action'] == "meuspedidos")) {
		header('location: meuspedidos.php');
	}else{

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
}

// ------------------ CADASTRA USUARIO -------------------------------------


	if ((isset($_GET['action']) && $_GET['action'] == "cadastrar")) {

				$nome = $_POST['nome'];
				$sobrenome = $_POST['sobrenome'];
				$telefone = $_POST['telefone'];
				$cpf = $_POST['cpf'];
				$endereco = $_POST['endereco'];
				$tipo = $_POST['tipo'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$estado = $_POST['estado'];
				$cidade = $_POST['cidade'];
				$bairro = $_POST['bairro'];
				$usuario = 3;


				$sql1 = ("INSERT INTO usuario(nome,sobrenome,cpf,telefone,email,senha,estado_id,tipousuario_id) VALUES ('$nome','$sobrenome','$cpf','$telefone','$email', '$senha', '$estado', '$usuario')");
				$mysqli->query($sql1);

				$resultado = $mysqli->query("SELECT * FROM usuario where nome = '$nome'");
				$linhas = $resultado->num_rows;
				$dados = $resultado->fetch_array();
				$idusuario = $dados['id'];

				$insereCidade = $mysqli->query("INSERT INTO cidade(id_usuario, nome) values ('$idusuario', '$cidade')");
				$insereBairro = $mysqli->query("INSERT INTO bairro(id_usuario, nome) values ('$idusuario', '$bairro')");
				$insereEndereco = $mysqli->query("INSERT INTO rua(id_usuario, nome) values ('$idusuario', '$endereco')");


			 header('location: register.php?action=cadastrado');

	 }

	 // ------------------- ALTERAR DADOS --------------------------------

	 if(isset($_GET['action']) && $_GET['action'] == "alterar"){

			 if (!isset($nome) == " "){

				 //SE DADOS NÃO SÃO PREENCHIDOS
				 header('location: alterarDados.php?action=semDados');

			 }

	 }else if(isset($_GET['action']) && $_GET['action'] == "alterar"){

			if($_SESSION['TIPOUSUARIO'] <= 2){

				$nome1 = $_POST['nome1'];
				$nome = $_POST['nome'];
				$sobrenome = $_POST['sobrenome'];
				$cpf = $_POST['cpf'];
				$endereco = $_POST['endereco'];
				$telefone = $_POST['telefone'];
				$estado = $_POST['estado'];
				$cidade = $_POST['cidade'];
				$bairro = $_POST['bairro'];

				$resultado = $mysqli->query("SELECT * FROM usuario WHERE nome = '$nome1'");
				$linhas = $resultado->num_rows;
				$dados = $resultado->fetch_array();
				$name = $dados['nome'];

				if($name != $nome1){
					// SE ALUNO NÃO EXISTE
					header('location: alterarDados.php?action=naoExiste');

				}else{

					// FAZ UPDATE DO USUARIO, SALVA NO BANCO E VOLTA PRA PAGINA DE ALTERAÇÃO COM MENSAGEM DE DADOS ALTERADOS
					$sql1 = ("UPDATE usuario SET nome = '$nome',sobrenome = '$sobrenome', cpf = '$cpf',telefone = '$telefone', endereco = '$endereco', estado = '$estado' WHERE id  = '$id'");
					$mysqli->query($sql1);
					header('location: alterarDados.php?action=dadosAlterados');

				}


			}else{
				// CASO TIPO DO USUARIO NÃO TENHA PERMISSÃO
				header('location: index.php');

			}

	 }

	 // ----------------- PAGAR MENSALIDADE --------------------------------------------
if($_SESSION['TIPOUSUARIO'] == 3){
	 if((isset($_GET['action']) && $_GET['action'] == "pagar")){

			 if (!isset($dataPagamento) == " "){

				 //SE DADOS NÃO SÃO PREENCHIDOS
				 header('location: pagarMensalidade.php?action=semDados');

			 }else{

				 $numeroCartao = $_POST['numeroCartao'];
				 $nomeCartao = $_POST['nomeCartao'];
				 $dataExpericao = $_POST['dataExpiracao'];
				 $codigoSeguranca = $_POST['codigoSeguranca'];
				 $dataPagamento = $_POST['dataPagamento'];
				 $plano = $_POST['plantoTipo'];

				 $resultado = $mysqli->query("INSERT INTO pagamento(numeroCartao,nomeCartao,dataExpiracao,codigoSeguranca,dataPagamento,plano) values ('$numeroCartao', '$nomeCartao', '$dataExpericao', '$codigoSeguranca', '$dataPagamento', '$plano') " );
				 $mysqli->query($resultado);
				 header('location: pagarMensalidade.php?action=pago');

			 }



	}else{

			header('location: painelUsuario.php');


	}

}else{
			// SE TIPO USUARIO NÃO FOR = 3 (USUARIO) VOLTA PRA INDEX
			header('location: index.php');
}





$mysqli->close();
?>
