<?php

$conexao = new mysqli('localhost','root','','revisaophp');



if ($conexao->connect_error) {
    die('Erro de conexão'. $conexao->connect_error);
} else {

}

$id=$_GET['id'];


$sql="select * from produto where id ='$id'";

$resultado = $conexao->query($sql); 
$row = $resultado->fetch_assoc();



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Notícia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Adicionar Notícias
                    </div>
                    <div class="card-body">

                  <form action="../controller/Resave.php" method="post" enctype="multipart/form-data"  >
                <br>
                <label> envie sua Imagem aqui</label>
                <input type="file" name="imagem" id="imagem">

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do produto</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row ["nome"]?>" required> required>
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo do produto</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $row ["tipo"]?>" required> required>
                            </div>
                            <div class="mb-3">
                                <label for="preco" class="form-label">Preço do produto</label>
                                <input type="number" class="form-control" id="preco" name="preco" value="<?php echo $row ["preco"]?>" required> required>
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição dao produto</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3" value="<?php echo $row ["descricao"]?>" required> required></textarea>
                            </div>
                            <div class="mb-3">
                                
                                <input type="hidden" id="id" name="id" value="<?php echo $row ["id"]?>" rows="3" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript e dependências -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
