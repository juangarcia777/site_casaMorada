<?php require 'class/class.db.php'; ?>
<?php require 'class/class.mail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the description -->
	<meta name="description" content="Swan Lake - Lead Generation Marketing Landing Page">
	<meta name="keywords" content="agency, bootstrap, business, corporate, creative, minimal, modern, onepage, personal, portfolio,  html5, responsive">
	<meta name="author" content="Swan Lake - Lead Generation Marketing Landing Page">
	<!-- Page Title -->
	<title>CASA ABRIGO AMORADA</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cUbuntu:400,700" rel="stylesheet">
	<!-- include the site stylesheet -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/fonts-icons.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/plugin-resets.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/aux_card.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.ico">
</head>
<body>



<style media="screen">
#carrosel {
	width: 90%;
	margin-left: 5%;
}
#formulario{
	float: right;
	top: 400px;
	left: 100px;
  position: absolute;
	z-index: 5;
}
section.quote-form {
    width: 350px;
}
.x{
    position: absolute;
    top: 304px;
    left: 439px;
		z-index: 10;
    font-size: 17px;
    color: #fff;
    background: #ccc;
    padding: 4px 8px;
    cursor: pointer;
}

@media screen and (max-width:400px)  {
	#carrosel {
		width: 100%;
		margin-top: 40px;
		margin-left: 0;
	}
	#formulario {
		display: none;
	}
	.x {
		display: none;
	}
	a.btn.btn-default.main-bg-color.text-uppercase.smooth {
    margin-bottom: 20px;
}

}
</style>

<div class="x">x</div>


	<!-- Modal -->
	<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content" style="background-color:white">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"
					 aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title text-center" id="myModalLabel"
					style="color:cornflowerblue;font-weight:400;">DOAÇÕES PELA CONTA</h4>
	      </div>
	      <div class="modal-body">
	        <div class="row text-center" style="color:cornflowerblue">
	        	<div class="col-sm-4">
	        		<h4>CONTA</h4>
							<p>00000-1</p>
	        	</div>
						<div class="col-sm-4">
							<h4>AGÊNCIA</h4>
							<p>0009</p>
						</div>
						<div class="col-sm-4">
						  <h4>BANCO</h4>
							<p>BRADESCO</p>
						</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;Obrigado !</button>
	      </div>
	    </div>
	  </div>
	</div>


	<div id="wrapper">
		<div class="loader-container" id="loader">
			<div class="holder">
				<div class="la-line-scale la-2x">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
		<!-- header of the page start here -->
		<header id="header" class="dark-bg" data-scroll-index="0">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<!-- header logo -->
						<div class="logo pull-left">
							<a href="index.php">
								<img src="logo.png" alt="swam lake" class="img-responsive" style="max-height: 60px">
							</a>
						</div>
						<a href="#" class="nav-opener pull-right"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>
					<div class="col-xs-12 col-sm-8">
						<!-- top list -->
						<ul class="list-inline text-right top-list">
							<li>
								<i class="fa fa-envelope main-color"></i>
								<strong>E-mail :</strong>
								<a href="mailto:Mail@Example.com">amorada@lpnet.com.br</a>
							</li>
							<li>
								<i class="fa fa-phone main-color"></i>
								<strong>Contato :</strong>
								<a href="tel:+551432642058">(14) 3264-2058</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- page navigation start here -->
			<nav id="nav" class="navbar-fixed" style="position:absolute">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<ul class="nav-list list-inline">
								<li><a href="#" data-scroll-nav="0" class="smooth">Página Inicial</a></li>
								<li><a href="#sobre" data-scroll-nav="2" class="smooth">Casa Abrigo Amorada</a></li>
								<li><a href="#galeria" data-scroll-nav="3" class="smooth">Galeria de Fotos</a></li>
								<li><a href="#contas" data-scroll-nav="4" class="smooth">Prestação de Contas</a></li>
								<li><a href="#main" data-scroll-nav="4" class="smooth">Contato</a></li>


								<li class="button"><a href="#" class="btn btn-default main-bg-color text-uppercase smooth"
 								data-scroll-nav="1" data-toggle="modal" data-target="#myModal">QUERO AJUDAR</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<!-- page navigation end here -->
		</header>
		<!-- header of the page end here -->
		<!-- main content wrapping section start here -->


		<div class="col-xs-12 col-sm-6 col-md-5" id="formulario" onclick="fecha()">
									<!-- quote form start here -->
									<section class="quote-form" style="background-image: url(images/img02.jpg);" data-scroll-index="1">
										<h2 class="form-heading text-center text-uppercase">CONTATO RÁPIDO</h2>
										<span class="form-title text-center">ENVIE-NOS SUA MENSAGEM</span>





										<form id="contactForm" method="post">
											<fieldset>
												<div class="form-group">
													<select class="form-control" id="msg">
														<option value="Mensagem">MENSAGEM DE CONTATO</option>
														<option value="Quer ser Parceiro!">QUERO SER PARCEIRO </option>
														<option value="Quer ser Padrinho!">QUERO SER PADRINHO </option>
															<option value="Quer ser Padrinho!">QUERO SER VOLUNTÁRIO </option>
													</select>
												</div>
												<div class="form-group">
													<input type="text" id="nome" placeholder="SEU NOME" class="form-control" required>
												</div>
												<div class="form-group">
													<input type="email" id="email" placeholder="SEU E-MAIL" class="form-control" required>
												</div>
												<!--<div class="form-group">
													<input type="tel" id="phone" placeholder="TELEFONE" class="form-control" required>
												</div>-->
												<div class="form-group">
													<textarea name="texto" placeholder="MENSAGEM" id="text"  class="form-control" rows="4" cols="20"></textarea>
												</div>
												<div id="msgSubmit" class="form-message hidden"></div>

												<button class="btn btn-default main-bg-color btn-block" type="submit" name="btn" id="form-submit">ENVIAR MENSAGEM</button>
											</fieldset>
										</form>








									</section>
									<!-- quote form end here -->
								</div>



		<main id="main">


	<div id="carousel-example-generic" data-interval="3000" data-pause="null" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
		<?php
		$db = new DB();
			$sel = $db->select("SELECT * FROM banner ORDER BY id ");
			if($db->rows($sel)){
				$x=1;
				while($yy = $db->expand($sel)){ ?>
					<div class="item <?php if($x==1){echo 'active';}else{echo '';} ?>">
			      <img src="images/<?php echo $yy['urli'] ?>" class="img-responsive" width="100%">
			    </div>
				<?php $x=0; }}?>

  </div>

</div>

			<!-- main banner section end here -->
			<!-- about section start here -->
			<section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="2">
				<div class="container">
					<!-- main heading start here -->
					<header class="main-heading row">
						<div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center" id="sobre">
							<h2 class="heading text-uppercase"><span class="main-color" style="color: cornflowerblue;">SOBRE</span> NÓS</h2>
							<span class="divider center"></span>
							<p>CONHEÇA MAIS SOBRE AGENTE.</p>
						</div>
					</header>
					<div class="row">
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-4 about-box pad-bottom-sm">
							<span class="num main-color">MISSÃO</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
						</div>
						<!-- about box end here -->
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-4 about-box pad-bottom-sm">
							<span class="num main-color">VISÃO</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
						</div>
						<!-- about box end here -->
						<!-- about box start here -->
						<div class="col-xs-12 col-sm-6 col-md-4 about-box pad-bottom-sm">
							<span class="num main-color">VALORES</span>
							<span class="divider"></span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
						</div>
						<!-- about box end here -->

					</div>
					</div>
			</section>
			<!-- about section end here -->
			<!-- counter section start here -->
			<div class="counter-section text-center bg-img-full pad-top-lg pad-bottom-lg" style="background-image: url(img04.jpg);" data-scroll-index="2">
				<div class="container pad-top-xs">
					<div class="row">
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">246</span>
							<span class="txt text-uppercase">CRIANÇAS/JOVENS</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">390</span>
							<span class="txt text-uppercase">REFEIÇÕES DIA</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">56</span>
							<span class="txt text-uppercase">PROJETOS EXECUTADOS</span>
						</div>
						<div class="co-xs-12 col-sm-3 pad-bottom-xs">
							<span class="counter main-color">70</span>
							<span class="txt text-uppercase">VOLUNTÁRIOS</span>
						</div>
					</div>
				</div>
			</div>
			<!-- counter section end here -->
			<!-- services section starts here -->
				<div class="container">
					<div class="row" id="cards">

						<div class="col-sm-4" id="contas" >
							<div class="panel panel-primary">
								<div class="panel-heading text-center" >
									TERMO DE AJUSTE E PLANO CELEBRADO
							</div>
							<div class="panel-body">

									<form action="download.php" method="post">
										<select class="form-control" id="ano" name="ano" onChange="busca()">
											<option value="">--Selecione</option>
											<?php for($q=2018;$q<=2030;$q++): ?>
												<option value="<?php echo $q ?>"><?php echo $q ?></option>
											<?php endfor; ?>
										</select><br>
										<select class="form-control" id="doc">
												<option value="">---</option>
										</select><br>
										<button type="submit" name="button" class="btn btn-primary"
										style="width:100%"><span class="
										glyphicon glyphicon-saved"></span>&nbsp;DOWNLOAD</button>
									</form>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								DOCUMENTAÇÃO
						</div>
						<div class="panel-body" id="docs">
							<ul class="list-group">
							<?php
							$db = new DB();
								$sel = $db->select("SELECT * FROM docs ORDER BY id DESC");
								if($db->rows($sel)){
									$x=1;
									while($yy = $db->expand($sel)){ ?>
										<li class="list-group-item">
											<span class="glyphicon glyphicon-arrow-down"></span>&nbsp;
											<a href="documentos/<?php echo $yy['urli'] ?>" download="<?php echo $yy['urli'] ?>">
											<?php echo $yy['titulo'] ?></a></li>
									<?php }} ?>


						</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="panel panel-primary">
						<div class="panel-heading text-center">
							BALANÇO E DEMONSTRAÇÕES CONTÁBEIS
					</div>
					<div class="panel-body">
							<form action="download.php" method="post">
								<select class="form-control" id="ano2" name="ano" onChange="busca2()">
									<option value="">--Selecione</option>
									<?php for($q=2018;$q<=2030;$q++): ?>
										<option value="<?php echo $q ?>"><?php echo $q ?></option>
									<?php endfor; ?>
								</select><br>
								<select class="form-control" id="doc2" name="doc">
										<option value="">---</option>
								</select><br>
								<button type="submit" download="" class="btn btn-primary"
								style="width:100%"><span class="
								glyphicon glyphicon-saved"></span>&nbsp;DOWNLOAD</button>
							</form>
					</div>
				</div>
			</div>
				</div>
			</div>
			<!-- services section end here -->
			<!-- price section start here -->

			<!-- price section end here -->
			<!-- quote section start here -->
			<section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg" style="background-image: url(https://themesawesome.com/kindergartenhtml/img/slider/home/slide2.jpg);">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<span class="subtitle">CASA ABRIGO AMORADA</span>
							<h2 class="main-color text-uppercase">GALERIA DE FOTOS</h2>
							<span class="divider white center"></span>
							<p>FIQUE POR DENTRO DOS EVENTOS REALIZADOS PELA NOSSA INSTITUIÇÃO.</p>



	<div class="container">
	<div class="row" id="galeria">
	<div class="col-md-12" id="carrosel">


	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
		<?php
			$db = new DB();
			$sel = $db->select("SELECT * FROM galery ORDER BY id DESC");
			if($db->rows($sel)){
			$x=1;
			while($yy = $db->expand($sel)){ ?>
    <div class="item <?php if($x==1){echo 'active';} else {echo '';}?>">

		  <img src="images/<?php echo $yy['urli'] ?>" class="img-responsive" alt="...">

    </div>
		<?php $x=0; }} ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

						</div>
					</div>
				</div><!--.container-->

			</section>
			<!-- quote section end here -->
		</main>
		<!-- main content wrapping section end here -->
		<!-- footer of the page start here -->
		<footer id="footer" class="dark-bg pad-top-xs pad-bottom-xs" style="background-color: #698cf0">
			<div class="container">
				<div class="row">
					<!-- footer bottom container -->
					<div class="col-xs-12 col-sm-6 bottom" style="color: #FFF">
						<p>2020 © CASA ABRIGO AMORADA. TODOS OS DIREITOS RESERVADOS.</p>
					</div>
					<!-- footer bottom container -->
					<div class="col-xs-12 col-sm-6 bottom">
						<ul class="list-inline text-right mt-social">
							<li><a href="#" style="color: #FFF"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" style="color: #FFF"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer of the page end here -->
		<!-- Back Top of the page -->
	    <span id="back-top" class="fa fa-angle-up main-bg-color" style="background-color: #698cf0"></span>
	    <div class="popup-holder">
	    	<div id="popup1" class="lightbox">
				<!-- quote form start here -->
				<section class="quote-form" style="background-image: url(images/img02.jpg);">
					<h2 class="form-heading text-center text-uppercase">register now</h2>
					<span class="form-title text-center">Take your free trial</span>
					<form id="contactForm" data-toggle="validator">
						<fieldset>
							<div class="form-group">
								<input type="text" id="name" placeholder="Your Name" class="form-control" required data-error="NEW ERROR MESSAGE">
							</div>
							<div class="form-group">
								<input type="email" id="email" placeholder="Your Email" class="form-control" required data-error="NEW ERROR MESSAGE">
							</div>
							<div class="form-group">
								<input type="tel" id="phone" placeholder="Phone Number" class="form-control" required data-error="NEW ERROR MESSAGE">
							</div>
							<div id="msgSubmit" class="form-message hidden"></div>
							<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> We will never share your personal info</span>
							<button class="btn btn-default main-bg-color" type="submit" id="form-submit">GET A QUOTE</button>
						</fieldset>
					</form>
				</section>
				<!-- quote form end here -->
	    	</div>
	    </div>
	</div>
	<script src="jquery-3.4.min.js"></script>
	<script src="js/plugins.js" defer></script>
	<script src="js/jquery.main.js" defer></script>

	<script type="text/javascript">
		function busca(){
			var ano = $('#ano').val();
			var action1 = '1';
			$.ajax({
				url: 'buscador.php',
				type: 'POST',
				data: {action: action1, ano: ano},
				success: function(html){
					$("#doc").html(html);
				},
				error: function() {
					alert('Erro ao pesquisar Documentos');
				}
			});
		}
		function busca2(){
			var ano = $('#ano2').val();
			var action2 = '2';
			$.ajax({
				url: 'buscador.php',
				type: 'POST',
				data: {action: action2, ano: ano},
				success: function(html){
					$("#doc2").html(html);
				},
				error: function() {
					alert('Erro ao pesquisar Documentos');
				}
			});
		}
		$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});

$('.nav-list a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;

	$('html, body').animate({
		scrollTop: targetOffset - 100
	}, 1000);
});


$('#form-submit').on('click', function(){
    var $form = $(this);
    $("#form-submit").html('Enviando, aguarde...');
		var nome= $("#nome").val();
		var email= $("#email").val();
		var text= $("#text").val();
		var msg= $("#msg").val();

    $.ajax({type: "POST", url:'envia.php', data:{nome: nome, email:email, msg:msg, text:text},
		 success: function(msg){

        alert(msg)
        $("#form-submit").html('Enviar Mensagem');
        $("#nome").val('');
        $("#email").val('');
        $("#text").val('');

    }});


    return false;
});


function fecha() {
	var form= $('#formulario').html();
  form.css("dislay","none");
}

$('.x').on('click', function() {
	$('.x').hide();
	$('#formulario').hide();
})
	</script>

</body>
</html>
