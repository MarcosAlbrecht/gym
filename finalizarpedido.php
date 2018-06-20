<?php
include 'conecta_mysql.inc';
session_start();

$totalcompra = $_POST['totalcompra'];
echo "<br>total da compra ".$totalcompra."<br>";


//echo $_SESSION['itens'][2];
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
echo $data;

$i=0;
foreach ($_SESSION['itens'] as $idProduct => $quantidade) {
  $select = $mysqli->query("SELECT * FROM products WHERE id=$idProduct");
  //$linhas = $select->num_rows;
  $product = $select->fetch_array();
  echo '<br>id produto '.$product['id'];
  echo '<br>quantidade '.$quantidade.'<br>';
  $i++;

}

if(!isset($_SESSION['login']) || !isset($_SESSION['senha'])){
  //echo "esta logado<br>";
  $tipo = $_SESSION['TIPOUSUARIO'];
  //echo $_SESSION['email'] ;
	$_SESSION['senha'] ;
	$idUsuario = $_SESSION['idUsuario'];
  //echo '<br>id usuario '.$idUsuario.'<br>';
  //inserir no campo venda
  $select = "INSERT INTO venda (usuario_id, date, valor) VALUES ($idUsuario,  $data, $totalcompra)";
  if ($mysqli->query($select) === TRUE) {
    $last_id = $mysqli->insert_id;
    echo "Inserido com sucesso. Ultimo ID inserido: " . $last_id;
} else {
    echo "Error: " . $select . "<br>" . $mysqli->error;
}


foreach ($_SESSION['itens'] as $idProduct => $quantidade) {
  echo 'ulitmo id'.$last_id.'<br>';
  $select1 = "INSERT INTO products_has_venda (products_id, venda_id, quantidade) VALUES ($idProduct,  $last_id, $quantidade)";
  if ($mysqli->query($select1) === TRUE) {
    unset($_SESSION['itens'][$idProduct]);
    echo "Inserido com sucesso. Ultimo ID inserido: " . $last_id;
  } else {
    echo "Error: " . $select1 . "<br>" . $mysqli->error;
    }

}
  header('location: loja.php');
  $mysqli->close();
  exit;
}else{

echo "usuario nao logado";

}


 ?>
