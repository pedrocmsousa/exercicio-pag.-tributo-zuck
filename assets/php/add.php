<?php 
	require 'config.php';
	if(isset($_POST['desc']) && empty($_POST['desc']) == false) {
		$descricao = addslashes($_POST['desc']);
		$link = addslashes($_POST['link']); 

		$sql = "INSERT INTO links SET descricao =  :descricao, link = :link";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':descricao', $descricao);
		$sql->bindValue(':link', $link);
		$sql->execute();

		header ('Location: https://links.pedlets.com.br/links.php');
	}	
?>