<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="email" name="email" placeholder="Digite seu email" required>
            <input type="password" name="password" placeholder="Digite sua senha" required>
            <button type="submit" name="submit">Entrar</button>
            <?php
                echo bcrypt('12345678');
                /*use Illuminate\Http\Request;
                use Illuminate\Support\Facades\Auth;
                
                function login(Request $request)
                {
                    $credentials = $request->only('email', 'password');
                
                    if (Auth::attempt($credentials)) {
                        // Autenticação bem-sucedida
                        return redirect()->intended('dashboard'); // redireciona para a dashboard
                    } else {
                        // Falha na autenticação
                        return back()->withErrors([
                            'email' => 'As credenciais fornecidas não correspondem ao nosso registro.',
                        ]);
                    }
                }
                
                $temp=$request->only('email','senha');
                if(isset($_GET['subimt'])){
                    if(Auth::attempt($temp)){
                        echo '<p>certo<p>';
                    }else{
                        echo '<p>errado<p>';
                    }

                }*/
            ?>
        </form>
        <div class="signup-link">
            <?php
                echo '<p>Não tem uma conta? <a href="'.route('welcome').'" name="cad">Cadastre-se</a></p>';
            ?>
        </div>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\web\trabalho\projeto-web\resources\views/login/index.blade.php ENDPATH**/ ?>