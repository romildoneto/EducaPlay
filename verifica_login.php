<?php
session_start();

if(!$_SESSION['email']) {
    header('Location: materias.php');
    exit();
}
