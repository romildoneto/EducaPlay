<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>
<body>

<header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="imagem/logo_educa_play-branco.png" alt="Educa Play">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="index.html">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">Sobre</a> 
            <a class="divisor" role="separator" href="#"></a>       
            <a class="nav-item nav-link" id="subscribe-menu" href="cadastro.php">Cadastre-se</a>
            <a class="nav-item nav-link" id="login-menu" href="login.php">Entrar</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  

    <section id="section-cadastro">
      <div class="div-texto-cadastro">
        <h1 class="div-texto-cadastro1">Cadastre-se</h1>
        <h2 class="div-texto-cadastro2">no Educa Play</h2>
      </div>

      <div class="div-img-cadastro">
        <img class="img-login-cadastro" src="imagem/undraw_Login_re_4vu2.png" alt="Imagem representa o cadastro uma entrada">
      </div>

    </section>
    <section id="section-form-cadastro">
        <div class="div-form-cadastro">



        <form method="post"  action="processa_cadastro.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                Nome<input name="nome" type="text" class="form-control" placeholder="Antonio"required>
              </div>
              <div class="form-group col-md-6">
                Sobrenome<input name="sobrenome" type="text" class="form-control" placeholder="Aparecido de Oliveira" required>
              </div>
            </div>
            
            
            
            <div class="form-row">
              <div class="form-group col-md-6">
                
                CPF<input name="cpf" type="text" class="form-control" placeholder="Digite seu CPF" required>
              </div>
              <div class="form-group col-md-6">
                RG<input name="rg" type="text" class="form-control" placeholder="Digite seu RG" required>
              </div>
            </div>

            <div class="form-group">
              
              Endereço<input name="endereco" type="text" class="form-control"  placeholder="Rua dos Bobos, nº 0" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                
                Cidade<input name="cidade" type="text" class="form-control" required>
              </div>
              <div class="form-group col-md-2">
                CEP<input name="cep" type="text" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="form-group col-md-6">
                  Email<input name="email" type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                  Senha<input name="senha" type="password" class="form-control" placeholder="Senha" required>
                </div>
                <div class="form-group col-md-6">
                  Confirmar Senha<input name="confirmaSenha" type="password" class="form-control" placeholder="Senha" required>
                </div>
              </div>
              
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Enviar</button>




          </form>

        

</div> 
</section>




    

   

</body>
</html>
