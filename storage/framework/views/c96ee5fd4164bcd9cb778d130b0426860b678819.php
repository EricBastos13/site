<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Usando a fonte 'Roboto' do Google Fonts  -->
</head>
<body>
    <div class="wrapper">
        <div class="container">
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
        <div id="abas" class="tabs" style="display: none;">
                <div class="tab" data-tab="tab-despesas">Despesas</div>
                <div class="tab" data-tab="tab-discursos">Discursos</div>
                <div class="tab" data-tab="tab-ocupacoes">Ocupações</div>
            </div>

            <!-- Conteúdo de cada aba -->
            <div id="tab-despesas" class="tab-content"></div>
            <div id="tab-discursos" class="tab-content"></div>
            <div id="tab-ocupacoes" class="tab-content"></div>
        <main>
            
            <div class="urna-container">
                <div class="urna">    
                    <!-- Tela da urna -->
                    <div class="tela" id="telaUrna">
                        <div id="numero" class="tela-candidato">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="lado">
                        <!-- Teclado numérico -->
                        <div class="teclado">
                            <div class="botao1"><p class="consulta-urna">Consulta de Deputados <input type="text" id="nomeInput" placeholder="Digite o nome do deputado" />
                                <button id="buscarButton">Buscar</button></p></div>
                            <div class="baixo">
                                <div class="botao3"></div>
                                <div class="botao2"></div>
                                <div class="botao4"></div>
                            </div>
                        </div>
            
                        <!-- Botões de ação -->
                        <div class="botoes-acoes">
                            
                            <button class="botao-acao botao-branco" onclick="submitForm('branco')">Branco</button>
                            <button class="botao-acao botao-laranja" onclick="submitForm('corrige')">Corrige</button>
                            <button class="botao-acao botao-verde" onclick="submitForm('confirma')">Confirma</button>
                            
                        </div>
                    </div>
                </div>

            

            </div>  
        </main>
            <form id="invisible-form" action="<?php echo e(route('favoritar')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
            <!-- Campos de entrada invisíveis -->
            <input type="hidden" name="acao" value="valor_da_acao">
            <input type="hidden" name="idCandidato" id="idCandidato">
        </form>
        
        </div>
        
    <footer>
        <p>&copy; 2024. Todos os direitos reservados.</p>
    </footer>
    </div>
    

    <script src="/js/menu_lateral.js"></script>
    <script src="/js/incio.js"></script>
    <script src="/js/consulta-api.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projeto-web\resources\views/welcome.blade.php ENDPATH**/ ?>