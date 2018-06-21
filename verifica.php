<?php

  include "conecta_mysql.inc";
  session_start();

  $operacao;
  $operacao = $_POST['operacao'];
  echo "Operacao: " . $operacao . "<br>";



        if($operacao == "cadastrar"){

          $nome = $_POST['nome'];
          $sobrenome = $_POST['sobrenome'];
          $telefone = $_POST['telefone'];
          $cpf = $_POST['cpf'];
          $endereco = $_POST['endereco'];
          $tipo = $_POST['tipo'];
          $email = $_POST['email'];
          $senha = $_POST['senha'];

          $resultado = $mysqli->query("SELECT * FROM usuario WHERE email = '$email'");
          $linhas = $resultado->num_rows;
          $reg = $resultado->fetch_row();

          if($reg[7] == $email){

            header('location: register.html');

          }else{

            $sql = ("INSERT INTO usuario(nome,sobrenome,telefone,cpf,endereco,tipo,email,senha) VALUES ('$nome','$sobrenome','$telefone','$cpf','$endereco', '$tipo', '$email', '$senha')");
            $mysqli->query($sql);
            header('location: index.html');
          }

        }
        if($operacao == "alterar"){


          $nome1 = $_POST['nome1'];
          $nome = $_POST['nome'];
          $sobrenome = $_POST['sobrenome'];
          $cpf = $_POST['cpf'];
          $endereco = $_POST['endereco'];
          $telefone = $_POST['telefone'];


          $resultado = $mysqli->query("SELECT * FROM usuario WHERE nome = '$nome1'");
          $linhas = $resultado->num_rows;
          $reg = $resultado->fetch_row();
          $id = $reg[0];
          echo $id;

          if($reg[1] != $nome1){

            echo "Aluno não existe";

          }else{

            $sql = ("UPDATE usuario SET nome = '$nome',sobrenome = '$sobrenome',telefone = '$telefone', cpf = '$cpf', endereco = '$endereco' WHERE id = '$id'");
            $mysqli->query($sql);
            echo "Registro Alterado";

          }



        }

        if($operacao == "criarTreino"){


          $aluno = $_POST['aluno'];
          $treinoA = $_POST['treinoA'];
          $treinoB = $_POST['treinoB'];
          $treinoC = $_POST['treinoC'];

          $resultado = $mysqli->query("SELECT * FROM usuario WHERE nome = '$aluno'");
          $linhas = $resultado->num_rows;
          $reg = $resultado->fetch_row();

          if($reg[1] != $aluno){

            echo "Aluno não existe";

          }else{

            $sql = $mysqli->query("INSERT INTO treino(aluno,treinoA,treinoB,treinoC) VALUES ('$aluno', '$treinoA', '$treinoB', '$treinoC')");
            $mysqli->query($sql);
            header('location: painelTreinador.php');

          }
        }

        if($operacao == "mostrarTreino"){


          $aluno = $_POST['nome'];
          $resultado = $mysqli->query("SELECT * FROM treino WHERE aluno = '$aluno'");
          $linhas = $resultado->num_rows;
          echo "Usuario pelo ID <br>";

          for ($i=0; $i <$linhas ; $i++) {
            $reg = $resultado->fetch_row();
            echo '<table border="3">
               <tr><td>       Aluno      </td> <td>      Treino Segunda-Feira    </td> <td> Treino Quarta-Feira </td> <td> Treino Sexta-Feira </td></tr>
               <tr><td>' . $reg[1] . '</td> <td>' .  $reg[2] . '</td> <td>'. $reg[3] . '</td> <td>' . $reg[4] . '</td>
            </table>';



        }
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
