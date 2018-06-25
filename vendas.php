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
    <div class="container">
      <br><br>
    </div>
    <div class="container">
<?php
session_start();
include 'conecta_mysql.inc';

  if ((isset($_GET['action']) && $_GET['action'] == "vendas")) {
    $result = $mysqli->query("SELECT count(*), sum(valor) FROM venda");
    $total = $result->fetch_row();

    echo'
        <div class="table-responsive">
           <table class="table">
             <thead>
               <tr>
                 <th>Total Vendas</th>
                 <th>Valor Vendas</th>

               </tr>
             </thead>
             <tfoot>
               <tr>
                 <td>'.$total[0].'</td>
                 <td>R$ '.number_format($total[1],2, ',', '.').'</td>
               </tr>

             </tfoot>
           </table>
         </div>';
         $mysqli->close();
  }elseif((isset($_GET['action']) && $_GET['action'] == "usuarios")){
    $result = $mysqli->query("SELECT * FROM usuario order by id");
    $linhas = $result->num_rows;
    echo '<div class="container ">
      <div class="row">
        <div class="col-md-12 col-separa">
          <h4>Buscar um Usuário</h4>
          <form class="" action="vendas.php?action=buscar" method="post">
            <table>
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nome:  </td>
                <td><input type="text" class="form-control" name="nome" placeholder="Nome"></td>
                <td><input type="submit" class="btn btn-danger" value="Buscar"></td>
              </tr>
            </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>';

    echo '<br><div class="table-responsive">
       <table class="table">
         <thead>
           <tr>
             <th>ID</th>
             <th>Nome</th>
             <th>Contato</th>
             <th>email</th>
             <th>cpf</th>
             <th>Tipo Usuario</th>

           </tr>
         </thead>';

    for ($i=0; $i < $linhas; $i++) {
      $total = $result->fetch_array();
      echo '
           <tfoot>
             <tr>
               <td>'.$total['id'].'</td>
               <td>'.$total['nome'].'</td>
               <td>'.$total['contato'].'</td>
               <td>'.$total['email'].'</td>
               <td>'.$total['cpf'].'</td>
               <td>'.$total['tipousuario_id'].'</td>
             </tr>

           </tfoot>
        ';

    }
    $mysqli->close();


  }elseif((isset($_GET['action']) && $_GET['action'] == "inserir")){
    echo '<form action="vendas.php?action=cadastrar" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo Do Produto</label>
    <input type="text" class="form-control" name="titulo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Preço do Produto</label>
    <input type="text" class="form-control" name="preco" id="exampleInputPassword1" placeholder="Preço">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Diretorio Da Imagem</label>
    <input type="text" class="form-control" name="diretorio" id="exampleInputPassword1" placeholder="images/imagem.jpg">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="exampleInputPassword1" placeholder="Descrição">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantidade</label>
    <input type="number" class="form-control" name="qtd" id="exampleInputPassword1" placeholder="Quantidade">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Confirmar</label>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>';
}elseif((isset($_GET['action']) && $_GET['action'] == "produtos")){
    $result = $mysqli->query("SELECT * FROM products order by id");
    $linhas = $result->num_rows;
    echo '<div class="container ">
      <div class="row">
        <div class="col-md-6 col-separa">
          <h4>Buscar um Produto</h4>
          <form class="" action="vendas.php?action=buscarProduto" method="post">
            <table>
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <form class="" action="vendas.php?action=buscarProduto" method="post">
                <td>Nome:  </td>
                <td><input type="text" class="form-control" name="nome" placeholder="Nome"></td>
                <td><input type="submit" class="btn btn-danger" value="Buscar"></td>
              </form>
                <td></td>

              </tr>
            </tbody>
            </table>


        </div>


      </div>

    </div>
    ';

    echo '<br><div class="table-responsive">
       <table class="table">
         <thead>
           <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Descrição</th>
              <th>Quantidade</th>
           </tr>
         </thead>';

         for ($i=0; $i < $linhas; $i++) {
           $total = $result->fetch_array();
           echo '
                <tfoot>
                  <tr>
                    <td>'.$total['id'].'</td>
                    <td>'.$total['name'].'</td>
                    <td>'.$total['price'].'</td>
                    <td>'.$total['description'].'</td>
                    <td>'.$total['qtd'].'</td>
                  </tr>

                </tfoot>
             ';
       }


}
  if ((isset($_GET['action']) && $_GET['action'] == "buscar")) {
    $nome = $_POST['nome'];
    $result = $mysqli->query("SELECT * FROM usuario WHERE nome like'%$nome%'");
    $linhas = $result->num_rows;
    echo '<br><div class="table-responsive">
       <table class="table">
         <thead>
           <tr>
             <th>ID</th>
             <th>Nome</th>
             <th>email</th>
             <th>senha</th>
             <th>cpf</th>
             <th>Tipo Usuario</th>

           </tr>
         </thead>';
         for ($i=0; $i < $linhas; $i++) {
           $total = $result->fetch_row();
           echo '
                <tfoot>
                  <tr>
                    <td>'.$total[0].'</td>
                    <td>'.$total[1].'</td>
                    <td>'.$total[4].'</td>
                    <td>'.$total[5].'</td>
                    <td>'.$total[3].'</td>
                    <td>'.$total[10].'</td>
                  </tr>

                </tfoot>
             ';
           }
  }

  if ((isset($_GET['action']) && $_GET['action'] == "buscarProduto")) {
    $nome = $_POST['nome'];
    $result = $mysqli->query("SELECT * FROM products WHERE name like'%$nome%'");
    $linhas = $result->num_rows;
    echo '<div class="container ">
      <div class="row">
        <div class="col-md-6 col-separa">
          <h4>Buscar um Produto</h4>
          <form class="" action="vendas.php?action=buscarProduto" method="post">
            <table>
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <form class="" action="vendas.php?action=buscarProduto" method="post">
                <td>Nome:  </td>
                <td><input type="text" class="form-control" name="nome" placeholder="Nome"></td>
                <td><input type="submit" class="btn btn-danger" value="Buscar"></td>
              </form>

              </tr>
            </tbody>
            </table>
        </div>
      </div>

    </div>';
    echo '<br><div class="table-responsive">
       <table class="table">
         <thead>
           <tr>
           <th>ID</th>
           <th>Nome</th>
           <th>Preço</th>
           <th>Descrição</th>
           <th>Quantidade</th>

           </tr>
         </thead>';
         for ($i=0; $i < $linhas; $i++) {
           $total = $result->fetch_array();
           echo '
                <tfoot>
                  <tr>
                  <td>'.$total['id'].'</td>
                  <td>'.$total['name'].'</td>
                  <td>'.$total['price'].'</td>
                  <td>'.$total['description'].'</td>
                  <td>'.$total['qtd'].'</td>
                  </tr>

                </tfoot>
             ';
           }
  }



  if ((isset($_GET['action']) && $_GET['action'] == "cadastrar")) {
    $titulo = $_POST['titulo'];
    $preco = $_POST['preco'];
    $image = $_POST['diretorio'];
    $descricao = $_POST['descricao'];
    $qtd = $_POST['qtd'];
    $sql = "INSERT INTO products (name, price, image, description, qtd) VALUES
    ('$titulo', '$preco', '$image', '$descricao', '$qtd')";
    if ($mysqli->query($sql) === TRUE) {
    echo '<div class="alert alert-success">
            <strong>Sucesso!</strong> Produto foi inserido com Sucesso.
          </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

$mysqli->close();

  }

  if ((isset($_GET['action']) && $_GET['action'] == "logout")) {
    session_destroy();
    echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=loja.php"/>';
  }

 ?>


</table>
</div>
</body>
</html>
