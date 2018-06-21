<
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
			   <li><a href="index.html">Home</a></li>
			   <li><a href="sobre.php">Sobre</a></li>
			   <li><a href="trainers.php">Treinos</a></li>
			   <li class="active"><a href="classes.php">Professores</a></li>
			   <li><a href="loja.php">Loja</a></li>
			   <li><a href="pricing.php">Preços</a></li>
			   <li><a href="contact.php">Contato</a></li>
         <?php
         session_start();
				 if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {

					 echo'<li><a href="">'.$_SESSION['email'].'</a><ul>
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
	<div class="main">
       <div class="about_banner_img"><img src="images/class_img.jpg" class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Classes</h1>
      	</div>
		<div class="border"> </div>
		 <div class="container">
		   <div class="classes_wrapper">
		 	<div class="row class_box">
 			  <div class="col-md-6">
				<div class="class_left">
					<a href="single_class.html"><img src="images/c7.jpg" class="img-responsive" alt=""/ title="continue"></a>
				</div>
				<div class="class_right">
					<h3>Kik Boxing</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<div class="class_img">
					  <img src="images/c2.jpg" alt=""/>
					  <div class="class_desc">
					  	<h4>Professor</h4>
					  	<h5>laoreet dolore</h5>
					  	<p>iusto odio dignissim</p>
					  </div>
					    <div class="clear"></div>
					     <ul class="buttons_class">
					  	 <li class="btn5"><a href="#">Infomações</a></li>
				         <li class="btn6"><a href="#">Calendário</a></li>
			            <div class="clear"></div>
			         </ul>
					</div>
				</div>
				<div class="clear"></div>
			  </div>
			   <div class="col-md-6">
				<div class="class_left">
					<a href="single_class.html"><img src="images/c1.jpg" class="img-responsive" alt=""/ title="continue"></a>
				</div>
				<div class="class_right1">
					<h3>Spinning</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<div class="class_img">
					  <img src="images/c8.jpg" alt=""/>
					  <div class="class_desc1">
					  	<h4>Professor</h4>
					  	<h5>laoreet dolore</h5>
					  	<p>iusto odio dignissim</p>
					  </div>
					   <div class="clear"></div>
					   <ul class="buttons_class">
					  	 <li class="btn7"><a href="#">Informações</a></li>
				         <li class="btn8"><a href="#">Calendário</a></li>
			            <div class="clear"></div>
			           </ul>
					</div>
				  </div>
			    </div>
			  <div class="clear"></div>
			 </div>
			 <div class="row class_box">
 			   <div class="col-md-6">
				<div class="class_left">
					<a href="single_class.html"><img src="images/c6.jpg" class="img-responsive" alt=""/ title="continue"></a>
				</div>
				<div class="class_right">
					<h3>Crossfit</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<div class="class_img">
					  <img src="images/c9.jpg" alt=""/>
					  <div class="class_desc">
					  	<h4>Professor</h4>
					  	<h5>laoreet dolore</h5>
					  	<p>iusto odio dignissim</p>
					  </div>
					    <div class="clear"></div>
					     <ul class="buttons_class">
					  	 <li class="btn5"><a href="#">Informações</a></li>
				         <li class="btn6"><a href="#">Calendário</a></li>
			            <div class="clear"></div>
			         </ul>
					</div>
				</div>
				<div class="clear"></div>
			  </div>
			   <div class="col-md-6">
				<div class="class_left">
					<a href="single_class.html"><img src="images/c5.jpg" class="img-responsive" alt=""/ title="continue"></a>
				</div>
				<div class="class_right1">
					<h3>Aeróbico</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<div class="class_img">
					  <img src="images/c10.jpg" alt=""/>
					  <div class="class_desc1">
					  	<h4>Professor</h4>
					  	<h5>laoreet dolore</h5>
					  	<p>iusto odio dignissim</p>
					  </div>
					   <div class="clear"></div>
					   <ul class="buttons_class">
					  	 <li class="btn7"><a href="#">Informações</a></li>
				         <li class="btn8"><a href="#">Calendário</a></li>
			            <div class="clear"></div>
			           </ul>
					</div>
				 </div>
			    </div>
			   <div class="clear"></div>
			 </div>
			 <div class="row class_box1">
 			  <div class="col-md-6">
				<div class="class_left">
					<a href="single_class.html"><img src="images/c3.jpg"  class="img-responsive" alt=""/ title="continue"></a>
				</div>
				<div class="class_right">
					<h3>Cardio</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<div class="class_img">
					  <img src="images/c11.jpg" alt=""/>
					  <div class="class_desc">
					  	<h4>Professor</h4>
					  	<h5>laoreet dolore</h5>
					  	<p>iusto odio dignissim</p>
					  </div>
					    <div class="clear"></div>
					     <ul class="buttons_class">
					  	 <li class="btn5"><a href="#">Informações</a></li>
				         <li class="btn6"><a href="#">Calendário</a></li>
			            <div class="clear"></div>
			         </ul>
					</div>
				  </div>
				<div class="clear"></div>
			  </div>
			   <div class="col-md-6">
				<div class="class_left">
					<a href="single_class.html"><img src="images/c4.jpg" class="img-responsive"  alt=""/ title="continue"></a>
				</div>
				<div class="class_right1">
					<h3>Yoga</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					<div class="class_img">
					  <img src="images/c12.jpg" alt=""/>
					  <div class="class_desc1">
					  	<h4>Professor</h4>
					  	<h5>laoreet dolore</h5>
					  	<p>iusto odio dignissim</p>
					  </div>
					   <div class="clear"></div>
					   <ul class="buttons_class">
					  	 <li class="btn7"><a href="#">Informações</a></li>
				         <li class="btn8"><a href="#">Calendário</a></li>
			            <div class="clear"></div>
			           </ul>
					</div>
				</div>
			   </div>
			   <div class="clear"></div>
			 </div>
			<div class="clear"></div>
		   </div>
		   <div class="row classes_bottom">
		      <div class="col-md-8">
		     	 <h3 class="m_2">All Classes</h3>
		     	 <div class="classes">
		     	 	<div class="cardio_list">
		     	 	  <div class="cardio_sublist">
			     	 	<ul class="cardio">
			     	 		<li><i class="clock"> </i><span>Cardio</span></li>
			     	 	</ul>
			     	 	<div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="trainers.html" target="_blank"> </a></span></li>
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
                   <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="trainers.html" target="_blank"> </a></span></li>
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
                   <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="trainers.html" target="_blank"> </a></span></li>
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
                   <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="trainers.html" target="_blank"> </a></span></li>
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
                   <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="trainers.html" target="_blank"> </a></span></li>
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
                   <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="trainers.html" target="_blank"> </a></span></li>
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
                   <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="trainers.html" target="_blank"> </a></span></li>
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
                   <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="trainers.html" target="_blank"> </a></span></li>
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
