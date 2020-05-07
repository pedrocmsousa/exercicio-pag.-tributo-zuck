<?php
	session_start();
    /*ligação ao banco de dados*/
    
	require 'assets/php/config.php'; 

	/*verificação se foram inseridos dados e confirmação dos dados inseridos*/	
	if (isset($_POST['email']) && empty($_POST['email']) == false) {
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			$_SESSION['mkt'] = $sql['id'];

			header("Location: http://projeto2.pedlets/links.php");
			exit;
		} 
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<title>Login Sistema</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>
<?php 
	include 'assets/php/headerlogin.php';
?>		
	<div class="container "><br/><br/><br/><br/><br/><br/>
		<div class="row">
			<div class="col-3"></div>
			<div class="col">
				<form method="POST">
					<div class="form-group">
						<label for="email" >Email:</label>
						<input type="email" name="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="pwd" >Senha:</label>
						<input type="password" name="senha" class="form-control" id="pwd">
					</div>
					<input type="submit"  class="btn btn-primary" value="Entrar">
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div>

<!-- Footer do Login -->

	<footer>
		<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-bottom">
	<!-- Apresentação da footer -->
			
			<a class="navbar-brand" href="https://www.pedlets.com.br" target="_blank">PEDLETS DEVS</a>
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
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
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

<!-- Carregamento do Javascript -->

	<script type="text/javascript" src="assets/js/jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>