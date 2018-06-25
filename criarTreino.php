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
         <li><a href="verificaUsuario.php?action=logout">Sair</a></li>
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
      <div class="register-top-grid">
        <div class="col-md-4">
          <h3>TREINO - ABC</h3> <h3>(Seg-Qua-Sex) ou (Ter-Qui-Sab)</h3> <br>
          <form class="" action="criarTreino.php?action=criarTreino" method="post">
            Nome aluno: <br>
            <input type="text" name="nome" value=""> <br>
            Treino A: <br>
            <textarea name="treinoA" rows="5" cols="25"></textarea><br>
            Treino B: <br>
            <textarea name="treinoB" rows="5" cols="25"></textarea><br>
            Treino C: <br>
            <textarea name="treinoC" rows="5" cols="25"></textarea><br> <br>
            <input type="submit" name="enviar" value="SALVAR TREINO">
            </form>

          <?php // -------- MENSAGENS DE AVISO ------- ?>
          <?php if((isset($_GET['action']) && $_GET['action'] == 'treinoCriado')){

            echo '<div class="container">
                    <h3>Treino Criado !!</h3>
                </div>';

          }?>
          <?php if((isset($_GET['action']) && $_GET['action'] == 'naoExiste')){

            echo '<div class="container">
                    <h3>Aluno Não Existe !!</h3>
                </div>';

          }?>
          <?php if((isset($_GET['action']) && $_GET['action'] == 'semDados')){

            echo '<div class="container">
                    <h3>Preencha os Dados !!</h3>
                </div>';

          }?>
          <?php // -------- MENSAGENS DE AVISO ------- ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

            include "conecta_mysql.inc";
            session_start();



          if(isset($_GET['action']) && $_GET['action'] == "criarTreino"){


              if($_SESSION['TIPOUSUARIO'] <= 2){

                           $aluno = $_POST['nome'];
                           $treinoA = $_POST['treinoA'];
                           $treinoB = $_POST['treinoB'];
                           $treinoC = $_POST['treinoC'];

                           $resultado = $mysqli->query("SELECT * FROM usuario WHERE nome = '$aluno'");
                           $linhas = $resultado->num_rows;
                           $dados = $resultado->fetch_array();
                           $nome = $dados['nome'];
                           $idUsuarioTreino = $dados['id'];
                           echo $idUsuarioTreino;

                           if($nome != $aluno){
                             // SE ALUNO NÃO EXISTE
                             header('location: criarTreino.php?action=naoExiste');

                           }else{



                             $sql = $mysqli->query("INSERT INTO treino(treinoA,treinoB,treinoC,usuario_id) VALUES ('$treinoA', '$treinoB', '$treinoC','$idUsuarioTreino')");
                             $mysqli->query($sql);
                             header('location: criarTreino.php?action=treinoCriado');

                           }
                  }else{

                        header('location: index.php');
                  }

               }


 ?>

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
