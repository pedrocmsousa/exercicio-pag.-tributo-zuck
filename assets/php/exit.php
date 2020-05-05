<?php  
session_start();

unset($_SESSION['mkt']);
header("Location: http://projeto2.pedlets/index.php");
exit;
?>