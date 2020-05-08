<?
	require 'config.php';
	$sql = "SELECT * FROM links";
	$sql = $pdo->prepare($sql);
	$sql->execute();
	if ($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $link) {
			echo '<tr>';
			echo '<td class="text-center"><strong>'.$link['descricao'].'</strong></td>';
			echo '<td class="text-center"><strong><a href="'.$link['link'].'" class="link text-reset" target="_blank" >'.$link['link'].'</a></strong></td>';
			echo '<td class="text-center"><strong><a href="../../editar.php?id='.$link['id'].'" class="btn btn-sm btn-success">Editar</a> - <a href="assets/php/del.php?id='.$link['id'].'" class="btn btn-sm btn-danger">Excluir</a></strong></td>';
			echo '</tr>';
		}
	} else {	
		echo "Nenhum usuário cadastrado";
	}
?>