<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/perfilstl.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Editar Perfil</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('perfil.atualizar')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nomesobrenome">Nome</label>
                <input type="text" name="nomesobrenome" id="nomesobrenome" value="<?php echo e(old('nomesobrenome', Auth::user()->nomesobrenome)); ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="apelido">Apelido</label>
                <input type="text" name="apelido" id="apelido" value="<?php echo e(old('apelido', Auth::user()->apelido)); ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="cep">cep</label>
                <input type="text" name="cep" id="cep" value="<?php echo e(old('cep', $localizacao->cep)); ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="cidade">cidade</label>
                <input type="text" name="cidade" id="cidade" value="<?php echo e(old('cidade', $localizacao->cidade)); ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="estado">estado</label>
                <input type="text" name="estado" id="estado" value="<?php echo e(old('estado', $localizacao->estado)); ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo e(old('email', Auth::user()->email)); ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="foto">Foto (opcional)</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Salvar Alterações</button>
        </form>
    </div>
</body>
<script src="/js/menu_lateral.js"></script>
</html>

<?php /**PATH C:\xampp\htdocs\projeto-web\resources\views/perfil/editar.blade.php ENDPATH**/ ?>