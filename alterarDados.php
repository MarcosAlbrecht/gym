<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
 	 <link href="css/style.css" rel='stylesheet' type='text/css' />
 	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
 	 <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
 	 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 	 <script src="js/jquery.min.js"></script>
   <title>Academia Monstrão</title>
</head>
<body>

  <div class="menu" id="menu">
  <div class="container">
   <div class="logo">
     <div class="h_menu4">

      <a class="toggleMenu" href="#">Menu</a>
       <ul class="nav">
         <li ><a href="alterarDados.php">Alterar Dados</a></li>
         <li><a href="consultarMensalidade.php">Mensalidades</a></li>
         <li><a href="criarTreino.php">Criar Treino</a></li>
         <li><a href="index.html">Sair</a></li>
       </ul>

        <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
   </div>
   <!-- start h_menu4 -->
   <div class="clear"></div>
  </div>
</div>
<div class="main">
  <div class="register-grids">
    <div class="container">
    <form action="alterarDados.php?action=alterar" method="POST">
      <input type="hidden" name="operacao" value="cadastrar">
        <div class="register-top-grid">
            <h3>ALTERAR DADOS</h3>
            <div>
              <span>Nome a ser alterado<label>*</label></span>
              <input type="text" name="nome1" >
            </div>

            <div>
              <span>Nome<label>*</label></span>
              <input type="text" name="nome" >
            </div>

            <div>
              <span>Sobrenome<label>*</label></span>
              <input type="text" name="sobrenome" value="">
            </div>

            <div>
              <span>Telefone<label>*</label></span>
              <input type="text" name="telefone" maxlength="13" OnKeyPress="formatar('##-#####-####', this)">
            </div>

            <div>
              <span>CPF<label>*</label></span>
              <input type="text" name="cpf" maxlength="14" onkeypress="formatar('###.###.###-##', this)">
            </div>

            <div class="container">
              <br>
              Estado: <br>
              <select name="estados-brasil">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>
              </select>
            </div>

            <div>
              <span>Cidade<label>*</label></span>
              <input type="text" name="cidade" >
            </div>
            <div>
              <span>Bairro<label>*</label></span>
              <input type="text" name="bairro" >
            </div>
            <div>
              <span>Endereço<label>*</label></span>
              <input type="text" name="endereco" >
            </div>

            <br>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
        <div class="clear"> </div>
        <input type="hidden" name="tipo" value="1">
        <input type="submit" value="Alterar" id="inputSubmit">
    </form>
  </div>
</div>
 </div>


<?php

include "conecta_mysql.inc";
session_start();

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
     $name = $dados['nome'];

     if($name != $nome1){

       echo "Aluno não existe";

     }else{

       $sql = ("UPDATE usuario SET nome = '$nome',sobrenome = '$sobrenome', cpf = '$cpf',telefone = '$telefone', endereco = '$endereco' WHERE id = '$id'");
       $mysqli->query($sql);
       echo "Registro Alterado";

     }


   }else{

     header('location: index.php');

   }

}

 ?>



<script>
// FUNÇÃO FORMATAR NO MODO CPF.
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)

      if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
      }

    }
</script>
<br><br><br>
<div class="footer-bottom">
  <div class="container">
  <div class="row section group">
   <div class="col-md-4">
      <h4 class="m_7">Inscreva-se para receber Newsletter</h4>
      <p class="m_8">Você ficará por dentro de todas as nossas promoções e eventos.</p>
         <form class="subscribe">
              <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
       </form>
           <div class="subscribe1">
             <a href="#">Enviar Email<i class="but_arrow"> </i></a>
           </div>
   </div>
   <div class="col-md-4">
     <div class="f-logo">
       <img src="images/logo.png" alt=""/>
     </div>
     <p class="m_9">A vontade de se preparar tem que ser maior do que a vontade de vencer. Vencer será consequência da boa preparação, Entre em contato conosco e agende uma aula gratuita.</p>
     <p class="address">Telefone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(00) 222 666 444</span></p>
     <p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">projeto@meuprojeto.com</span></p>
   </div>
   <div class="col-md-4">
     <ul class="list">
       <h4 class="m_7">Menu</h4>
       <li><a href="#">Sobre</a></li>
       <li><a href="trainers.html">Treinos</a></li>
       <li><a href="classes.html">Professores</a></li>
       <li><a href="pricing.html">Preços</a></li>
       <li><a href="loja.html">Loja</a></li>
       <li><a href="login.html">Login</a></li>
       <li><a href="contact.html">Contato</a></li>
     </ul>
   </div>
   <div class="clear"></div>
     </div>
 </div>
</div>
<div class="copyright">
 <div class="container">
   <div class="copy">
       <p>© 2018 Template by Marcos e Jean</p>
   </div>
   <div class="social">
    <ul>
     <li class="facebook"><a href="#"><span> </span></a></li>
     <li class="twitter"><a href="#"><span> </span></a></li>
     <li class="pinterest"><a href="#"><span> </span></a></li>
     <li class="google"><a href="#"><span> </span></a></li>
     <li class="tumblr"><a href="#"><span> </span></a></li>
     <li class="instagram"><a href="#"><span> </span></a></li>
     <li class="rss"><a href="#"><span> </span></a></li>
    </ul>
   </div>
  <div class="clear"></div>
 </div>
  </div>
</body>
<html>
