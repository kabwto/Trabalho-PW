<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
echo $erro;


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
	  
	<!-- Links Bootstrap -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	  
	  
	<!-- -->
  
  
    <title>Perdeu? Achou!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
	  
	<script>
	  
		if(document).ready( function(){
			
			//verificar se os campos de usuario e senha foram devidamente preenchidos
			$('#btn_login').click(function(){
				
				var campo_vazio = false;
				
				if($('#campo_usuario').val() == '') {
					$('#campo_usuario').css({'border-color': '#A94442'});
					campo_vazio = true;
					
				} else {
					$('#campo_usuario').css({'border-color': '#CCC'});
				}
				if($('#campo_senha').val() == '') {
					$('#campo_senha').css({'border-color': '#A94442'});
					campo_vazio = true;
					
				} else {
					$('#campo_senha').css({'border-color': '#CCC'});
				}
				
				if(campo_vazio) return false;
				
			});
 
		});  
	  
	</script>

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
            
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Form Content -->
    <div class="form">
      
        <ul class="tab-group">
          <li class="tab active"><a href="#login">Entrar</a></li>
        </ul>
        
        <div class="tab-content">
          <div id="login">   
                <h1>Faça o login</h1>
                
                <form method="post" action="validar_acesso.php" id="formLogin">
						<div class="form-group">
								<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
						</div>
								
						<div class="form-group">
								<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
						</div>
								
						<button type="buttom" class="button button-block" id="btn_login">Entrar</button>
			
				</form>

			 
			  <?php
			  
			  if($erro == 1) {
				  
				  echo '<font color="#FF0000"> Usuario e ou Senha Invalido(s)';
				  
			  }
			  
			  ?>
      
          </div>
          
        </div><!-- tab-content -->
        
      </div> 
	<!-- /form -->
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
