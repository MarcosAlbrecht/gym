
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
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- //grid-slider -->
<!-- Add fancyBox main JS and CSS files -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>

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
		<div class="menu" id="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <!-- start h_menu4 -->
		 <div class="h_menu4">
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="index.php">Home</a></li>
			   <li><a href="sobre.php">Sobre</a></li>
			   <li><a href="trainers.php">Treinos</a></li>
			   <li><a href="classes.php">Professores</a></li>
			   <li><a href="loja.php">Loja</a></li>
			   <li class="active"><a href="pricing.php">Preços</a></li>
			   <li><a href="contact.php">Contato</a></li>
				 <?php
				 session_start();
				 if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {

					 echo'<li><a href="">'.$_SESSION['email'].'</a> <ul>
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
       <div class="about_banner_img"><img src="images/price.jpg" class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Preços</h1>
      	 </div>
      	<div class="border"> </div>
      	  <div class="container">
      		<div class="row price_plans">
		 		<h3 class="m_2">Preços e Planos</h3>
		 		<div class="price_plans_box">
		 	 <div class="col-md-3">
		 		<ul class="price1">
		 			<h4>1 Dia de Treino</h4>
		 			<h3>Free</h3>
		 			<ul class="price_list">

						<a class="popup-with-zoom-anim" href="#small-dialog"><li class="price_but">Adquirir</li></a>
						<!-----pop-up-grid---->
								 <div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
												<h4><span class="shipping"> </span>Dados Pessoais</h4>
												<ul>
													<li><input class="text-box-dark" type="text" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
													<li><input class="text-box-dark" type="text" value="Sobrenome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
													<li><input class="text-box-dark" type="text" value="CPF" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Telefone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
													<li><input class="text-box-dark" type="text" value="Endereço" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
													<div class="clear"> </div>
												</ul>
												<div class="clear"> </div>
											<ul class="payment-type">
												<h4><span class="payment"> </span>Pagamento</h4>
												<li>
													<span class="col_checkbox">
													<input id="3" class="css-checkbox1" type="checkbox">
													<label for="3" name="demo_lbl_1" class="css-label1"> </label>
													<a class="visa" href="#"> </a>
													</span>
												</li>
												<li>
													<span class="col_checkbox">
														<input id="4" class="css-checkbox2" type="checkbox">
														<label for="4" name="demo_lbl_2" class="css-label2"> </label>
														<a class="paypal" href="#"> </a>
													</span>
												</li>
												<div class="clear"> </div>
											</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Número do Cartão" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
													<li><input class="text-box-dark" type="text" value="Nome do Cartão" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
													<div class="clear"> </div>
												</ul>
												<ul>
													<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Data de Expiração" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
													<li><input class="text-box-dark" type="text" value="Código de Segurança" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
													<div class="clear"> </div>
												</ul>
												<ul class="payment-sendbtns">
													<li><input type="reset" value="Cancelar"></li>
													<li><input type="submit" value="Confirmar"></li>
												</ul>
												<div class="clear"> </div>
											</form>
										</div>
						  			</div>
								</div>
								<!-----pop-up-grid---->
						<div class="clear"></div>
					</ul>
		 		</ul>
		 	 </div>
		 	 <div class="col-md-3">
		 		<ul class="price1">
		 			<h4>Mensal</h4>
		 			<h2 class="m_25">R$90,00</h2>
		 			<ul class="price_list">

						<a class="popup-with-zoom-anim" href="#small-dialog"><li class="price_but">ADQUIRIR</li></a>
						<div class="clear"></div>
					</ul>
		 		</ul>
		 	 </div>
		 	 <div class="col-md-3">
		 		<ul class="price2">
		 			<h4>Semestral</h4>
		 			<h2 class="m_26">R$71,00</h2>
		 			<ul class="price_list1">
						<p><img src="images/tick1.png" alt="" align="middle" width="16" height="14"/><a href="#">3x R$ 150,00</a></p>
						<p><img src="images/tick1.png" alt="" align="middle" width="16" height="14"/><a href="#">À vista R$ 450,00</a></p>
						<a class="popup-with-zoom-anim" href="#small-dialog"><li class="price_but1">ADQUIRIR</li></a>
						<div class="clear"></div>
					</ul>
		 		</ul>
		 	</div>
		 	<div class="col-md-3">
		 		<ul class="price1">
		 			<h4>Anual</h4>
		 			<h2 class="m_25">R$62,50</h2>
		 			<ul class="price_list">
						<p><img src="images/tick.png" alt="" align="middle" width="16" height="14"/><a href="#">6x R$ 130,00</a></p>
						<p><img src="images/tick.png" alt="" align="middle" width="16" height="14"/><a href="#">À vista R$ 750,00</a></p>
						<a class="popup-with-zoom-anim" href="#small-dialog"><li class="price_but">ADQUIRIR</li></a>
						<div class="clear"></div>
					</ul>
		 		</ul>
		 	 </div>
     		<div class="clear"></div>
     	    </div>
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
				   <h4 class="m_7">inscrever-se</h4>
				   <p class="m_8">Você ficará por dentro de todas as nossas promoções e eventos.</p>
				      <form class="subscribe">
			             <input type="text" value="Inserir email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
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
						<li><a href="#">Preços</a></li>
						<li><a href="#">Loja</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Contato</a></li>
					</ul>

				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2018 Template by Jean e Marcos</a></p>
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
