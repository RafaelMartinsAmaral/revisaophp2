<?php
session_start();
include_once '../model/Usuario.php';

$id=$_GET['id'];
$nome=$_GET['nome'];
$email=$_GET['email'];
$senha=$_GET['senha'];
$cidade=$_GET['cidade'];


$modUsuario = new Usuario('','','','','','');

$modUsuario -> editarUsuario($id,$nome, $email, $senha,'','',$cidade);
//header("Location: ../view/ListarDadosUsuarios.php");

?>