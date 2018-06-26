
<?php

	include "conecta_mysql.inc";


	session_start();

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$resultado = $mysqli->query("SELECT * FROM usuario where email = '$email' and senha = '$senha'");
		$linhas = $resultado->num_rows;
		$registro  = $resultado->fetch_array();

		if ($linhas > 0) {

			$_SESSION['nome'] = $registro['nome'];
			$_SESSION['email'] = $registro['email'];
			$_SESSION['senha'] = $registro['senha'];
			$_SESSION['TIPOUSUARIO'] = $registro['tipousuario_id'];
			$_SESSION['idUsuario'] = $registro['id'];
			//header('location: index.php');
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

		header('location: painelMaster.php');

	}else if($_SESSION['TIPOUSUARIO'] == 2){

		header('location: painelTreinador.php');
	}else{

		header('location: painelUsuario.php');
	}

}

if ($linhas > 0) {
	if (isset($_GET['action']) && $_GET['action'] == "carrinho") {
		header('location: cart.php');
	}

	if (isset($_GET['action']) && $_GET['action'] == "meuspedidos") {
		header('location: meuspedidos.php');
	}

	if (isset($_GET['action']) && $_GET['action'] == "logout") {
		session_destroy();
		header('location: index.php');
	}

	if (isset($_GET['action']) && $_GET['action'] == "logar") {
		header('location: index.php');
	}

}

// ------------------ CADASTRA USUARIO -------------------------------------


	if ((isset($_GET['action']) && $_GET['action'] == "cadastrar")) {


				include "conecta_mysql.inc";
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


				$insereCidade = $mysqli->query("INSERT INTO cidade(nome) values ('$cidade')");
				$last_id_cidade = $mysqli->insert_id;
				$insereBairro = $mysqli->query("INSERT INTO bairro(nome) values ('$bairro')");
				$last_id_bairro = $mysqli->insert_id;
				$insereEndereco = $mysqli->query("INSERT INTO rua(nome) values ('$endereco')");
				$last_id_endereco = $mysqli->insert_id;


				$resultado = $mysqli->query("INSERT INTO usuario(nome,sobrenome,cpf,contato,email,senha,estado_id,cidade_id,bairro_id,rua_id,tipousuario_id) VALUES ('$nome','$sobrenome','$cpf','$telefone','$email', '$senha', '$estado','$last_id_cidade','$last_id_bairro','$last_id_endereco',3)");

/*
				$resultado = $mysqli->query("SELECT * FROM usuario where nome = '$nome'");
				$linhas = $resultado->num_rows;
				$dados = $resultado->fetch_array();
				$idusuario = $dados['id'];
/*

				$insereEndereços = $mysqli->query("INSERT INTO usuario(cidade_id,rua_id,bairro_id) select id_usuario from cidade");
*/
			 header('location: register.php?action=cadastrado');
				echo $endereco;

	 }

	 // ------------------- ALTERAR DADOS --------------------------------

	 if(isset($_GET['action']) && $_GET['action'] == "alterar"){

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
				$idEndereco = $dados['rua_id'];
				$idBairro = $dados['bairro_id'];
				$idCidade = $dados['cidade_id'];
				$idEstado = $dados['estado_id'];
				$name = $dados['nome'];

				if($name != $nome1){
					// SE ALUNO NÃO EXISTE
					header('location: alterarDados.php?action=naoExiste');

				}else{

					// FAZ UPDATE DO USUARIO, SALVA NO BANCO E VOLTA PRA PAGINA DE ALTERAÇÃO COM MENSAGEM DE DADOS ALTERADOS
					$sql1 = ("UPDATE usuario SET nome = '$nome',sobrenome = '$sobrenome', cpf = '$cpf',telefone = '$telefone', estado_id = '$idEstado',cidade_id = '$idCidade', bairro_id = '$idBairro', rua_id = '$idEndereco' WHERE id  = '$id'");
					$mysqli->query($sql1);
					header('location: alterarDados.php?action=dadosAlterados');

				}
			}
	 }

	 // ----------------- PAGAR MENSALIDADE --------------------------------------------

	 if((isset($_GET['action']) && $_GET['action'] == "pagar")){

			 if (isset($dataPagamento) == " "){

				 //SE DADOS NÃO SÃO PREENCHIDOS
				 header('location: pagarMensalidade.php?action=semDados');

			 }else{

				 $numeroCartao = $_POST['numeroCartao'];
				 $nomeCartao = $_POST['nomeCartao'];
				 $dataExpericao = $_POST['dataExpiracao'];
				 $codigoSeguranca = $_POST['codigoSeguranca'];
				 $dataPagamento = $_POST['dataPagamento'];
				 $plano = $_POST['plantoTipo'];
				 $idusuario = $_SESSION['idUsuario'];

				 $resultado = $mysqli->query("INSERT INTO pagamento(numeroCartao,nomeCartao,dataExpiracao,codigoSeguranca,dataPagamento,plano,usuario_id) values ('$numeroCartao', '$nomeCartao', '$dataExpericao', '$codigoSeguranca', '$dataPagamento', '$plano','$idusuario') " );
				 header('location: pagarMensalidade.php?action=pago');

			 }
	}






//$mysqli->close();
?>
