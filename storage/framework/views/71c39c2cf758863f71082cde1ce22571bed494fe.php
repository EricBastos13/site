<!-- resources/views/cliente/create.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="/css/cadastro_css.css">
</head>
<body>
    <div class="form-container">
        <h1>Cadastro de Cliente</h1>

        <!-- Exibir erros de validação -->
        <?php if($errors->any()): ?>
            <div style="color: red;">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Formulário de cadastro -->
        <form action="<?php echo e(route('cadastro.inserir')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="foto">Foto de Perfil</label>
                <input type="file" id="foto" name="foto" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nomesobrenome" required value="<?php echo e(old('nomesobrenome')); ?>">
            </div>

            <div class="form-group">
                <label for="apelido">Apelido</label>
                <input type="text" id="apelido" name="apelido" value="<?php echo e(old('apelido')); ?>">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="CPF" required value="<?php echo e(old('CPF')); ?>">
            </div>

            <div class="form-group">
                <label for="cep">cep</label>
                <input type="text" id="cep" name="cep" required value="<?php echo e(old('cep')); ?>">
            </div>

            <div class="form-group">
                <label for="estado">estado</label>
                <input type="text" id="estado" name="estado" required value="<?php echo e(old('estado')); ?>">
            </div>

            <div class="form-group">
                <label for="cidade">cidade</label>
                <input type="text" id="cidade" name="cidade" required value="<?php echo e(old('cidade')); ?>">
            </div>

            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="date" id="idade" name="idade" required value="<?php echo e(old('idade')); ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required value="<?php echo e(old('email')); ?>">
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn-submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projeto-web\resources\views/cadastro/criar.blade.php ENDPATH**/ ?>