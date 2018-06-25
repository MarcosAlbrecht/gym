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
</head>
<body>
    <!-- start header_bottom -->
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
         <li ><a href="pricing.php">Preços</a></li>
         <li class="active"><a href="contact.html">Contato</a></li>
         <?php
         session_start();
				 if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {

					 echo'<li><a href="">'.$_SESSION['nome'].'</a> <ul>
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
       <iframe width="100%" height="420" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2&amp;output=embed"> </iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
        <div class="about_banner_wrap">
      	   <h1 class="m_11">Contato</h1>
      	</div>
      	<div class="border"> </div>
      	<div class="rwo contact">
      	  <div class="container">
      		 <div class="col-md-8 contact-top">
			  <h3>Deixe sua Mensagem</h3>
			  <p class="contact_msg">O seu feedback é muito importante pra nós</p>
			     <form method="post" action="contact-post.html">
					<div class="to">
                     	<input type="text" class="text" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
					 	<input type="text" class="text" value="Assunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
					</div>
					<div class="text">
	                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Mensagem:</textarea>
	                </div>
	                <div class="form-submit1">
			           <input name="submit" type="submit" id="submit" value="Enviar Mensagem"><br>
			           <p class="m_msg">Certifique-se de colocar um email válido</p>
					</div>
					<div class="clear"></div>
                 </form>
             </div>
             <div class="col-md-4 contact-top_right">
			  <h3>Informações de Contato</h3>
			  <ul class="contact_info">
			  	<li><i class="mobile"> </i><span>+1-900-235-2456</span></li>
			  	<li><i class="message"> </i><span class="msg">MonstraoGym@gmail.com</span></li>
			  </ul>
	 		 </div>
      	  </div>
        </div>
         <div class="trainers_middle_bottom">
		 	<div class="container">
			  <div class="col-md-4">
		       <div class="contact_hours">
				 <ul class="times_contact">
				 	<h3>Horário de Atendimento <span class="opening"></span></h3>
				 	<li><i class="calender"> </i><span class="contact_week">Segunda</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Terça</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Quarta</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Quinta</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Sexta</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Sabado</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Domingo</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>

				 	<h4>Entre já!</h4>
				 </ul>
		       </div>
            </div>
           <div class="col-md-4">
     	 <h3 class="m_2">Próximos Eventos</h3>
     	 <div class="events">
     	 	<div class="event-top">
	     	 	<ul class="event1">
	     	 		<h4>26 de Junho, 2018</h4>
	     	 		<img src="images/pic.jpg" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.12.00-h.13.00</span>
	     	 		<h4>AERÓBICA</h4>

	     	 		<div class="btn2">
					   <a href="#">Reservado</a>
					</div>
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom">
	     	 	<ul class="event1">
	     	 		<h4>26 de Junho, 2018</h4>
	     	 		<img src="images/pic.jpg" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.12.00-h.13.00</span>
	     	 		<h4>Spinning</h4>

	     	 		<div class="btn2">
					    <a href="#">Reservado</a>
					</div>
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 </div>
     </div>
     <div class="col-md-4">
     	 <h3 class="m_2">Eventos Especiais</h3>
     	 <div class="blog_events">
     	 	<ul class="tab-left1">
				<span class="tab1-img"><img src="images/pic7.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">Zumba com o Pelé</a></p>
				 <span class="m_date">25 de Junho, 2018</span>
				</div>
				<div class="clear"></div>
			</ul>
			<ul class="tab-left1">
				<span class="tab1-img"><img src="images/pic6.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">Hit com o Faustão</a></p>
				 <span class="m_date">5 de Agosto, 2018</span>
				</div>
				<div class="clear"></div>
			</ul>
			<ul class="tab-last1">
				<span class="tab1-img"><img src="images/pic8.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">Dança com o Zeca Pagodinho</a></p>
				 <span class="m_date">5 de Outubro, 2018</span>
				</div>
				<div class="clear"></div>
			</ul>
     	 </div>
       </div>
       <div class="clear"></div>

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
     <div class="footer-top">
		 	<ul class="twitter_footer">

		 	</ul>
		 </div>
		 <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">INSCREVER-SE</h4>
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
					<p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(45) 666 666 666</span></p>
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
