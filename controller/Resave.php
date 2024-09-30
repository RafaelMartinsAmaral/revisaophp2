<?php

$conexao = new mysqli('localhost', 'root', '', 'revisaophp');

if ($conexao->connect_error) {
    die('Erro de conexão' . $conexao->connect_error);
} else {
    echo 'sucesso' . "<br>";
}
$imagem=$_POST['imagem'];
$tipo=$_POST['tipo'];
$preco=$_POST['preco'];
$id_noticia = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];


$sql = "UPDATE noticia SET id='$id_noticia',nome='$nome', tipo='$tipo', preco='$preco' descricao='$descricao' imagem='$imagem' WHERE id='$id_noticia';";

if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/ListaProdutos.php");
} else {
    echo "erro ao cadastrar ao sql" . $conexao->error;
}

?>