<?php 

$dsn = "mysql:dbname=pedlet78_links_lets;host=192.185.176.140";
$dbuser = "pedlet78_root";
$dbpass = "Lets1433";
    
try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>