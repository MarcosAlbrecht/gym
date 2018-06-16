<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
  	<title>Academia Mosntrão</title>
  	<link href="../../css/bootstrap.css" rel='stylesheet' type='text/css' />
  	<link href="../../css/style.css" rel='stylesheet' type='text/css' />
  	<meta name="../../viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
  	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  	<script src="../../js/jquery.min.js"></script>
  	<!-- grid-slider -->
  	<script type="text/javascript" src="../../js/jquery.mousewheel.js"></script>
  	<script type="text/javascript" src="../../js/jquery.contentcarousel.js"></script>
    <title></title>
  </head>
  <body>

    <div class="menu menuloja" id="menuloja">
		 <div class="container">
			<div class="header-bottom_left">
        <ul class="nav">
          <li><a href="#">Meus Pedidos</a>
          <li><a href="#">Carrinho</a>
        </ul>

			</div>
			<div class="social">
			   <ul>
				  <li class="">Olá Visitante</li>
				  <li class=""><a href="#"><span><b>Cadastre-se</b></span></a></li>
          <li class="">ou Faça</li>
				  <li class=""><a href="#"><b>Login</b></a></li>

			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
	  </div>
    <div class="container">
        <div class="page-header">
            <h1>Home</h1>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product->getId();?></td>
                    <td><?php echo $product->getName();?></td>
                    <td>R$ <?php echo number_format($product->getPrice(), 2, ',', '.');?></td>
                    <td>
                        <form action="index.php?page=cart&action=add" method="post">
                            <input name="id" type="hidden" value="<?php echo $product->getId()?>"/>
                            <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
    </div>




  </body>
</html>
