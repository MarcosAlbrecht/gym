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
  <div class="clear"></div>
  <div class="menu menuloja" id="menu">
  <div class="container">
   <div class="logo">
     <div class="h_menu4">
       <a class="toggleMenu" href="#">Menu</a>
       <ul class="nav">
         <li class="active"><a href="home.php">Whey</a></li>
         <li><a href="home.php">Thermogênico</a></li>
         <li><a href="cart.php">Carrinho</a></li>
         <li><a href="meuspedidos.php">Meus Pedidos</a></li>
       </ul>
        <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
   </div>
   <!-- start h_menu4 -->
   <div class="clear"></div>
  </div>
</div>
    <div class="container">
        <div class="page-header">
        </div>
    </div>

    <div class="container">
            <div class="row">
              <?php
              include 'conecta_mysql.inc';
              session_start();
              $select = $mysqli->query("SELECT * FROM products");
              $linhas = $select->num_rows;
              $mysqli->close();
              $product = array();
              for ($i=0; $i <$linhas ; $i++) {
                $product[$i] = $select->fetch_array();
                //echo $product[$i]['name']." ";
              }

            for ($i=0; $i < $linhas; $i++) : ?>

              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="<?php echo $product[$i]['image'];?>" alt="Fjords">
                  <div class="caption">
                    <h3><?php echo $product[$i]['name'];;?></h3>
                    <p><?php echo $product[$i]['description'];?></p>
                    <p>R$ <?php echo number_format($product[$i][2], 2, ',', '.');?></p>
                    <form action="cart.php?add=cart&id=<?php echo $product[$i][0]?>" method="post">
                        <input name="id" type="hidden" value=""/>
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </form>
                  </div>
                </div>
              </div>
            <?php endfor; ?>
            </div>
    </div>

</body>
</html>
