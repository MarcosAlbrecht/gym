<?php

if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
  switch($msg){
    case 1:
    ?>
      <div class="message">
        <div class="alert alert-danger">
          <a href="index.php" class="close" data-dismiss="alert">&times</a>
          Email ou Senha errados tente outra vez.
        </div>
      </div>
    <?php
    break;
    case 2:
    ?>
      <div class="message">
        <div class="alert alert-danger">
          <a href="index.php" class="close" data-dismiss="alert">&times</a>
          Você não tem permissão para acessar esta página.
        </div>
      </div>
    <?php
    break;
    case 3:
    ?>
      <div class="message">
        <div class="alert alert-success">
          <a href="index.php" class="close" data-dismiss="alert">&times</a>
          Logout realizado com sucesso.
        </div>
      </div>
    <?php
    break;
  }
}


    // Verifica se o campo foi preenchido
    $email = (isset($_POST["email"])) ? $_POST["email"] : '';
    $senha = (isset($_POST["password"])) ? $_POST["email"] : '';

    //








 ?>
