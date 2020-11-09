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
    <title>Login</title>
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

    <section id="section-login">
     
      <div class="bloco_card ">
        <div class="card" style="width: 14rem;">
          <img src="imagem/undraw_product_iteration_kjok.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Administrador</p>
        </div>
      </div>  

      <br>

      <div class="card" style="width: 16rem;">
        <img src="imagem/undraw_teacher_35j2 (1).png" class="card-img-top" alt="...">
        <div class="card-body">
          <br>
          <p class="card-text">Professor</p>
        </div>
      </div> 

      <br>

      <div class="card" style="width: 14rem;">
        <img src="imagem/undraw_group_selfie_ijc6.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Aluno</p>
        </div>
      </div> 
    </div>
      
      <div class="div-form-login">

      <h2>Faça seu Login</h2>
      <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>

        <p>ERRO: Usuário ou senha inválidos.<p>
        <hr>

        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        
        ?>

        <form action = 'materias.php' method = 'POST'> 
        <label class="texto-login" for="cars">Qual seu perfil</label><br> 

        <select id="cars-caixa-login" name="cars">
          <option value="saab">Aluno</option>
          <option value="fiat">Professor</option>
          <option value="audi">Administrador</option>
        </select> <br><br> 

        <label class="texto-login" for="nome">Usuário</label><br>
        <input class="caixa-login" type="email" id="nome" name="nome" placeholder="digite seu email"><br><br> 

        <label class="texto-login" for="senha">Senha</label><br>
        <input class="caixa-login" type="password" id="senha" name="senha" placeholder="digite sua senha"><br><br>
        
        <p class="form-text-login">Esqueci minha Senha</p>

        <input class="butao-login" type="submit" value="Enviar">
        <a href="./cadastro.php">Ainda não possui cadastro? Clique aqui.</a>
      </form> 
      </div>

    </section>

</body>
</html>