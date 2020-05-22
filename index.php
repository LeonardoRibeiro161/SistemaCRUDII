<?php 
	session_start();
	if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
		header("Location: acessar.php");
	}
	else
	{
		include("cabecalho.php");
		include("rodape.php");
	}
	
?>
