<?php
	session_cache_expire(10);
	session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<title># Aula 10 - PHP Parte IV</title>
	<link rel ="shortcut icon" href="logo.ico">
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/loja.css" rel="stylesheet"/>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top"> 
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">[ Desktop ]</a>	
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="form-insert.php">|| REGISTRO DE CLIENTE ||</a></li>
					<li><a><?php echo"|| Bem vindo || ".base64_decode($_COOKIE['CookieEmail']);?></a></li>
					<?php echo '<li><a href="sair.php?token='.md5(session_id()).'"> || SAIR ||</a></li>';?>	
			</div>
		</div>
	</div>
	<div class="container">
        <div class="principal">