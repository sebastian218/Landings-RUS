<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$name     = stripslashes(trim($_POST['name']));
$lastname = stripslashes(trim($_POST['lastname']));
$email    = stripslashes(trim($_POST['email']));
$phone    = stripslashes(trim($_POST['phone']));
$trade    = stripslashes(trim($_POST['trade']));
$plan = stripslashes(trim($_POST['plan']));

$smtpUsername  = 'mktdigital@riouruguayseguros.biz';
$smtpPassword  = '2V736j?146y+-31';
$emailFrom     = 'marketing@riouruguay.com.ar';
$emailFromName = 'Landings Page';
$emailToName   = 'Formulario contacto Ventas Landing Page';

switch ($trade) {
    case 'moto':
		$email_addresses = 'cynthia.becker@riouruguay.com.ar,julian.nievas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
    case 'hogar':
		$email_addresses = 'cynthia.becker@riouruguay.com.ar,julian.nievas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
	case 'comercio':
		$email_addresses = 'cynthia.becker@riouruguay.com.ar,julian.nievas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
	case 'accper':
		$email_addresses = 'cynthia.becker@riouruguay.com.ar,julian.nievas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
	case 'salud':
		$email_addresses = 'cynthia.becker@riouruguay.com.ar,julian.nievas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
	case 'embarcaciones':
		$email_addresses = 'ventas@riouruguay.com.ar,asegurados@zonarus.com.ar';
		$addr = explode(',',$email_addresses);
        break;
	case 'foodtruck':
		$email_addresses = 'ventas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
	case 'caucion':
		$email_addresses = 'cynthia.becker@riouruguay.com.ar,julian.nievas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
	case 'alquiler':
		$email_addresses = 'ventas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
   default:
		$email_addresses = 'cynthia.becker@riouruguay.com.ar,julian.nievas@riouruguay.com.ar';
		$addr = explode(',',$email_addresses);
        break;
}

$cuerpo = "Hay una consulta del ramo ".
			$trade.
			" de: ".
			"<br>Nombre: ".
			$name.
			"<br>Apellido: ".
			$lastname.
			"<br>Email: ".
			$email.
			"<br>Teléfono: ".
			$phone.
			"<br>Plan: ".
			$plan;

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "mail.riouruguayseguros.biz"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 465; // TLS only
$mail->SMTPSecure = 'ssl'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;
$mail->setFrom($emailFrom, $emailFromName);
//$mail->addAddress($emailTo, $emailToName);
$addr = explode(',',$email_addresses);
	foreach ($addr as $ad) {
	    $mail->AddAddress( trim($ad) );
	}
$mail->Subject = 'Envio de prueba desde Landing Page';
$mail->msgHTML($cuerpo);

//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{

	switch ($trade) {
    case 'moto':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-moto/gracias');
        break;
    case 'hogar':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-hogar/gracias');
        break;
	case 'comercio':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-comercio/gracias');
        break;
	case 'accper':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-ap/gracias');
        break;
	case 'salud':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-salud/gracias');
        break;
	case 'embarcaciones':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-embarcaciones/gracias');
        break;
	case 'foodtruck':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-foodtruck/gracias');
        break;
	case 'caucion':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-caucion/gracias');
        break;
	case 'alquiler':
        header('Location: https://www.riouruguay.com.ar/landing/cotizar-seguro-alquiler-turistico/gracias');
        break;
   default:
        header('Location: https://www.riouruguay.com.ar/');
        break;
}
	die();
}

?>
