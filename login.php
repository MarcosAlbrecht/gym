<?php
session_start();
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Academia Monstrão</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
</head>
<body>
  <div class="header">
     <div class="container">

      <div class="header-arrow">
         <a href="#menu" class="class scroll"><span> </span </a>
      </div>
      </div>
    </div>
  <!-- end header_top -->
  <!-- start header_bottom -->
    <div class="header-bottom">
     <div class="container">
      <div class="header-bottom_left">
        <i class="phone"> </i><span>1-200-346-2986</span>
      </div>
      <div class="social">
         <ul>
          <li class="facebook"><a href="#"><span> </span></a></li>
          <li class="twitter"><a href="#"><span> </span></a></li>
          <li class="pinterest"><a href="#"><span> </span></a></li>
          <li class="google"><a href="#"><span> </span></a></li>
          <li class="tumblr"><a href="#"><span> </span></a></li>
          <li class="instagram"><a href="#"><span> </span></a></li>
          <li class="rss"><a href="#"><span> </span></a></li>
         </ul>
       </div>
       <div class="clear"></div>
    </div>
    </div>
  <!-- end header_bottom -->
  <!-- start menu -->
    <div class="menu" id="menu">
    <div class="container">
     <div class="logo">
      <a href="index.html"><img src="images/logo.png" alt=""/></a>
     </div>
     <!-- start h_menu4 -->
     <div class="h_menu4">
       <a class="toggleMenu" href="#">Menu</a>
       <ul class="nav">
         <li ><a href="index.php">Home</a></li>
         <li><a href="sobre.php">Sobre</a></li>
         <li><a href="trainers.php">Treinos</a></li>
         <li><a href="classes.php">Professores</a></li>
         <li><a href="loja.php">Loja</a></li>
         <li><a href="pricing.php">Preços</a></li>
         <li><a href="contact.php">Contato</a></li>
         <?php
         if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {

           echo'<li class="active"><a href="">'.$_SESSION['email'].'</a> <ul>
  					<li><a href="verificaUsuario.php?action=minhapagina">Minha Página</a></li>
  					<li><a href="verificaUsuario.php?action=logout">Logout</a></li>
  				 </ul></li>';
         }else{
           echo'<li class="active"><a href="login.php">Login</a></li>';
         }
          ?>
          </ul>
        <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
     <div class="clear"></div>
    </div>
  </div>
	<!-- end menu -->

       <div class="main">
          <div class="login_top">
          	<div class="container">
			  <div class="col-md-6">
				 <div class="login-page">
					<h4 class="title">NOVOS CLIENTES</h4>

					<div class="button1">
					   <a href="register.html"><input type="submit" name="Submit" value="Criar conta"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-page">
				  <div class="login-title">
	           		<h4 class="title">CLIENTES REGISTRADOS</h4>
					<div id="loginbox" class="loginbox">
            <?php
            if (isset($_GET['action']) && $_GET['action'] == "meuspedidos") {
              echo'
  						<form action="verificaUsuario.php?action=meuspedidos" method="post" name="login" id="login-form">
  						  <fieldset class="input">
  						    <p id="login-form-username">
  						      <label for="modlgn_username">Email</label>
  						      <input id="modlgn_username" type="text" name="email" class="inputbox" size="18" autocomplete="off">
  						    </p>
  						    <p id="login-form-password">
  						      <label for="modlgn_passwd">Senha</label>
  						      <input id="modlgn_passwd" type="password" name="senha" class="inputbox" size="18" autocomplete="off">
  						    </p>
  						    <div class="remember">
  							    <p id="login-form-remember">
  							      <label for="modlgn_remember"><a href="#">Esqueceu sua senha ? </a></label>
  							   </p>
  							    <input type="submit" name="Submit" class="button" value="Entrar"><div class="clear"></div>
  							 </div>
  						  </fieldset>
  						 </form>
               ';
            }else{
            echo'
						<form action="verificaUsuario.php" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
						      <input id="modlgn_username" type="text" name="email" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Senha</label>
						      <input id="modlgn_passwd" type="password" name="senha" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">Esqueceu sua senha ? </a></label>
							   </p>
							    <input type="submit" name="Submit" class="button" value="Entrar"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
             ';}
             ?>
             <p class="text-center text-danger">
               <?php if(isset($_SESSION['erroLogin'])){
                 echo $_SESSION['erroLogin'];
                 unset($_SESSION['erroLogin']);
               } ?>
             </p>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			  </div>
			</div>
		  </div>
         </div>


         <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">INSCREVER-SE</h4>
           <p class="m_8">Você ficará por dentro de todas as nossas promoções e eventos.</p>
				      <form class="subscribe">
			             <input type="text" value="Inserir Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Enviar Email<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="images/logo.png" alt=""/>
					</div>
					<p class="m_9">A vontade de se preparar tem que ser maior do que a vontade de vencer. Vencer será consequência da boa preparação, Entre em contato conosco e agende uma aula gratuita.</p>
					<p class="address">Telefone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(45) 666 666 666</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">MonstraoGym@gmail.com</span></p>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">Menu</h4>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Treinos</a></li>
						<li><a href="#">Professores</a></li>
						<li><a href="#">Loja</a></li>
						<li><a href="#">Preço</a></li>
						<li><a href="#">Contato</a></li>
            <li><a href="#">Login</a></li>
					</ul>

				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2018 Template by Jean e Marcos </a></p>
		    </div>
		    <div class="social">
			   <ul>
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>
				  <li class="rss"><a href="#"><span> </span></a></li>
			   </ul>
		    </div>
		   <div class="clear"></div>
		  </div>
	   </div>
</body>
</html>
