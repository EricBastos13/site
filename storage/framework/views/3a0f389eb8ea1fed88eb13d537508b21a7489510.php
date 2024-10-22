<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <li><a href=<?php echo e(route('welcome')); ?> class="nav-link" >Inicio</a></li>
                        <?php if(auth()->check()): ?>
                            <li><a href=<?php echo e(route('perfil.usuario')); ?>>Perfil</a></li>
                        <?php else: ?>
                            <li><a href=<?php echo e(route('login.index')); ?>>Perfil</a></li>
                        <?php endif; ?>                        
                        <li><a href=<?php echo e(route('info.fale')); ?> class="nav-link" >Fale conosco</a></li>
                        <li><a href=<?php echo e(route('info.sobre')); ?> class="nav-link" >Sobre nós</a></li>
                        <?php if(auth()->check()): ?>
                            <li><a href="#" onclick="logout(event);">logout</a></li>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>                         
                        <?php else: ?>
                            <li><a href=<?php echo e(route('login.index')); ?>>Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </button>
        </div>
        <!-- Logo -->
        <div class="logo">LOGO</div>
    </header>

    <main>
        
        <div id="perfil">
            <div class="container">
            <aside class="topbar">
                    <?php if(auth()->check()): ?>
                        <div class="profile">
                            <?php if(Auth::user()->foto != NULL): ?>
                                <img src="<?php echo e(asset(Auth::user()->foto)); ?>" alt="Foto do Usuário" class="profile-pic">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/150" alt="Foto do Usuário" class="profile-pic">
                            <?php endif; ?>
                            <h2 class="profile-name"><?php echo e(Auth::user()->nomesobrenome); ?></h2>
                            <p class="profile-description">Descrição simples sobre o usuário.</p>
                        </div>
                        <div class="profile-likes">
                            <p ><a href=<?php echo e(route('perfil.editar')); ?>>editar perfil</a></p>
                        </div>
                    <?php endif; ?>
                </aside>
        
                <main class="content">
                    <h1>Bem-vindo ao Perfil</h1>
                    <p>Aqui você pode adicionar mais informações ou seções.</p>
                    <h2>Favoritos</h2>
                    <?php if($interacoes->isEmpty()): ?>
                        <p>Nenhum favoritado disponível.</p>
                    <?php else: ?>
                        <ul>
                            <?php $__currentLoopData = $interacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="favoritos">
                                <div id="infoDiv">
                                    <p>nome:</p>
                                </div>
                                <script>
                                        // Aqui você pode usar a lógica de busca do candidato do seu código JS
                                        document.querySelector('#buscarButton').addEventListener('click', function () {
                                            const nome = document.querySelector('#nomeInput').value.trim().toLowerCase();

                                            fetch(baseUrlTodosOsCandidatos)
                                                .then(response => response.json())
                                                .then(data => {
                                                    const candidato = data.dados.find(c => c.nome.toLowerCase() === nome);
                                                    const infoDiv = document.querySelector('#infoDiv');

                                                    infoDiv.innerHTML = '';

                                                    if (candidato) {
                                                        infoDiv.innerHTML = `
                                                            <p><strong>Nome:</strong> ${candidato.nome}</p>
                                                            ${candidato.urlFoto ? `<img src="${candidato.urlFoto}" alt="Foto do Candidato" width="100" />` : ''} 
                                                            <p><strong>Partido:</strong> ${candidato.siglaPartido}</p>
                                                            <p><strong>Estado:</strong> ${candidato.siglaUf}</p>
                                                            <p><strong>Email:</strong> ${candidato.email || 'Não informado'}</p>
                                                        `;
                                                    } else {
                                                        infoDiv.innerHTML = `<p>Deputado não encontrado. Verifique o nome digitado.</p>`;
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Erro:', error.message);
                                                    infoDiv.innerHTML = `<p>Erro: ${error.message}</p>`;
                                                });
                                        });
                                    </script>    
                                    <span><p><?php echo e($interacao->id_candidato); ?></p>
                                    
                                    <form action="<?php echo e(route('delete', $interacao->id_interacao)); ?>" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta interação?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit">Excluir</button>
                                    </form>
                                    </span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </main>
            </div>        
        </div>
    </main>

    <footer>
        <p>&copy; 2024. Todos os direitos reservados.</p>
    </footer>

    <script src="/js/menu_lateral.js"></script>
    <script src="/js/consulta-api.js"></script>
</body>
</html>

<!--<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="perfil" class="page">
            <div class="container">
                <aside class="topbar">
                    <?php if(auth()->check()): ?>
                        <div class="profile">
                            <?php if(Auth::user()->foto != NULL): ?>
                                <img src="<?php echo e(asset(Auth::user()->foto)); ?>" alt="Foto do Usuário" class="profile-pic">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/150" alt="Foto do Usuário" class="profile-pic">
                            <?php endif; ?>
                            <h2 class="profile-name"><?php echo e(Auth::user()->nomesobrenome); ?></h2>
                            <p class="profile-description">Descrição simples sobre o usuário.</p>
                        </div>
                        <div class="profile-likes">
                            <p >Likes: <span id="likeCount">120</span></p>
                        </div>
                    <?php endif; ?>
                </aside>
        
                <main class="content">
                    <h1>Bem-vindo ao Perfil</h1>
                    <p>Favoritos</p>
                    
                    
                        
                </main>
            </div>        
        </div>

        <h1>Perfil do Usuário</h1>
    
    <h2>Detalhes do Cliente</h2>
    <p>Nome: <?php echo e($cliente->nomesobrenome); ?></p>
    <p>Email: <?php echo e($cliente->email); ?></p>
    <span><a href=<?php echo e(route('perfil.editar')); ?>>editar perfil</a></span>
    
</body>
</html>--><?php /**PATH C:\xampp\htdocs\projeto-web\resources\views/perfil/usuario.blade.php ENDPATH**/ ?>