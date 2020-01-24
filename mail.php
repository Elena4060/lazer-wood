<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$material = $_POST['type_material'];
$typeorder = $_POST['tipe_order'];
$name = $_POST['name_user'];
$phone = $_POST['phone_user'];
$desctiprtion = $_POST['desctiprtion'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mailtowooden@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'gionr7wefklknjn'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('itelena95@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('lazer.wooden@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = '������ � ����� Laser$Wooden';
$mail->Body    = '' .$name . ' ������� ������.<br> ��� ����� ��������: ' .$phone. '<br> �� ���������: ' .$material. '.<br> ������: ' .$typeorder. '.<br> ��������: '.$desctiprtion ;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>