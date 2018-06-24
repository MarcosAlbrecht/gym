<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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

<?php
include 'conecta_mysql.inc';
session_start();

$totalcompra = $_POST['totalcompra'];
//echo "<br>total da compra ".$totalcompra."<br>";

// ------ BUSCA A DATA ATUAL PARA INSERIR NA VENDA --------------
//echo $_SESSION['itens'][2];
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');
$data = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
//echo $data;


// --------- verifica se esta logado e finaliza o pedido ------------
if(isset($_SESSION['email']) && isset($_SESSION['senha'])){

  //echo "<br>Entrou aqui e esta logado<br>";
  $tipo = $_SESSION['TIPOUSUARIO'];
  //echo $_SESSION['email'] ;
	//echo $_SESSION['senha'] ;
	$idUsuario = $_SESSION['idUsuario'];
  //echo '<br>id usuario '.$idUsuario.'<br>';
  $select = "INSERT INTO venda (usuario_id, date, valor) VALUES ($idUsuario,  '$data', $totalcompra)";
  if ($mysqli->query($select) === TRUE) {
    $last_id = $mysqli->insert_id;
    //echo "Inserido com sucesso. Ultimo ID inserido: " . $last_id;
} else {
    //echo "Error: " . $select . "<br>" . $mysqli->error;
}
//--------- INSERE TA TABELA product_has_venda O ID DA VENDA E OS PRODUTOS COMPRADOS -------------
foreach ($_SESSION['itens'] as $idProduct => $quantidade) {
  echo 'ulitmo id'.$last_id.'<br>';
  $select1 = "INSERT INTO products_has_venda (products_id, venda_id, quantidade) VALUES ($idProduct,  $last_id, $quantidade)";
  if ($mysqli->query($select1) === TRUE) {
    unset($_SESSION['itens'][$idProduct]);
    //echo "Inserido com sucesso. Ultimo ID inserido: " . $last_id;
    $select2 = $mysqli->query("SELECT * FROM products WHERE id=$idProduct");
    $products = $select2->fetch_array();
    $qtd = $products['qtd'] - $quantidade;

    // ------- atualiza a quantidade dos produtos -------------
    $select3 = "UPDATE products SET qtd=$qtd WHERE id=$idProduct ";
    if ($mysqli->query($select3) === TRUE){
      //echo "Aleterado com sucesso";
    }else{
      //echo "Erro ao alterar";
    }
  } else {
    //echo "Error: " . $select1 . "<br>" . $mysqli->error;
    }
}
  header('location: loja.php');
  $mysqli->close();
  exit;
}else{

//echo "Nao esta logado";
header('location:login.php?action=carrinho');
}

 ?>

</body>
</html>
