
	
<?php
session_start(); 
$email = (isset($_COOKIE['CookieEmail'])) ? base64_decode($_COOKIE['CookieEmail']) : '';
$senha = (isset($_COOKIE['CookieSenha'])) ? base64_decode($_COOKIE['CookieSenha']) : '';
$lembrete = (isset($_COOKIE['CookieLembrete'])) ? base64_decode($_COOKIE['CookieLembrete']) : '';
$checked = ($lembrete == 'SIM') ? 'checked' : '';
 
?>
<DOCTYPE html>
    <html>
    <head>
        <title>Sistema CRUD</title>
        <meta charset="utf-8">
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<style>
		body{
			background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(26,186,255,1) 63%, rgba(0,212,255,1) 100%);
		}
	</style>
	
	<body>
        <div class="container py-3" >
            <div class=" row h-100 justify-content-center align-items-center">
                <div class="card card-signin my-6 ">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sistema CRUD</h5>
                        <form class="col-xs-12" action="login.php" method="POST">
                
                            <div class="form-group">
                                <label for="text">Usuario</label>
                                <input type="text" class="form-control" placeholder="Informe o seu email" value="" id="usuario" name="usuario">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" placeholder="Informe sua senha:"  value="" id="password" name="password">
                            </div>
                            <br>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="lembrete" name="lembrete" value="SIM" <?=$checked?>>
                                <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                              </div>
                            <br>
                            <div class="row d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn btn-success  "><i class="fa fa-check-square"></i> Acessar</button>
                                <button type="reset" class="btn btn-danger "><i class="fa fa-check-square"></i> Cancelar</button>
                            </div>
                    </div>
                    <footer class="page-footer font-small  special-color-dark pt-4">
                        <div class="footer-copyright text-center py-3">© 2020 Copyright:
                            <a href=""> Leonardo</a>
                        </div>
                    </footer>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
    </html>




