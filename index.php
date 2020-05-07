<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<title>Links Letícia</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>

<!-- Carregamento do Header--> 
	<?php 
		include 'assets/php/header.php';
	?>

<!-- Cadastro  dos links --> 
	<div class="container"><br/><br/><br/><br/>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<?php 
					include 'assets/php/links.php';
				?>
			</div>
			<div class="col-2"></div>
		</div>
	</div><br/><br/><br/>
<!-- Carregamento do Footer -->
	<?php	
		include 'assets/php/footer.php';
	?>
<!-- Carregamento de JS -->
	<script type="text/javascript" src="assets/js/jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>