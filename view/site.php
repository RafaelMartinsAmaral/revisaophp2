<?php 

include_once '../model/Usuario.php';
session_start();
if(isset( $_SESSION['id'])){

    $id = $_SESSION['id'];
    $usuario1 = new Usuario("", "", "", "", "", "");
$row = $usuario1->buscarUsuario($id);
}


//var_dump($_SESSION);  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        .fundo {
            background-image: url('https://www.adobe.com/br/homepage/fragments/loggedout/row-custom-pods/intro-price/marquee/cc/media_148f2a129210332a5c2de11f946d81cde4a2d5d38.png?width=2000&format=webply&optimize=medium');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh; 

        }

        .footer {
    background-color: #f5f5f5; /* Cor de fundo do rodapé */
    color: #1d1d1d; /* Cor do texto */
    padding: 20px 0;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 20px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
    margin: 10px;
}

.footer-section h5 {
    border-bottom: 1px solid #2b2b2b;
    padding-bottom: 10px;
    margin-bottom: 10px;
    font-size: 16px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin-bottom: 8px;
}

.footer-section ul li a {
    color: #292929; /* Cor dos links */
    text-decoration: none;
}

.footer-section ul li a:hover {
    text-decoration: underline;
}

.dark-theme {
    background-color: #121212;
    color: #ffffff;
}
body {
    transition: background-color 0.5s, color 0.5s;
}

@keyframes colorTransition {
    0% { color: red; }
    25% { color: orange; }
    50% { color: yellow; }
    75% { color: green; }
    100% { color: blue; }
}

.color-change {
    animation: colorTransition 2s infinite;
}

        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="fundo">
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
            <br>
            <br>

            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-8">
                    <h1>Faça tudo com a Adobe Creative Cloud.</h1>
                    <p>Crie tudo o que imaginar em menos tempo, incluindo imagens, arte, vídeos e PDFs.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">

                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary rounded-5">Saiba mais</button>
                    <a href="">Veja os planos e preços</a>
                </div>
            </div>
            <br>
            <br>
            <br>

            <div class="cards">
                <div class="row">
                    <div class="col-8">
                        <div class="card text-bg-light border border-2 rounded-4 background-color: transparent " >
                            <img src="imagens/gatoooo.png" class="card-img" alt="..." width="490px" height="490px">
                            <div class="card-img-overlay ">
                                <h5 class="card-title">Economize 49% na Creative Cloud Todos os Apps</h5>
                                <p class="card-text">Tenha todos os seus aplicativos favoritos no plano Todos os Apps, que oferece mais de 20 aplicativos, além de ferramentas de IA generativa. R$ 275,00/mês R$ 139,00/mês, no primeiro ano. Veja os termos*</p>
                                <button type="button" class="btn btn-outline-dark rounded-5">Economize agora</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-bg-light border border-2 rounded-4">
                            <img src="imagens/minala.png" class="card-img" alt="..." width="100px" height="490px">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Adobe Express, viabilizado pelo Firefly.</h5>
                                <p class="card-text">Comece a usar o aplicativo de criação de conteúdo completo e novos recursos de IA generativa, como Preenchimento Generativo, Texto para imagem e Texto para modelo.</p>
                                <button type="button" class="btn btn-outline-dark rounded-5">Use o Adobe Express grátis

                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
            </div>
            </div>
<br>
            <div class="container">
                <div class="row">
                    <div class="col-2">

                    </div>
                    
                <div class="col-10">
                    
                   Explore seus interesses: <a href="#" class="btn active rounded-5" role="button" data-bs-toggle="button" aria-pressed="true">Design</a>
                    <a href="#" class="btn active rounded-5" role="button" data-bs-toggle="button" aria-pressed="true">Video</a>
                    <a href="#" class="btn active rounded-5" role="button" data-bs-toggle="button" aria-pressed="true">Fotografia</a>
                    <a href="#" class="btn active rounded-5" role="button" data-bs-toggle="button" aria-pressed="true">Acrobat e PDF</a>
                    <a href="#" class="btn active rounded-5" role="button" data-bs-toggle="button" aria-pressed="true">Todos os Apps</a>
                    <a href="#" class="btn active rounded-5" role="button" data-bs-toggle="button" aria-pressed="true">Ofertas especias</a>
                </div>
             
                </div>
                <br>
                <div class="row d-flex justify-content-between ">
                    <div class="col-12">
                        
                    </div>
                    <div class="card border border-0 rounded-4" style="width: 25rem; background-color: rgb(120, 227, 243);">
                        <div class="card-body ">
                          <h5 class="card-title">ADOBE PHOTOSHOP</h5>
                          <p class="card-text">Da inspiração à criação mais rapidamente.
                            Confira as inovações para ajudar você a continuar sonhando alto.</p>
                        </div>
                        <img src="imagens/mar.png" alt="">
                        <br>
                      </div>
                      <div class="card border border-0 rounded-4" style="width: 25rem; background-color: #6B7FF2;">
                        <div class="card-body ">
                          <h5 class="card-title">EMPRESAS</h5>
                          <p class="card-text">25% de desconto no primeiro ano na Creative Cloud Todos os Apps
                            Adquira até 9 licenças para sua equipe por um preço reduzido. Veja os termos †</p>
                        </div>
                        <img src="imagens/pessoas.png" alt="">
                        <br>
                      </div>
                      <div class="card border border-0 rounded-4" style="width: 25rem; background: linear-gradient(to left, #6c03dd, #f90e0e);" >
                        <div class="card-body" style="color: white;">
                          <h5 class="card-title">CREATIVE CLOUD</h5>
                          <p class="card-text">Creative Cloud Todos os Apps: aproveite 49% de desconto no primeiro ano

                            Creative Cloud para empresas
                            
                            Preços para estudantes</p>
                        <p style="background-color: rgb(222, 222, 222); color: #1d1d1d;">Acrobat
                            Teste grátis do Acrobat
                            <br>
                            Ferramentas online de PDF
                            <br>
                            Explorar
                            <br>
                            Veja todos os produtos
                            <br>
                            Veja todos os planos e preços
                            <br>
                            Economize 55% no plano Premium do Adobe Express</p>
                        </div>
                        
                        </div>

                      </div>
                      <br>
                      <br>

                      <div class="row d-flex justify-content-between ">
                        <div class="card border border-0 rounded-4" style="width: 25rem;  background-color: rgb(252, 143, 41);">
                            <div class="card-body">
                              <h5 class="card-title">NOVO NO ILLUSTRATOR</h5>
                              <p class="card-text">Crie na velocidade do agora.
                                Passe da ideia à ilustração mais rapidamente com novos recursos avançados.</p>
                            </div>
                            <img src="imagens/borboleta.png" alt="">
                          </div>
                      <div class="card border border-0 rounded-4" style="width: 25rem;  background-color: rgb(110, 68, 235);">
                        <div class="card-body">
                          <h5 class="card-title">ADOBE GENSTUDIO</h5>
                          <p class="card-text">Acelere o conteúdo de marketing. Planeje, crie, distribua, ative e avalie conteúdo.</p>
                        </div>
                        <img src="imagens/dawn.png" alt="">
                      </div>
                      <div class="card border border-0 rounded-4" style="width: 25rem;  background: linear-gradient(to top, #b66ed7, #fdadfd);">
                        <div class="card-body">
                          <h5 class="card-title">Aplicativos incríveis com possibilidades infinitas.</h5>
                          <p class="card-text">Crie algo belo, aumente a produtividade e proporcione experiências envolventes com o software da Adobe.</p>
                        
                        </div>
                        <img src="imagens/icons.png" alt="">
                      </div> 
                      </div>

<br>
<br>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-6">
                        <p>*Disponível para novos assinantes da Adobe Creative Cloud Todos os Apps para uso pessoal. Requer compromisso de 12 meses.</p><a href="">Veja os termos</a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-3">

                    </div>
                  
                    <div class="col-6">
                        <p>† Disponível para novos assinantes da Adobe Creative Cloud Todos os Apps para equipes. Requer compromisso de 12 meses.</p><a href="">Veja os termos</a>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-section">
                    <h5>Comprar</h5>
                    <ul>
                        <li><a href="#">Creative Cloud</a></li>
                        <li><a href="#">Photoshop</a></li>
                        <li><a href="#">Adobe Express</a></li>
                        <li><a href="#">Fotografia</a></li>
                        <li><a href="#">Premiere Pro</a></li>
                        <li><a href="#">Adobe Stock</a></li>
                        <li><a href="#">Família Elements</a></li>
                        <li><a href="#">Document Cloud</a></li>
                        <li><a href="#">Acrobat</a></li>
                        <li><a href="#">Acrobat Sign</a></li>
                        <li><a href="#">Ofertas especiais</a></li>
                        <li><a href="#">Veja os planos e os preços</a></li>
                        <li><a href="#">Veja todos os produtos</a></li>
                    </ul>
                </div>
        
                <div class="footer-section">
                    <h5>Para empresas</h5>
                    <ul>
                        <li><a href="#">Creative Cloud para empresas</a></li>
                        <li><a href="#">Creative Cloud para corporações</a></li>
                        <li><a href="#">Acrobat para empresas</a></li>
                    </ul>
                    <h5>Para instituições de ensino</h5>
                    <ul>
                        <li><a href="#">Descontos para estudantes e professores</a></li>
                        <li><a href="#">Escolas e universidades</a></li>
                        <li><a href="#">Soluções de aprendizado digital</a></li>
                    </ul>
                    <h5>Para dispositivos móveis</h5>
                    <ul>
                        <li><a href="#">Aplicativos para iOS</a></li>
                        <li><a href="#">Aplicativos para Android</a></li>
                    </ul>
                </div>
        
                <div class="footer-section">
                    <h5>Experience Cloud</h5>
                    <ul>
                        <li><a href="#">O que é a Experience Cloud?</a></li>
                        <li><a href="#">Analytics</a></li>
                        <li><a href="#">Experience Manager</a></li>
                        <li><a href="#">e-Commerce</a></li>
                        <li><a href="#">Marketo Engage</a></li>
                        <li><a href="#">Workfront</a></li>
                    </ul>
                </div>
        
                <div class="footer-section">
                    <h5>Termos de uso</h5>
                    <ul>
                        <li><a href="#">Suporte</a></li>
                        <li><a href="#">Baixar e instalar</a></li>
                        <li><a href="#">Centro de Ajuda</a></li>
                        <li><a href="#">Comunidade de suporte da Adobe</a></li>
                        <li><a href="#">Suporte corporativo</a></li>
                        <li><a href="#">Software original</a></li>
                    </ul>
                </div>
        
                <div class="footer-section">
                    <h5>Recursos</h5>
                    <ul>
                        <li><a href="#">Blog da Adobe</a></li>
                        <li><a href="#">Adobe Developer</a></li>
                        <li><a href="#">Conta da Adobe</a></li>
                    </ul>
                </div>
        
                <div class="footer-section">
                    <h5>Adobe</h5>
                    <ul>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Visão geral da IA</a></li>
                        <li><a href="#">Carreiras</a></li>
                        <li><a href="#">Redação</a></li>
                        <li><a href="#">Responsabilidade corporativa</a></li>
                        <li><a href="#">Relações com investidores</a></li>
                        <li><a href="#">Cadeia logística</a></li>
                        <li><a href="#">Central de confiança</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Diversidade e inclusão</a></li>
                        <li><a href="#">Integridade</a></li>
                    </ul>
                </div>
            </div>
                        <div class="bottom-text">
                    <p>&copy; 2024 Todos os direitos reservados. <a href="#">Privacidade</a> / <a href="#">Termos de uso</a> / <a href="#">Preferências de cookies</a> / <a href="#">Não venda minhas informações pessoais</a> / <a href="#">AdChoices</a></p>
                </div>    
        </footer>
        

           
        </footer>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-theme');
            
        }
        window.onload = function() {
        alert("Bem-vindo ao Adobe!");
    };
    document.getElementById('logo').onclick = function() {
    this.classList.toggle('color-change');
};

    </script>
</body>
</html>
