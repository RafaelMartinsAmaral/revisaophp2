<?php
session_start();
$id_logado = $_SESSION["id"];
$conexao = new mysqli("localhost", "root", "", "revisaophp");

$sql="select * from produto where id_usuario='$id_logado';";
$dados=$conexao->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS styles can be added here */
        .news-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 50px;
        }
        .news-item {
            margin-bottom: 40px;
        }
        .news-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;s
        }
        .news-description {
            font-size: 16px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary" style="color: white;">
            <div class="container-fluid">

            <a id="logo" class="navbar-brand" style="color: red; font-weight: bold;">Adobe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                Criatividade e design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PDF e assinaturas eletrônicas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Marketing e e-commerce
                            </a>
                            <ul class="dropdown-menu">
                               

                                <?php
                                
                                if(isset( $_SESSION['id'])){   ?>
                                 <li><a class="dropdown-item" href="editarUsuario.php">Editar Usuario</a></li>
                                 <li><a class="dropdown-item" href="ListaProdutos.php">Lista de Produtos</a></li>
                                <li><a href="../controller/DeletarUsuario.php?id=<?php echo $row['id']?>">Suicidio</a></li>
                                    <li><a href="cadastroProduto.php">cadastrar produto</a></li>
                      
                            <?php    } ?>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true">Ajuda e suporte</a>
                        </li>
                        <li><?php if( isset($_SESSION['auth']) && $_SESSION['auth']==true) {  ?>
               <p>Você está logado</p>
            <?php }?></li>
                        
                    </ul>
                    <form class="d-flex" role="search">
                    <button class="btn btn-outline-dark rounded-5" type="button" onclick="toggleTheme()">Toggle Theme</button>
                        <a href="login.html" class="btn btn-outline-dark rounded-5">Fazer logon</a>
                        <?php if( isset($_SESSION['auth']) && $_SESSION['auth']==true) {  ?>
                        <a href="../controller/Sair.php" class="btn btn-outline-dark rounded-5">Sair</a>
                        <?php }?>
                    </form>
                </div>
            </div>
        </nav>


<div class="container">
    <div class="news-container">
    <!-- Loop PHP para exibir dinamicamente as notícias -->
    <?php  while ($linha = $dados->fetch_assoc()) { ?>

        <div class="news-item">
            <img src="<?php echo $linha['imagem']  ?>" alt="" width="400px" height="200px">
            <h2 class="news-title"><?php echo $linha['nome']  ?></h2>
            <p class="news-description"><?php echo $linha['descricao']  ?></p>
            <a href="EditarProduto.php?id=<?php echo $linha['id']?>">editar</a>
            <a href="../controller/deletarP.php?id=<?php echo $linha['id']?>">delete</a>
        </div>
       
    <?php  } ?>
    
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
