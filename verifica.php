<?php

  include "conecta_mysql.inc";

  $operacao = $_POST['operacao'];
  echo "Operacao: " . $operacao . "<br>";
  // Inicia sessões
  session_start();
//  echo $_SESSION['login'] . "<br>";
//	echo $_SESSION['senha'] . "<br>";
//	echo $_SESSION['TIPOUSUARIO'] . "<br>";

  // Verifica se existe os dados da sessão de login
  if(!isset($_SESSION['login']) || !isset($_SESSION['senha']))
  {
    header("Location: login.html");
  exit;
}else{

  echo "usuario logado";

}


if($operacao == "cadastrar"){

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome']
	$cpf = $_POST['cpf'];
  $telefone = $_POST['telefone'];
  $dataMatricula = $_POST['$dataMatricula'];
	$tipo = $_POST['tipo'];

  echo $tipo;

  $sql = ("INSERT INTO usuario(nome,cpf,contato,login,senha,tipousuario_id) VALUES ('$nome','$sobrenome','$cpf','$telefone', '$dataMatricula', '$tipo', '$email', '$senha')");
  $mysqli->query($sql);
}
if($operacao == "atualizar"){

  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $nome1 = $_POST['nome1'];
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $contato = $_POST['contato'];
  $tipo = $_POST['tipo'];
  $resultado = $mysqli->query("SELECT * FROM usuario WHERE nome = '$nome1'");
  $linhas = $resultado->num_rows;
  $reg = $resultado->fetch_row();
  $id = $reg[0];
  echo $id;

  $sql = ("UPDATE usuario SET nome = '$nome', cpf = '$cpf', contato = '$contato', login = '$login', senha = '$senha', tipousuario_id = '$tipo' WHERE id = '$id'");
  $mysqli->query($sql);

}

if($operacao == "criarTreino"){

  $aluno = $_POST['aluno'];
  $treinoA = $_POST['treinoA'];
  $treinoB = $_POST['treinoB'];
  $treinoC = $_POST['treinoC'];

  $resultado = $mysqli->query("INSERT INTO treino(aluno,treinoA,treinoB,treinoC) VALUES ('$aluno', '$treinoA', '$treinoB', '$treinoC')");
  $mysqli->query($sql);
}

if($operacao == "mostrarTreino"){



  $resultado = $mysqli->query("SELECT * FROM usuario()")




}

if($operacao == "mostrarDados"){

  $resultado = $mysqli->query("SELECT * FROM usuario");
  $linhas = $resultado->num_rows;

  echo "Lista de Cadastrados <br>";
  for ($i=0; $i <$linhas ; $i++) {
    $reg = $resultado->fetch_row();
//    echo "<br> ID: " . $reg[0] . "<br> Nome: " . $reg[1] . "<br> CPF: " . $reg[2] . " <br> Contato: " . $reg[3] . " <br> Login: " . $reg[4] . " <br> Senha: " . $reg[5] . " <br>Tipo: " . $reg[6] . "<br><hr>";

echo '<table border="1">
   <tr><td>       ID      </td> <td>      Nome      </td> <td>   CPF         </td>  <td>   Contato   </td>  <td>   Login   </td>  <td>   Senha   </td>  <td>   Tipo   </td></tr>
   <tr><td>' . $reg[0] . '</td> <td>' .  $reg[1] . '</td> <td>' . $reg[2]  . '</td> <td>' . $reg[3]  . '</td> <td>' . $reg[4]  . '</td> <td>' . $reg[5]  . '</td> <td>' . $reg[6]  . '</td> </tr>
</table>';
echo '<br>';

}



}
if($operacao == "carregarID"){

  $id = $_POST['codigo'];
  $resultado = $mysqli->query("SELECT * FROM usuario WHERE id = $id");
  $linhas = $resultado->num_rows;
  echo "Usuario pelo ID <br>";
/*
  for ($i=0; $i <$linhas ; $i++) {
    $reg = $resultado->fetch_row();
    echo "<br> ID: " . $reg[0] . "<br> Nome: " . $reg[1] . "<br> CPF: " . $reg[2] . " <br> Contato: " . $reg[3] . " <br> Login: " . $reg[4] . " <br> Senha: " . $reg[5] . " <br>Tipo: " . $reg[6] . "<br>";
}
*/

for ($i=0; $i <$linhas ; $i++) {
  $reg = $resultado->fetch_row();
  echo '<table border="1">
     <tr><td>       ID      </td> <td>      Nome      </td> <td>   CPF         </td>  <td>   Contato   </td>  <td>   Login   </td>  <td>   Senha   </td>  <td>   Tipo   </td></tr>
     <tr><td>' . $reg[0] . '</td> <td>' .  $reg[1] . '</td> <td>' . $reg[2]  . '</td> <td>' . $reg[3]  . '</td> <td>' . $reg[4]  . '</td> <td>' . $reg[5]  . '</td> <td>' . $reg[6]  . '</td> </tr>
  </table>';

}

}

if($operacao == "excluir"){
  echo "<br> entrou no exlcuir";
  $nome = $_POST['nome'];
  $resultado = $mysqli->query("SELECT * FROM usuario WHERE nome = '$nome'");
  $reg = $resultado->fetch_row();
  $id = $reg[0];
  echo $id;
  $resultado = $mysqli->query("DELETE FROM usuario WHERE id = $id");

}



 $mysqli->close();

 ?>
