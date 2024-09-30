<?php
include_once "../model/Usuario.php";
$id_usuario=$_GET['id'];

$usuario1 = new Usuario('','','','','','');
$usuario1 -> deletarUmUsuario($id_usuario);
header("Location: ../view/login.html");
?>