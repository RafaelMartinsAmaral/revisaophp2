<?php
session_start();

$nome=$_POST['nome'];
$tipo=$_POST['tipo'];
$preco=$_POST['preco'];
$imagem=$_POST['imagem'];
$destino = '../view/imagensProdutos/' . $_FILES['imagem']['name'];
$arquivo_tmp = $_FILES['imagem']['tmp_name'];
move_uploaded_file($arquivo_tmp, $destino);
$descricao=$_POST['descricao'];

$id_usuario=$_SESSION['id'];

echo $id_usuario;

$conexao = new mysqli("localhost", "root", "", "revisaophp");

if ($conexao->connect_error) {
    echo "conexao não estabelecida"; 
}
else{
    echo "deu certo";
}

$sql="insert into produto (nome,tipo,preco,imagem,descricao,id_usuario)
 values('$nome','$tipo','$preco','$destino','$descricao','$id_usuario');";

if ($conexao->query($sql) === TRUE) {
   header("Location:../view/site.php"); 
} else {
    echo "Erro ao inserir produto: " . $conexao->error; 
}
?>
