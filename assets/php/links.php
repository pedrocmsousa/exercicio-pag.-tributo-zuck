<?
	require 'config.php';
	$sql = "SELECT * FROM links";
	$sql = $pdo->prepare($sql);
	$sql->execute();
	if ($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $links) {
			echo '<a href="'.$links['link'].'" target="_blank" class="btn btn-lg btn-outline-dark btn-block" >'.$links['descricao'].'</a>';			
		}
	} else {	
		echo "Nenhum usuário cadastrado";
	}
?>