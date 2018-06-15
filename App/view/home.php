<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <!-- //grid-slider -->
    <!---calender-style---->
    <link rel="stylesheet" href="css/jquery-ui.css" />
  </head>
  <body>
      <div class="container">
        <div class="page-header">
          <h1>Home</h1>
          <table class="table">
            <thead>
              <tr>
              <th>ID</th>
              <th>Produto</th>
              <th>Preço</th>
              <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($products as $product) : ?>
              <tr>
                <td><?php echo $product->getId(); ?></td>
                <td><?php echo $product->getName(); ?></td>
                <td><?php echo number_format($product->getId(), 2, ',', '.'); ?></td>
                <td></td>
              </tr>
            <?php endforeach?>
            </tbody>
          </table>

        </div>

      </div>
  </body>
</html>
