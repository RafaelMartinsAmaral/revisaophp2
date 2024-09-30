<?php
include_once '../model/Usuario.php';
session_start();
$id = $_SESSION['id'];
$usuario1 = new Usuario("", "", "", "", "", "");
$row = $usuario1->buscarUsuario($id);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .registration-container {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-container">
            <h2 class="text-center mb-4">Editar Usuário</h2>
            <form class="registration-form" action="../controller/SalvarEdicao.php" method="GET">
                <div class="form-group">
                    <label for="nome" class="form-label">Nome do Usuário</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo ($row['nome']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo ($row['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="senha" class="form-label">senha</label>
                    <input type="text" class="form-control" id="senha" name="senha" value="<?php echo ($row['senha']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="cidade" class="form-label">cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo ($row['cidade']); ?>" required>
                </div>
                <input type="hidden" id="id" name="id" value="<?php echo ($row['id']); ?>">
                <button type="submit" class="btn btn-primary">Concluir</button>
            </form>
        </div>
    </div>
</body>
</html>
