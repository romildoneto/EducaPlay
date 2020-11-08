<?php
session_start();
session_destroy();
header('Location: materias.html');
exit();

?>