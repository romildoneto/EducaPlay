<?php
session_start();
include_once("db_connect.php");



$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf =  $_POST['cpf'];
$rg =  $_POST['rg'];
$endereco =  $_POST['endereco'];
$cidade =  $_POST['cidade'];
$cep =  $_POST['cep'];
$email =  $_POST['email'];
$senha = md5($_POST['senha']);
$confirmaSenha =md5($_POST['confirmaSenha']);

if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $confirmaSenha){
  $senha_cripto = md5($senha);

    $conexao = mysqli_connect("localhost","root","","educaplay");
   $sql = "INSERT INTO usuario (nome,sobrenome,cpf,rg,endereco,cidade,cep,email,senha,confirmaSenha) 
   values ('$nome','$sobrenome','$cpf','$rg','$endereco','$cidade','$cep','$email','$senha','$confirmaSenha')";
    mysqli_query($conexao,$sql);

    echo "<script> alert('casdastro efetuado com sucesso')
    window.location.href='login.php'
    
    </script>";
}

else if ($senha != $confirmaSenha){

    echo "<script> alert('As senhas não conferem, tente novamnete')
    window.location.href='cadastro.php'
    
    </script>";
}

else if (strlen($nome)<= 3){
    echo "<script> alert('Digite um nome valido para cadastrar')
    window.location.href='cadastro.php'
    
    </script>";
}


else if (strlen($email)<= 3){
    echo "<script> alert('Digite um e-mail válido para cadastrar!')
    window.location.href='cadastro.php'
    
    </script>";
}

else if (strlen($senha)<= 3){
echo 'digite uma senha valida';

}


//deletar dados
//   $sql = "DELETE FROM usuario where id ='50'";
//   $resultado=mysqli_query($conexao,$sql);

// //  atualizar dados
//  $sql = "UPDATE usuario SET nome= 'juca' WHERE id= '50' ";
//  $resultado=mysqli_query($conexao,$sql);

//  if($resultado){
//     echo "cadastro atualiado com sucesso";
//  }else{
//     echo "cadastro nao atualizado";
// };




// mysqli_close($conexao);


// ?>