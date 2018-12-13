<?php

$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>

<!DOCTYPE html>
<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <!-- copiei do login-->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
  
  
    <title>Perdeu? Achou!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body style="background-image:url(imagem/background-azul-escuro.jpg)">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-image:url(imagem/azul-ceu-3.png)">
      <div class="container">
        <img src="imagem/logo.png" alt="logo" width=40 height=40>
        <a class="navbar-brand" href="index.php" style="color:darkblue">Perdeu? Achou!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php" style="color:darkblue">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Form Content -->
    <div class="form">
      
        <ul class="tab-group">
          <li class="tab"><a href="#signup">Inscreva-se</a></li>
        </ul>
        
        <div class="tab-content">

         <div id="signup">   
            <h1>Inscreva-se</h1>
            <form method="post" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
						<?php
						
							if($erro_usuario) {
								echo '<font style="color:#FF0000">Usuario Já Existe';
							}
						
						?>
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
						<?php
						
							if($erro_email) {
								echo '<font style="color:#FF0000">Email Já Existe';
							}
						
						?>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
            
            <button type="submit" id="registrar" name="registrar" class="button button-block"/>Registrar </button>
            
            </form>
  
          </div>
          
        </div><!-- tab-content -->
        
      </div> <!-- /form -->
      <!-- Modal Content -->

      <!-- / .Modal Content -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="background-image:url(imagem/background-azul-escuro.jpg)">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Perdeu? Achou! - Information System Group 6 - 2018/2</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Login Java -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/login.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    

  </body>

</html>
