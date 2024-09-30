<?php
echo $id_noticia=$_GET['id'];
$conexao = new mysqli('localhost','root','','revisaophp');

if ($conexao->connect_error) {
    die('Erro de conexão'. $conexao->connect_error);
} else {
    echo'sucesso'. "<br>";
}

$sql="DELETE FROM produto WHERE id = '$id_noticia';";
$resultado = $conexao->query($sql);
header("Location: ../view/ListaProdutos.php");
?>