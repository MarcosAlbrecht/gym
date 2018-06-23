<?php
session_start();
 ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Academia Mosntrão</title>
  	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  	<link href="css/style.css" rel='stylesheet' type='text/css' />
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
  	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  	<script src="js/jquery.min.js"></script>
  	<!-- grid-slider -->
  	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
  	<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
</head>
<body>

  <div class="header-bottom">
   <div class="container">
    <div class="header-bottom_left">
      <i class="phone"> </i><span>1-200-346-2986</span>
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
  <!-- end header_bottom -->
  <!-- start menu -->
  <div class="menu" id="menu">
    <div class="container">
     <div class="logo">
      <a href="index.html"><img src="images/logo.png" alt=""/></a>
     </div>
     <!-- start h_menu4 -->
     <div class="h_menu4">
       <a class="toggleMenu" href="#">Menu</a>
       <ul class="nav">
         <li><a href="index.php">Home</a></li>
         <li><a href="sobre.php">Sobre</a></li>
         <li><a href="trainers.php">Treinos</a></li>
         <li><a href="classes.php">Professores</a></li>
         <li class="active"><a href="loja.php">Loja</a></li>
         <li><a href="pricing.php">Preços</a></li>
         <li><a href="contact.php">Contato</a></li>
         <?php
         if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
           echo'<li><a href="">'.$_SESSION['email'].'</a><ul>
           <li><a href="verificaUsuario.php?action=minhapagina">Minha Página</a></li>
           <li><a href="verificaUsuario.php?action=logout">Logout</a></li></ul>
          </ul></li>';
         }else{
           echo'<li><a href="login.php">Login</a></li></ul>';
         }
          ?>
       </ul>
        <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
     <div class="clear"></div>
  </div>
  </div>
  <!-- end menu -->

  <div class="menu menuloja" id="menu">
  <div class="container">
   <div class="logo">
     <div class="h_menu4">
       <a class="toggleMenu" href="#">Menu</a>
       <ul class="nav">
         <li><a href="loja.php">Loja</a></li>
         <li><a href="cart.php">Carrinho</a></li>
         <li class="active"><a href="meuspedidos.php">Meus Pedidos</a></li>
         <?php
				 	if (isset($_SESSION['email']) && $_SESSION['senha']) {
				 		if ($_SESSION['idUsuario'] == 1) {
				 			echo '<li><a href="paginaAdmLoja.php">Administração</a></li>';
				 		}
					}
				  ?>
       </ul>
        <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
   </div>
   <!-- start h_menu4 -->
   <div class="clear"></div>
  </div>
</div>
    <div class="container">
          <div class="col-md-12">
            <p>
            <h2>Minha conta</h2>
            <h4>Administre os seus pedidos na loja Monstrão Suplementos</h4></p>

          </div>
    </div>

    <div class="container">
      <div class="col-md-6">

        <div class="container">
            <div class="page-header">

            </div>
            <?php
            if (isset($_SESSION['email']) &&isset($_SESSION['senha'])) {
            echo'
            <table class="table">
                <thead>
                <tr>
                    <th>Num. do Pedido</th>
                    <th>Data</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tfoot>

                    <tr>
                        <td colspan="4"></td>
                        <td><b></b></td>
                        <td></td>
                    </tr>

                </tfoot>
                <tbody>';


                          include "conecta_mysql.inc";
                          $iduser = $_SESSION['idUsuario'];
                          $resultado = $mysqli->query("SELECT * FROM venda where usuario_id=$iduser");
                      		$linhas = $resultado->num_rows;
                      		for ($i=0; $i <$linhas ; $i++) {
                            $registro = $resultado->fetch_array();
                            echo '<tr><td>'.$registro[0].'</td>
                            <td>'.$registro[2].'</td>
                            <td>'.$registro[1].'</td>
                        </tr>';
                          }
                      }else{
                        echo'';
                      }

                    ?>
            </tbody>
        </table>
      </div>
    </div>
    </div>
    <?php
    if(!isset($_SESSION['email']) && !isset($_SESSION['senha'])){
      echo '
    <div class="container">
      <div class="col-md-4">
      </div>
      <div class="row">
        <div class="col-md-4">
        <p><h4>Efetue o login para acessar seus pedidos</h4></p>
        <form class="" action="login.php" method="post">
          <a href="login.php?action=meuspedidos" class="btn btn-primary btn-lg btn-block">Logar</a>
        </form>
        </div>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    ';}
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
           <li><a href="login.php">Login</a></li>
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
</html>
