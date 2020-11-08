<?php
session_start();
include('db_connect.php');
if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location:login.php');
    exit();
}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);
$query = "select id, email from usuario where email = '{$email}' and senha = '{$senha}'";
$result = mysqli_query($connect,$query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('location:materias.php');
    exit();
}else{
    header('location:index.php');
    exit();
}
?>



