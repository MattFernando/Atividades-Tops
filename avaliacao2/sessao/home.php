<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../email/vendor/autoload.php';

session_start();
if (!isset($_SESSION['usuarios'])){
    header('Location: ../index.php');
    exit;
}
$usuario = '';
foreach ($_SESSION['contas'] as $email => $senhas){
    if ($_SESSION['usuarios'] == $email){
        $usuario = $email;
    }
}
    

$email_destino = 'marcos.sousa12@fatec.sp.gov.br'; //marcos.sousa12@fatec.sp.gov.br
$assunto = 'Alguem entrou no sistema!';
$mensagem = "O usuario do email $usuario entrou no sistema de Matheus Fernando";

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'matheusphp579@gmail.com';
    $mail->Password =  'bekd jozf msdr mlli';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('matheusphp579@gmail.com' , 'Teste de PHP');
    $mail->addAddress($email_destino);

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = nl2br($mensagem);
    $mail->AltBody = strip_tags($mensagem);

    $mail->send();
    echo 'Um aviso foi enviado!';

}catch (Exception $e){
    echo "Erro {$mail->ErrorInfo}";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagina restrita</title>
</head>
<body>
    <h2>Aqui é a pagína restrita, Bem vindo!</h2>
    <a href='logout.php'>Sair</a><br><br><br><br>
    <small>Feito por Matheus Fernando</small>
</body>
</html>