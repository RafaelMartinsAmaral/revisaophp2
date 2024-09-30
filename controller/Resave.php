<?php

$conexao = new mysqli('localhost', 'root', '', 'revisaophp');

if ($conexao->connect_error) {
    die('Erro de conexão' . $conexao->connect_error);
} else {
    echo 'sucesso' . "<br>";
}

$destino = '../view/imagensProdutos/' . $_FILES['imagem']['name'];
$arquivo_tmp = $_FILES['imagem']['tmp_name'];
move_uploaded_file($arquivo_tmp, $destino);


$imagem=$arquivo_tmp ;
$tipo=$_POST['tipo'];
$preco=$_POST['preco'];
$id_produto = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];


$sql = "UPDATE produto SET id='$id_produto',nome='$nome', tipo='$tipo', preco='$preco', descricao='$descricao' ,imagem='$imagem' WHERE id='$id_produto';";
echo $sql;
if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/ListaProdutos.php");
} else {
    echo "erro ao cadastrar ao sql" . $conexao->error;
}

?>