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