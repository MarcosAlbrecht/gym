<?php

session_start();

if (isset($_GET['remov']) && $_GET['remov'] == 'cart') {
  $idProduct = $_GET['id'];
  unset($_SESSION['itens'][$idProduct]);
  echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=cart.php"/>';
}
if (isset($_GET['alter']) && $_GET['alter'] == 'cart') {
  $idProduct = $_GET['id'];
  $quantity = $_POST['quantity'];
  $_SESSION['itens'][$idProduct] = $quantity;
  
  echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=cart.php"/>';
}

 ?>
