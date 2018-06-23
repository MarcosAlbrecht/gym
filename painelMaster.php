
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
         <li ><a href="painelMaster.php?action=excluirAlterar">Alterar/excluir</a></li>
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
          <h3>Inserir Nome</h3>
          <form class="" action="painelMaster.php?action=excluirAlterar" method="post">
          <input type="hidden" name="operacao" value="alterar">
            <input type="text" name="nome" value=""> <br><br>
            <input type="submit" name="enviar" value="CONSULTAR">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="col-md-6">
    <table class="table">
      <thead>
        <tr>
          <th>Aluno</th>
        </tr>
      </thead>


          <?php
          if((isset($_GET['action']) && $_GET['action'] == "excluirAlterar")){


                    session_start();
                    include 'conecta_mysql.inc';
                  //  if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {

                      // testar sem LOGIN
                      $nome = $_POST['nome'];
                      $resultado = $mysqli->query("SELECT * FROM usuario where nome = '$nome'");


                      while($vreg = $resultado->fetch_row()){

                        $nomeDoAluno = $vreg[2];
                        $dtPagamento = $vreg[5];
                        $plano = $vreg[6];



                      echo "<td> $nomeDoAluno </td>";
                      echo "<td><a href='verificaMaster.php?action=alteraMaster'>Alterar </a></td>";
                      echo "<td><a href='verificaMaster.php?action=excluir'>Excluir </a></td>";


                //  }
                  }
                }
           ?>
</table>
</div>
</div>




      <?php          if((isset($_GET['action']) && $_GET['action'] == "alterar")){ ?>

              <?php    echo '<div class="main">
                    <div class="register-grids">
                      <div class="container">
                      <form action="verificaUsuario.php?action=alterar" method="POST">
                        <input type="hidden" name="operacao" value="cadastrar">
                          <div class="register-top-grid">
                              <h3>ALTERAR DADOS</h3>
                              <div>
                                <span>Nome a ser alterado<label>*</label></span>
                                <input type="text" name="nome1" value="" >
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
                                <input type="text" name="telefone" maxlength="13" >
                              </div>

                              <div>
                                <span>CPF<label>*</label></span>
                                <input type="text" name="cpf" maxlength="14" >
                              </div>

                              <div class="container">
                                <br>
                                Estado: <br>
                                <select name="estados-brasil">
                                  <option value="">ESCOLHA</option> '; ?>
                                  <?php
                                    // CONSULTA NO BANCO OS ESTADOS CADASTRADOS
                                    include "conecta_mysql.inc";
                                    $resultado = $mysqli->query("SELECT * FROM estado");

                                    while($vreg = $resultado->fetch_row()){
                                      $uf = $vreg[0];
                                      $sigla = $vreg[2];
                                      echo "<option value=$uf> $sigla</option>";
                                    }
                                   ?>
                <?php echo    '  </select>
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
                          </div>'; ?>
                            <?php // -------- MENSAGENS DE AVISO ------- ?>
                          <?php if((isset($_GET['action']) && $_GET['action'] == 'dadosAlterados')){

                            echo '<div class="container">
                                    <h3>Dados alterados !!</h3>
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
                  <?php  '     </form>
                    </div>
                  </div> ';?>



        <?php       }  ?>





<br>

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
