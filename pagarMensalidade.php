<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
 	 <link href="css/style.css" rel='stylesheet' type='text/css' />
 	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
 	 <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
 	 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 	 <script src="js/jquery.min.js"></script>
   <title>Academia Monstrão</title>
</head>
<body>

  <div class="menu" id="menu">
  <div class="container">
   <div class="logo">
     <div class="h_menu4">

      <a class="toggleMenu" href="#">Menu</a>
       <ul class="nav">
         <li ><a href="painelUsuario.php?action=consultartreino">Consultar Treinos</a></li>
         <li><a href="pagarMensalidade.php">Pagar Mensalidade</a></li>
         <li><a href="verificaUsuario.php?action=logout">Sair</a></li>
       </ul>

        <script type="text/javascript" src="js/nav.js"></script>
      </div><!-- end h_menu4 -->
   </div>
   <!-- start h_menu4 -->
   <div class="clear"></div>
  </div>
</div>
<div class="main">
  <div class="register-grids">
    <div class="container">
    <form action="verificaUsuario.php?action=pagar" method="POST">
      <input type="hidden" name="operacao" value="cadastrar">
        <div class="register-top-grid">
            <h3>INFORMAÇÕES GERAL</h3>
            <div class="container">
              <span>Data Pagamento<label>*</label></span>
              <input type="text" name="dataPagamento" value="" maxlength="10" onkeypress="formatar('##/##/####', this)" >
            </div>
            <br>
            <div class="container">
                Tipo do Plano:
              <select class="" name="plantoTipo">
                <option value="30">Mensal</option>
                <option value="90">Semestral</option>
                <option value="180">Anual</option>
              </select>
            </div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container">
              <h3>INFORMAÇÕES DO CARTÃO</h3>
              <span>Número do Cartão<label>*</label></span>
              <input type="text" name="numeroCartao" value="" maxlength="20" onkeypress="formatar('####.####.##########', this)" >
            </div>
            <div class="container">
              <br>
              <span>Nome do Cartão<label>*</label></span>
              <input type="text" name="nomeCartao" value="">
            </div>
            <div class="container">
              <span>Data de Expiração<label>*</label></span>
              <input type="text" name="dataExpiracao" maxlength="5" onkeypress="formatar('##/##', this)">
            </div>
            <div class="container">
              <span>Código de Segurança<label>*</label></span>
              <input type="text" name="codigoSeguranca" maxlength="3" onkeypress="formatar('###', this)">
            </div>
            <div class="container">
                Tipo Cartao:
              <select class="" name="cartaoTipo">
                <option value="Visa">Visa</option>
                <option value="MasterCard">MasterCard</option>
                <option value="American Express">American Express</option>
              </select>
            </div>
        <div class="clear"> </div>
        <input type="hidden" name="tipo" value="1">
        <div class="container">
            <input type="submit" value="PAGAR" id="inputSubmit">
        </div>
    </form>
    <?php if((isset($_GET['action']) && $_GET['action'] == 'pago')){

      echo '<div class="container">
              <h3>Mensalidade Paga, Obrigado!!</h3>
          </div>';

    }?>
    <?php if((isset($_GET['action']) && $_GET['action'] == 'semDados')){

      echo '<div class="container">
              <h3>Informe os Dados !!</h3>
          </div>';

    }?>
   </div>
  </div>
 </div>
</div>





<script>
// FUNÇÃO FORMATAR NO MODO CPF/DATA/TELEFONE.
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)

      if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
      }

    }
</script>

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
       <li><a href="login.html">Login</a></li>
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
<html>
