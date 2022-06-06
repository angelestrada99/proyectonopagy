<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require '../vendor/autoload.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;
$mail->Username = '18030883@itcelaya.edu.mx';
$mail->Password = '#';
$mail->setFrom('18030883@itcelaya.edu.mx', 'Angel Ricardo');
$mail->addAddress('estradagarciaricardo994@gmail.com', 'Estrada García');
$mail->Subject = 'Prueba de correo electronico';
$mail->msgHTML('Hola mundo');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
