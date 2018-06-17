<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras - Cart</title>
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

<div class="container">
    <div class="page-header">
        <h1>Carrinho</h1>
        <a href="home.php" class="btn btn-default">Home</a>
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
                <td><b>R$ </b></td>
                <td></td>
            </tr>
        </tfoot>
        <tbody>

        <?php
        session_start();
        include 'conecta_mysql.inc';
        $product = array();

        if(!isset($_SESSION['itens'])){
          $_SESSION['itens'] = array();
        }
        //adiciona ao carrinho
        if(isset($_GET['add']) && $_GET['add'] == "cart"){
          $idProduct = $_GET['id'];
          echo "id produto = ".$idProduct;
          if (!isset($_SESSION['itens'][$idProduct])) {
            $_SESSION['itens'][$idProduct] = 1;
          }else{
            $_SESSION['itens'][$idProduct] += 1;
          }
        }
        //exibe no Carrinho
        $total=0;
        if (count($_SESSION['itens']) == 0) {
          echo 'carrinho vazio';
        }else{
            $i=0;
            foreach ($_SESSION['itens'] as $idProduct => $quantidade) {
              //echo $quantidade.'<br>';
              $select = $conexao->query("SELECT * FROM products WHERE id=$idProduct");
              $linhas = $select->num_rows;
              $product[$i] = $select->fetch_array();
              $i++;
              $total++;
            }
        }


          for ($i=0; $i < $total ; $i++) : ?>
            <tr>
                <td><?php echo $product[$i]['1'];?></td>
                <td>
                    <form action="" method="post">
                        <input name="id" type="hidden" value=""/>
                        <input size="2" type="text" name="quantity" value="<?php echo $quantidade ?> "/>
                        <button type="submit" class="btn btn-primary btn-xs">Alterar</button>
                    </form>
                </td>
                <td>R$ <?php echo $product[$i]['2'];?></td>
                <td>R$ </td>
                <td>
                     <a href="" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php  endfor; ?>
        </tbody>
    </table>
</div>

</body>
</html>
