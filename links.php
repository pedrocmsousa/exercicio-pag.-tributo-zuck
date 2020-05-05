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
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>



<!-- Carregamento de JS -->
	<script type="text/javascript" src="assets/js/jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>