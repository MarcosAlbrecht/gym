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
  <div class="menu" id="menu">
  <div class="container">
   <div class="logo">
     <div class="h_menu4">
       <a class="toggleMenu" href="#">Menu</a>
       <ul class="nav">
         <li><a href="home.php">Whey</a></li>
         <li><a href="home.php">Thermogênico</a></li>
         <li class="active"><a href="cart.php" >Carrinho</a></li>
         <li><a href="meuspedidos.php">Meus Pedidos</a></li>
       </ul>
        <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
   </div>
   <!-- start h_menu4 -->
   <div class="clear"></div>
  </div>
</div>
<?php
session_start();

echo '
<div class="container">
    <div class="page-header">
        <h2>Carrinho de Compras</h2>
        <form action="home.php" method="post">
            <button type="submit" class="btn btn-dark">Continuar Comprando</button>
        </form>
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
echo '
<div class="."container".">
  <div class="row">
    <div class="col-md-9">

    </div>
    <div class="col-md-3">
      <div class="members members-cart">
        <p><b>Total da compra R$ '.number_format($totalcompra, 2, ',','.').'</b></p>
        <form action="finalizarpedido.php" method="post">
            <input name="totalcompra" type="hidden" value="'.$totalcompra.'"/>
            <button type="submit" class="btn btn-success ">Finalizar Pedido</button>
        </form>
      </div>
    </div>

  </div>

</div>';

?>



</body>
</html>
