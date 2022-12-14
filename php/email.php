<?php
require '../phpmailer/PHPMailerAutoload.php';
require '../phpmailer/class.phpmailer.php';

  $subject = 'Test 1';
  $msg = 'This is a test';
  
  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer();
  //Server settings
  $mail->SMTPDebug = 2;					// Enable verbose debug output
  $mail->isSMTP();					// Set mailer to use SMTP
  $mail->Host       = 'smtp.acjintrodesigns.com'; 	 	// Specify main and backup SMTP servers
  $mail->SMTPAuth   = true;				// Enable SMTP authentication
  $mail->Username   = 'test@acjintrodesigns.com';		// SMTP username
  $mail->Password   = 'TestACJ@01';			// SMTP password
  $mail->SMTPSecure = 'tsl';				// Enable TLS encryption, `ssl` also accepted
  $mail->Port       = 465;				// TCP port to connect to
  //Recipients
  $mail->setFrom('test@acjintrodesigns.com', 'Angelo Hedley');
  $mail->addAddress('test@acjintrodesigns.com', 'Angelo Hedley');			// Name is optional
  $mail->addCC('rudibyleveld88@gmail.com', 'Rudi Byleveld');
  // Content
  $mail->isHTML(true);					// Set email format to HTML
  $mail->Subject = $subject;
  $mail->Body    = $msg;
  $mail->send();
?>
