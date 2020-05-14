<?php  
session_start();

unset($_SESSION['mkt']);
header("Location: https://links.pedlets.com.br/");
exit;
?>