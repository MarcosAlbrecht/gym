<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
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

  <!-- start header_top -->

 	<!-- end header_top -->
 	<!-- start header_bottom -->
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
 				<a href="index.php"><img src="images/logo.png" alt=""/></a>
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
         <li class="active"><a href="cart.php" >Carrinho</a></li>
         <li><a href="meuspedidos.php">Meus Pedidos</a></li>
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
<?php

echo '
<div class="container">
    <div class="page-header">

        <h2>Carrinho de Compras</h2>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <a href="loja.php" class="btn btn-primary btn-lg">Continuar Comprando</a>
        </div>
        <div class="col-md-4">
        </div>
        <br><br>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Subtotal</th>
            <th></th>
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


        include 'conecta_mysql.inc';
        //$product = array();
        $totalcompra = 0;

        if(!isset($_SESSION['itens'])){
          $_SESSION['itens'] = array();
        }
        //adiciona ao carrinho
        if(isset($_GET['add']) && $_GET['add'] == "cart"){
          $idProduct = $_GET['id'];
          if (!isset($_SESSION['itens'][$idProduct])) {
            $_SESSION['itens'][$idProduct] = 1;
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=cart.php"/>';
          }else{
            $_SESSION['itens'][$idProduct] += 1;
          }
        }
        //exibe no Carrinho
        $total=0;
        if (count($_SESSION['itens']) == 0) {
          //echo 'carrinho vazio';
        }else{
            $i=0;
            foreach ($_SESSION['itens'] as $idProduct => $quantidade) {
              //echo $quantidade.'<br>';
              $select = $mysqli->query("SELECT * FROM products WHERE id=$idProduct");
              //$linhas = $select->num_rows;
              $product = $select->fetch_array();
              $i++;
              $total += $quantidade;

              echo '<tr><td>'.$product['name'].'</td>
                  <td>
                      <form action="remover.php?alter=cart&id='.$product['id'].'" method="post">
                          <input name="id" type="hidden" value="'.$product['id'].'"/>
                          <input size="2" type="text" name="quantity" value="'.$quantidade.'"/>
                          <button type="submit" class="btn btn-primary btn-xs">Alterar</button>
                      </form>
                  </td>
                  <td>R$ '.number_format($product['price'], 2, ',', '.').'</td>
                  <td>R$ '.number_format(((double)$product['price'] * $quantidade),2, ',', '.').'</td>
                  <td>
                       <a href="remover.php?remov=cart&id='.$product['id'].'"class="btn btn-danger">Excluir</a>
                  </td>
              </tr>';
              $totalcompra += (double)$product['price'] * $quantidade;
            }
              $mysqli->close();
        }
        echo '
        </tbody>
    </table>
</div>';
if (count($_SESSION['itens']) != 0) {
  echo '
  <div class="container">
    <div class="row">
      <div class="col-md-9">

      </div>
      <div class="col-md-3">
        <div class="members">
          <p><b>Total da compra R$ '.number_format($totalcompra, 2, ',','.').'</b></p>
          <form action="finalizarpedido.php" method="post">
              <input name="totalcompra" type="hidden" value="'.$totalcompra.'"/>
              <button type="hidden" class="btn btn-success ">Finalizar Pedido</button>
          </form>
        </div>
      </div>
    </div>
  </div>';
}else{
echo '
<div class="container">
  <div class="row">
    <div class="col-md-9">

    </div>
    <div class="col-md-3">
      <div class="members">
        <p><b>Total da compra R$ '.number_format($totalcompra, 2, ',','.').'</b></p>
        <form action="finalizarpedido.php" method="post">
            <input name="totalcompra" type="hidden" value="'.$totalcompra.'"/>

        </form>
      </div>
    </div>
  </div>
</div>';
}
?>



</body>
</html>
