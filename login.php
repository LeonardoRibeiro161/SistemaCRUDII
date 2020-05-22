<?php

	include("conexaoMySQL.php");
	include("crud-usuario.php");

	$usuario = buscaUsuario($conexao,$_POST["usuario"],$_POST["password"]);
	
	if($usuario == null)
	{
		echo "Usuário e/ou Senha estão incorreto(s).";	
	}
	else{

			if(!isset($_SESSION)){
				session_start();
				$email = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
				$senha = (isset($_POST['password'])) ? $_POST['password'] : '';
				$lembrete = (isset($_POST['lembrete'])) ? $_POST['lembrete'] : '';
				$_SESSION['usuario'] = $usuario['NOME'];
				$_SESSION['codigo'] = $usuario['CODIGO'];
				$_SESSION["logado"] = TRUE;
				if($lembrete == 'SIM'):
 
					$expira = time() + 60*60*24*30; 
					setCookie('CookieLembrete', base64_encode('SIM'), $expira);
					setCookie('CookieEmail', base64_encode($usuario['NOME']), $expira);
					setCookie('CookieSenha', base64_encode($senha), $expira);
		  
				 else:
		  
					setCookie('CookieLembrete');
					setCookie('CookieEmail');
					setCookie('CookieSenha');
		  
				 endif;
				header("Location: index.php");
			}
			
		}

?>