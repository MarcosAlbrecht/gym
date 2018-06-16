<?php

$email = $_POST['email'];
$senha = ($_POST['password']);
$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
$row = mysqli_num_rows($query);

  if ($row > 0){
    session_start();

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['password'];
    header('Location: dashboard.php');
  }else{
    header('Location: login.php?msg=1');
  }



 ?>
