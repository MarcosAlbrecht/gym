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
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style---->
</head>
<body>
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
	  <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="index.php">Home</a></li>
			   <li class="active"><a href="sobre.php">Sobre</a></li>
			   <li><a href="trainers.php">Treinos</a></li>
			   <li><a href="classes.php">Professores</a></li>
			   <li><a href="loja.php">Loja</a></li>
			   <li><a href="pricing.php">Preços</a></li>
			   <li><a href="contact.php">Contato</a></li>
				 <?php
				 session_start();
				 if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {

					 echo'<li><a>'.$_SESSION['email'].'</a><ul>
					 <li><a href="verificaUsuario.php?action=minhapagina">Minha Página</a></li>
					 <li><a href="verificaUsuario.php?action=logout">Logout</a></li>
					</ul></li>';
				 }else{
					 echo'<li><a href="login.php">Login</a></li>';
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
	   <div class="about_banner_img"><img src="images/about_img.jpg" class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Sobre Nós</h1>
      	 </div>
      	 <div class="about-wrapper">
      	    <div class="container">
		       <div class="row about-top">
				 <div class="col-md-5">
				  <img src="images/about_img1.jpg" class="img-responsive" alt=""/>
			     </div>
				 <div class="col-md-7 about-left-text">
				   <h2>ESTAMOS SEMPRE ABERTOS!</h2>
				   <p>Vem para Unica academia que fica aberta faça chuva ou faça sol! Sábados, domingos e feriados.</p>
				 </div>
                 <div class="clear"></div>
               </div>
		    </div>
	      </div>
	      <div class="container">
					<div class="col-md-3">

					</div>
	       <div class="col-md-6">
					 <h3> Desde outubro de 2006, a Academia Monstrão, uma das mais modernas academias de Marechal Cândido Rondon, vem funcionando
					com toda energia em sua nova instalação no Clube, com aparelhagem de primeira linha e profissionais altamente qualificados.
 				 	Os não sócios têm acesso à academia através de uma entrada exclusiva com estacionamento. A academia oferece musculação;
				  todas as modalidades de ginástica:
			  	jump, spinning, step, abdominal, localizada, pilates com bola; yoga; condicionamento físico; box;
				 corrida; alongamento;  massagem relaxante, banho de lua e toda a parte
				 de estética. Também disponibiliza atendimento nutricional e fisioterapeutico, acupuntura, avaliação física e corporal.</h3>

		   </div>
			 <div class="col-md-3">

			 </div>
	    </div>
	    <div class="login">
	  	    <div class="row login_details">
		 	  <div class="col-md-6">
				  <div class="join">
				  	 <h3>Por quê entrar?</h3>
				  	 <h4>VENHA PARA UNICA</h4>
				  	 <p>Invista em sua saúde com a certeza de ter os melhores equipamentos e profissionais a sua disposição.</p>
				  	 <div class="btn3">
				       <a href="register.html">Entre Hoje</a>
			         </div>
				  </div>
				</div>
				 <div class="col-md-6">
				  <div class="join-right">
				  	 <h3>Por quê entrar?</h3>
				  	 <h4>VENHA PARA UNICA</h4>
				  	 <p>Invista em sua saúde com a certeza</br>
							 de ter os melhores equipamentos e profissionais a sua disposição. </p>
				  	 <div class="buttons_login">
				  	 <div class="btn4">
				       <a href="login.html">Log In</a>
			         </div>
			         <div class="p-ww">
					  <form>
					   <input class="date" id="datepicker" type="text" value="View Calender" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'View Calender';}">
					  </form>
				     </div>
			         <div class="clear"></div>
			         <!---strat-date-piker---->
				  <script src="js/jquery-ui.js"></script>
				  <script>
				  $(function() {
				    $( "#datepicker" ).datepicker();
				  });
				  </script>
				  </div>
				  </div>
				</div>
				<div class="clear"></div>
		   </div>
	  </div>
	   <div class="about_gallery">
		 	<div class="container">
		 	  <div class="col-md-8">
		     	 <h3 class="m_2">Galeria</h3>
		     	 <div id="ca-container" class="ca-container">
				    <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon1"> </div>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon2"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon3"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon4"> </div>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon5"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon6"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon7"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon"> </div>
							</div>
						</div>
			    </div>
			 </div>
			 <script type="text/javascript">
				$('#ca-container').contentcarousel();
			</script>
		   </div>
		   <div class="col-md-4">
		   	 <h3 class="m_2">Parceiros</h3>
			  <ul class="partner">
			  	<li><img src="images/p6.png" alt=""/></li>
			  	<li><img src="images/p5.png" alt=""/></li>
			  	<li><img src="images/p4.png" alt=""/></li>
			  	<li><img src="images/p3.png" alt=""/></li>
			  	<li><img src="images/p2.png" alt=""/></li>
			  	<li><img src="images/p1.png" alt=""/></li>
			  	 <div class="clear"></div>
			  </ul>
		    </div>
	       <div class="clear"></div>
	       </div>
		  </div>
		 </div>
		 <div class="footer-bottom">
			<div class="container">
			<div class="row section group">
			 <div class="col-md-4">
					<h4 class="m_7">Inscreva-se para receber Newsletter</h4>
					<p class="m_8">Você ficará por dentro de todas as nossas promoções e eventos.</p>
						 <form class="subscribe">
									<input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
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
				 <p class="address">Telefone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(00) 222 666 444</span></p>
				 <p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">projeto@meuprojeto.com</span></p>
			 </div>
			 <div class="col-md-4">
				 <ul class="list">
					 <h4 class="m_7">Menu</h4>
					 <li><a href="#">Sobre</a></li>
					 <li><a href="trainers.html">Treinos</a></li>
					 <li><a href="classes.html">Professores</a></li>
					 <li><a href="pricing.html">Preços</a></li>
					 <li><a href="#">Loja</a></li>
					 <li><a href="#">Login</a></li>
					 <li><a href="contact.html">Contato</a></li>
				 </ul>
			 </div>
			 <div class="clear"></div>
				 </div>
		 </div>
		</div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2018 Template by Marcos e Jean</p>
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
