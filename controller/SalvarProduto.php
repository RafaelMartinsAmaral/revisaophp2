<?php

$destino = '../view/imagensProdutos/' . $_FILES['imagem']['name'];
$arquivo_tmp = $_FILES['imagem']['tmp_name'];
move_uploaded_file($arquivo_tmp, $destino);

$conexao = new mysqli('localhost','root','','revisaophp');

if ($conexao->connect_error) {
    die('Erro de conexão'. $conexao->connect_error);
} else {

}

$sql=" insert into produto(imagem) 
values ('$destino');";

if ($conexao->query($sql) === TRUE) {
    header("Location:../view/site.php");

} else {
    echo "erro ao salvar";
}

?>