<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$email_destino = 'matheusf296@gmail.com';
$assunto = 'teste de email com php';
$mensagem = 'É só um teste cara, relaxa';

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
    echo 'Mensagem enviada com sucesso';

}catch (Exception $e){
    echo "Erro {$mail->ErrorInfo}";
}

?>