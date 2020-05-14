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
	<title>Editar/Excluir links</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>
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
                    <div class="btn btn-group text-reset">
					<a class="nav-link  text-reset" href="assets/php/exit.php"><img src="assets/images/voltar.png"> Sair</a>
                    </div>
				</li>    
			</ul>
		</nav>
	</header>

<!-- Tabela de links -->
	
    <div class="container"><br/><br/><br/><br/>
		<a href="adicionar.php" class="btn btn-info btn-block btn-lg text-reset" >Adicionar Link</a><br/>
        <div class="table-responsive">
			<table class="table table-bordered table-hover bg-info">
				<thead class="bg-primary text-light">
					<tr>
						<th class="text-center">Descrição</th>
						<th class="text-center">Link</th>
						<th class="text-center">Acções</th>
					</tr>
				</thead>
                <tbody>
                    <?php 
                        include 'assets/php/list.php';
                    ?>
                </tbody>
            </table>
        </div>  
    </div>          

<!-- Footer -->

	<footer>
		<nav class="navbar navbar-expand-lg fixed-bottom bg-info text-reset">
			<div class="collapse navbar-collapse justify-content-center" id="navbarFooter">
				<a class="text-reset" href="https://www.pedlets.com.br" target="_blank">Copyright ₢2020 Pedlets Desenvolvimento - All Rights Reserved</a>
			</div>
		</nav>
	</footer>

</body>
</html>