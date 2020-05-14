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
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>
<?php 
	include 'assets/php/headerlogin.php';
?>		
	<div class="container "><br/><br/><br/><br/><br/>
		<div class="row">
			<div class="col-3"></div>
			<div class="col">
				<h2 class="text-center bg-info text-reset">Acesso a área de links</h2><br/>
				<form method="POST">
					<div class="form-group">
						<input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Digite o seu e-mail">
					</div>
					<div class="form-group">
						<input type="password" name="senha" class="form-control form-control-lg" id="pwd" placeholder="Digite a sua senha">
					</div><br/>
					<input type="submit"  class="btn btn-info btn-block btn-lg text-reset" value="Entrar na area reservada">
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div>

<!-- Footer do Login -->

	<footer>
		<nav class="navbar navbar-expand-lg fixed-bottom bg-info text-reset">
			<div class="collapse navbar-collapse justify-content-center" id="navbarFooter">
				<a class="text-reset" href="https://www.pedlets.com.br" target="_blank">Copyright ₢2020 Pedlets Desenvolvimento - All Rights Reserved</a>
			</div>
		</nav>
	</footer>

<!-- Carregamento do Javascript -->

	<script type="text/javascript" src="assets/js/jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>