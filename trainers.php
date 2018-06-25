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
			   <li><a href="sobre.php">Sobre</a></li>
			   <li class="active"><a href="trainers.php">Treinos</a></li>
			   <li><a href="classes.php">Professores</a></li>
			   <li><a href="loja.php">Loja</a></li>
			   <li><a href="pricing.php">Preços</a></li>
			   <li><a href="contact.php">Contato</a></li>
				 <?php
				 session_start();
				 if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {

					 echo'<li><a href="index.php">'.$_SESSION['nome'].'</a> <ul>
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
	  <div class="about_banner_img"><img src="images/trine_img.jpg" class="img-responsive" alt=""></div>
	  <div class="about_banner_wrap">
      	  <h1 class="m_11">Calendário</h1>
      </div>
       <div class="border"> </div>
       <div class="container">
       	<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Todas</span></li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Musculação</span></li>
				  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Boxing</span></li>
				  <div class="clear"></div>
			  </ul>
				<div class="resp-tabs-container">
				      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="facts">
							<ul class="tab-left">
								<table class="timetable">
				<thead>
					<tr>
						<th></th>	<th>Segunda</th>	<th>Terça</th>	<th>Quarta</th>	<th>Quinta</th>	<th>Sexta</th>	<th>Sábado</th>	<th>Domingo</th>	</tr>
				</thead>
				<tbody><tr class="row_1 row_gray">
						<td>
							05.00 - 06.00
						</td><td class="event"><a href="#" title="Boxing">Boxing</a>05.00 - 06.00</td><td class="event"><a href="#" title="Boxing">Boxing</a>05.00 - 06.00</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_2">
						<td>
							06.00 - 07.00
						</td><td class="event"><a href="#" title="Musculação">Musculação</a>06.00 - 07.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>06.00 - 07.00</td><td class="event" rowspan="3"><a href="#">Musculação</a>06.00 - 08.30<br><br><a href="#" title="Cárdio">Cárdio</a>06.00 - 08.30</td><td class="event" rowspan="3"><a href="#" title="Musculação">Musculação</a>06.00 - 08.30<br><br><a href="#" title="Cárdio">Cárdio</a>06.00 - 08.30</td><td class="event" rowspan="3"><a href="#" title="Musculação">Musculação</a>06.00 - 08.30<br><br><a href="#" title="Cárdio">Cárdio</a>06.00 - 08.30</td><td></td><td></td></tr><tr class="row_3 row_gray">
						<td>
							07.00 - 08.00
						</td><td class="event"><a href="#" title="Cárdio">Cárdio</a>07.00 - 08.00</td><td class="event"><a href="#" title="Cárdio">Cárdio</a>07.00 - 08.00</td><td></td><td></td></tr><tr class="row_4">
						<td>
							08.00 - 09.00
						</td><td></td><td></td><td class="event" rowspan="2"><a href="#" title="Ciclismo">Ciclismo</a>08.00 - 09.30</td><td class="event" rowspan="2"><a href="#" title="Ciclismo">Ciclismo</a>08.00 - 09.30</td></tr><tr class="row_5 row_gray">
						<td>
							09.00 - 10.00
						</td><td class="event" rowspan="3"><a href="#" title="Ciclismo">Ciclismo</a>09.00 - 11.25</td><td class="event" rowspan="3"><a href="#" title="Ciclismo">Ciclismo</a>09.00 - 11.25</td><td></td><td class="event"><a href="#" title="Ciclismo">Ciclismo</a>09.00 - 10.00</td><td class="event"><a href="#" title="Ciclismo">Ciclismo</a>09.00 - 10.00</td></tr><tr class="row_6">
						<td>
							10.00 - 11.00
						</td><td></td><td class="event" rowspan="2"><a href="#" title="Cárdio">Cárdio</a>10.00 - 11.30</td><td class="event" rowspan="2"><a href="#" title="Cárdio">Cárdio</a>10.00 - 11.30</td><td class="event"><a href="#" title="Musculação">Musculação</a>10.00 - 11.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>10.00 - 11.00</td></tr><tr class="row_7 row_gray">
						<td>
							11.00 - 12.00
						</td><td></td><td class="event"><a href="#" title="Ciclismo">Ciclismo</a>11.00 - 12.00</td><td class="event"><a href="#" title="Ciclismo">Ciclismo</a>11.00 - 12.00</td></tr><tr class="row_8">
						<td>
							12.00 - 13.00
						</td><td></td><td></td><td class="event"><a href="#" title="Musculação">Musculação</a>12.00 - 13.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>12.00 - 13.00</td><td class="event" rowspan="4"><a href="#" title="Boxing">Boxing</a>12.00 - 15.45</td><td class="event" rowspan="4"><a href="#" title="Musculação">Musculação</a>12.00 - 13.00<br><br><a href="#" title="Boxing">Boxing</a>12.00 - 15.45<br><br><a href="#" title="Cárdio">Cárdio</a>14.00 - 16.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>12.00 - 13.00</td></tr><tr class="row_9 row_gray">
						<td>
							13.00 - 14.00
						</td><td></td>login.phptd></td><td></td><td></td></tr><tr class="row_10">
						<td>
							14.00 - 15.00
						</td><td class="event" rowspan="4"><a href="#" title="Musculação">Musculação</a>14.00 - 16.15<br><br><a href="#" title="Ciclismo">Ciclismo</a>16.00 - 17.30</td><td class="event" rowspan="4"><a href="#" title="Musculação">Musculação</a>14.00 - 16.15<br><br><a href="#" title="Ciclismo">Ciclismo</a>16.00 - 17.30</td><td></td><td></td><td class="event" rowspan="2"><a href="#" title="Cárdio">Cárdio</a>14.00 - 16.00</td></tr><tr class="row_11 row_gray">
						<td>
							15.00 - 16.00
						</td><td></td><td></td></tr><tr class="row_12">
						<td>
							16.00 - 17.00
						</td><td></td><td class="event" rowspan="2"><a href="#" title="Ciclismo">Ciclismo</a>16.00 - 17.30</td><td class="event" rowspan="4"><a href="#" title="Ciclismo">Ciclismo</a>16.00 - 17.30<br><br><a href="#" title="Musculação">Musculação</a>17.30 - 20.00<br><br><a href="#" title="Boxing">Boxing</a>18.00 - 20.00</td><td></td><td></td></tr><tr class="row_13 row_gray">
						<td>
							17.00 - 18.00
						</td><td></td><td class="event"><a href="#" title="Musculação">Musculação</a>17.00 - 18.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>17.00 - 18.00</td></tr><tr class="row_14">
						<td>
							18.00 - 19.00
						</td><td class="event" rowspan="2"><a href="#" title="Boxing">Boxing</a>18.00 - 19.00<br><br><a href="#" title="Yoga Pilates">Yoga Pilates</a>18.30 - 20.00</td><td class="event" rowspan="2"><a href="#" title="Boxing">Boxing</a>18.00 - 19.00<br><br><a href="#" title="Yoga Pilates">Yoga Pilates</a>18.30 - 20.00</td><td class="event" rowspan="2"><a href="#" title="Boxing">Boxing</a>18.00 - 20.00<br><br><a href="#" title="Yoga Pilates">Yoga Pilates</a>18.30 - 20.00</td><td class="event" rowspan="2"><a href="#" title="Boxing">Boxing</a>18.00 - 20.00<br><br><a href="#" title="Yoga Pilates">Yoga Pilates</a>18.30 - 20.00</td><td></td><td></td></tr><tr class="row_15 row_gray">
						<td>
							19.00 - 20.00
						</td><td class="event" rowspan="2"><a href="#" title="Yoga Pilates">Yoga Pilates</a>19.00 - 20.30</td><td class="event" rowspan="2"><a href="#" title="Yoga Pilates">Yoga Pilates</a>19.00 - 20.30</td></tr><tr class="row_16">
						<td>
							20.00 - 21.00
						</td><td></td><td></td><td></td><td></td><td></td></tr>
				</tbody>
			   </table>
			   <div class="timetable_small">
			   	  <ul class="items_list"><h3>Segunda</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Terça</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Quarta</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Thrusday</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Sexta</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Sábado</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Domingo</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	 </div>
			   </ul>
			 </div>
		    </div>
			<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
			  <div class="facts">
				<ul class="tab-left">
				  <table class="timetable">
				<thead>
					<tr>
						<th></th>	<th>Segunda</th>	<th>Terça</th>	<th>Quarta</th>	<th>Quinta</th>	<th>Sexta</th>	<th>Sábado</th>	<th>Domingo</th>	</tr>
				</thead>
				<tbody><tr class="row_1 row_gray">
						<td>
							06.00 - 07.00
						</td><td class="event"><a href="#" title="Musculação">Musculação</a>06.00 - 07.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>06.00 - 07.00</td><td class="event" rowspan="3"><a href="#" title="Musculação">Musculação</a>06.00 - 08.30</td><td class="event" rowspan="3"><a href="#" title="Musculação">Musculação</a>06.00 - 08.30</td><td class="event" rowspan="3"><a href="#" title="Musculação">Musculação</a>06.00 - 08.30</td><td></td><td></td></tr><tr class="row_2">
						<td>
							07.00 - 08.00
						</td><td></td><td></td><td></td><td></td></tr><tr class="row_3 row_gray">
						<td>
							08.00 - 09.00
						</td><td></td><td></td><td></td><td></td></tr><tr class="row_4">
						<td>
							09.00 - 10.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_5 row_gray">
						<td>
							10.00 - 11.00
						</td><td></td><td></td><td></td><td></td><td></td><td class="event"><a href="#" title="Musculação">Musculação</a>10.00 - 11.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>10.00 - 11.00</td></tr><tr class="row_6">
						<td>
							11.00 - 12.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_7 row_gray">
						<td>
							12.00 - 13.00
						</td><td></td><td></td><td class="event"><a href="#" title="Musculação">Musculação</a>12.00 - 13.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>12.00 - 13.00</td><td></td><td class="event"><a href="#" title="Musculação">Musculação</a>12.00 - 13.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>12.00 - 13.00</td></tr><tr class="row_8">
						<td>
							13.00 - 14.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_9 row_gray">
						<td>
							14.00 - 15.00
						</td><td class="event" rowspan="3"><a href="#" title="Musculação">Musculação</a>14.00 - 16.15</td><td class="event" rowspan="3"><a href="#" title="Musculação">Musculação</a>14.00 - 16.15</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_10">
						<td>
							15.00 - 16.00
						</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_11 row_gray">
						<td>
							16.00 - 17.00
						</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_12">
						<td>
							17.00 - 18.00
						</td><td></td><td></td><td></td><td></td><td class="event" rowspan="3"><a href="#" title="Musculação">Musculação</a>17.30 - 20.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>17.00 - 18.00</td><td class="event"><a href="#" title="Musculação">Musculação</a>17.00 - 18.00</td></tr><tr class="row_13 row_gray">
						<td>
							18.00 - 19.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_14">
						<td>
							19.00 - 20.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				</tbody>
			</table>
			<div class="timetable_small">
			   	  <ul class="items_list"><h3>Segunda</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Terça</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Quarta</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Thrusday</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Sexta</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Sábado</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Domingo</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	 </div>
			  </ul>
			 </div>
			</div>
		    <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
			   <div class="facts">
			     <ul class="tab-left">
					<table class="timetable">
				<thead>
					<tr>
						<th></th>	<th>Segunda</th>	<th>Terça</th>	<th>Quarta</th>	<th>Quinta</th>	<th>Sexta</th>	<th>Sábado</th>	<th>Domingo</th>	</tr>
				</thead>
				<tbody><tr class="row_1 row_gray">
						<td>
							05.00 - 06.00
						</td><td class="event"><a href="#" title="Boxing">Boxing</a>05.00 - 06.00</td><td class="event"><a href="#" title="Boxing">Boxing</a>05.00 - 06.00</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_2">
						<td>
							06.00 - 07.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_3 row_gray">
						<td>
							07.00 - 08.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_4">
						<td>
							08.00 - 09.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_5 row_gray">
						<td>
							09.00 - 10.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_6">
						<td>
							10.00 - 11.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_7 row_gray">
						<td>
							11.00 - 12.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_8">
						<td>
							12.00 - 13.00
						</td><td></td><td></td><td></td><td></td><td class="event" rowspan="4"><a href="#" title="Boxing">Boxing</a>12.00 - 15.45</td><td class="event" rowspan="4"><a href="#" title="Boxing">Boxing</a>12.00 - 15.45</td><td></td></tr><tr class="row_9 row_gray">
						<td>
							13.00 - 14.00
						</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_10">
						<td>
							14.00 - 15.00
						</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_11 row_gray">
						<td>
							15.00 - 16.00
						</td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_12">
						<td>
							16.00 - 17.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_13 row_gray">
						<td>
							17.00 - 18.00
						</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr class="row_14">
						<td>
							18.00 - 19.00
						</td><td class="event"><a href="#" title="Boxing">Boxing</a>18.00 - 19.00</td><td class="event"><a href="#" title="Boxing">Boxing</a>18.00 - 19.00</td><td class="event" rowspan="2"><a href="#" title="Boxing">Boxing</a>18.00 - 20.00</td><td class="event" rowspan="2"><a href="#" title="Boxing">Boxing</a>18.00 - 20.00</td><td class="event" rowspan="2"><a href="#" title="Boxing">Boxing</a>18.00 - 20.00</td><td></td><td></td></tr><tr class="row_15 row_gray">
						<td>
							19.00 - 20.00
						</td><td></td><td></td><td></td><td></td></tr>
				</tbody>
			    </table>
			    <div class="timetable_small">
			   	  <ul class="items_list"><h3>Segunda</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Terça</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Quarta</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Thrusday</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Sexta</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	  <ul class="items_list"><h3>Sábado</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	   <ul class="items_list"><h3>Domingo</h3>
			   		<li><p><a href>Musculação</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cardio Fittness</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Boxing</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Yoga Pilates</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   		<li><p><a href>Cycling</a></p><span class="m_31">10.00 - 20.00</span><div class="clear"></div></li>
			   	  </ul>
			   	 </div>
					</ul>
				  </div>
			     </div>
				</div>
		       </div>
	        </div>
	        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>


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
		 						 <a href="login.php">Log In</a>
		 						 </div>
		 						 <div class="p-ww">
		 					<form>
		 					 <input class="date" id="datepicker" type="text" value="Calendário" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Calendário';}">
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
