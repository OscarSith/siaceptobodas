<?php
session_start();
if (!$_POST) exit;

require 'SendMail/PHPMailerAutoload.php';

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$args = [
	'nombres' => FILTER_SANITIZE_STRING,
	'correo' => FILTER_VALIDATE_EMAIL,
	'telefono' => FILTER_SANITIZE_STRING,
	'servicio' => FILTER_SANITIZE_STRING,
	'locacion' => FILTER_SANITIZE_STRING,
	'posible_fecha' => FILTER_SANITIZE_STRING,
	'nro_invitados' => [
		'filter' => FILTER_VALIDATE_INT,
		'options' => ['min_range' => 1]
	]
];

$params = filter_input_array(INPUT_POST, $args);

if (trim($params['nombres']) == '') {
	$_SESSION['ERROR'] = "Escriba su nombre";
} else if (trim($params['correo']) == '') {
	$_SESSION['ERROR'] = "Esriba su correo electrónico";
} else if (!$params['correo']) {
	$_SESSION['ERROR'] = "Esriba un correo electrónico válido";
} else if (!$params['nro_invitados']) {
	$_SESSION['ERROR'] = "Esriba el numero de personas a invitar";
} else {
	if (get_magic_quotes_gpc()) {
		$message = stripslashes($message);
	}

	try {
		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.zoho.com';
		$mail->Username = 'root@siaceptobodas.com';
		$mail->Password = '';
		$mail->SMTPSecure = 'tls';
		$mail->CharSet = 'UTF-8';
		$mail->Port = 587;

		$mail->From     = 'root@siaceptobodas.com';
		$mail->FromName = 'Si Acepto';

		$body = '<h2>De: '.$params['nombres'].'</h2>'
				.'<ul><li><strong>Correo electrónico: </strong> '.$params['correo'].'</li>'
				.'<li><strong>Teléfono: </strong>'. $params['telefono'] .'</li>'
				.'<li><strong>Tipo de servicio: </strong>'. $params['servicio'] .'</li>'
				.'<li><strong>Locación: </strong>'. $params['locacion'] .'</li>'
				.'<li><strong>Posible Fecha: </strong>'. $params['posible_fecha'] .'</li>'
				.'<li><strong>Nro. Invitados: </strong>'. $params['nro_invitados'] .'</li></ul>';

		$mail->Subject = 'Siaceptobodas :: Servicios';
		$mail->Body    = $body;
		$mail->addAddress('diego@siaceptobodas.com', 'Diego');
		$mail->addAddress('gerardo@siaceptobodas.com', 'Gerardo');

	    if ($mail->send())
		{
			$_SESSION['SUCCESS'] = "Los datos han sido enviados, nos estaremos comunicando con usted a la brevedad posible.";
		}
		else
		{
			$_SESSION['ERROR'] = "Hubo un error al enviar su mensaje, intentelo de nuevo";
		}

		$mail->clearAddresses();
	} catch (phpmailerException $e) {
		$_SESSION['ERROR'] = $e->getMessage();
	}
}

header('location: ' . $_SERVER['HTTP_REFERER']);