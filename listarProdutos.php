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
session_start();
$product = array();
include 'conecta_mysql.inc';
if (isset($_GET['action'])) {
  $nome = $_GET['action'];
  $select = $mysqli->query("SELECT * FROM products WHERE name like '%$nome%'");
  $linhas = $select->num_rows;
  for ($i=0; $i < $linhas ; $i++) {
    $product[$i] = $select->fetch_array();
    echo'
    <div class="col-sm-3 col-md-3">
      <div class="thumbnail">
        <img src="'.$product[$i]['image'].'" alt="Fjords">
        <div class="caption">
          <h3>'.$product[$i]['name'].'</h3>
          <p>'.$product[$i]['description'].'</p>
          <p><b>R$ '.number_format($product[$i][2], 2, ',', '.').'</b></p>
          ';
          if ($product[$i]['qtd'] > 0) {
            echo '
                <a href="cart.php?add=cart&id='.$product[$i][0].'" class="btn btn-primary" method="post" target="_parent">Comprar</a>
            </div>
          </div>
        </div>';
          }else{
            echo '<h3>ESGOTADO</h3>
            </div>
          </div>
        </div>';
          }
  }

}else{
  $select = $mysqli->query("SELECT * FROM products");
  $linhas = $select->num_rows;
  $mysqli->close();

  for ($i=0; $i <$linhas ; $i++) {
    $product[$i] = $select->fetch_array();
    echo'
    <div class="col-sm-3 col-md-3">
      <div class="thumbnail">
        <img src="'.$product[$i]['image'].'" alt="Fjords">
        <div class="caption">
          <h3>'.$product[$i]['name'].'</h3>
          <p>'.$product[$i]['description'].'</p>
          <p><b>R$ '.number_format($product[$i][2], 2, ',', '.').'</b></p>';
          if ($product[$i]['qtd'] > 0) {
            echo '
                <a href="cart.php?add=cart&id='.$product[$i][0].'" class="btn btn-primary" method="post" target="_parent">Comprar</a>
            </div>
          </div>
        </div>';
          }else{
            echo '<h3>ESGOTADO</h3>
            </div>
          </div>
        </div>';
          }
  }
}
?>


</body>
</html>
