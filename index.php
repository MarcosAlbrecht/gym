
<!DOCTYPE HTML>
<html>
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
 <!-- start header_top -->
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
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <!-- start h_menu4 -->
		 <div class="h_menu4">
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li class="active"><a href="index.php">Home</a></li>
			   <li><a href="sobre.php">Sobre</a></li>
			   <li><a href="trainers.php">Treinos</a></li>
			   <li><a href="classes.php">Professores</a></li>
			   <li><a href="loja.php">Loja</a></li>
			   <li><a href="pricing.php">Preços</a></li>
			   <li><a href="contact.php">Contato</a></li>
				 <?php
				 session_start();
				 if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
					 echo'<li><a href="">'.$_SESSION['nome'].'</a><ul>
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
	 	 <div class="container">
			<!-- start content-top -->
			<div class="row content-top">
				 <div class="col-md-5">
				  <img src="images/pic.png" class="img-responsive" alt=""/>
			     </div>
				 <div class="col-md-7 content_left_text">
				   <h3>Treine para saber que você pode conquistar qualquer coisa que sua mente quiser</h3>
				   <p>Se você quer algo que nunca teve, você precisa estar disposto a fazer algo que nunca fez.</p>
				 </div>
            </div>
		 </div>
		<!-- end content-top -->
		<div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->
	 	    	<div class="col-md-4"><a href="pricing.html">
	 	    		<ul class="spinning">
	 	    			<li class="live"><span class="m_1">Spinning</span></li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/pic3.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Preços</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="pricing.html">
	 	    		<ul class="spinning">
	 	    			<li class="live"><span class="m_1">Musculação</span></li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/pic2.jpg" class="img-responsive"  alt=""/>
					      <div class="mask">
	                       	<div class="info">Preços</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="pricing.html">
	 	    		<ul class="spinning">
	 	    			<li class="live"><span class="m_1">Pilates</span></li>
	 	    			<div class="clear"></div>
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/pic1.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Preços</div>
			              </div>
	                  </div>
			     </a></div>
				<div class="clear"></div>
		   </div>
		  <!-- end content-middle -->
		   <div class="row about">
		      <div class="col-md-8">
		     	 <h3 class="m_2">TODOS OS TREINOS</h3>
		     	 <div class="classes">
		     	 	<div class="cardio_list">
		     	 	  <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Cárdio</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="contact.html" target="_blank"> </a> </span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div>
		     	 	  <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Spinning</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="contact.html" target="_blank"> </a> </span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div>
		     	 	  <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Pilates</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="contact.html" target="_blank"> </a> </span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div>
		     	 	   <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Boxing</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="contact.html" target="_blank"> </a> </span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div>
		     	 	</div>
		     	 	<div class="cardio_list1">
		     	 	  <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Aeróbico</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="contact.html" target="_blank"> </a> </span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div>
		     	 	  <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Kik Boxing</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="contact.html" target="_blank"> </a> </span></li>
						    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div>
		     	 	  <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>CrossFit</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="contact.html" target="_blank"> </a> </span></li>
									    </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div>
		     	 	   <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Yoga</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="contact.html" target="_blank"> </a> </span></li>
						     </ul>
					   </div>
			     	 	<div class="clear"></div>
		     	 	  </div>
		     	 	</div>
		     	 	<div class="clear"></div>
		     	 </div>
				</div>
				<div class="col-md-4">
				  <h3 class="m_4">PREÇOS PARA MEMBROS</h3>
				  <div class="members">
				   <h4 class="m_3">25% De desconto para</br> todos os membros</h4>
				   <p>Desconto em serviços </br> e tratamentos no GymBase</br> para
						 todos os titulares</br> de cartões de filiação.</p>
				  </div>
			    </div>
			    <div class="clear"></div>
			</div>




      <div class="row about">
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
		   	 <h3 class="m_2">Horários</h3>
				 <div class="classes">
	 				 <ul class="times">
	 				 	<h3>Horário de <span class="opening">Atendimento</span></h3>
	 				 	<li><i class="calender"> </i><span class="week">Segunda</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
	 				 	<li><i class="calender"> </i><span class="week">Terça</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
	 				 	<li><i class="calender"> </i><span class="week">Quarta</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
	 				 	<li><i class="calender"> </i><span class="week">Quinta</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
	 				 	<li><i class="calender"> </i><span class="week">Sexta</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
	 				 	<li><i class="calender"> </i><span class="week">Sabado</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
	 				 	<li><i class="calender"> </i><span class="week">Domingo</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
	 				 	<h4>Entre já!</h4>
	 				 </ul>
				 </div>
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
						<li><a href="loja.html">Loja</a></li>
						<li><a href="login.php">Login</a></li>
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
