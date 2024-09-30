<?php
include_once "../model/Usuario.php";
 $nome=$_GET['nome'];
$email=$_GET['email'];
$senha=$_GET['senha'];
$anoNascimento=$_GET['anoNascimento'];
echo $cpf=$_GET['cpf'];
$cidade=$_GET['cidade'];
$usuario = new Usuario($nome,$email,$senha,$anoNascimento,$cpf,$cidade);



$usuario -> inserirRegistro();

header("Location:../view/login.html");


?>