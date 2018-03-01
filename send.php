<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = '<h2>Correo desde Portfolio</h2><h3>De: '.$name.'</h3><h3>Email: '.$email.'</h3><p>'.$message.'</p>';


require_once('swiftmailer/lib/swift_required.php');

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com',
                                              465,
                                              'ssl')
             ->setUsername('monchito007@gmail.com')
             ->setPassword('iddqdidkfa');
 
//Creamos el mailer pasándole el transport con la configuración de gmail
$mailer = Swift_Mailer::newInstance($transport);
 
//Creamos el mensaje
$message = Swift_Message::newInstance($name)
            ->setFrom(array('monchito007@gmail.com' => 'Correo de contacto desde Portfolio'))
            ->setTo($email)
            ->setBody($body, 'text/html');
 
//Enviamos
$result = $mailer->send($message);

echo 'Gracias '.$_POST['name'].'. La información ha sido enviada correctamente!';
?>