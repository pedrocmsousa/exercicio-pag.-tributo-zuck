<?php 
require 'config.php';

if (isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);
	$sql = "DELETE FROM links WHERE id = :id";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':id', $id);
	$sql->execute();
	
	header("Location: http://projeto2.pedlets/alt-del.php");
} else {
	header("Location: http://projeto2.pedlets/alt-del.php");
}
?>