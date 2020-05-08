<?php 
	session_start();
	require 'assets/php/config.php';
	if (isset($_SESSION['mkt']) && empty($_SESSION['mkt']) == false) {
			
	} else {
		header("Location: http://projeto2.pedlets/login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<title>Adicionar links</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>
<!-- Carregamento de PHP para adicionar links -->	
	<?php 
		require  'assets/php/add.php'; 
	?>

<!-- Header -->
	<header>
		<nav class="navbar navbar-expand-lg bg-danger text-light fixed-top">
	<!-- Apresentação da pagina -->
			<a class="navbar-brand  text-reset" href="http://projeto2.pedlets/">Letícia Sousa</a>
	<!-- Botão de collapse -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
	<!-- Menu do site -->
			<div class="collapse navbar-collapse justify-content-center">
				<span class="navbar-text">Marketing Digital Links de Letícia Sousa</span>
			</div>
	<!-- Menu Dropdown -->
			<ul class="navbar-nav my-2 my-lg-0">
				<li class="nav-item">
					<a class="nav-link  text-reset" href="assets/php/exit.php"><img src="assets/images/voltar.png"> Sair</a>
					</div>
				</li>    
			</ul>
		</nav>
	</header>

<!-- Formulario para preenchimento dos links -->
	<div class="container"><br/><br/><br/><br/><br/>
		<div class="row">
			<div class="col-3"></div>
			<div class="col">
				<h2 class="text-center bg-primary">Adicionar novo Link</h2><br/>
				<form method="POST">
					<div class="form-group">
						<label for="desc" ></label>
						<textarea row="3" class="form-control form-control-lg"  placeholder="Descrição do link" name="desc" ></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="link" class="form-control form-control-lg" placeholder="URL do link">
					</div><br/>
					<input type="submit"  class="btn btn-primary btn-lg btn-block" value="Adicionar">
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div>

<!-- Botão de alteração/remoção de links -->

	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
			<div class="col-3 alterar"><br/><br/><br/>
				<a href="alt-del.php" class="btn btn-primary btn-lg">Alterar/Remover links</a>
			</div>
		</div>
	</div>
<!-- Footer dos links -->
	<footer>
		<nav class="navbar navbar-expand-lg bg-danger text-light fixed-bottom">
	<!-- Apresentação da footer -->
			
			<a class="navbar-brand text-reset" href="https://www.pedlets.com.br" target="_blank">PEDLETS DEVS</a>
	<!-- Botão de collapse -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFooter">	
				<span class="navbar-toggler-icon"></span>
			</button>
	<!-- Copyright -->
			<div class="collapse navbar-collapse justify-content-center" id="navbarFooter">
				<span class="navbar-text">Copyright ₢2020 Pedlets Desenvolvimento - All Rights Reserved</span>
			</div>
	<!-- Menu Dropdown -->
			<ul class="navbar-nav my-2 my-lg-0">
				<li class="nav-item dropdown dropup">
				<a class="nav-link dropdown-toggle  text-reset" href="#" id="navbardrop" data-toggle="dropdown">
					Redes Sociais
				</a>
				<div class="dropdown-menu bg-info">
					<a class="dropdown-item" href="https://www.facebook.com/pedrocmsousa" target="_blank"><img src="assets/images/facebook.png"> <span>Facebook</span></a>
					<a class="dropdown-item" href="https://www.instagram.com/pedrocmsousa" target="_blank"><img src="assets/images/instagram.png"> <span>Instagram</span></a>
					<a class="dropdown-item" href="https://wa.me/553175550661" target="_blank"><img src="assets/images/whatsapp.png"> <span>WhatsApp</span></a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="https://www.linkedin.com/in/pedrocmsousa" target="_blank"><img src="assets/images/linkedin.png"> <span>Linkedin</span></a>
					<a class="dropdown-item" href=" https://twitter.com/pedrocmsousa" target="_blank"><img src="assets/images/twitter.png"> <span>Twitter</span></a>
					<a class="dropdown-item" href="https://t.me/pedrocmsousa" target="_blank"><img src="assets/images/telegram.png"> <span>Telegram</span></a>
					<div class="dropdown-divider"></div>
					</div>
				</li>
			</ul>
		</nav>
	</footer>
<!-- Carregamento de JS -->
	<script type="text/javascript" src="assets/js/jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>