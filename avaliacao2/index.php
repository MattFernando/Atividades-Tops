<?php 
session_start();
$_SESSION['contas']=['matheusf296@gmail.com' => 'senha1', 'pvp479@gmail.com' => '2senha', 'anaoseinaovei@gmail.com' => 'seilasenha'];
$erro = '';
$conta_email = null;
$conta_senha = null;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    foreach($_SESSION['contas'] as $email => $senhas) {
        if ($usuario == $email){
            $_SESSION['usuarios'] = $usuario;
            $conta_email = $email;
            $conta_senha = password_hash($senhas, PASSWORD_DEFAULT);
        }
    }

    if(isset($conta_email) && password_verify($senha, $conta_senha)){
        header('Location: sessao/home.php');
    }else{
        $erro = 'Usuario ou senha incorretas/nao encontradas !';
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagina de Login</title>
</head>
<body>
    <h2>Bem vindo</h2>
    <h3>Por favor realizar login </h3>
    <?php if ($erro): ?>
        <p steyl="color: red;"><?=  $erro ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label>Email</label><br>
        <input type="text" name="email"><br><br>

        <label>Senha</label><br>
        <input type="password" name="senha"><br><br>

        <button type="submit">Entrar</button>
    </form>
    <hr>
    <a href="sessao/esqueci_senha.php">Esqeuceu a senha?</a>
    <hr>
    <a href="sessao/logout.php">Encerrar sessão em aberto</a>
        
</body>
</html>