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
    <div class="contact-container">
        <h2>Fale Conosco</h2>
        <p>Estamos aqui para ouvir você! Se você tiver dúvidas, sugestões ou comentários, não hesite em nos contatar.</p>
        
        <form action="#" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Mensagem:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <input type="submit" value="Enviar">
        </form>
    
        <div class="contact-info">
            <h3>Informações de Contato</h3>
            <p>E-mail: mariaalicepco10@gmail.com</p>
            <p>Telefone: (75) 9108-9458</p>
            <p>Endereço: BR-324, Km 521 - Aviário, Feira de Santana - BA, 44096-486</p>
        </div>
    </div>
    
    <footer class="contato">
        <p>&copy; 2024. Todos os direitos reservados.</p>
    </footer>

<script src="/js/menu_lateral.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\projeto-web\resources\views/info/fale.blade.php ENDPATH**/ ?>