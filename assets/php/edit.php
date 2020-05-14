<?php 
	require 'config.php';
	$id = 0;
	if (isset($_GET['id']) && empty($_GET['id']) == false) {
		$id = addslashes($_GET['id']);
	}
	if (isset($_POST['desc']) && empty($_POST['desc']) == false){
		$descricao = addslashes($_POST['desc']);
        $link = addslashes($_POST['link']); 
        
		$sql = "UPDATE links SET descricao =  :descricao, link = :link WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->bindValue(':descricao', $descricao);
		$sql->bindValue(':link', $link);
		$sql->execute();

		header("Location: http://links.pedlets.com.br/links.php");
	} 
	$sql = "SELECT * FROM links WHERE id = :id";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':id', $id);
	$sql->execute();
	if ($sql->rowCount() > 0) {
		$dado_links = $sql->fetch();
	} else {
		header("Location: https://links.pedlets.com.br/links.php");
	}
?>