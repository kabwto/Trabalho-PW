<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

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
        <a class="navbar-brand" href="home.php" style="color:darkblue">Perdeu? Achou!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php" style="color:darkblue">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="achados.php" style="color:darkblue">Achados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perdidos.php" style="color:darkblue">Perdidos</a>
            </li>
			  <li class="nav-item">
              <a class="nav-link" href="sair.php" style="color:darkblue">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4" style="background-image:url(imagem/sign-with-lost-and-found2.jpg)">
        <h1 class="display-3"><img src="imagem/logo.png" alt="logo" width=100 height=100> Perdeu? Achou!</h1>
		  <p class="lead">Perdeu alguma coisa? Poste aqui! </br> Encontrou alguma coisa? Poste aqui!</p>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="background-color: hsl(120, 100%, 75%);">
            <img class="card-img-top" src="imagem/chaves.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Achado</h4>
              <p class="card-text">Encontrei essa chave na sala 303 do centro de aulas B</p>
            </div>
            <div class="card-footer">
              <a href="modelo-objeto-achado.html" class="btn btn-primary">Postar</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="background-color: hsl(360, 100%, 75%);">
            <img class="card-img-top" src="imagem/caderno.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Perdido</h4>
              <p class="card-text">ontem a noite perdi um caderno de capa azul, ele um desenho de colete escrito "BTS"</p>
            </div>
            <div class="card-footer">
              <a href="modelo-objeto-perdido.html" class="btn btn-primary">Postar</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="background-color: hsl(120, 100%, 75%);">
            <img class="card-img-top" src="imagem/celular.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Achado</h4>
              <p class="card-text">Esse celular foi encontrado no ponto de ônibus em frente o centro de aulas B</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Postar</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="background-color: hsl(360, 100%, 75%);">
            <img class="card-img-top" src="imagem/garrafa.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Perdido</h4>
              <p class="card-text">Perdi minha garrafa de agua no laboratório de informática hoje pela manhã, se encontrar, poste aqui por favor!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Postar</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="background-image:url(imagem/background-azul-escuro.jpg)">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Perdeu? Achou! - Information System Group 6 - 2018/2</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
