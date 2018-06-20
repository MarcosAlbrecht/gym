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
  <div class="menu" id="menu">
  <div class="container">
   <div class="logo">
     <div class="h_menu4">
       <a class="toggleMenu" href="#">Menu</a>
       <ul class="nav">
         <li><a href="home.php">Whey</a></li>
         <li><a href="home.php">Thermogênico</a></li>
         <li><a href="cart.php">Carrinho</a></li>
         <li class="active"><a href="meuspedidos.php">Meus Pedidos</a></li>
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
                <tbody>
                  <?php
                    include 'conecta_mysql.inc';
                    session_start();

                    if(!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
                        echo 'logado';
                        echo $_SESSION['login'];
                    }else{
                        header('location: login.html');
                    }

                   ?>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>

                      </td>
                  </tr>

            </tbody>
        </table>



      </div>
      <div class="col-md-6">

      </div>

    </div>

    <div class="container">
        <div class="row">
        </div>
    </div>

</body>
</html>
