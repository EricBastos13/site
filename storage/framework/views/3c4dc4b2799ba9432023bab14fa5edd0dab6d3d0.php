<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site moderno com boas práticas de usabilidade">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/perfilstl.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Usando a fonte 'Roboto' do Google Fonts  -->
</head>
<body>
    <header class="topo">
        <div class="menu">
            <button id="atvmenu" class="menu button">
                <img src="/img/iconedemenu.png" alt="menu">
                <div id="barraltr" class="barraltr">
                    <h1>Menu</h1>
                    <ul>
                        <li><a href="#" class="nav-link" data-target="home">Inicio</a></li>
                        <?php
                            if(auth()->check()){
                                echo '<li><a href="#" class="nav-link" data-target="perfil">Perfil</a></li>';
                                echo '<li><a href="#" class="nav-link" data-target="historico">Histórico</a></li>';
                            }else{
                                echo '<li><a href="' . route('login.index') . '">Perfil</a></li>';
                                echo '<li><a href="' . route('login.index') . '">historico</a></li>';
                            }
                        ?>
                        <li><a href="#" class="nav-link" data-target="sobre">Sobre nós</a></li>
                    </ul>
                </div>
            </button>
        </div>
        <!-- Logo simples à esquerda -->
        <div class="logo">LOGO</div>
        <!-- Caixa de busca -->    
        <div class="search-container">
            <form method="get">
                <div class="search-box">
                    <input type="text" id="search" name="search" placeholder="Digite sua busca..." required>
                    <button type="submit" class="nav-link" data-target="busca" ><img src="/img/iconedebusca.png" alt="Buscar"></button>
                </div>
            </form>
        </div>
    </header>
   
    <main>
        <div id="home" class="page active">
            <h1>Bem-vindo à Home</h1>
            <p>Esta é a página inicial.</p>
        </div>
        <div id="sobre" class="page">
            <h1>Sobre Nós</h1>
            <p>Informações sobre nós.</p>
        </div>
        <div id="perfil" class="page">
            <div class="container">
                <aside class="sidebar">
                    <div class="profile">
                        <img src="https://via.placeholder.com/150" alt="Foto do Usuário" class="profile-pic">
                        <h2 class="profile-name">Nome do Usuário</h2>
                        <p class="profile-description">Descrição simples sobre o usuário.</p>
                        <p class="profile-likes">Likes: <span id="likeCount">120</span></p>
                    </div>
                </aside>
        
                <main class="content">
                    <h1>Bem-vindo ao Perfil</h1>
                    <p>Aqui você pode adicionar mais informações ou seções.</p>
                    <!-- Mais conteúdo pode ser adicionado aqui -->
                </main>
            </div>        
        </div>
        <div id="busca" class="page">
            <h1>Busca</h1>
            <p>Como entrar em contato conosco.</p>
        </div>
        <div id="historico" class="page">
            <h1>Contato</h1>
            <p>Como entrar em contato conosco.</p>
        </div>
    </main>

    <footer>
        <p>&copy; 2024. Todos os direitos reservados.</p>
    </footer>

    <script src="/js/script.js"></script>
    <script src="/js/perfiljs.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\web\trabalho\projeto-web\resources\views/welcome.blade.php ENDPATH**/ ?>