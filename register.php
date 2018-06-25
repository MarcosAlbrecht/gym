<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li ><a href="index.php">Home</a></li>
			   <li><a href="sobre.php">Sobre</a></li>
			   <li><a href="trainers.php">Treinos</a></li>
			   <li><a href="classes.php">Professores</a></li>
			   <li><a href="loja.php">Loja</a></li>
			   <li><a href="pricing.php">Preço</a></li>
			   <li><a href="contact.php">Contato</a></li>
         <li class="active"><a href="login.php">Login</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
         // FUNÇÃO PARA VERIFICAR SENHAS IGUAIS

        $(function(){
        $("#inputSubmit").click(function(){
        var senha = $("#inputSenha").val();
        var senha2 = $("#inputSenha2").val();
        if(senha != senha2){
          event.preventDefault();
          alert("As senhas não são iguais!");
        }
        });
        });
</script>
<script>
// FUNÇÃO FORMATAR NO MODO CPF.
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)

      if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
      }

    }
</script>


        <div class="main">
          <div class="register-grids">
          	<div class="container">
						<form action="verificaUsuario.php?action=cadastrar" method="POST">
								<div class="register-top-grid">
										<h3>INFORMAÇÕES PESSOAIS</h3>
										<div>
											<span>Nome<label>*</label></span>
											<input type="text" name="nome" >
										</div>

										<div>
											<span>Sobrenome<label>*</label></span>
											<input type="text" name="sobrenome" value="">
										</div>

                    <div>
											<span>Telefone<label>*</label></span>
											<input type="text" name="telefone" maxlength="13" OnKeyPress="formatar('##-#####-####', this)">
										</div>
                    <div>
											<span>CPF<label>*</label></span>
											<input type="text" name="cpf" maxlength="14" onkeypress="formatar('###.###.###-##', this)">
										</div>

                    <div class="container">
                      <br><br>
                      Estado: <br> <br>
                      <select name="estado">
                        <option value="">ESCOLHA</option>
                        <?php
                          // CONSULTA NO BANCO OS ESTADOS CADASTRADOS
                          include "conecta_mysql.inc";
                          session_start();
                          $resultado = $mysqli->query("SELECT * FROM estado");

                          while($vreg = $resultado->fetch_array()){
                            $uf = $vreg['id'];
                            $sigla = $vreg['nome'];
                            echo "<option value=$uf> $sigla</option>";
                          }
                         ?>
                      </select>
                    </div>

                    <div>
											<span>Cidade<label>*</label></span>
											<input type="text" name="cidade" >
										</div>
                    <div>
											<span>Bairro<label>*</label></span>
											<input type="text" name="bairro" >
										</div>
                    <div>
											<span>Endereço<label>*</label></span>
											<input type="text" name="endereco" >
										</div>

                    <br>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>INFORMAÇÕES DE LOGIN</h3>
                    <div>
											<span>Endereço de email<label>*</label></span>
											<input type="text" name="email" value="">
										</div>
                    <br><br><br><br>
										<div>
											<span>SENHA<label>*</label></span>
											<input type="text" name="senha" id="inputSenha" value="#" required="true">
										</div>
										<div>
											<span>CONFIRMAR SENHA<label>*</label></span>
											<input type="text" name="senha2" id="inputSenha2" value="#" required="true">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>

								<input type="submit" value="ENVIAR" id="inputSubmit">
						</form>
            <?php if((isset($_GET['action']) && $_GET['action'] == 'cadastrado')){

              echo '<div class="container">
                      <h3>Você foi Cadastrado !!</h3>
                  </div>';

            }?>
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
			             <input type="text" value="Inserir email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Inserir email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Enviar email<i class="but_arrow"> </i></a>
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
