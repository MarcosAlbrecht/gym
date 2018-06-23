<?php
include 'conecta_mysql.inc';
session_start();

$totalcompra = $_POST['totalcompra'];
echo "<br>total da compra ".$totalcompra."<br>";


//echo $_SESSION['itens'][2];
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');
$data = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
echo $data;



if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
  echo "<br>Entrou aqui e esta logado<br>";
  $tipo = $_SESSION['TIPOUSUARIO'];
  echo $_SESSION['email'] ;
	echo $_SESSION['senha'] ;
	$idUsuario = $_SESSION['idUsuario'];
  echo '<br>id usuario '.$idUsuario.'<br>';
  $select = "INSERT INTO venda (usuario_id, date, valor) VALUES ($idUsuario,  '$data', $totalcompra)";
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
  //header('location: loja.php');
  $mysqli->close();
  exit;
}else{

//echo "Nao esta logado";
header('location:login.php');
}


 ?>
