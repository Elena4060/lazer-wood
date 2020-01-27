<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$material = $_POST['type_material'];
$typeorder = $_POST['tipe_order'];
$name = $_POST['name_user'];
$phone = $_POST['phone_user'];
$desctiprtion = $_POST['desctiprtion'];
$price = $_POST['price_user'];
// $check = '';
// if (!empty($_POST["checkbox"]) && is_array($_POST["checkbox"]))
// {
//     $check = implode(" ", $_POST["checkbox"]);
// };


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alexalexalexpol@mail.ru'; // Р’Р°С€ Р»РѕРіРёРЅ РѕС‚ РїРѕС‡С‚С‹ СЃ РєРѕС‚РѕСЂРѕР№ Р±СѓРґСѓС‚ РѕС‚РїСЂР°РІР»СЏС‚СЊСЃСЏ РїРёСЃСЊРјР°
$mail->Password = 'gionr7wefklknjn'; // Р’Р°С€ РїР°СЂРѕР»СЊ РѕС‚ РїРѕС‡С‚С‹ СЃ РєРѕС‚РѕСЂРѕР№ Р±СѓРґСѓС‚ РѕС‚РїСЂР°РІР»СЏС‚СЊСЃСЏ РїРёСЃСЊРјР°
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / СЌС‚РѕС‚ РїРѕСЂС‚ РјРѕР¶РµС‚ РѕС‚Р»РёС‡Р°С‚СЊСЃСЏ Сѓ РґСЂСѓРіРёС… РїСЂРѕРІР°Р№РґРµСЂРѕРІ

$mail->setFrom('alexalexalexpol@mail.ru'); // РѕС‚ РєРѕРіРѕ Р±СѓРґРµС‚ СѓС…РѕРґРёС‚СЊ РїРёСЃСЊРјРѕ?
$mail->addAddress('lazer.wooden@gmail.com');     // РљРѕРјСѓ Р±СѓРґРµС‚ СѓС…РѕРґРёС‚СЊ РїРёСЃСЊРјРѕ 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта Laser&Wooden';
$mail->Body    = '' .$name . ' оставил заявку.<br> Его номер телефона: ' .$phone. 
'Материал: ' .$material. '.<br> Услуга: ' .$typeorder. '.<br> Описани: '.$desctiprtion.
'.<br> Предлагает цену: '.$price. 'Дополнительно хочет:' ;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>