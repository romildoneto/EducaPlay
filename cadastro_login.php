<?php

session_start();

// pegar os dados do formulario
$email = $_POST['email'];
$senha = md5($_POST['senha']);

// validacao da senha e do email

if (strlen($email) > 3 && strlen($senha) >3){

    $conexao = mysqli_connect("localhost","root","","educaplay");

    $sql = "SELECT * from usuario where senha = '$senha' AND email ='$email'";

$resultado = mysqli_query($conexao,$sql);

$usuarios = mysqli_fetch_assoc($resultado);

// echo '<pre>';
// print_r($usuarios);
// echo '</pre> <hr />';

// //recuperar dados

// echo $usuarios[0][1] . '<br />';
// echo $usuarios[0][2] . '<br />';
// echo $usuarios[0][3] ;

$_SESSION['nome'] = $usuarios[0][1];
$_SESSION['email'] = $usuarios[0][2];
$_SESSION['senha'] = $usuarios[0][3];
header ('Location: materias.php');

}
else {
  echo "
   <script>
        alert('E-mail ou senha inválidos')
        location.href='login.php'
   </script>
";

}


