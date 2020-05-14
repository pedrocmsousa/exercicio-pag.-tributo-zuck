<?php 
	session_start();
    require 'assets/php/config.php';
    require 'assets/php/edit.php';
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
                        <a class="nav-link  text-reset" href="links.php"><img src="assets/images/voltar.png"> Voltar</a>
					    <a class="nav-link  text-reset" href="assets/php/exit.php"><img src="assets/images/voltar.png"> Sair</a>
                    </div>
				</li>   
			</ul>
		</nav>
	</header>

<!-- Formulário para edição de links -->

    <div class="container"><br/><br/><br/><br/><br/>
        <div class="row">
		<div class="col-3"></div>
		<div class="col">
            <form action="" method="POST">
            <h2 class="text-center bg-info">Editar link</h2><br/>
            <div class="form-group">
						<label for="desc"></label>
						<textarea row="3" class="form-control form-control-lg" placeholder="Descrição do link" name="desc"><?php echo $dado_links['descricao']; ?></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="link" class="form-control form-control-lg" placeholder="URL do link" value="<?php echo $dado_links['link'];?>" >
					</div><br/>
					<input type="submit"  class="btn btn-info btn-lg btn-block text-reset" value="Editar link">
            </form>
            </div>
        <div class="col-3"></div>    
    </div>
</body>
</html>