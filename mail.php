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


//$mail->SMTPDebug = 3;                               

// $mail->isSMTP();                                      
// $mail->Host = 'smtp.mail.ru';  																							
// $mail->SMTPAuth = true;                               
// $mail->Username = 'alexalexalexpol@mail.ru'; 
// $mail->Password = 'gionr7wefklknjn'; 
// $mail->SMTPSecure = 'ssl';                            
// $mail->Port = 465; 

// $mail->setFrom('alexalexalexpol@mail.ru');
$mail->addAddress('lazer.wooden@gmail.com');       
// //$mail->addAddress('ellen@example.com');               // Name is optional
// //$mail->addReplyTo('info@example.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');
// //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Заявка с сайта Laser&Wooden';
// $mail->Body    = '' .$name . ' оставил заявку.<br> Его номер телефона: ' .$phone. 
// 'Материал: ' .$material. '.<br> Услуга: ' .$typeorder. '.<br> Описани: '.$desctiprtion.
// '.<br> Предлагает цену: '.$price. 'Дополнительно хочет:' ;
// $mail->AltBody = '';

// if(!$mail->send()) {
//     echo 'Error';
// } else {
//     header('location: thank-you.html');
// }
mail('lazer.wooden@gmail.com', $name, $phone,"Спасибо" );
 ?>
