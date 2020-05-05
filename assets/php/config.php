<?php 

$dsn = "mysql:dbname=links_lets;host=127.0.0.1";
$dbuser = "root";
$dbpass = "Lets1433";
    
try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>