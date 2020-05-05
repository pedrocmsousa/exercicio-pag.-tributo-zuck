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
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>
<?php 
	include 'assets/php/headerlogin.php';
	include 'assets/php/footerlogin.php';
?>		
	<div class="container"><br/><br/><br/>
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
</body>
</html>