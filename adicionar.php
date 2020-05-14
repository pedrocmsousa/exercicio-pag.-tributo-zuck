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
		<nav class="navbar navbar-expand-lg bg-info text-reset fixed-top">
	<!-- Apresentação da pagina -->
			<a class="navbar-brand  text-reset" href="http://projeto2.pedlets/">Letícia Sousa</a>
	<!-- Botão de collapse -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
	<!-- Menu do site -->
			<div class="collapse navbar-collapse justify-content-center">
				<span class="navbar-text"></span>
			</div>
	<!-- Menu Dropdown -->
			<ul class="navbar-nav my-2 my-lg-0">
				<li class="nav-item">
					<div class="btn btn-group">
						<a class="nav-link  text-reset" href="links.php"><img src="assets/images/voltar.png"> Voltar</a>
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
				<h2 class="text-center bg-info">Adicionar novo link</h2><br/>
				<form method="POST">
					<div class="form-group">
						<label for="desc" ></label>
						<textarea row="3" class="form-control form-control-lg"  placeholder="Descrição do link" name="desc" ></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="link" class="form-control form-control-lg" placeholder="URL do link">
					</div><br/>
					<input type="submit"  class="btn btn-info btn-lg btn-block text-reset" value="Adicionar Link">
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div>

<!-- Footer dos links -->
	<footer>
		<nav class="navbar navbar-expand-lg fixed-bottom bg-info text-reset">
			<div class="collapse navbar-collapse justify-content-center" id="navbarFooter">
				<a class="text-reset" href="https://www.pedlets.com.br" target="_blank">Copyright ₢2020 Pedlets Desenvolvimento - All Rights Reserved</a>
			</div>
		</nav>
	</footer>
<!-- Carregamento de JS -->
	<script type="text/javascript" src="assets/js/jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>