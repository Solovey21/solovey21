<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];


//$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               
$mail->Username = 'sinformatsiya@internet.ru'; 
$mail->Password = '?yTo2LLa5itA'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('sinformatsiya@internet.ru'); 
$mail->addAddress('msoloveyj75@gmail.com');
//$mail->addAddress('ellen@example.com');               
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
$mail->isHTML(true);                                  

$mail->Subject = 'Заявка с вашего сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>