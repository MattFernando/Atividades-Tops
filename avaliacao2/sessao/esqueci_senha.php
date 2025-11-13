<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../email/vendor/autoload.php';

session_start();
$erro = '';
$senha = '';
if($_SERVER['REQUEST_METHOD']==='POST'){

foreach($_SESSION['contas'] as $email => $senhas){
    if ($email == $_POST['emailrecuperar']){
        $senha = $senhas;
    }
}
if($senha != ''){
$email_destino =  'marcos.sousa12@fatec.sp.gov.br'; //marcos.sousa12@fatec.sp.gov.br
$assunto = 'Recuperar senha';
$mensagem = "Sua senha do email {$_POST['emailrecuperar']} é: $senha";

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'matheusphp579@gmail.com';
    $mail->Password =  'bekd jozf msdr mlli';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('matheusphp579@gmail.com' , 'Recuperador de Senha');
    $mail->addAddress($email_destino);

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = nl2br($mensagem);
    $mail->AltBody = strip_tags($mensagem);

    $mail->send();
    $erro = 'Email enviado com sucesso';
}catch (Exception $e){
    $erro ="Erro {$mail->ErrorInfo}";
}
}else{
    $erro = 'Email nao encontrado';
}


}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Area para recuperação de login </h3>
        <form action="" method="post"> 
            <label>Digite o email para recuperação</label><br>
            <input type="text" name="emailrecuperar" id="emailrecuperar"><br><br>
            <button type="submit">Recuperar</button>
            <?php echo "<p>$erro</p>"?>
        </form>
        <hr>
        <a href="../index.php">Voltar para a pagina de login</a>
</body>
</html>
